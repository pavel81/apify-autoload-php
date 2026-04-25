<?php

declare(strict_types=1);

namespace Panda\Apify;

use Panda\Apify\Services\Apify_Sync_Service;
use Panda\Apify\Core\Apify_Cron;

if (!defined('ABSPATH')) {
    exit;
}

class Apify_Admin
{
    public static function register(): void
    {
        add_action('admin_menu', [self::class, 'menu']);
    }

    public static function menu(): void
    {
        add_menu_page(
            'Apify',
            'Apify',
            'manage_options',
            'apify',
            [self::class, 'dashboard'],
            'dashicons-database-view',
            56
        );

        add_submenu_page(
            'apify',
            'Apify Settings',
            'Settings',
            'manage_options',
            'apify-settings',
            [self::class, 'settings']
        );

        add_submenu_page(
            'apify',
            'Apify Shortcodes',
            'Shortcodes',
            'manage_options',
            'apify-shortcodes',
            [self::class, 'shortcodes']
        );
    }

    public static function dashboard(): void
    {
        $last_cron = get_option('apify_last_cron', '—');
        $last_sync = get_option('apify_last_sync_result', []);

        $json = wp_json_encode($last_sync, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        echo '<div class="wrap"><h1>Apify Dashboard</h1>';
        echo '<p><strong>Last cron:</strong> <code>' . esc_html((string) $last_cron) . '</code></p>';
        echo '<h2>Last sync result</h2>';
        echo '<pre>' . esc_html((string) ($json !== false ? $json : '')) . '</pre>';
        echo '</div>';
    }

    public static function settings(): void
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        if (
            isset($_POST['apify_save_settings']) &&
            check_admin_referer('apify_save_settings_action', 'apify_save_settings_nonce')
        ) {
            $feeds_raw = wp_unslash((string) ($_POST['apify_feeds_json'] ?? '[]'));
            $feeds = json_decode($feeds_raw, true);

            if (!is_array($feeds)) {
                $feeds = [];
            }

            update_option('apify_feeds', $feeds);
            update_option('apify_default_currency', sanitize_text_field((string) ($_POST['apify_default_currency'] ?? 'CZK')));
            update_option('apify_data_cost_per_mb', sanitize_text_field((string) ($_POST['apify_data_cost_per_mb'] ?? '0.05')));
            update_option('apify_price_intl_window_days', (int) ($_POST['apify_price_intl_window_days'] ?? 30));
            update_option('apify_cron_mode', sanitize_text_field((string) ($_POST['apify_cron_mode'] ?? 'wp')));
            update_option('apify_cron_secret', sanitize_text_field((string) ($_POST['apify_cron_secret'] ?? '')));
            update_option('apify_action_badge_mode', sanitize_text_field((string) ($_POST['apify_action_badge_mode'] ?? 'text')));
            update_option('apify_action_badge_image_id', (int) ($_POST['apify_action_badge_image_id'] ?? 0));
            update_option('apify_log_enabled', isset($_POST['apify_log_enabled']) ? '1' : '0');
            update_option('apify_drop_tables_on_uninstall', isset($_POST['apify_drop_tables_on_uninstall']) ? '1' : '0');

            Apify_Cron::schedule();

            echo '<div class="updated"><p>Settings saved.</p></div>';
        }

        if (
            isset($_POST['apify_manual_sync']) &&
            check_admin_referer('apify_manual_sync_action', 'apify_manual_sync_nonce')
        ) {
            $result = Apify_Sync_Service::import_all_feeds();
            update_option('apify_last_sync_result', $result);

            echo '<div class="updated"><p>Manual sync done.</p></div>';
        }

        $feeds       = get_option('apify_feeds', []);
        $currency    = get_option('apify_default_currency', 'CZK');
        $data_cost   = get_option('apify_data_cost_per_mb', '0.05');
        $window_days = (int) get_option('apify_price_intl_window_days', 30);
        $cron_mode   = get_option('apify_cron_mode', 'wp');
        $cron_secret = get_option('apify_cron_secret', '');
        $badge_mode  = get_option('apify_action_badge_mode', 'text');
        $badge_id    = (int) get_option('apify_action_badge_image_id', 0);
        $log_enabled = get_option('apify_log_enabled', '1');
        $drop_tables = get_option('apify_drop_tables_on_uninstall', '0');

        $feeds_json = wp_json_encode($feeds, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        echo '<div class="wrap"><h1>Apify Settings</h1>';

        echo '<form method="post">';
        wp_nonce_field('apify_save_settings_action', 'apify_save_settings_nonce');

        echo '<table class="form-table"><tbody>';

        echo '<tr><th>Feeds JSON</th><td>';
        echo '<textarea name="apify_feeds_json" rows="10" cols="80">' . esc_textarea((string) ($feeds_json !== false ? $feeds_json : '')) . '</textarea>';
        echo '<p class="description">Example: [{"url":"https://example.com/feed.json","shop":"alza"}]</p>';
        echo '</td></tr>';

        echo '<tr><th>Default currency</th><td><input type="text" name="apify_default_currency" value="' . esc_attr((string) $currency) . '"></td></tr>';
        echo '<tr><th>Data cost per MB</th><td><input type="number" step="0.001" name="apify_data_cost_per_mb" value="' . esc_attr((string) $data_cost) . '"></td></tr>';
        echo '<tr><th>Price window days</th><td><input type="number" name="apify_price_intl_window_days" value="' . esc_attr((string) $window_days) . '"></td></tr>';

        echo '<tr><th>Cron mode</th><td>';
        echo '<label><input type="radio" name="apify_cron_mode" value="wp" ' . checked($cron_mode, 'wp', false) . '> WP-Cron</label><br>';
        echo '<label><input type="radio" name="apify_cron_mode" value="system" ' . checked($cron_mode, 'system', false) . '> External REST</label>';
        echo '</td></tr>';

        echo '<tr><th>Cron secret</th><td><input type="text" name="apify_cron_secret" value="' . esc_attr((string) $cron_secret) . '" class="regular-text"></td></tr>';

        echo '<tr><th>Action badge</th><td>';
        echo '<label><input type="radio" name="apify_action_badge_mode" value="text" ' . checked($badge_mode, 'text', false) . '> Text</label><br>';
        echo '<label><input type="radio" name="apify_action_badge_mode" value="image" ' . checked($badge_mode, 'image', false) . '> Image</label><br>';
        echo '<input type="number" name="apify_action_badge_image_id" value="' . esc_attr((string) $badge_id) . '">';
        echo '</td></tr>';

        echo '<tr><th>Logging</th><td><label><input type="checkbox" name="apify_log_enabled" value="1" ' . checked($log_enabled, '1', false) . '> Enabled</label></td></tr>';
        echo '<tr><th>Drop tables on uninstall</th><td><label><input type="checkbox" name="apify_drop_tables_on_uninstall" value="1" ' . checked($drop_tables, '1', false) . '> Yes</label></td></tr>';

        echo '</tbody></table>';

        submit_button('Save settings', 'primary', 'apify_save_settings');

        echo '</form>';

        echo '<hr>';

        echo '<form method="post">';
        wp_nonce_field('apify_manual_sync_action', 'apify_manual_sync_nonce');
        submit_button('Run manual sync', 'secondary', 'apify_manual_sync');
        echo '</form>';

        echo '</div>';
    }

    public static function shortcodes(): void
    {
        echo '<div class="wrap"><h1>Apify Shortcodes</h1>';
        echo '<p><code>[apify_price_intl sku="ABC123" months="3" show_history="1"]</code></p>';
        echo '<p><code>[apify_price_list shop="alza" category="TV" manufacturer="Samsung" limit="20"]</code></p>';
        echo '</div>';
    }
}
