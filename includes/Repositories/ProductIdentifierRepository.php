<?php

declare(strict_types=1);

namespace Panda\Apify\Repositories;

use wpdb;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductIdentifierRepository implements ProductIdentifierRepositoryInterface
{
    public function __construct(private readonly wpdb $db)
    {
    }

    /**
     * @return array<string, mixed>|null
     */
    public function findByIdentifier(string $type, string $value): ?array
    {
        $table = $this->db->prefix . 'apify_product_identifiers';

        $sql = $this->db->prepare(
            "SELECT * FROM {$table} WHERE identifier_type = %s AND identifier_value = %s LIMIT 1",
            $type,
            $value
        );

        $row = $this->db->get_row($sql, ARRAY_A);

        return is_array($row) ? $row : null;
    }

    /**
     * @param array<string, mixed> $data
     */
    public function upsert(array $data): int
    {
        $table = $this->db->prefix . 'apify_product_identifiers';
        $now = current_time('mysql');

        $payload = [
            'product_id' => (int) ($data['product_id'] ?? 0),
            'canonical_hash' => (string) ($data['canonical_hash'] ?? ''),
            'identifier_type' => (string) ($data['identifier_type'] ?? ''),
            'identifier_value' => (string) ($data['identifier_value'] ?? ''),
            'identifier_hash' => (string) ($data['identifier_hash'] ?? ''),
            'source' => (string) ($data['source'] ?? 'feed'),
            'confidence' => (int) ($data['confidence'] ?? 100),
            'is_primary' => !empty($data['is_primary']) ? 1 : 0,
            'verified_at' => $data['verified_at'] ?? null,
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $existing = $this->findByIdentifier($payload['identifier_type'], $payload['identifier_value']);

        if ($existing !== null && isset($existing['id'])) {
            $this->db->update(
                $table,
                [
                    'product_id' => $payload['product_id'],
                    'canonical_hash' => $payload['canonical_hash'],
                    'identifier_hash' => $payload['identifier_hash'],
                    'source' => $payload['source'],
                    'confidence' => $payload['confidence'],
                    'is_primary' => $payload['is_primary'],
                    'verified_at' => $payload['verified_at'],
                    'updated_at' => $now,
                ],
                ['id' => (int) $existing['id']]
            );

            return (int) $existing['id'];
        }

        $this->db->insert($table, $payload);

        return (int) $this->db->insert_id;
    }

    public function linkToProduct(int $productId, int $identifierId, int $scopeId = 0, int $runId = 0, string $matchMethod = 'manual', int $confidence = 100): int
    {
        $table = $this->db->prefix . 'apify_product_identifier_links';
        $now = current_time('mysql');

        $existingId = $this->db->get_var(
            $this->db->prepare(
                "SELECT id FROM {$table} WHERE product_id = %d AND identifier_id = %d LIMIT 1",
                $productId,
                $identifierId
            )
        );

        $payload = [
            'scope_id' => $scopeId > 0 ? $scopeId : null,
            'run_id' => $runId > 0 ? $runId : null,
            'product_id' => $productId,
            'identifier_id' => $identifierId,
            'match_method' => $matchMethod,
            'confidence' => $confidence,
            'created_at' => $now,
            'updated_at' => $now,
        ];

        if ($existingId !== null) {
            $this->db->update(
                $table,
                [
                    'scope_id' => $payload['scope_id'],
                    'run_id' => $payload['run_id'],
                    'match_method' => $payload['match_method'],
                    'confidence' => $payload['confidence'],
                    'updated_at' => $now,
                ],
                ['id' => (int) $existingId]
            );

            return (int) $existingId;
        }

        $this->db->insert($table, $payload);

        return (int) $this->db->insert_id;
    }
}
