<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

use WP_Error;
use Panda\Apify\Accounting\Apify_Log_Service;

if (!defined('ABSPATH')) {
    exit;
}

final class RequestVerifier
{
    /** @var string[] */
    private array $keys;

    private int $ttl;

    /** @var 'hmac'|'ed25519' */
    private string $algorithm;

    /**
     * @param string[] $keys
     */
    public function __construct(array $keys, int $ttl = 300, string $algorithm = 'hmac')
    {
        $this->keys      = $keys;
        $this->ttl       = $ttl;
        $this->algorithm = $algorithm;
    }

    /**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */
    public function verify(array $headers, string $body): bool|WP_Error
    {   
            // 🔒 enforce string type early
        $body      = (string) $body;
        $signature = (string) ($headers['x-signature'] ?? '');
        $nonce     = (string) ($headers['x-nonce'] ?? '');
        $timestamp = (int)    ($headers['x-timestamp'] ?? 0);
        $keyId     = (string) ($headers['x-key-id'] ?? null);
        $deviceId  = (string) ($headers['x-device-id'] ?? '');

        if ($signature === '' || $nonce === '' || $timestamp === 0) {
            return new WP_Error('auth_missing', 'Missing auth headers');
        }
        // 🔥 canonical JSON
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

        if (str_contains($contentType, 'application/json')) {
        $bodyCanonical = JsonCanonicalizer::canonicalize($body);
        } else {
        $bodyCanonical = $body;
        }
        // 🔐 hash jen jednou
            $bodyHash = hash('sha256', $bodyCanonical);

        // ⏱ TTL
        if (abs(time() - $timestamp) > $this->ttl) {
            $this->logResult($keyId, false, 'auth_expired', $bodyHash);
            return new WP_Error('auth_expired', 'Request expired');
        }

        // 🔁 Nonce
        if (!NonceStore::remember($nonce, $this->ttl)) {
            $this->logResult($keyId, false, 'auth_replay', $bodyHash);
            return new WP_Error('auth_replay', 'Replay detected');
        }

        $message = $this->buildMessage($headers, $bodyHash, $deviceId);

        $result = match ($this->algorithm) {
            'hmac'    => $this->verifyHmac($message, $signature),
            'ed25519' => $this->verifyEd25519($message, $signature, $keyId, $bodyHash),
            default   => new WP_Error('auth_invalid', 'Unknown algorithm'),
        };

        if ($result === true) {
            $this->logResult($keyId, true, 'ok', $bodyHash);
            return true;
        }

        $reason = $result instanceof WP_Error
            ? $result->get_error_code()
            : 'unknown';

        $this->logResult($keyId, false, $reason, $bodyHash);

        return $result;
    }

    /**
     * @param array<string, mixed> $headers
     */
private function buildMessage(array $headers, string $bodyHash, string $deviceId): string
{
    $method = strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET'));
    $uri    = (string) ($_SERVER['REQUEST_URI'] ?? '/');
    $path   = (string) (parse_url($uri, PHP_URL_PATH) ?: '/');

    $timestamp = (string) ($headers['x-timestamp'] ?? '');
    $nonce     = (string) ($headers['x-nonce'] ?? '');

    return
        $method . "\n" .
        $path . "\n" .
        $timestamp . "\n" .
        $nonce . "\n" .
        $deviceId . "\n" .
        $bodyHash;
}

    private function verifyHmac(string $message, string $signature): bool|WP_Error
    {
        foreach ($this->keys as $secret) {
            $expected = hash_hmac('sha256', $message, $secret);

            if (hash_equals($expected, $signature)) {
                return true;
            }
        }

        return new WP_Error('auth_invalid', 'Invalid signature');
    }

    private function verifyEd25519(
        string $message,
        string $signature,
        ?string $keyId,
        string $bodyHash
    ): bool|WP_Error {
        $decoded = base64_decode($signature, true);

        if ($decoded === false) {
            return new WP_Error('auth_invalid', 'Invalid signature encoding');
        }

        $keys = $keyId
            ? KeyStore::getById($keyId)
            : KeyStore::getKeyMap();

        foreach ($keys as $id => $key) {
            if (sodium_crypto_sign_verify_detached($decoded, $message, $key)) {
                $this->logResult($id, true, 'key_match', $bodyHash);
                return true;
            }
        }

        return new WP_Error('auth_invalid', 'Invalid signature');
    }

    private function logResult(?string $keyId, bool $success, string $reason, string $bodyHash): void
    {
        Apify_Log_Service::log(
            'auth',
            $success ? 'verify_success' : 'verify_fail',
            [
                'algo'     => $this->algorithm,
                'key_id'   => $keyId,
                'success'  => $success,
                'reason'   => $reason,
                'body_sha' => $bodyHash,
                'ip'       => $_SERVER['REMOTE_ADDR'] ?? null,
                'endpoint' => $_SERVER['REQUEST_URI'] ?? null,
            ]
        );
    }
}
