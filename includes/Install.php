<?php
declare(strict_types=1);

if (!defined('ABSPATH')) exit;
/**
 * @return void
 */

function apify_install(): void
{
    global $wpdb;

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    $charset = $wpdb->get_charset_collate();

    $products = $wpdb->prefix . 'apify_products';

    dbDelta("CREATE TABLE IF NOT EXISTS $products (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        external_id VARCHAR(191),
        sku VARCHAR(100),
        title VARCHAR(255),
        price DECIMAL(10,2),
        currency VARCHAR(10),
        image_url TEXT,
        image_id BIGINT,
        updated_at DATETIME,
        created_at DATETIME
    ) $charset;");

    add_option('apify_feed_url', '');
    
    $logs = $wpdb->prefix . 'apify_logs';

$sql_logs = "CREATE TABLE $logs (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    type VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    context LONGTEXT NULL,
    created_at DATETIME NOT NULL,
    PRIMARY KEY (id),
    KEY type (type),
    KEY created_at (created_at)
) $charset;";

require_once ABSPATH . 'wp-admin/includes/upgrade.php';
dbDelta($sql_logs);
}
