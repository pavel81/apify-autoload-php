<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Controllers;

use Panda\Apify\Security\SignatureVerifierFactory;
use WP_Error;

final class LogsController
{
    public function handle(): void
    {
        $body = file_get_contents('php://input');

        if ($body === false) {
            wp_send_json_error(['error' => 'invalid_body'], 400);
        }

        /** @var array<string, mixed> $headers */
        $headers = [
            'x-signature' => $_SERVER['HTTP_X_SIGNATURE'] ?? '',
            'x-nonce'     => $_SERVER['HTTP_X_NONCE'] ?? '',
            'x-timestamp' => $_SERVER['HTTP_X_TIMESTAMP'] ?? '',
        ];

        // TTL pro HMAC
        $ttl       = defined('HB_REQUEST_TTL') ? (int) HB_REQUEST_TTL : 300;
        $algorithm = get_option('apify_signature_algorithm', 'hmac');

        //
        // 1) Výběr algoritmu
        //
        if ($algorithm === 'ed25519') {

            $publicKey = (string) get_option('apify_public_key');

            if ($publicKey === '') {
                wp_send_json_error(['error' => 'missing_public_key'], 500);
            }

            $verifier = SignatureVerifierFactory::create('ed25519', [
                'public_key' => $publicKey,
            ]);

        } else {

            $secret = (string) get_option('apify_secret');

            if ($secret === '') {
                wp_send_json_error(['error' => 'missing_secret'], 500);
            }

            $verifier = SignatureVerifierFactory::create('hmac', [
                'secrets' => [$secret],
                'ttl'     => $ttl,
            ]);
        }

        //
        // 2) Ověření podpisu
        //
        $result = $verifier->verify($headers, $body);

        if ($result !== true) {
            wp_send_json_error(['error' => 'invalid_signature'], 403);
        }

        //
        // 3) JSON payload
        //
        $data = json_decode($body, true);

        if (!is_array($data)) {
            wp_send_json_error(['error' => 'invalid_json'], 400);
        }

        //
        // 4) TODO: uložit logy
        //
        wp_send_json_success(['ok' => true]);
    }
}
