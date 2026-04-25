<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\Database;

use wpdb;

if (!defined('ABSPATH')) {
    exit;
}

final class Migrations
{
    public static function run(): void
    {
        global $wpdb;
        /** @var \wpdb $wpdb */

        $prefix = $wpdb->prefix;

        self::products($prefix, $wpdb);
        self::priceHistory($prefix, $wpdb);
        self::reviews($prefix, $wpdb);
    }

    private static function products(string $prefix, wpdb $wpdb): void
    {
        $table = $prefix . 'apify_products';

        self::addColumn($wpdb, $table, 'slug', "VARCHAR(191) NOT NULL DEFAULT ''");
        self::addColumn($wpdb, $table, 'image', "TEXT NULL");
        self::addColumn($wpdb, $table, 'description', "TEXT NULL");

        self::addIndex($wpdb, $table, 'slug_idx', 'slug');
    }

    private static function priceHistory(string $prefix, wpdb $wpdb): void
    {
        $table = $prefix . 'apify_price_history';

        self::addIndex($wpdb, $table, 'price_idx', 'price');
    }

    private static function reviews(string $prefix, wpdb $wpdb): void
    {
        $table = $prefix . 'apify_reviews';

        self::addIndex($wpdb, $table, 'hash_idx', 'canonical_hash');
    }

    /**
     * 🔥 SAFE ADD COLUMN
     */
    private static function addColumn(wpdb $wpdb, string $table, string $column, string $definition): void
    {
    
        $exists = $wpdb->get_var(
            $wpdb->prepare(
                "SHOW COLUMNS FROM {$table} LIKE %s", 
                $column
            )
        );

        if ($exists === null) {
            $wpdb->query("ALTER TABLE {$table} ADD {$column} {$definition}");
        }
    }

    /**
     * 🔥 SAFE ADD INDEX
     */
    private static function addIndex(wpdb $wpdb, string $table, string $indexName, string $column): void
    {

        $exists = $wpdb->get_var(
            $wpdb->prepare(
                "SHOW INDEX FROM {$table} WHERE Key_name = %s",
                $indexName
            )
        );

        if ($exists === null) {
            $wpdb->query("ALTER TABLE {$table} ADD INDEX {$indexName} ({$column})");
        }
    }
}
