<?php

namespace Panda\Apify\Cache;

if (!defined('ABSPATH')) {
    exit;
}

class Apify_Cache
{
    public static function key(string $group, string $id): string
    {
        return 'apify_' . md5($group . '|' . $id);
    }

    public static function get(string $group, string $id): mixed
    {
        return get_transient(self::key($group, $id));
    }

    public static function set(string $group, string $id, mixed $value, int $ttl = 3600): bool
    {
        return set_transient(self::key($group, $id), $value, $ttl);
    }

    public static function delete(string $group, string $id): bool
    {
        return delete_transient(self::key($group, $id));
    }

    public static function flush_product(string $sku, string $shop = ''): void
    {
        self::delete('product_stats', $sku . '|' . $shop);
        self::delete('product_render', $sku . '|' . $shop);
        self::delete('product_query', $sku . '|' . $shop);
    }

    public static function flush_feed(string $feed_url, string $shop = ''): void
    {
        self::delete('feed_raw', $feed_url . '|' . $shop);
    }
}
