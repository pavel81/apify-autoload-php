<?php
declare(strict_types=1);

namespace Panda\Apify\Security;

use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

final class HmacVerifier implements SignatureVerifierInterface
{
    /** @var string[] */
    private array $secrets;

    /**
     * @param string[] $secrets
     */
    public function __construct(array $secrets)
    {
        $this->secrets = $secrets;
    }

    public function verify(array $headers, string $body): bool|WP_Error
    {
        $signature = (string) ($headers['x-signature'] ?? '');
        $nonce     = (string) ($headers['x-nonce'] ?? '');
        $timestamp = (int) ($headers['x-timestamp'] ?? 0);

        if ($signature === '' || $nonce === '' || $timestamp === 0) {
            return new WP_Error('auth_missing', 'Missing auth headers');
        }

        $message = base64_encode($body) . '.' . $nonce . '.' . $timestamp;

        foreach ($this->secrets as $secret) {
            $expected = hash_hmac('sha256', $message, $secret);

            if (hash_equals($expected, $signature)) {
                return true;
            }
        }

        return new WP_Error('auth_invalid', 'Invalid signature');
    }
}

