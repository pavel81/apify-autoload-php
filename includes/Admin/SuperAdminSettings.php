<?php
declare(strict_types=1);

namespace Panda\Apify\Admin;

use Panda\Apify\Admin\Settings\SettingsService;

final class SuperAdminSettings
{
    private const OPTION_PREFIX = 'panda_';

    public static function init(): void
    {
        add_action('admin_menu', [self::class, 'menu']);
        add_action('admin_init', [self::class, 'settings']);

        add_action('updated_option', [self::class, 'onOptionUpdate'], 10, 3);
        add_action('added_option', [self::class, 'onOptionUpdate'], 10, 3);
        add_action('deleted_option', [self::class, 'onOptionDelete'], 10, 1);
    }

    public static function menu(): void
    {
        add_menu_page(
            'Panda Apify',
            'Panda Apify',
            'manage_options',
            'panda-apify',
            [self::class, 'render'],
            'dashicons-chart-line'
        );
    }

    public static function settings(): void
    {
        // ===== SEO =====
        register_setting('panda_apify', 'panda_seo_auto_generate', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_seo_min_query_length', [
            'type' => 'integer',
            'default' => 3,
            'sanitize_callback' => 'absint',
        ]);

        register_setting('panda_apify', 'panda_seo_noindex_threshold', [
            'type' => 'number',
            'default' => 0,
            'sanitize_callback' => 'floatval',
        ]);

        // ===== INDEXACE =====
        register_setting('panda_apify', 'panda_indexation_enabled', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_force_noindex', [
            'type' => 'boolean',
            'default' => false,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_noindex_below_threshold', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_robots_meta', [
            'type' => 'string',
            'default' => 'index,follow',
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        // ===== SLUG =====
        register_setting('panda_apify', 'panda_slug_lang_prefix', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_slug_dedup', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        // ===== SITEMAP =====
        register_setting('panda_apify', 'panda_sitemap_enabled', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_sitemap_limit', [
            'type' => 'integer',
            'default' => 200,
            'sanitize_callback' => 'absint',
        ]);

        register_setting('panda_apify', 'panda_crawl_budget_top_only', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        // ===== RELATIONS =====
        register_setting('panda_apify', 'panda_relations_buffer_size', [
            'type' => 'integer',
            'default' => 1000,
            'sanitize_callback' => 'absint',
        ]);

        register_setting('panda_apify', 'panda_relations_limit', [
            'type' => 'integer',
            'default' => 5,
            'sanitize_callback' => 'absint',
        ]);

        // ===== TRACKING =====
        register_setting('panda_apify', 'panda_collect_events', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_collect_only', [
            'type' => 'boolean',
            'default' => false,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        // ===== VENDOR =====
        register_setting('panda_apify', 'panda_vendor_weight_ctr', [
            'type' => 'number',
            'default' => 10,
            'sanitize_callback' => 'floatval',
        ]);

        register_setting('panda_apify', 'panda_vendor_weight_cr', [
            'type' => 'number',
            'default' => 30,
            'sanitize_callback' => 'floatval',
        ]);

        // ===== A/B =====
        register_setting('panda_apify', 'panda_ab_enabled', [
            'type' => 'boolean',
            'default' => false,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_ab_variant_weights', [
            'type' => 'string',
            'default' => '{}',
            'sanitize_callback' => 'wp_kses_post',
        ]);

        // ===== AI =====
        register_setting('panda_apify', 'panda_ai_enabled', [
            'type' => 'boolean',
            'default' => false,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_ai_provider', [
            'type' => 'string',
            'default' => 'openai',
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        register_setting('panda_apify', 'panda_ai_api_key', [
            'type' => 'string',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        // ===== USAGE =====
        register_setting('panda_apify', 'panda_usage_tracking_enabled', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        // ===== LOCALE / LANGUAGE STRATEGY =====
        register_setting('panda_apify', 'panda_locale_mode', [
            'type' => 'string',
            'default' => 'hybrid',
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        register_setting('panda_apify', 'panda_locale_use_browser', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_locale_use_cookie', [
            'type' => 'boolean',
            'default' => true,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_locale_use_geo', [
            'type' => 'boolean',
            'default' => false,
            'sanitize_callback' => [self::class, 'sanitizeBool'],
        ]);

        register_setting('panda_apify', 'panda_locale_geo_provider', [
            'type' => 'string',
            'default' => 'cdn',
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        register_setting('panda_apify', 'panda_locale_analytics_mode', [
            'type' => 'string',
            'default' => 'aggregated',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
    }

    public static function sanitizeBool($value): bool
    {
        return $value === '1' || $value === 1 || $value === true;
    }

    public static function onOptionUpdate(string $option, $old, $new): void
    {
        if (strpos($option, self::OPTION_PREFIX) !== 0) {
            return;
        }

        SettingsService::clearCache();
    }

    public static function onOptionDelete(string $option): void
    {
        if (strpos($option, self::OPTION_PREFIX) !== 0) {
            return;
        }

        SettingsService::clearCache();
    }

    private static function b(string $key, bool $default): bool
    {
        $v = get_option($key, $default);
        return $v === true || $v === '1' || $v === 1;
    }

    private static function i(string $key, int $default): int
    {
        $v = get_option($key, $default);
        return is_numeric($v) ? (int)$v : $default;
    }

    private static function f(string $key, float $default): float
    {
        $v = get_option($key, $default);
        return is_numeric($v) ? (float)$v : $default;
    }

    private static function s(string $key, string $default): string
    {
        $v = get_option($key, $default);
        return is_string($v) ? $v : $default;
    }

    public static function render(): void
    {
        ?>
        <div class="wrap">
            <h1>Panda Apify – Super Admin</h1>

            <form method="post" action="options.php">
                <?php settings_fields('panda_apify'); ?>

                <h2>SEO</h2>
                <input type="checkbox" name="panda_seo_auto_generate" value="1"
                    <?php checked(true, self::b('panda_seo_auto_generate', true)); ?>>

                <input type="number" name="panda_seo_min_query_length"
                    value="<?php echo esc_attr((string) self::i('panda_seo_min_query_length', 3)); ?>">

                <input type="number" name="panda_seo_noindex_threshold"
                    value="<?php echo esc_attr((string) self::i('panda_seo_noindex_threshold', 0)); ?>">

                <h2>Indexace</h2>
                <input type="checkbox" name="panda_indexation_enabled" value="1"
                    <?php checked(true, self::b('panda_indexation_enabled', true)); ?>>

                <input type="checkbox" name="panda_force_noindex" value="1"
                    <?php checked(true, self::b('panda_force_noindex', false)); ?>>

                <input type="checkbox" name="panda_noindex_below_threshold" value="1"
                    <?php checked(true, self::b('panda_noindex_below_threshold', true)); ?>>

                <input type="text" name="panda_robots_meta"
                    value="<?php echo esc_attr(self::s('panda_robots_meta', 'index,follow')); ?>">

                <h2>Locale / Language</h2>

                <p>
                    Režim:
                    <select name="panda_locale_mode">
                        <option value="browser" <?php selected('browser', self::s('panda_locale_mode', 'hybrid')); ?>>Browser</option>
                        <option value="cookie" <?php selected('cookie', self::s('panda_locale_mode', 'hybrid')); ?>>Cookie</option>
                        <option value="hybrid" <?php selected('hybrid', self::s('panda_locale_mode', 'hybrid')); ?>>Hybrid</option>
                    </select>
                </p>

                <label>
                    <input type="checkbox" name="panda_locale_use_browser" value="1"
                        <?php checked(true, self::b('panda_locale_use_browser', true)); ?>>
                    Použít jazyk prohlížeče
                </label>

                <label>
                    <input type="checkbox" name="panda_locale_use_cookie" value="1"
                        <?php checked(true, self::b('panda_locale_use_cookie', true)); ?>>
                    Použít cookie
                </label>

                <label>
                    <input type="checkbox" name="panda_locale_use_geo" value="1"
                        <?php checked(true, self::b('panda_locale_use_geo', false)); ?>>
                    Použít geo (IP/CDN)
                </label>

                <p>
                    Geo provider:
                    <input type="text" name="panda_locale_geo_provider"
                        value="<?php echo esc_attr(self::s('panda_locale_geo_provider', 'cdn')); ?>">
                </p>

                <h2>Locale Analytics</h2>
                <select name="panda_locale_analytics_mode">
                    <option value="off" <?php selected('off', self::s('panda_locale_analytics_mode', 'aggregated')); ?>>Off</option>
                    <option value="aggregated" <?php selected('aggregated', self::s('panda_locale_analytics_mode', 'aggregated')); ?>>Aggregated</option>
                    <option value="full" <?php selected('full', self::s('panda_locale_analytics_mode', 'aggregated')); ?>>Full</option>
                </select>

                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}