<?php

declare(strict_types=1);

namespace Panda\Apify\Cache;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductCache
{
    public static function get(string $key): mixed
    {
        return get_transient('apify_' . $key);
    }

    public static function set(string $key, mixed $data, int $ttl = 300): void
    {
        set_transient('apify_' . $key, $data, $ttl);
    }

    public static function delete(string $key): void
    {
        delete_transient('apify_' . $key);
    }
}
