<?php

declare(strict_types=1);

if (!defined('ARRAY_A')) {
    define('ARRAY_A', 'ARRAY_A');
}

if (!class_exists('wpdb')) {
    final class wpdb
    {
        public string $prefix = 'wp_';
        public int $insert_id = 0;

        /** @var array<string, array<int, array<string, mixed>>> */
        public array $tables = [];

        /** @var array<string, mixed> */
        public array $lastInsert = [];

        /** @var array<string, mixed> */
        public array $lastUpdate = [];

        /** @var array<string, mixed> */
        public array $lastDelete = [];

        /** @var array<int, string> */
        public array $queries = [];

        public function prepare(string $query, mixed ...$args): string
        {
            foreach ($args as $arg) {
                $replacement = is_int($arg)
                    ? (string) $arg
                    : "'" . str_replace("'", "''", (string) $arg) . "'";

                $query = preg_replace('/%[sd]/', $replacement, $query, 1) ?? $query;
            }

            return $query;
        }

        public function get_var(string $query): mixed
        {
            $this->queries[] = $query;

            if (preg_match("/FROM\\s+([a-z0-9_]+)\\s+WHERE\\s+slug\\s+=\\s+'([^']+)'/i", $query, $m) === 1) {
                $table = $m[1];
                $slug = $m[2];

                foreach ($this->tables[$table] ?? [] as $row) {
                    if (($row['slug'] ?? null) === $slug) {
                        return $row['id'] ?? null;
                    }
                }

                return null;
            }

            if (
                preg_match(
                    "/FROM\\s+([a-z0-9_]+)\\s+WHERE\\s+canonical_hash\\s+=\\s+'([^']+)'\\s+AND\\s+(use_case_id|group_id|tag_id)\\s+=\\s+(\\d+)/i",
                    $query,
                    $m
                ) === 1
            ) {
                $table = $m[1];
                $hash = $m[2];
                $column = $m[3];
                $entityId = (int) $m[4];

                foreach ($this->tables[$table] ?? [] as $row) {
                    if (
                        ($row['canonical_hash'] ?? null) === $hash
                        && (int) ($row[$column] ?? 0) === $entityId
                    ) {
                        return $row['id'] ?? null;
                    }
                }

                return null;
            }

            return null;
        }

        /**
         * @return array<int, array<string, mixed>>
         */
        public function get_results(string $query, $output = ARRAY_A): array
        {
            $this->queries[] = $query;

            if (
                preg_match(
                    "/FROM\\s+([a-z0-9_]+)\\s+m\\s+INNER\\s+JOIN\\s+([a-z0-9_]+)\\s+e\\s+ON\\s+e\\.id\\s+=\\s+m\\.([a-z_]+)\\s+WHERE\\s+m\\.canonical_hash\\s+=\\s+'([^']+)'/i",
                    $query,
                    $m
                ) !== 1
            ) {
                return [];
            }

            $mapTable = $m[1];
            $entityTable = $m[2];
            $fkColumn = $m[3];
            $hash = $m[4];

            $rows = [];

            foreach ($this->tables[$mapTable] ?? [] as $mapRow) {
                if (($mapRow['canonical_hash'] ?? null) !== $hash) {
                    continue;
                }

                $entityId = (int) ($mapRow[$fkColumn] ?? 0);

                foreach ($this->tables[$entityTable] ?? [] as $entityRow) {
                    if ((int) ($entityRow['id'] ?? 0) !== $entityId) {
                        continue;
                    }

                    $rows[] = array_merge(
                        $entityRow,
                        [
                            'confidence' => $mapRow['confidence'] ?? 100,
                            'source' => $mapRow['source'] ?? 'manual',
                            'is_primary' => $mapRow['is_primary'] ?? 0,
                        ]
                    );

                    break;
                }
            }

            usort(
                $rows,
                static function (array $a, array $b): int {
                    $primaryA = (int) ($a['is_primary'] ?? 0);
                    $primaryB = (int) ($b['is_primary'] ?? 0);

                    if ($primaryA !== $primaryB) {
                        return $primaryB <=> $primaryA;
                    }

                    $sortA = (int) ($a['sort_order'] ?? 0);
                    $sortB = (int) ($b['sort_order'] ?? 0);

                    if ($sortA !== $sortB) {
                        return $sortA <=> $sortB;
                    }

                    return strcmp((string) ($a['name'] ?? ''), (string) ($b['name'] ?? ''));
                }
            );

            return $rows;
        }

        public function insert(string $table, array $data): bool
        {
            $id = isset($data['id']) ? (int) $data['id'] : $this->nextId($table);
            $data['id'] = $id;

            $this->tables[$table] ??= [];
            $this->tables[$table][] = $data;

            $this->insert_id = $id;
            $this->lastInsert = [
                'table' => $table,
                'data' => $data,
                'id' => $id,
            ];

            return true;
        }

        public function update(string $table, array $data, array $where): bool
        {
            foreach ($this->tables[$table] ?? [] as $index => $row) {
                $match = true;

                foreach ($where as $key => $value) {
                    if (($row[$key] ?? null) != $value) {
                        $match = false;
                        break;
                    }
                }

                if (!$match) {
                    continue;
                }

                $this->tables[$table][$index] = array_merge($row, $data);

                $this->lastUpdate = [
                    'table' => $table,
                    'data' => $data,
                    'where' => $where,
                ];

                return true;
            }

            return false;
        }

        public function delete(string $table, array $where): int|false
        {
            if (!isset($this->tables[$table])) {
                return 0;
            }

            $deleted = 0;
            $remaining = [];

            foreach ($this->tables[$table] as $row) {
                $match = true;

                foreach ($where as $key => $value) {
                    if (($row[$key] ?? null) != $value) {
                        $match = false;
                        break;
                    }
                }

                if ($match) {
                    $deleted++;
                    continue;
                }

                $remaining[] = $row;
            }

            $this->tables[$table] = $remaining;

            $this->lastDelete = [
                'table' => $table,
                'where' => $where,
                'deleted' => $deleted,
            ];

            return $deleted;
        }

        private function nextId(string $table): int
        {
            $max = 0;

            foreach ($this->tables[$table] ?? [] as $row) {
                $max = max($max, (int) ($row['id'] ?? 0));
            }

            return $max + 1;
        }
    }
}
