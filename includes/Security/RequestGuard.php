<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

final class RequestGuard
{
    public function __construct(
        private readonly RequestVerifier $verifier
    ) {}

    /**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */
    public function protect(array $headers, string $body): true|WP_Error
    {
        $signature = (string) ($headers['x-signature'] ?? '');
        $nonce     = (string) ($headers['x-nonce'] ?? '');
        $timestamp = (string) ($headers['x-timestamp'] ?? '');

        if ($signature === '' || $nonce === '' || $timestamp === '') {
            return new WP_Error('invalid_headers', 'Missing signature headers');
        }

        $result = $this->verifier->verify($headers, $body);

        if ($result instanceof WP_Error) {
            return $result;
        }

        return true;
    }
}
