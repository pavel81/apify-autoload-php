<?php

declare(strict_types=1);

namespace Panda\Apify\Feeds;

if (!defined('ABSPATH')) {
    exit;
}

final class EndpointRegistry
{
    /**
     * @var array<int, string>
     */
    private const ALLOWED_HOSTS = [
        'api.apify.com',
        'apify.com',
        'storage.googleapis.com',
    ];

    /**
     * @var array<int, string>
     */
    private const ALLOWED_SCHEMES = [
        'https',
    ];

    public static function isAllowed(string $url): bool
    {
        if ($url === '') {
            return false;
        }

        $parts = parse_url($url);

        if (!is_array($parts)) {
            return false;
        }

        $scheme = strtolower((string) ($parts['scheme'] ?? ''));
        $host   = strtolower((string) ($parts['host'] ?? ''));

        if ($scheme === '' || $host === '') {
            return false;
        }

        if (!in_array($scheme, self::ALLOWED_SCHEMES, true)) {
            return false;
        }

        foreach (self::ALLOWED_HOSTS as $allowed) {
            if ($host === $allowed || str_ends_with($host, '.' . $allowed)) {
                return true;
            }
        }

        return false;
    }
}