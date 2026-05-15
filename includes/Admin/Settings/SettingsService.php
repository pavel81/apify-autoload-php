<?php
declare(strict_types=1);

namespace Panda\Apify\Admin\Settings;

final class SettingsService
{
    private const CACHE_KEY = 'panda_apify_settings_dto';

    private static ?SettingsDTO $cache = null;

    public static function clearCache(): void
    {
        self::$cache = null;
        delete_transient(self::CACHE_KEY);
    }

    public static function get(): SettingsDTO
    {
        if (self::$cache instanceof SettingsDTO) {
            return self::$cache;
        }

        $cached = get_transient(self::CACHE_KEY);
        if ($cached instanceof SettingsDTO) {
            self::$cache = $cached;
            return $cached;
        }

        $dto = new SettingsDTO();

        // ===== SEO =====
        $dto->seoAutoGenerate = self::bool('panda_seo_auto_generate', true);
        $dto->seoMinQueryLength = self::int('panda_seo_min_query_length', 3);
        $dto->seoNoindexThreshold = self::float('panda_seo_noindex_threshold', 0.0);

        // ===== INDEXACE =====
        $dto->indexationEnabled = self::bool('panda_indexation_enabled', true);
        $dto->forceNoindex = self::bool('panda_force_noindex', false);
        $dto->noindexBelowThreshold = self::bool('panda_noindex_below_threshold', true);
        $dto->robotsMeta = self::string('panda_robots_meta', 'index,follow');

        // ===== SLUG =====
        $dto->slugLangPrefix = self::bool('panda_slug_lang_prefix', true);
        $dto->slugDedup = self::bool('panda_slug_dedup', true);
        $dto->slugTransliterate = self::bool('panda_slug_transliterate', true);
        $dto->slugSeparator = self::string('panda_slug_separator', '-');

        // ===== PRETTY URL / LOCALE =====
        $dto->urlLangEnabled = self::bool('panda_url_lang_enabled', true);
        $dto->urlDefaultLang = self::string('panda_url_default_lang', 'cs');

        $dto->canonicalCluster = self::bool('panda_canonical_cluster', true);
        $dto->hreflangEnabled = self::bool('panda_hreflang_enabled', true);

        // ===== LOCALE / LANGUAGE STRATEGY =====
        $dto->localeMode = self::string('panda_locale_mode', 'hybrid');
        $dto->localeUseBrowser = self::bool('panda_locale_use_browser', true);
        $dto->localeUseCookie = self::bool('panda_locale_use_cookie', true);
        $dto->localeUseGeo = self::bool('panda_locale_use_geo', false);
        $dto->localeGeoProvider = self::string('panda_locale_geo_provider', 'cdn');
        $dto->localeAnalyticsMode = self::string('panda_locale_analytics_mode', 'aggregated');
        $dto->localeBotForceDefault = self::bool('panda_locale_bot_force_default', true);

        // ===== CLUSTERING =====
        $dto->clusterEnabled = self::bool('panda_cluster_enabled', true);
        $dto->clusterMinSimilarity = self::float('panda_cluster_min_similarity', 0.7);
        $dto->clusterMaxSize = self::int('panda_cluster_max_size', 10);
        $dto->clusterMergeStrategy = self::string('panda_cluster_merge_strategy', 'slug');
        $dto->clusterSource = self::string('panda_cluster_source', 'tfidf');

        // ===== SITEMAP =====
        $dto->sitemapEnabled = self::bool('panda_sitemap_enabled', true);
        $dto->sitemapLimit = self::int('panda_sitemap_limit', 200);
        $dto->crawlBudgetTopOnly = self::bool('panda_crawl_budget_top_only', true);

        // ===== RELATIONS =====
        $dto->relationsBufferSize = self::int('panda_relations_buffer_size', 1000);
        $dto->relationsLimit = self::int('panda_relations_limit', 5);

        // ===== TRACKING =====
        $dto->collectEvents = self::bool('panda_collect_events', true);
        $dto->collectOnly = self::bool('panda_collect_only', false);

        // ===== VENDOR =====
        $dto->vendorWeightCtr = self::float('panda_vendor_weight_ctr', 10.0);
        $dto->vendorWeightCr = self::float('panda_vendor_weight_cr', 30.0);

        // ===== A/B =====
        $dto->abEnabled = self::bool('panda_ab_enabled', false);
        $dto->abVariantWeights = self::string('panda_ab_variant_weights', '{}');

        // ===== AI =====
        $dto->aiEnabled = self::bool('panda_ai_enabled', false);
        $dto->aiProvider = self::string('panda_ai_provider', 'openai');
        $dto->aiApiKey = self::string('panda_ai_api_key', '');

        // ===== USAGE =====
        $dto->usageTrackingEnabled = self::bool('panda_usage_tracking_enabled', true);

        self::$cache = $dto;
        set_transient(self::CACHE_KEY, $dto, 300);

        return $dto;
    }

    private static function bool(string $key, bool $default): bool
    {
        $value = get_option($key, $default);

        return $value === true || $value === '1' || $value === 1;
    }

    private static function int(string $key, int $default): int
    {
        $value = get_option($key, $default);

        return is_numeric($value) ? (int) $value : $default;
    }

    private static function float(string $key, float $default): float
    {
        $value = get_option($key, $default);

        return is_numeric($value) ? (float) $value : $default;
    }

    private static function string(string $key, string $default): string
    {
        $value = get_option($key, $default);

        return is_string($value) ? $value : $default;
    }
}
