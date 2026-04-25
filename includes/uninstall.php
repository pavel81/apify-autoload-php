<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

$drop_tables = get_option('apify_drop_tables_on_uninstall', '0') === '1';

delete_option('apify_feeds');
delete_option('apify_default_currency');
delete_option('apify_data_cost_per_mb');
delete_option('apify_price_intl_window_days');
delete_option('apify_cron_mode');
delete_option('apify_cron_secret');
delete_option('apify_action_badge_mode');
delete_option('apify_action_badge_image_id');
delete_option('apify_log_enabled');
delete_option('apify_drop_tables_on_uninstall');
delete_option('apify_last_cron');
delete_option('apify_last_sync_result');

if (function_exists('wp_clear_scheduled_hook')) {
    wp_clear_scheduled_hook('apify_cron_tick');
}

if ($drop_tables) {
    $tables = [
        $wpdb->prefix . 'apify_products',
        $wpdb->prefix . 'apify_price_history',
        $wpdb->prefix . 'apify_images',
        $wpdb->prefix . 'apify_ledger',
        $wpdb->prefix . 'apify_stats_daily',
    ];

    foreach ($tables as $table) {
        $wpdb->query("DROP TABLE IF EXISTS {$table}");
    }
}