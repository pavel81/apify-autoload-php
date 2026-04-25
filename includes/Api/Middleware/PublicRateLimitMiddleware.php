<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Middleware;

use WP_REST_Request;
use Panda\Apify\Security\RateLimiter;

class PublicRateLimitMiddleware
{
    public static function handle(WP_REST_Request $request): bool
    {
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

        return RateLimiter::check('public_' . $ip);
    }
}
