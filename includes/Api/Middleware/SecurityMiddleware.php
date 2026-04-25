<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Middleware;

use WP_REST_Request;
use Panda\Apify\Security\RequestGuard;
use Panda\Apify\Security\SignatureVerifierFactory;
use Panda\Apify\Security\RateLimiter;

class SecurityMiddleware
{
    private const MAX_TIME_DRIFT_MS = 5 * 60 * 1000;

    public static function handle(WP_REST_Request $request): bool
    {
        // 1) Rate limit
        $deviceId = $request->get_header('x-device-id');
        $ip       = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $rateKey  = $deviceId ?: $ip;

        if (!RateLimiter::allow($rateKey)) {
            return false;
        }

        // 2) Algoritmus + verifikátor
        $algorithm = get_option('apify_signature_algorithm', 'hmac');
        $ttl       = 300;

        if ($algorithm === 'ed25519') {
            $publicKey = (string) get_option('apify_public_key');

            if ($publicKey === '') {
                return false;
            }

            $verifier = SignatureVerifierFactory::create('ed25519', [
                'public_key' => $publicKey,
            ]);
        } else {
            $current  = getenv('APIFY_SECRET_CURRENT');
            $previous = getenv('APIFY_SECRET_PREVIOUS');

            /** @var array<string> $secrets */
            $secrets = array_filter([$current, $previous]);

            if ($secrets === []) {
                return false;
            }

            $verifier = SignatureVerifierFactory::create('hmac', [
                'secrets' => $secrets,
                'ttl'     => $ttl,
            ]);
        }

        $guard = new RequestGuard($verifier);

        // 3) Headers
        /** @var array<string, string> $headers */
        $headers = [];
        foreach ($request->get_headers() as $key => $value) {
            $headers[strtolower((string) $key)] = $value[0] ?? '';
        }

        $body = $request->get_body();

        $guard->protect($headers, $body);

        // 4) Timestamp drift
        $timestamp = (int) $request->get_header('x-timestamp');

        if ($timestamp <= 0) {
            return false;
        }

        $now = (int) (microtime(true) * 1000);

        if (abs($now - $timestamp) > self::MAX_TIME_DRIFT_MS) {
            return false;
        }

        return true;
    }
}
