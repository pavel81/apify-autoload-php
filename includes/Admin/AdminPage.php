<?php
namespace Panda\Apify\Admin;

if (!defined('ABSPATH')) {
    exit;
}

class AdminPage
{
    public static function register(): void
    {
        add_action('admin_menu', [self::class, 'menu']);
    }

    public static function menu(): void
    {
        add_menu_page('Apify', 'Apify', 'manage_options', 'apify', [self::class, 'dashboard'], 'dashicons-database-view', 56);
        add_submenu_page('apify', 'Nastavení', 'Nastavení', 'manage_options', 'apify-settings', [self::class, 'settings']);
        add_action('admin_menu', function () {
    add_menu_page(
        'Apify Security',
        'Apify Security',
        'manage_options',
        'apify-security',
        'apify_render_security_page',
        'dashicons-shield-alt',
        80
    );
});
    }

    public static function dashboard(): void
    {
        echo '<div class="wrap"><h1>Apify – Přehled</h1>';
        echo '<p>Poslední cron: <code>' . esc_html((string) get_option('apify_last_cron', '—')) . '</code></p>';
        echo '</div>';
    }

    public static function settings(): void
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        if (isset($_POST['apify_save']) && check_admin_referer('apify_settings')) {
            update_option('apify_feed_url', esc_url_raw((string) ($_POST['feed_url'] ?? '')));
            update_option('apify_data_cost_per_mb', sanitize_text_field((string) ($_POST['data_cost'] ?? '0.05')));
            update_option('apify_default_currency', sanitize_text_field((string) ($_POST['currency'] ?? 'CZK')));
            echo '<div class="updated"><p>Uloženo.</p></div>';
        }

        $feedUrl = esc_attr((string) get_option('apify_feed_url', ''));
        $cost    = esc_attr((string) get_option('apify_data_cost_per_mb', '0.05'));
        $curr    = esc_attr((string) get_option('apify_default_currency', 'CZK'));

        echo '<div class="wrap"><h1>Nastavení Apify</h1><form method="post">';
        wp_nonce_field('apify_settings');
        echo '<table class="form-table"><tbody>';
        echo '<tr><th>Feed URL</th><td><input type="url" name="feed_url" value="' . $feedUrl . '" class="regular-text"></td></tr>';
        echo '<tr><th>Cena za MB</th><td><input type="number" step="0.001" name="data_cost" value="' . $cost . '"></td></tr>';
        echo '<tr><th>Výchozí měna</th><td><input type="text" name="currency" value="' . $curr . '"></td></tr>';
        echo '</tbody></table>';
        echo '<p><button class="button button-primary" name="apify_save" value="1">Uložit</button></p>';
        echo '</form></div>';
    }
}
