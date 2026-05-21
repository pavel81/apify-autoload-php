<?php

declare(strict_types=1);

namespace Panda\Apify\Queries;

use wpdb;

final class ClassificationRepository
{
    public function __construct(private wpdb $db)
    {
    }

    public function upsertUseCase(array $data): int
    {
        return $this->upsertTerm('apify_product_use_cases', $data);
    }

    public function upsertGroup(array $data): int
    {
        return $this->upsertTerm('apify_product_groups', $data);
    }

    public function upsertTag(array $data): int
    {
        return $this->upsertTerm('apify_product_tags', $data);
    }

    public function assignUseCase(
        string $canonicalHash,
        int $useCaseId,
        string $source = 'manual',
        bool $isPrimary = false,
        int $confidence = 100
    ): void {
        $this->upsertMap(
            'apify_product_use_case_map',
            'use_case_id',
            $canonicalHash,
            $useCaseId,
            $source,
            $isPrimary,
            $confidence
        );
    }

    public function assignGroup(
        string $canonicalHash,
        int $groupId,
        string $source = 'manual',
        bool $isPrimary = false,
        int $confidence = 100
    ): void {
        $this->upsertMap(
            'apify_product_group_map',
            'group_id',
            $canonicalHash,
            $groupId,
            $source,
            $isPrimary,
            $confidence
        );
    }

    public function assignTag(
        string $canonicalHash,
        int $tagId,
        string $source = 'manual',
        bool $isPrimary = false,
        int $confidence = 100
    ): void {
        $this->upsertMap(
            'apify_product_tag_map',
            'tag_id',
            $canonicalHash,
            $tagId,
            $source,
            $isPrimary,
            $confidence
        );
    }

    public function clearCanonical(string $canonicalHash): void
    {
        if ($canonicalHash === '') {
            return;
        }

        $this->db->delete($this->db->prefix . 'apify_product_use_case_map', ['canonical_hash' => $canonicalHash]);
        $this->db->delete($this->db->prefix . 'apify_product_group_map', ['canonical_hash' => $canonicalHash]);
        $this->db->delete($this->db->prefix . 'apify_product_tag_map', ['canonical_hash' => $canonicalHash]);
    }

    /**
     * @return array{
     *     use_cases: array<int, array<string, mixed>>,
     *     groups: array<int, array<string, mixed>>,
     *     tags: array<int, array<string, mixed>>
     * }
     */
    public function getByCanonicalHash(string $canonicalHash): array
    {
        return [
            'use_cases' => $this->fetchByCanonical(
                'apify_product_use_case_map',
                'apify_product_use_cases',
                'use_case_id',
                $canonicalHash
            ),
            'groups' => $this->fetchByCanonical(
                'apify_product_group_map',
                'apify_product_groups',
                'group_id',
                $canonicalHash
            ),
            'tags' => $this->fetchByCanonical(
                'apify_product_tag_map',
                'apify_product_tags',
                'tag_id',
                $canonicalHash
            ),
        ];
    }

    private function upsertTerm(string $tableSuffix, array $data): int
    {
        $table = $this->db->prefix . $tableSuffix;
        $now = current_time('mysql');

        $name = trim((string) ($data['name'] ?? ''));
        $slug = trim((string) ($data['slug'] ?? ''));

        if ($slug === '' && $name !== '') {
            $slug = sanitize_title($name);
        }

        if ($name === '' || $slug === '') {
            return 0;
        }

        $existing = $this->db->get_var(
            $this->db->prepare(
                "SELECT id FROM {$table} WHERE slug = %s LIMIT 1",
                $slug
            )
        );

        $payload = [
            'slug' => $slug,
            'name' => $name,
            'description' => (string) ($data['description'] ?? ''),
            'is_active' => isset($data['is_active']) ? (int) (bool) $data['is_active'] : 1,
            'sort_order' => isset($data['sort_order']) ? (int) $data['sort_order'] : 0,
            'updated_at' => $now,
        ];

        if (array_key_exists('parent_id', $data)) {
            $payload['parent_id'] = $data['parent_id'] === null ? null : (int) $data['parent_id'];
        }

        if ($existing !== null) {
            $this->db->update($table, $payload, ['id' => (int) $existing]);

            return (int) $existing;
        }

        $payload['created_at'] = $now;
        $this->db->insert($table, $payload);

        return (int) $this->db->insert_id;
    }

    private function upsertMap(
        string $tableSuffix,
        string $fkColumn,
        string $canonicalHash,
        int $entityId,
        string $source,
        bool $isPrimary,
        int $confidence
    ): void {
        if ($canonicalHash === '' || $entityId <= 0) {
            return;
        }

        $table = $this->db->prefix . $tableSuffix;
        $now = current_time('mysql');

        $existing = $this->db->get_var(
            $this->db->prepare(
                "SELECT id FROM {$table} WHERE canonical_hash = %s AND {$fkColumn} = %d LIMIT 1",
                $canonicalHash,
                $entityId
            )
        );

        $payload = [
            'canonical_hash' => $canonicalHash,
            $fkColumn => $entityId,
            'confidence' => max(0, min(100, $confidence)),
            'source' => $source,
            'is_primary' => $isPrimary ? 1 : 0,
            'updated_at' => $now,
        ];

        if ($existing !== null) {
            $this->db->update($table, $payload, ['id' => (int) $existing]);

            return;
        }

        $payload['created_at'] = $now;
        $this->db->insert($table, $payload);
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function fetchByCanonical(
        string $mapTableSuffix,
        string $entityTableSuffix,
        string $fkColumn,
        string $canonicalHash
    ): array {
        if ($canonicalHash === '') {
            return [];
        }

        $mapTable = $this->db->prefix . $mapTableSuffix;
        $entityTable = $this->db->prefix . $entityTableSuffix;

        $sql = $this->db->prepare(
            "SELECT
                e.*,
                m.confidence,
                m.source,
                m.is_primary
             FROM {$mapTable} m
             INNER JOIN {$entityTable} e ON e.id = m.{$fkColumn}
             WHERE m.canonical_hash = %s
             ORDER BY m.is_primary DESC, e.sort_order ASC, e.name ASC",
            $canonicalHash
        );

        return $this->db->get_results($sql, ARRAY_A) ?: [];
    }
}
