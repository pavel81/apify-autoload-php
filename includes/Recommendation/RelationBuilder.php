<?php
declare(strict_types=1);

namespace Panda\Apify\Recommendation;

final class RelationBuilder
{
    public static function rebuild(): void
    {
        if ((bool)get_option('panda_collect_only', 1)) {
            return;
        }

        $events = get_option('panda_relation_events', []);
        if (!is_array($events) || $events === []) {
            return;
        }

        $relations = [];

        foreach ($events as $e) {
            $from = $e['from'] ?? null;
            $to   = $e['to'] ?? null;

            if (!is_string($from) || !is_string($to)) continue;

            $relations[$from][$to] = ($relations[$from][$to] ?? 0) + 1;
        }

        foreach ($relations as $term => $items) {
            arsort($items);
            $relations[$term] = array_slice(array_keys($items), 0, 5);
        }

        update_option('panda_relations', $relations, false);

        delete_option('panda_relation_events');
    }

    public static function log(string $from, string $to): void
    {
        $max = (int)get_option('panda_relations_buffer_size', 1000);

        $events = get_option('panda_relation_events', []);
        if (!is_array($events)) $events = [];

        $events[] = [
            'from' => $from,
            'to'   => $to,
            'ts'   => time(),
        ];

        if (count($events) > $max) {
            $events = array_slice($events, -$max);
        }

        update_option('panda_relation_events', $events, false);
    }
}
