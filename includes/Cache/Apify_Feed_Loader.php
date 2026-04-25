<?php

declare(strict_types=1);

namespace Panda\Apify\Cache;

use GuzzleHttp\Client;
use Opis\JsonSchema\Validator;
use Opis\JsonSchema\Errors\ErrorFormatter;

if (!defined('ABSPATH')) {
    exit;
}

final class Apify_Feed_Loader
{
    protected static function client(): Client
    {
        return new Client([
            'timeout'         => 20,
            'connect_timeout' => 10,
            'http_errors'     => false,
            'headers'         => [
                'Accept'     => 'application/json, application/xml, text/xml;q=0.9, */*;q=0.8',
                'User-Agent' => 'Panda-Apify-Plugin/1.0',
            ],
        ]);
    }

    /**
     * @return array{
     *  ok: bool,
     *  cached?: bool,
     *  shop: string,
     *  url: string,
     *  loaded_at?: string,
     *  error?: string,
     *  data: array<int, array<string, mixed>>
     * }
     */
    public static function load(string $url, string $shop = '', int $ttl = 300): array
    {
        $cacheId = md5($url . '|' . $shop);

        $cached = Apify_Cache::get('feed_raw', $cacheId);
        if ($cached !== false && is_array($cached)) {
            return [
                'ok'       => true,
                'cached'   => true,
                'shop'     => $shop,
                'url'      => $url,
                'loaded_at'=> current_time('mysql'),
                'data'     => $cached,
            ];
        }

        try {
            $response = self::client()->get($url);
        } catch (\Throwable $e) {
            return [
                'ok'    => false,
                'shop'  => $shop,
                'url'   => $url,
                'error' => $e->getMessage(),
                'data'  => [],
            ];
        }

        $status = (int) $response->getStatusCode();
        if ($status !== 200) {
            return [
                'ok'    => false,
                'shop'  => $shop,
                'url'   => $url,
                'error' => 'HTTP status ' . $status,
                'data'  => [],
            ];
        }

        $body = (string) $response->getBody();
        $data = self::parse($body);

        if ($data === []) {
            return [
                'ok'    => false,
                'shop'  => $shop,
                'url'   => $url,
                'error' => 'Neplatný feed',
                'data'  => [],
            ];
        }

        Apify_Cache::set('feed_raw', $cacheId, $data, $ttl);

        return [
            'ok'       => true,
            'cached'   => false,
            'shop'     => $shop,
            'url'      => $url,
            'loaded_at'=> current_time('mysql'),
            'data'     => $data,
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    protected static function parse(string $body): array
    {
        $body = trim($body);

        if ($body === '') {
            return [];
        }

        // JSON
        if (str_starts_with($body, '{') || str_starts_with($body, '[')) {
            $json = json_decode($body, true);
            return is_array($json) ? $json : [];
        }

        // XML
        libxml_use_internal_errors(true);

        $xml = simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NOCDATA);
        if ($xml === false) {
            return [];
        }

        $encoded = wp_json_encode($xml);
        if (!is_string($encoded)) {
            return [];
        }

        $json = json_decode($encoded, true);

        return is_array($json) ? $json : [];
    }

    /**
     * @param array<string, mixed> $data
     * @param array<string, mixed> $schemaArray
     */
    public static function validate(array $data, array $schemaArray): bool
    {
        $schemaJson = wp_json_encode($schemaArray);

        if ($schemaJson === false || $schemaJson === '') {
            error_log('[Apify][Schema] Invalid schema encoding');
            return false;
        }

        $validator = new Validator();

        $schema = json_decode($schemaJson);
        if ($schema === null) {
            error_log('[Apify][Schema] Invalid schema JSON');
            return false;
        }

        $result = $validator->validate($data, $schema);

        if ($result->isValid()) {
            return true;
        }

        $error = $result->error();

        if ($error instanceof \Opis\JsonSchema\Errors\ValidationError) {
            $formatter = new ErrorFormatter();
            $errors = $formatter->format($error);

            error_log('[Apify][Schema] ' . wp_json_encode($errors));
        }

        return false;
    }

    /**
     * @param array<string, mixed> $data
     * @return array<int, array<string, mixed>>
     */
    public static function normalize(array $data): array
    {
        if (isset($data['items']) && is_array($data['items'])) {
            $data = $data['items'];
        }

        if (isset($data['products']) && is_array($data['products'])) {
            $data = $data['products'];
        }

        $out = [];

        foreach ($data as $item) {
            if (!is_array($item)) {
                continue;
            }

            $out[] = [
                'id'           => (string) ($item['id'] ?? $item['product_id'] ?? ''),
                'sku'          => (string) ($item['sku'] ?? $item['code'] ?? ''),
                'title'        => (string) ($item['title'] ?? $item['name'] ?? ''),
                'price'        => (float) ($item['price'] ?? $item['price_vat'] ?? 0),
                'currency'     => (string) ($item['currency'] ?? 'CZK'),
                'category'     => (string) ($item['category'] ?? ''),
                'manufacturer' => (string) ($item['manufacturer'] ?? $item['brand'] ?? ''),
                'image'        => (string) ($item['image'] ?? $item['image_url'] ?? ''),
                'raw'          => $item,
            ];
        }

        return $out;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function get_feeds(): array
    {
        $feeds = get_option('apify_feeds', []);

        return is_array($feeds) ? $feeds : [];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function get_enabled_feeds(): array
    {
        $feeds = self::get_feeds();

        return array_values(array_filter($feeds, static function (array $feed): bool
        {
            return !empty($feed['url']) && (!isset($feed['enabled']) || (int) $feed['enabled'] === 1);
       }
        ));
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function get_due_feeds(): array
    {
        $feeds = self::get_enabled_feeds();
        $now   = time();
        $out   = [];

        foreach ($feeds as $feed) {
            $url      = (string) ($feed['url'] ?? '');
            $shop     = (string) ($feed['shop'] ?? 'default');
            $interval = max(5, (int) ($feed['interval_minutes'] ?? 60));
            $lastRun  = (int) get_option('apify_feed_last_run_' . md5($url . '|' . $shop), 0);

            if (($now - $lastRun) >= ($interval * MINUTE_IN_SECONDS)) {
                $out[] = $feed;
            }
        }

        return $out;
    }

    /**
     * @param array<string, mixed> $meta
     */
    public static function mark_feed_run(string $url, string $shop = '', array $meta = []): void
    {
        $key = md5($url . '|' . $shop);

        update_option('apify_feed_last_run_' . $key, time());
        update_option('apify_feed_last_status_' . $key, [
            'time' => current_time('mysql'),
            'meta' => $meta,
            'shop' => $shop,
            'url'  => $url,
        ]);
    }

    public static function clear_feed_cache(string $url, string $shop = ''): void
    {
        $cacheId = md5($url . '|' . $shop);
        Apify_Cache::delete('feed_raw', $cacheId);
    }
}
