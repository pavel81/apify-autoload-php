<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Queries\ApifyProductQuery;
use Panda\Apify\Cache\Apify_Cache;
use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

final class Apify_Price_Service
{
    /**
     * @return array<string, mixed>|null
     */
    public static function get_stats(string $sku, string $shop = '', int $months = 3): ?array
    {
        $cacheId = $sku . '|' . $shop . '|' . $months;

        $cached = Apify_Cache::get('price_stats', $cacheId);
        if ($cached !== false && is_array($cached)) {
            return $cached;
        }

        /** @var array<int, array<string, mixed>> $history */
        $history = ApifyProductQuery::getPriceHistory($sku, $shop, $months);

        if ($history === []) {
            return null;
        }

        $prices = array_map(
            static fn(array $row): float => (float) ($row['price'] ?? 0),
            $history
        );

        $min = min($prices);
        $max = max($prices);
        $avg = round(array_sum($prices) / count($prices), 2);

        $first = (float) ($history[0]['price'] ?? 0);
        $last  = (float) ($history[count($history) - 1]['price'] ?? 0);

        $change = round($last - $first, 2);
        $change_pct = $first > 0
            ? round(($change / $first) * 100, 2)
            : 0.0;

        $result = [
            'min'        => $min,
            'max'        => $max,
            'avg'        => $avg,
            'change'     => $change,
            'change_pct' => $change_pct,
            'history'    => $history,
        ];

        Apify_Cache::set('price_stats', $cacheId, $result, 900);

        return $result;
    }

    public static function get_last_price(string $sku, string $shop = ''): ?float
    {
        /** @var array<string, mixed>|null $row */
        $row = ApifyProductQuery::getLastHistoryRow($sku, $shop);

        return $row !== null
            ? (float) ($row['price'] ?? 0)
            : null;
    }

    public static function is_price_dropping(string $sku, string $shop = ''): bool
    {
        /** @var array<int, array<string, mixed>> $history */
        $history = ApifyProductQuery::getPriceHistory($sku, $shop, 1);

        if (count($history) < 2) {
            return false;
        }

        $first = (float) ($history[0]['price'] ?? 0);
        $last  = (float) ($history[count($history) - 1]['price'] ?? 0);

        return $last < $first;
    }

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

        /** @var array<string, mixed>|WP_Error|false $response */
        $response = wp_remote_get($url, ['timeout' => 30]);

        if ($response instanceof WP_Error) {
            return [
                'ok' => false,
                'error' => $response->get_error_message(),
            ];
        }

        if (!is_array($response)) {
            return [
                'ok' => false,
                'error' => 'HTTP request failed',
            ];
        }

        $body = wp_remote_retrieve_body($response);

        if (!is_string($body) || $body === '') {
            return [
                'ok' => false,
                'error' => 'Empty response body',
            ];
        }

        /** @var array<int, array<string, mixed>>|null $data */
        $data = json_decode($body, true);

        if (!is_array($data)) {
            return [
                'ok' => false,
                'error' => 'Invalid JSON',
            ];
        }

        set_transient($cacheKey, $data, $ttl);

        return [
            'ok' => true,
            'data' => $data,
            'cached' => false,
        ];
    }
}
