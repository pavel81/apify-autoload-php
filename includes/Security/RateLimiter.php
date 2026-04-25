<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

if (!defined('ABSPATH')) {
    exit;
}

final class RateLimiter
{   
 public static function check(string $key): bool
    {
        // defaultní limit a window pro public API
        return self::allow($key, 30, 60);
    }


    public static function allow(string $key, int $limit = 30, int $window = 60): bool
    {
        $transientKey = 'apify_rl_' . md5($key);

        $data = get_transient($transientKey);

        if (!is_array($data)) {
            $data = [
                'count' => 0,
                'start' => time(),
            ];
        }

        // reset window
        if ((time() - (int)$data['start']) > $window) {
            $data = [
                'count' => 0,
                'start' => time(),
            ];
        }

        if ($data['count'] >= $limit) {
            return false;
        }

        $data['count']++;

        set_transient($transientKey, $data, $window);

        return true;
    }
}
