<?php

declare(strict_types=1);

namespace Panda\Apify\Cache;

use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

final class SecureFeedLoader
{
    private const MAX_SIZE = 5_000_000; // 5 MB
    private const TIMEOUT = 15;

    /** @var array<int, string> */
    private static array $allowedHosts = [
        'api.apify.com',
        // přidej svoje zdroje:
        // 'example.cz',
    ];

    /**
     * @return array{
     *   ok: bool,
     *   data?: array<int, array<string, mixed>>,
     *   cached?: bool,
     *   error?: string
     * }
     */
    public static function load(
        string $url,
        string $shop,
        int $ttl,
        bool $force
    ): array {
        $cacheKey = 'apify_feed_' . md5($url . $shop);

        if (!$force) {
            /** @var array<int, array<string, mixed>>|false $cached */
            $cached = get_transient($cacheKey);

            if (is_array($cached)) {
                return [
                    'ok' => true,
                    'data' => $cached,
                    'cached' => true,
                ];
            }
        }

        // --- URL whitelist ---
        $host = (string) parse_url($url, PHP_URL_HOST);

        if (!in_array($host, self::$allowedHosts, true)) {
            return [
                'ok' => false,
                'error' => 'Unauthorized host: ' . $host,
            ];
        }

        /** @var array<string, mixed>|WP_Error $response */
        $response = wp_remote_get($url, [
            'timeout' => self::TIMEOUT,
        ]);

        if ($response instanceof \WP_Error){


          return[
           'ok' => false,
          'error'     => $response->get_error_message(),
          ];
          }
        

        $body = wp_remote_retrieve_body($response);

        if (!is_string($body) || $body === '') {
            return [
                'ok' => false,
                'error' => 'Empty body',
            ];
        }

        // --- size limit ---
        if (strlen($body) > self::MAX_SIZE) {
            return [
                'ok' => false,
                'error' => 'Payload too large',
            ];
        }

        // --- JSON decode ---
        try {
            /** @var array<int, array<string, mixed>> $data */
            $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        } catch (\Throwable $e) {
            return [
                'ok' => false,
                'error' => 'JSON error: ' . $e->getMessage(),
            ];
        }

        if (!is_array($data)) {
            return [
                'ok' => false,
                'error' => 'Invalid JSON structure',
            ];
        }

        // --- basic schema hardening ---
        $safe = [];

        foreach ($data as $item) {
            if (!is_array($item)) {
                continue;
            }

            $title = $item['title'] ?? null;
            $price = $item['price'] ?? null;

            if (!is_string($title) || $title === '') {
                continue;
            }

            if (!is_numeric($price)) {
                continue;
            }

            /** @var array<string, mixed> $item */
            $safe[] = $item;
        }

        set_transient($cacheKey, $safe, $ttl);

        return [
            'ok' => true,
            'data' => $safe,
            'cached' => false,
        ];
    }
}
