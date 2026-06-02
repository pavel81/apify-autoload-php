<?php

declare(strict_types=1);

namespace Panda\Apify\Repositories;

use wpdb;

final class ScopeRepository implements ScopeRepositoryInterface
{
    public function __construct(private wpdb $db)
    {
    }

    /**
     * @return array<string, mixed>|null
     */
    public function findByKey(string $scopeKey): ?array
    {
        $table = $this->db->prefix . 'apify_catalog_scopes';

        $sql = $this->db->prepare(
            "SELECT * FROM {$table} WHERE scope_key = %s AND is_active = 1 LIMIT 1",
            $scopeKey
        );

        $row = $this->db->get_row($sql, ARRAY_A);

        return is_array($row) ? $row : null;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function findActive(): array
    {
        $table = $this->db->prefix . 'apify_catalog_scopes';

        $rows = $this->db->get_results(
            "SELECT * FROM {$table} WHERE is_active = 1 ORDER BY sort_order ASC, id ASC",
            ARRAY_A
        );

        return is_array($rows) ? $rows : [];
    }
}
