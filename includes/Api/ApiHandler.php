<?php

declare(strict_types=1);

namespace Panda\Apify\Api;

final class ApiHandler
{
    public static function handle(array $request = []): bool
    {
        if (!self::isAllowedMethod($request)) {
            return false;
        }

        if (!self::hasAuth($request)) {
            return false;
        }

        if (!self::isValidSignature($request)) {
            return false;
        }

        if (self::isReplay($request)) {
            return false;
        }

        if (self::isRateLimited($request)) {
            return false;
        }

        return true;
    }

    private static function isAllowedMethod(array $request): bool
    {
        return strtoupper((string) ($request['method'] ?? 'POST')) === 'POST';
    }

    private static function hasAuth(array $request): bool
    {
        return !empty($request['auth']) || !empty($request['token']);
    }

    private static function isValidSignature(array $request): bool
    {
        return !empty($request['signature']) && !empty($request['body']);
    }

    private static function isReplay(array $request): bool
    {
        return false;
    }

    private static function isRateLimited(array $request): bool
    {
        return false;
    }
}
