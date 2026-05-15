<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

use Panda\Apify\Admin\Settings\SettingsService;

final class ClusterCanonicalService
{
    /**
     * Vrací canonical slug (clustered)
     */
    public static function canonicalSlug(string $slug): string
    {
        $cfg = SettingsService::get();

        if (!property_exists($cfg, 'clusterEnabled') || !$cfg->clusterEnabled) {
            return $slug;
        }

        // reuse existující cluster service
        if (class_exists(\Panda\Apify\Seo\QueryClusterService::class)) {
            return \Panda\Apify\Seo\QueryClusterService::cluster($slug);
        }

        return $slug;
    }

    /**
     * Canonical URL (jazykově neutrální nebo default lang)
     */
    public static function canonicalUrl(string $slug): string
    {
        $base = self::canonicalSlug($slug);

        // canonical drž na default jazyku (SEO best practice)
        return '/' . LocaleService::addPrefix($base, self::defaultLang());
    }

    /**
     * @return array<string,string>
     */
    public static function hreflang(string $slug): array
    {
        $base = self::canonicalSlug($slug);

        return LocaleService::hreflang($base);
    }

    private static function defaultLang(): string
    {
        return 'cs';
    }
}