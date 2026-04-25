<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

use WP_Error;

final class Ed25519Verifier
{
    private string $publicKey;

    public function __construct(string $publicKey)
    {
        $this->publicKey = $publicKey;
    }

    /**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */
    public function verify(array $headers, string $body): bool|WP_Error
    {
        $signature = (string) ($headers['x-signature'] ?? '');
        $nonce     = (string) ($headers['x-nonce'] ?? '');
        $timestamp = (int) ($headers['x-timestamp'] ?? 0);

        if ($signature === '' || $nonce === '' || $timestamp === 0) {
            return new WP_Error('auth_missing', 'Missing auth headers');
        }

        $message = base64_encode($body) . '.' . $nonce . '.' . $timestamp;

        $sig = @hex2bin($signature);
        $pub = @hex2bin($this->publicKey);

        if ($sig === false || $pub === false) {
            return new WP_Error('auth_invalid', 'Invalid signature format');
        }

        $ok = sodium_crypto_sign_verify_detached($sig, $message, $pub);

        if (!$ok) {
            return new WP_Error('auth_invalid', 'Invalid signature');
        }

        return true;
    }
}
