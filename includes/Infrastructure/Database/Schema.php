<?php

declare(strict_types=1);

namespace Plugin\Infrastructure\Db;

if (!defined('ABSPATH')) {
    exit;
}

final class Schema
{
    public static function install(): void
    {
      /** @var \wpdb $wpdb */
        global $wpdb;

        $table = $wpdb->prefix . 'hb_offer_clicks';
        $charsetCollate = $wpdb->get_charset_collate();

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $sql = "
        CREATE TABLE {$table} (
            id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            device_id VARCHAR(64) NOT NULL,
            user_id BIGINT UNSIGNED NULL,
            product_hash VARCHAR(64) NOT NULL,
            shop VARCHAR(100) NOT NULL,
            price DECIMAL(10,2) NULL,
            created_at DATETIME NOT NULL,

            KEY device_id (device_id),
            KEY product_hash (product_hash),
            UNIQUE KEY user_device (user_id, id),

            -- 🔥 DEDUPE INDEX
            KEY idx_click_dedupe (device_id, product_hash, shop)
            KEY created_at (created_at)

        ) {$charsetCollate};
        ";

        
    


        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $charsetCollate = $wpdb->get_charset_collate();

        $prefix = $wpdb->prefix;

        // 🔥 PRODUCTS
        $products = "{$prefix}apify_products";

        $sqlProducts = "
        CREATE TABLE {$products} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            external_id VARCHAR(191) NOT NULL,
            sku VARCHAR(191) NOT NULL,
            shop VARCHAR(100) NOT NULL,
            region VARCHAR(50) NOT NULL,
            domain VARCHAR(191) NOT NULL,
            title TEXT NOT NULL,
            slug VARCHAR(191) NOT NULL,
            url TEXT,
            image TEXT,
            description TEXT,
            canonical_hash VARCHAR(64) NOT NULL,
            brand VARCHAR(191),
            model VARCHAR(191),
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY external_idx (external_id),
            KEY canonical_idx (canonical_hash),
            KEY slug_idx (slug)
        ) {$charsetCollate};
        ";

        // 🔥 PRICE HISTORY
        $prices = "{$prefix}apify_price_history";

        $sqlPrices = "
        CREATE TABLE {$prices} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            product_id BIGINT UNSIGNED NOT NULL,
            shop VARCHAR(100) NOT NULL,
            region VARCHAR(50) NOT NULL,
            sku VARCHAR(191),
            price DECIMAL(10,2) NOT NULL,
            currency VARCHAR(10) NOT NULL,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY product_idx (product_id),
            KEY price_idx (price),
            KEY created_idx (created_at)
        ) {$charsetCollate};
        ";

        // 🔥 CANONICAL MAP
        $map = "{$prefix}apify_product_map";

        $sqlMap = "
        CREATE TABLE {$map} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            canonical_hash VARCHAR(64) NOT NULL,
            product_id BIGINT UNSIGNED NOT NULL,
            shop VARCHAR(100),
            region VARCHAR(50),
            PRIMARY KEY (id),
            KEY canonical_idx (canonical_hash),
            KEY product_idx (product_id)
        ) {$charsetCollate};
        ";

        // 🔥 REVIEWS
        $reviews = "{$prefix}apify_reviews";

        $sqlReviews = "
        CREATE TABLE {$reviews} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            canonical_hash VARCHAR(64) NOT NULL,
            rating DECIMAL(2,1) NOT NULL,
            source VARCHAR(50) DEFAULT 'internal',
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY hash_idx (canonical_hash)
        ) {$charsetCollate};
        ";

        // 🔥 LOGS
        $logs = "{$prefix}apify_logs";

        $sqlLogs = "
        CREATE TABLE {$logs} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            type VARCHAR(50) NOT NULL,
            message TEXT NOT NULL,
            context LONGTEXT,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY type_idx (type),
            KEY created_idx (created_at)
        ) {$charsetCollate};
        ";

        // 🔥 FEEDS
        $feeds = "{$prefix}apify_feeds";

        $sqlFeeds = "
        CREATE TABLE {$feeds} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            name VARCHAR(191) NOT NULL,
            actor_id VARCHAR(191),
            url TEXT,
            shop VARCHAR(100),
            region VARCHAR(50),
            domain VARCHAR(191),
            is_active TINYINT(1) DEFAULT 1,
            last_run_at DATETIME NULL,
            last_status TEXT,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY active_idx (is_active)
        ) {$charsetCollate};
        ";
        $sqlClicks = "
CREATE TABLE {$wpdb->prefix}hb_offer_clicks (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    device_id VARCHAR(64) NOT NULL,
    user_id BIGINT UNSIGNED NULL,
    product_hash VARCHAR(64) NOT NULL,
    shop VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NULL,
    created_at DATETIME NOT NULL,
    KEY device_id (device_id),
    KEY user_id (user_id),
    KEY product_hash (product_hash)
) {$charsetCollate};
";

$sqlClicks = "CREATE TABLE wp_hb_devices (
    id VARCHAR(64) NOT NULL,
    user_id BIGINT UNSIGNED NULL,

    public_key TEXT NOT NULL,

    device_name VARCHAR(100) NULL,
    platform VARCHAR(20) NULL,
    device_type VARCHAR(20) NULL,
    app_version VARCHAR(20) NULL,
    locale VARCHAR(10) NULL,

    last_seen_at DATETIME NULL,
    created_at DATETIME NOT NULL,

    PRIMARY KEY (id),

    KEY user_id (user_id),
    KEY last_seen_at (last_seen_at)

)  {$charsetCollate};
";
dbDelta($sql);
dbDelta($sqlClicks);
        // 🔥 EXECUTE
        dbDelta($sqlProducts);
        dbDelta($sqlPrices);
        dbDelta($sqlMap);
        dbDelta($sqlReviews);
        dbDelta($sqlLogs);
        dbDelta($sqlFeeds);
        dbDelta($sqlClicks);
    }
}
