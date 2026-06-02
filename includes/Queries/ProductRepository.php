<?php

declare(strict_types=1);

namespace Panda\Apify\Queries;

use wpdb;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductRepository implements ProductRepositoryInterface
{
    private wpdb $db;

    public function __construct(wpdb $db)
    {
        $this->db = $db;
    }

    /**
     * @param array<string, mixed> $data
     */
    public function upsertProduct(array $data): int
    {
        $table = $this->db->prefix . 'apify_products';

        $externalId = (string) $data['external_id'];
        $shop       = (string) $data['shop'];
        $region     = (string) $data['region'];

        /** @var string|null $existing */
        $existing = $this->db->get_var(
            $this->db->prepare(
                "SELECT id FROM {$table} WHERE external_id = %s AND shop = %s AND region = %s LIMIT 1",
                $externalId,
                $shop,
                $region
            )
        );

        $existingId = $existing !== null ? (int) $existing : 0;

        $now = current_time('mysql');

        // 🔥 slug generování
        $title = (string) ($data['title'] ?? '');
        $baseSlug = sanitize_title($title);
        $slug = $baseSlug;

        $existsSlug = $this->db->get_var(
            $this->db->prepare(
                "SELECT id FROM {$table} WHERE slug = %s AND external_id != %s LIMIT 1",
                $baseSlug,
                $externalId
            )
        );

        if ($existsSlug) {
            $slug = $baseSlug . '-' . substr($externalId, -4);
        }

        $payload = [
            'external_id'    => $externalId,
            'sku'            => (string) $data['sku'],
            'shop'           => $shop,
            'region'         => $region,
            'domain'         => (string) $data['domain'],
            'title'          => $title,
            'slug'           => $slug,
            'url'            => (string) ($data['url'] ?? ''),
            'image'          => (string) ($data['image'] ?? ''),        // 🔥 NEW
            'description'    => (string) ($data['description'] ?? ''),  // 🔥 NEW
            'canonical_hash' => (string) ($data['canonical_hash'] ?? ''),
            'brand'          => (string) ($data['brand'] ?? ''),
            'model'          => (string) ($data['model'] ?? ''),
            'updated_at'     => $now,
        ];

        if ($existingId > 0) {
            $this->db->update($table, $payload, ['id' => $existingId]);
            return $existingId;
        }

        $payload['created_at'] = $now;

        $this->db->insert($table, $payload);

        return (int) $this->db->insert_id;
    }

    public function insertPrice(
        int $productId,
        string $shop,
        string $region,
        string $sku,
        float $price,
        string $currency
    ): void {
        $table = $this->db->prefix . 'apify_price_history';

        $now = current_time('mysql');

        /** @var string|null $last */
        $last = $this->db->get_var(
            $this->db->prepare(
                "SELECT price FROM {$table} WHERE product_id = %d ORDER BY created_at DESC LIMIT 1",
                $productId
            )
        );

        if ($last !== null && (float) $last === $price) {
            return;
        }

        $this->db->insert($table, [
            'product_id' => $productId,
            'shop'       => $shop,
            'region'     => $region,
            'sku'        => $sku,
            'price'      => $price,
            'currency'   => $currency,
            'created_at' => $now,
        ]);
    }

    public function mapCanonical(
        int $productId,
        string $canonicalHash,
        string $shop,
        string $region
    ): void {
        if ($canonicalHash === '') {
            return;
        }

        $table = $this->db->prefix . 'apify_product_map';

        $this->db->insert($table, [
            'canonical_hash' => $canonicalHash,
            'product_id'     => $productId,
            'shop'           => $shop,
            'region'         => $region,
        ]);
    }

    /**
     * @return array<string, mixed>|null
     */
    public function findCanonical(string $hash): ?array
    {
        $table = $this->db->prefix . 'apify_products';

        $row = $this->db->get_row(
            $this->db->prepare(
                "SELECT * FROM {$table} WHERE canonical_hash = %s ORDER BY updated_at DESC LIMIT 1",
                $hash
            ),
            ARRAY_A
        );

        return is_array($row) ? $row : null;
    }

    /**
     * 🔥 slug lookup
     * @return array<string, mixed>|null
     */
    public function findCanonicalBySlug(string $slug): ?array
    {
        $table = $this->db->prefix . 'apify_products';

        $row = $this->db->get_row(
            $this->db->prepare(
                "SELECT * FROM {$table} WHERE slug = %s LIMIT 1",
                $slug
            ),
            ARRAY_A
        );

        return is_array($row) ? $row : null;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function findAllByCanonical(string $hash): array
    {
        $table = $this->db->prefix . 'apify_products';

        return $this->db->get_results(
            $this->db->prepare(
                "SELECT * FROM {$table} WHERE canonical_hash = %s",
                $hash
            ),
            ARRAY_A
        ) ?: [];
    }

    /**
     * @param array<int, int> $productIds
     * @return array<int, array<string, mixed>>
     */
    public function getOffers(array $productIds): array
    {
        if ($productIds === []) {
            return [];
        }

        $table = $this->db->prefix . 'apify_price_history';

        $ids = implode(',', array_map('intval', $productIds));

        return $this->db->get_results(
            "SELECT product_id, shop, price, currency
             FROM {$table}
             WHERE product_id IN ({$ids})
             ORDER BY price ASC",
            ARRAY_A
        ) ?: [];
    }

    /**
     * 🔥 reviews stats
     * @return array{avg:float|null,count:int}
     */
    public function getRatingStats(string $canonicalHash): array
    {
        $table = $this->db->prefix . 'apify_reviews';

        $row = $this->db->get_row(
            $this->db->prepare(
                "SELECT AVG(rating) as avg_rating, COUNT(*) as total FROM {$table} WHERE canonical_hash = %s",
                $canonicalHash
            ),
            ARRAY_A
        );

        return [
            'avg'   => isset($row['avg_rating']) ? (float)$row['avg_rating'] : null,
            'count' => isset($row['total']) ? (int)$row['total'] : 0,
        ];
    }
}
