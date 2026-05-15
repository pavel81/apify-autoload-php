<?php
declare(strict_types=1);

namespace Panda\Apify\Metrics;

final class UsageStats
{
    public static function update(string $type): void
    {
        $stats = get_option('panda_usage_stats', []);

        if (!is_array($stats)) {
            $stats = [];
        }

        $stats[$type] = (int) (($stats[$type] ?? 0) + 1);

        update_option('panda_usage_stats', $stats, false);
    }

    /**
     * @return array<string,int>
     */
    public static function get(): array
    {
        $stats = get_option('panda_usage_stats', []);
        return is_array($stats) ? $stats : [];
    }
}
