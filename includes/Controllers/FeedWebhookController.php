<?php

declare(strict_types=1);

namespace Panda\Apify\Controllers;

use WP_REST_Request;
use WP_Error;
use Panda\Apify\Security\SignatureVerifierFactory;
use Panda\Apify\Security\RequestGuard;
use Panda\Apify\Security\RateLimiter;
use Panda\Apify\Accounting\Apify_Log_Service;
use Panda\Apify\Services\ApifySyncService;

if (!defined('ABSPATH')) {
    exit;
}

final class FeedWebhookController
{
    private const DEFAULT_LIMIT = 200;

    /**
     * @return WP_Error|array{
     *     ok: bool,
     *     result: array<string, mixed>,
     *     next_offset: int|null,
     *     done: bool,
     *     total: int
     * }
     */
    public function handle(WP_REST_Request $request): WP_Error|array
    {
        if ($request->get_method() !== 'POST') {
            return new WP_Error('method_not_allowed', 'Invalid method', ['status' => 405]);
        }

        $contentType = (string) $request->get_header('content-type');

        if (strpos($contentType, 'application/json') === false) {
            return new WP_Error('invalid_content_type', 'Expected JSON', ['status' => 400]);
        }

        // Rate limit
        $ip = (string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown');

        if (!RateLimiter::allow($ip, 20, 60)) {
            Apify_Log_Service::log('rate_limit', 'Too many requests', ['ip' => $ip]);
            return new WP_Error('rate_limited', 'Too many requests', ['status' => 429]);
        }

        //
        // 1) Výběr algoritmu (HMAC / Ed25519)
        //
        $algorithm = get_option('apify_signature_algorithm', 'hmac');
        $ttl       = 300;

        if ($algorithm === 'ed25519') {

            $publicKey = (string) get_option('apify_public_key');

            if ($publicKey === '') {
                return new WP_Error('server_error', 'Missing public key', ['status' => 500]);
            }

            $verifier = SignatureVerifierFactory::create('ed25519', [
                'public_key' => $publicKey,
            ]);

        } else {

            $secret = (string) get_option('apify_secret');

            if ($secret === '') {
                return new WP_Error('server_error', 'Missing secret', ['status' => 500]);
            }

            $verifier = SignatureVerifierFactory::create('hmac', [
                'secrets' => [$secret],
                'ttl'     => $ttl,
            ]);
        }

        //
        // 2) RequestGuard
        //
        $guard = new RequestGuard($verifier);

        /** @var array<string, mixed> $headers */
        $headers = array_change_key_case($request->get_headers(), CASE_LOWER);

        $body = (string) $request->get_body();

        if ($body === '') {
            return new WP_Error('invalid_body', 'Empty body', ['status' => 400]);
        }

        //
        // 3) Ověření podpisu
        //
        $verifyResult = $guard->protect($headers, $body);

        if ($verifyResult instanceof WP_Error) {
            return $verifyResult;
        }

        //
        // 4) JSON payload
        //
        $data = json_decode($body, true);

        if (!is_array($data)) {
            return new WP_Error('invalid_json', 'Invalid JSON body', ['status' => 400]);
        }

        $itemsRaw = $data['items'] ?? [];

        if (!is_array($itemsRaw) || $itemsRaw === []) {
            return new WP_Error('invalid_payload', 'Missing items', ['status' => 400]);
        }

        /** @var array<int, array<string, mixed>> $items */
        $items = $itemsRaw;

        $shop   = (string) ($data['shop'] ?? 'default');
        $offset = max(0, (int) ($data['offset'] ?? 0));

        $limit = (int) ($data['limit'] ?? get_option('apify_batch_size', self::DEFAULT_LIMIT));
        $limit = max(10, min(1000, $limit));

        $total = count($items);

        if ($offset >= $total) {
            return [
                'ok'          => true,
                'result'      => [
                    'inserted' => 0,
                    'updated'  => 0,
                    'skipped'  => 0,
                    'errors'   => [],
                ],
                'next_offset' => null,
                'done'        => true,
                'total'       => $total,
            ];
        }

        $batch = array_slice($items, $offset, $limit);

        /** @var array<string, mixed> $result */
        $result = ApifySyncService::sync_feed($batch, $shop);

        $nextOffset = $offset + $limit;
        $hasMore    = $nextOffset < $total;

        Apify_Log_Service::log('webhook_iter', 'Batch processed', [
            'offset' => $offset,
            'limit'  => $limit,
            'count'  => count($batch),
            'total'  => $total,
        ]);

        return [
            'ok'          => true,
            'result'      => $result,
            'next_offset' => $hasMore ? $nextOffset : null,
            'done'        => !$hasMore,
            'total'       => $total,
        ];
    }
}
