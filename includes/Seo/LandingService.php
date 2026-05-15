<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

use Panda\Apify\Admin\Settings\SettingsService;

final class LandingService
{
    private const CACHE_TTL = 3600;

    public static function getOrGenerate(string $query, string $lang = 'cs'): string
    {
        $cfg = SettingsService::get();

        // 🚫 globální vypnutí generování
        if (!$cfg->seoAutoGenerate) {
            return SlugGenerator::generate($query, $lang);
        }

        // 🚫 krátké dotazy ignoruj
        if (mb_strlen($query) < $cfg->seoMinQueryLength) {
            return SlugGenerator::generate($query, $lang);
        }

        $baseSlug = SlugGenerator::generate($query, $lang);

        $cacheKey = 'panda_lp_' . md5($baseSlug);
        $cached = get_transient($cacheKey);

        if (is_string($cached) && $cached !== '') {
            return $cached;
        }

        // reuse existujícího
        $existing = LandingRepository::get($baseSlug);
        if ($existing !== null) {
            set_transient($cacheKey, $baseSlug, self::CACHE_TTL);
            return $baseSlug;
        }

        // vytvoření
        $slug = LandingGenerator::generate($query);

        set_transient($cacheKey, $slug, self::CACHE_TTL);

        return $slug;
    }
}