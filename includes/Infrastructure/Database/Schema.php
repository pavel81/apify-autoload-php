<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

final class Schema
{
    public static function install(): void
    {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $charsetCollate = $wpdb->get_charset_collate();
        $prefix = $wpdb->prefix;

        // PRODUCTS
        $sqlProducts = "CREATE TABLE {$prefix}apify_products (
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
        ) {$charsetCollate};";

        // PRICE HISTORY
        $sqlPrices = "CREATE TABLE {$prefix}apify_price_history (
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
        ) {$charsetCollate};";

        // CANONICAL MAP
        $sqlMap = "CREATE TABLE {$prefix}apify_product_map (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            canonical_hash VARCHAR(64) NOT NULL,
            product_id BIGINT UNSIGNED NOT NULL,
            shop VARCHAR(100),
            region VARCHAR(50),
            PRIMARY KEY (id),
            KEY canonical_idx (canonical_hash),
            KEY product_idx (product_id)
        ) {$charsetCollate};";

        // REVIEWS
        $sqlReviews = "CREATE TABLE {$prefix}apify_reviews (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            canonical_hash VARCHAR(64) NOT NULL,
            rating DECIMAL(2,1) NOT NULL,
            source VARCHAR(50) DEFAULT 'internal',
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY hash_idx (canonical_hash)
        ) {$charsetCollate};";

        // LOGS
        $sqlLogs = "CREATE TABLE {$prefix}apify_logs (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            type VARCHAR(50) NOT NULL,
            message TEXT NOT NULL,
            context LONGTEXT,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY type_idx (type),
            KEY created_idx (created_at)
        ) {$charsetCollate};";

        // FEEDS
        $sqlFeeds = "CREATE TABLE {$prefix}apify_feeds (
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
        ) {$charsetCollate};";

        // CLICKS
        $sqlClicks = "CREATE TABLE {$prefix}hb_offer_clicks (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            device_id VARCHAR(64) NOT NULL,
            user_id BIGINT UNSIGNED NULL,
            product_hash VARCHAR(64) NOT NULL,
            shop VARCHAR(100) NOT NULL,
            price DECIMAL(10,2) NULL,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY device_id (device_id),
            KEY user_id (user_id),
            KEY product_hash (product_hash),
            KEY created_at (created_at)
        ) {$charsetCollate};";

        // DEVICES
        $sqlDevices = "CREATE TABLE {$prefix}wp_hb_devices (
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
        ) {$charsetCollate};";

        // PRODUCT USE CASES
        $sqlUseCases = "CREATE TABLE {$prefix}apify_product_use_cases (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            slug VARCHAR(191) NOT NULL,
            name VARCHAR(191) NOT NULL,
            description TEXT NULL,
            is_active TINYINT(1) NOT NULL DEFAULT 1,
            sort_order INT NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY slug_idx (slug),
            KEY active_idx (is_active),
            KEY sort_idx (sort_order)
        ) {$charsetCollate};";

        // PRODUCT GROUPS
        $sqlGroups = "CREATE TABLE {$prefix}apify_product_groups (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            slug VARCHAR(191) NOT NULL,
            name VARCHAR(191) NOT NULL,
            description TEXT NULL,
            parent_id BIGINT UNSIGNED NULL,
            is_active TINYINT(1) NOT NULL DEFAULT 1,
            sort_order INT NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY slug_idx (slug),
            KEY parent_idx (parent_id),
            KEY active_idx (is_active),
            KEY sort_idx (sort_order)
        ) {$charsetCollate};";

        // PRODUCT TAGS
        $sqlTags = "CREATE TABLE {$prefix}apify_product_tags (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            slug VARCHAR(191) NOT NULL,
            name VARCHAR(191) NOT NULL,
            description TEXT NULL,
            is_active TINYINT(1) NOT NULL DEFAULT 1,
            sort_order INT NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY slug_idx (slug),
            KEY active_idx (is_active),
            KEY sort_idx (sort_order)
        ) {$charsetCollate};";

        // PRODUCT ↔ USE CASE MAP
        $sqlUseCaseMap = "CREATE TABLE {$prefix}apify_product_use_case_map (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            canonical_hash VARCHAR(64) NOT NULL,
            use_case_id BIGINT UNSIGNED NOT NULL,
            confidence TINYINT UNSIGNED NOT NULL DEFAULT 100,
            source VARCHAR(50) NOT NULL DEFAULT 'manual',
            is_primary TINYINT(1) NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY map_unique (canonical_hash, use_case_id),
            KEY canonical_idx (canonical_hash),
            KEY use_case_idx (use_case_id),
            KEY primary_idx (is_primary)
        ) {$charsetCollate};";

        // PRODUCT ↔ GROUP MAP
        $sqlGroupMap = "CREATE TABLE {$prefix}apify_product_group_map (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            canonical_hash VARCHAR(64) NOT NULL,
            group_id BIGINT UNSIGNED NOT NULL,
            confidence TINYINT UNSIGNED NOT NULL DEFAULT 100,
            source VARCHAR(50) NOT NULL DEFAULT 'manual',
            is_primary TINYINT(1) NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY map_unique (canonical_hash, group_id),
            KEY canonical_idx (canonical_hash),
            KEY group_idx (group_id),
            KEY primary_idx (is_primary)
        ) {$charsetCollate};";

        // PRODUCT ↔ TAG MAP
        $sqlTagMap = "CREATE TABLE {$prefix}apify_product_tag_map (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            canonical_hash VARCHAR(64) NOT NULL,
            tag_id BIGINT UNSIGNED NOT NULL,
            confidence TINYINT UNSIGNED NOT NULL DEFAULT 100,
            source VARCHAR(50) NOT NULL DEFAULT 'manual',
            is_primary TINYINT(1) NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY map_unique (canonical_hash, tag_id),
            KEY canonical_idx (canonical_hash),
            KEY tag_idx (tag_id),
            KEY primary_idx (is_primary)
        ) {$charsetCollate};";

        dbDelta($sqlProducts);
        dbDelta($sqlPrices);
        dbDelta($sqlMap);
        dbDelta($sqlReviews);
        dbDelta($sqlLogs);
        dbDelta($sqlFeeds);
        dbDelta($sqlClicks);
        dbDelta($sqlDevices);

        dbDelta($sqlUseCases);
        dbDelta($sqlGroups);
        dbDelta($sqlTags);

        dbDelta($sqlUseCaseMap);
        dbDelta($sqlGroupMap);
        dbDelta($sqlTagMap);
    }
}
