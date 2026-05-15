<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

use Panda\Apify\Admin\Settings\SettingsService;
use Panda\Apify\Metrics\MetricsStore;
use Panda\Apify\Scoring\ScoreCalculator;

final class LandingQualityService
{
    private const CACHE_KEY = 'panda_lp_quality_';
    private const CACHE_TTL = 1800; // 30 min

    /**
     * @return bool true = indexovat, false = noindex/disabled
     */
    public static function isIndexable(string $slug): bool
    {
        $cfg = SettingsService::get();

        $cacheKey = self::CACHE_KEY . md5($slug);
        $cached = get_transient($cacheKey);
        if (is_bool($cached)) {
            return $cached;
        }

        $metrics = MetricsStore::get($slug);
        $score = ScoreCalculator::score($slug, $metrics);

        $decayed = self::decay($score, $metrics);
        $threshold = (float) $cfg->seoNoindexThreshold;

        $ok = $decayed >= $threshold;

        set_transient($cacheKey, $ok, self::CACHE_TTL);

        return $ok;
    }

    /**
     * @param array<string, mixed> $metrics
     */
    private static function decay(float $score, array $metrics): float
    {
        $lastTs = (isset($metrics['ts']) && is_numeric($metrics['ts']))
            ? (int) $metrics['ts']
            : time();

        $age = max(0, time() - $lastTs);

        $halfLife = 604800.0;
        $lambda = log(2) / $halfLife;

        return $score * exp(-$lambda * $age);
    }
}