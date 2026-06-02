<?php

declare(strict_types=1);

namespace Panda\Apify\Repositories;

use wpdb;

final class ImportRunRepository implements ImportRunRepositoryInterface
{
    public function __construct(private wpdb $db)
    {
    }

    /**
     * @param array<string, mixed> $data
     */
    public function create(array $data): int
    {
        $table = $this->db->prefix . 'apify_import_runs';

        $now = current_time('mysql');

        $payload = [
            'scope_id' => isset($data['scope_id']) ? (int) $data['scope_id'] : null,
            'feed_id' => isset($data['feed_id']) ? (int) $data['feed_id'] : null,
            'source_type' => (string) ($data['source_type'] ?? 'apify'),
            'status' => (string) ($data['status'] ?? 'queued'),
            'cursor_state' => $data['cursor_state'] ?? null,
            'batch_size' => isset($data['batch_size']) ? (int) $data['batch_size'] : 50,
            'checksum' => isset($data['checksum']) ? (string) $data['checksum'] : null,
            'error_count' => isset($data['error_count']) ? (int) $data['error_count'] : 0,
            'last_message' => isset($data['last_message']) ? (string) $data['last_message'] : null,
            'started_at' => $data['started_at'] ?? null,
            'finished_at' => $data['finished_at'] ?? null,
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $this->db->insert($table, $payload);

        return (int) $this->db->insert_id;
    }

    public function markRunning(int $runId): void
    {
        $this->updateStatus($runId, 'running', ['started_at' => current_time('mysql')]);
    }

    public function markFinished(int $runId, string $status = 'finished', ?string $message = null): void
    {
        $this->updateStatus($runId, $status, [
            'finished_at' => current_time('mysql'),
            'last_message' => $message,
        ]);
    }

    public function addError(int $runId, string $message): void
    {
        $table = $this->db->prefix . 'apify_import_runs';

        $sql = $this->db->prepare(
            "UPDATE {$table}
             SET error_count = error_count + 1,
                 last_message = %s,
                 updated_at = %s
             WHERE id = %d",
            $message,
            current_time('mysql'),
            $runId
        );

        $this->db->query($sql);
    }

    /**
     * @param array<string, mixed> $fields
     */
    private function updateStatus(int $runId, string $status, array $fields = []): void
    {
        $table = $this->db->prefix . 'apify_import_runs';

        $data = array_merge([
            'status' => $status,
            'updated_at' => current_time('mysql'),
        ], $fields);

        $this->db->update($table, $data, ['id' => $runId]);
    }
}
