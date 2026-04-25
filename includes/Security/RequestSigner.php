<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

if (!defined('ABSPATH')) {
    exit;
}

final class RequestSigner
{
    /**
     * @return array{
     *   signature:string,
     *   nonce:string,
     *   timestamp:int
     * }
     */
    public static function sign(string $body, string $secret): array
    {
        $timestamp = time();
        $nonce = bin2hex(random_bytes(8));

        $message = base64_encode($body) . '.' . $nonce . '.' . $timestamp;

        $signature = hash_hmac('sha256', $message, $secret);

        return [
            'signature' => $signature,
            'nonce'     => $nonce,
            'timestamp' => $timestamp,
        ];
    }
}