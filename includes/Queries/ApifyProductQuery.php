<?php

declare(strict_types=1);

namespace Panda\Apify\Queries;

if (!defined('ABSPATH')) {
    exit;
}

final class ApifyProductQuery
{
    public static function productsTable(): string
    {
        global $wpdb;
        return $wpdb->prefix . 'apify_products';
    }

    public static function historyTable(): string
    {
        global $wpdb;
        return $wpdb->prefix . 'apify_price_history';
    }

    public static function findIdByExternalId(string $externalId, string $shop): int
    {
        global $wpdb;

        $id = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT id FROM " . self::productsTable() . " WHERE external_id = %s AND shop = %s LIMIT 1",
                $externalId,
                $shop
            )
        );

        return is_numeric($id) ? (int) $id : 0;
    }

    public static function findIdBySku(string $sku, string $shop): int
    {
        global $wpdb;

        $id = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT id FROM " . self::productsTable() . " WHERE sku = %s AND shop = %s LIMIT 1",
                $sku,
                $shop
            )
        );

        return is_numeric($id) ? (int) $id : 0;
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function getById(int $id): ?array
    {
        global $wpdb;

        $row = $wpdb->get_row(
            $wpdb->prepare(
                "SELECT * FROM " . self::productsTable() . " WHERE id = %d LIMIT 1",
                $id
            ),
            ARRAY_A
        );

        return is_array($row) ? $row : null;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function getBySku(string $sku, string $shop = ''): array
    {
        global $wpdb;

        if ($shop !== '') {
            $rows = $wpdb->get_results(
                $wpdb->prepare(
                    "SELECT * FROM " . self::productsTable() . " WHERE sku = %s AND shop = %s ORDER BY updated_at DESC",
                    $sku,
                    $shop
                ),
                ARRAY_A
            );

            return is_array($rows) ? $rows : [];
        }

        $rows = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * FROM " . self::productsTable() . " WHERE sku = %s ORDER BY updated_at DESC",
                $sku
            ),
            ARRAY_A
        );

        return is_array($rows) ? $rows : [];
    }

    /**
     * @param array<string, mixed> $filters
     * @return array<int, array<string, mixed>>
     */
    public static function get_latest_products(array $filters = []): array
    {
        global $wpdb;

        $limit        = isset($filters['limit']) ? max(1, min(200, (int) $filters['limit'])) : 20;
        $shop         = isset($filters['shop']) ? trim((string) $filters['shop']) : '';
        $category     = isset($filters['category']) ? trim((string) $filters['category']) : '';
        $manufacturer = isset($filters['manufacturer']) ? trim((string) $filters['manufacturer']) : '';
        $sku          = isset($filters['sku']) ? trim((string) $filters['sku']) : '';
        $term         = isset($filters['term']) ? trim((string) $filters['term']) : '';

        $where = ['1=1'];
        $args  = [];

        if ($shop !== '') {
            $where[] = 'shop = %s';
            $args[]  = $shop;
        }

        if ($category !== '') {
            $where[] = 'category = %s';
            $args[]  = $category;
        }

        if ($manufacturer !== '') {
            $where[] = 'manufacturer = %s';
            $args[]  = $manufacturer;
        }

        if ($sku !== '') {
            $where[] = 'sku = %s';
            $args[]  = $sku;
        }

        if ($term !== '') {
            $like = '%' . $wpdb->esc_like($term) . '%';
            $where[] = '(sku = %s OR title LIKE %s)';
            $args[]  = $term;
            $args[]  = $like;
        }

        $sql = "SELECT * FROM " . self::productsTable() . "
                WHERE " . implode(' AND ', $where) . "
                ORDER BY updated_at DESC
                LIMIT {$limit}";

        $rows = $args
            ? $wpdb->get_results($wpdb->prepare($sql, $args), ARRAY_A)
            : $wpdb->get_results($sql, ARRAY_A);

        return is_array($rows) ? $rows : [];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function getPriceHistory(string $sku, string $shop = '', int $months = 3): array
    {
        global $wpdb;

        $months = max(1, $months);
        $timestamp = strtotime("-{$months} months");
        $since = $timestamp !== false ? gmdate('Y-m-d H:i:s', $timestamp) : gmdate('Y-m-d H:i:s');

        if ($shop !== '') {
            $rows = $wpdb->get_results(
                $wpdb->prepare(
                    "SELECT price, currency, recorded_at, shop, sku
                     FROM " . self::historyTable() . "
                     WHERE sku = %s AND shop = %s AND recorded_at >= %s
                     ORDER BY recorded_at ASC",
                    $sku,
                    $shop,
                    $since
                ),
                ARRAY_A
            );

            return is_array($rows) ? $rows : [];
        }

        $rows = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT price, currency, recorded_at, shop, sku
                 FROM " . self::historyTable() . "
                 WHERE sku = %s AND recorded_at >= %s
                 ORDER BY recorded_at ASC",
                $sku,
                $since
            ),
            ARRAY_A
        );

        return is_array($rows) ? $rows : [];
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function getLastHistoryRow(string $sku, string $shop = ''): ?array
    {
        global $wpdb;

        if ($shop !== '') {
            $row = $wpdb->get_row(
                $wpdb->prepare(
                    "SELECT * FROM " . self::historyTable() . "
                     WHERE sku = %s AND shop = %s
                     ORDER BY recorded_at DESC LIMIT 1",
                    $sku,
                    $shop
                ),
                ARRAY_A
            );
        } else {
            $row = $wpdb->get_row(
                $wpdb->prepare(
                    "SELECT * FROM " . self::historyTable() . "
                     WHERE sku = %s
                     ORDER BY recorded_at DESC LIMIT 1",
                    $sku
                ),
                ARRAY_A
            );
        }

        return is_array($row) ? $row : null;
    }

    /**
     * @param array<string, mixed> $args
     * @return array<int, array<string, mixed>>
     */
    public static function getLatestProducts(array $args = []): array
    {
        $defaults = [
            'term'  => '',
            'shop'  => '',
            'limit' => 10,
            'order' => 'DESC',
        ];

        $args = array_merge($defaults, $args);

        return self::get_latest_products($args);
    }
}
