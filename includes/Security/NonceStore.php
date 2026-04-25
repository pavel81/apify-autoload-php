<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

if (!defined('ABSPATH')) {
    exit;
}

final class NonceStore
{
    public static function remember(string $nonce): bool
    {
        $key = 'apify_nonce_' . md5($nonce);

        if (get_transient($key)) {
            return false; // replay
        }

        set_transient($key, 1, 300); // 5 min TTL
        return true;
    }
}
