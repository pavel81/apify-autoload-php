<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\Device;
use wpdb;
final class DeviceRepository
{   
/** @var \wpdb $wpdb */
    private wpdb $db;
    private string $table;

    public function __construct(\wpdb $db)
    {
        $this->db = $db;
        $this->table = $db->prefix . 'hb_devices';
    }

    /**
     * @return array<string, mixed>|null
     */
    public function findById(string $id): ?array
    {
        $row = $this->db->get_row(
            $this->db->prepare(
                "SELECT * FROM {$this->table} WHERE id = %s LIMIT 1",
                $id
            ),
            ARRAY_A
        );

        return $row ?: null;
    }

    /**
     * @return array<int, array<string,mixed>>
     */
    public function findByUser(int $userId): array
    {
        return $this->db->get_results(
            $this->db->prepare(
                "SELECT id, device_name, platform, device_type, last_seen_at, created_at
                 FROM {$this->table}
                 WHERE user_id = %d
                 ORDER BY created_at DESC",
                $userId
            ),
            ARRAY_A
        ) ?: [];
    }
    /**
 * @param array{
 *     id: string,
 *     user_id?: int|null,
 *     public_key: string,
 *     device_name?: string|null,
 *     platform?: string|null,
 *     device_type?: string|null,
 *     app_version?: string|null,
 *     locale?: string|null,
 *     last_seen_at?: string|null
 * } $data
 */
    public function insert(array $data): bool
    {
        return (bool) $this->db->insert($this->table, [
            'id' => $data['id'],
            'user_id' => $data['user_id'] ?? null,
            'public_key' => $data['public_key'],
            'device_name' => $data['device_name'] ?? null,
            'platform' => $data['platform'] ?? null,
            'device_type' => $data['device_type'] ?? null,
            'app_version' => $data['app_version'] ?? null,
            'locale' => $data['locale'] ?? null,
            'last_seen_at' => $data['last_seen_at'] ?? null,
            'created_at' => current_time('mysql'),
        ]);
    }

    public function updateLastSeen(string $id): void
    {
        $this->db->update(
            $this->table,
            [
                'last_seen_at' => current_time('mysql'),
            ],
            [
                'id' => $id,
            ]
        );
    }

    public function rename(string $id, int $userId, string $name): bool
    {
        return (bool) $this->db->update(
            $this->table,
            [
                'device_name' => $name,
            ],
            [
                'id' => $id,
                'user_id' => $userId,
            ]
        );
    }

    public function delete(string $id, int $userId): bool
    {
        return (bool) $this->db->delete(
            $this->table,
            [
                'id' => $id,
                'user_id' => $userId,
            ]
        );
    }
}
