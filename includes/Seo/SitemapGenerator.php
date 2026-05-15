<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

use Panda\Apify\Admin\Settings\SettingsService;
use Panda\Apify\Scoring\ScoreCalculator;
use Panda\Apify\Metrics\MetricsStore;

final class SitemapGenerator
{
    private const CACHE_KEY = 'panda_sitemap_xml';
    private const CACHE_TTL = 3600;

    public static function generate(): string
    {
        $cfg = SettingsService::get();

        // 🚫 sitemap vypnutá
        if (!$cfg->sitemapEnabled) {
            return '';
        }

        $cached = get_transient(self::CACHE_KEY);
        if (is_string($cached) && $cached !== '') {
            return $cached;
        }

        $landings = LandingRepository::all();
        $urls = [];

        foreach ($landings as $slug => $data) {
            $metrics = MetricsStore::get($slug);
            $score = ScoreCalculator::score($slug, $metrics);

            // 🔥 crawl budget → jen top landingy
            if ($cfg->crawlBudgetTopOnly && $score <= 0.0) {
                continue;
            }

            $urls[$slug] = $score;
        }

        arsort($urls);

        // 🔥 limit z adminu místo hardcoded 200
        $limit = $cfg->sitemapLimit > 0 ? $cfg->sitemapLimit : 200;
        $urls = array_slice($urls, 0, $limit, true);

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $slug => $score) {
            $xml .= '<url>';
            $xml .= '<loc>' . esc_url(home_url($slug)) . '</loc>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        set_transient(self::CACHE_KEY, $xml, self::CACHE_TTL);

        return $xml;
    }
}