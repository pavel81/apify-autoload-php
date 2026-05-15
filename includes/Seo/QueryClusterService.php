<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

use Panda\Apify\Admin\Settings\SettingsService;

final class QueryClusterService
{
    /**
     * @return string canonical query
     */
    public static function cluster(string $query): string
    {
        $cfg = SettingsService::get();

        if (!$cfg->clusterEnabled) {
            return $query;
        }

        $normalized = self::normalize($query);

        // 🔥 jednoduchý TF-IDF fallback (zatím)
        // později embedding matching
        $map = get_option('panda_query_clusters', []);

        if (is_array($map) && isset($map[$normalized])) {
            return (string) $map[$normalized];
        }

        // fallback = self
        return $normalized;
    }

    private static function normalize(string $q): string
    {
        $q = mb_strtolower($q);
        $q = trim($q);

        // basic cleanup
        $q = preg_replace('/\s+/', ' ', $q) ?? $q;

        return $q;
    }
}