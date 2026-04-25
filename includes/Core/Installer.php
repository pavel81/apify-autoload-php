<?php
namespace Panda\Apify\Core;

if (!defined('ABSPATH')) {
    exit;
}

class Installer
{
    public static function activate(): void
    {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $charset  = $wpdb->get_charset_collate();
        $products = $wpdb->prefix . 'apify_products';
        $ledger   = $wpdb->prefix . 'apify_ledger';
        $images   = $wpdb->prefix . 'apify_images';
        $stats    = $wpdb->prefix . 'apify_stats_daily';

        dbDelta("CREATE TABLE IF NOT EXISTS $products (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            external_id VARCHAR(191) NOT NULL,
            sku VARCHAR(100) DEFAULT '',
            title VARCHAR(255) NOT NULL,
            price DECIMAL(12,2) NOT NULL DEFAULT 0,
            currency VARCHAR(10) NOT NULL DEFAULT 'CZK',
            category VARCHAR(190) DEFAULT '',
            manufacturer VARCHAR(190) DEFAULT '',
            image_url TEXT NULL,
            image_id BIGINT UNSIGNED DEFAULT NULL,
            source_payload LONGTEXT NULL,
            updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            UNIQUE KEY uniq_external_id (external_id),
            KEY idx_sku (sku),
            KEY idx_category (category)
        ) $charset;");

        dbDelta("CREATE TABLE IF NOT EXISTS $ledger (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            entry_date DATE NOT NULL,
            type ENUM('INCOME','EXPENSE') NOT NULL,
            amount DECIMAL(12,2) NOT NULL DEFAULT 0,
            currency VARCHAR(10) NOT NULL DEFAULT 'CZK',
            provider VARCHAR(120) DEFAULT '',
            data_usage_mb DECIMAL(12,3) DEFAULT 0,
            data_cost DECIMAL(12,2) DEFAULT 0,
            note TEXT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            KEY idx_entry_date (entry_date)
        ) $charset;");

        dbDelta("CREATE TABLE IF NOT EXISTS $images (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            checksum VARCHAR(64) NOT NULL,
            attachment_id BIGINT UNSIGNED NOT NULL,
            source_url TEXT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            UNIQUE KEY uniq_checksum (checksum)
        ) $charset;");

        dbDelta("CREATE TABLE IF NOT EXISTS $stats (
            day DATE NOT NULL,
            products_count INT NOT NULL DEFAULT 0,
            min_price DECIMAL(12,2) DEFAULT 0,
            max_price DECIMAL(12,2) DEFAULT 0,
            avg_price DECIMAL(12,2) DEFAULT 0,
            last_sync DATETIME NULL,
            PRIMARY KEY (day)
        ) $charset;");

        add_option('apify_feed_url', '');
        add_option('apify_log_enabled', '1');
        add_option('apify_default_currency', 'CZK');
        add_option('apify_data_cost_per_mb', '0.05');
        add_option('apify_price_intl_window_days', 30);
        add_option('apify_action_badge_mode', 'text');
        add_option('apify_action_badge_image_id', 0);

        Apify_Cron::schedule();
    }
}
