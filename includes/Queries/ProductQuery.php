<?php

declare(strict_types=1);

namespace Panda\Apify\Queries;

use wpdb;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductQuery
{
    private wpdb $db;

    public function __construct(wpdb $db)
    {
        $this->db = $db;
    }

    /**
     * @param array<int,int> $ids
     * @return array<string,mixed>|null
     */
    public function findBestOffer(array $ids): ?array
    {
        if ($ids === []) {
            return null;
        }

        $table = $this->db->prefix . 'apify_price_history';
        $placeholders = implode(',', array_fill(0, count($ids), '%d'));

        $sql = "
            SELECT *
            FROM {$table}
            WHERE product_id IN ($placeholders)
            ORDER BY price ASC
            LIMIT 1
        ";

        /** @phpstan-ignore-next-line */
        $prepared = $this->db->prepare($sql, ...$ids);
        if (!is_string($prepared)) {
            return null;
        }

        /** @var array<string,mixed>|null $row */
        $row = $this->db->get_row($prepared, ARRAY_A);

        return is_array($row) ? $row : null;
    }

    /**
     * @param array<int,int> $ids
     * @return array<int,array<string,mixed>>
     */
    public function findLatestPrices(array $ids): array
    {
        if ($ids === []) {
            return [];
        }

        $table = $this->db->prefix . 'apify_price_history';
        $placeholders = implode(',', array_fill(0, count($ids), '%d'));

        $sql = "
            SELECT *
            FROM {$table}
            WHERE product_id IN ($placeholders)
            ORDER BY created_at DESC
        ";

        /** @phpstan-ignore-next-line */
        $prepared = $this->db->prepare($sql, ...$ids);
        if (!is_string($prepared)) {
            return [];
        }

        /** @var array<int,array<string,mixed>> $rows */
        $rows = $this->db->get_results($prepared, ARRAY_A) ?: [];

        return $rows;
    }

    /**
     * @param array<string, mixed> $args
     * @return array<int, array<string, mixed>>
     */
    public function getLatestProducts(array $args = []): array
    {
        global $wpdb;
        /** @var wpdb $wpdb */

        $table = $wpdb->prefix . 'apify_products';

        $term         = trim((string) ($args['term'] ?? ''));
        $shop         = trim((string) ($args['shop'] ?? ''));
        $category     = trim((string) ($args['category'] ?? ''));
        $manufacturer = trim((string) ($args['manufacturer'] ?? ''));
        $sku          = trim((string) ($args['sku'] ?? ''));
        $limit        = max(1, min(100, (int) ($args['limit'] ?? 10)));

        $where  = [];
        $params = [];

        if ($term !== '') {
            $where[]  = '(title LIKE %s OR description LIKE %s)';
            $like     = '%' . $wpdb->esc_like($term) . '%';
            $params[] = $like;
            $params[] = $like;
        }

        if ($shop !== '') {
            $where[]  = 'shop = %s';
            $params[] = $shop;
        }

        if ($category !== '') {
            $where[]  = 'category = %s';
            $params[] = $category;
        }

        if ($manufacturer !== '') {
            $where[]  = 'manufacturer = %s';
            $params[] = $manufacturer;
        }

        if ($sku !== '') {
            $where[]  = 'sku = %s';
            $params[] = $sku;
        }

        $sql = "SELECT *
                FROM {$table}";

        if ($where !== []) {
            $sql .= ' WHERE ' . implode(' AND ', $where);
        }

        $sql .= ' ORDER BY created_at DESC LIMIT %d';
        $params[] = $limit;

        // pùvodnì: if ($params !== [])
        // PHPStan ví, e $params NIKDY není prázdné › unreachable code
        if (count($params) > 1) {
            /** @phpstan-ignore-next-line */
            $prepared = $wpdb->prepare($sql, ...$params);

            if (!is_string($prepared)) {
                return [];
            }

            /** @var array<int,array<string,mixed>> $results */
            $results = $wpdb->get_results($prepared, ARRAY_A) ?: [];
            return $results;
        }

        /** @var array<int,array<string,mixed>> $results */
        $results = $wpdb->get_results($sql, ARRAY_A) ?: [];
        return $results;
    }
}
