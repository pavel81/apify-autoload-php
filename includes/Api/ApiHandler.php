<?php

declare(strict_types=1);

namespace Panda\Apify\Api;

final class ApiHandler
{
    private static array $usedNonces = [];
    private static array $rateCounters = [];

    public function handle(array $request = []): array
    {
        $normalized = $this->normalizeRequest($request);

        if (!$this->isAllowedMethod($normalized)) {
            return $this->deny('invalid_method');
        }

        if (!$this->hasAuthContext($normalized)) {
            return $this->deny('missing_auth');
        }

        if ($this->isRateLimited($normalized)) {
            return $this->deny('rate_limited', ['blocked' => true]);
        }

        if ($this->isReplay($normalized)) {
            return $this->deny('replay_detected');
        }

        if (!$this->isValidSignature($normalized)) {
            return $this->deny('invalid_signature');
        }

        return [
            'success' => true,
            'code' => 200,
            'data' => $normalized,
        ];
    }

    private function normalizeRequest(array $request): array
    {
        $request['method'] = strtoupper((string) ($request['method'] ?? 'POST'));
        $request['ip'] = (string) ($request['ip'] ?? '127.0.0.1');
        $request['nonce'] = (string) ($request['nonce'] ?? '');
        $request['timestamp'] = isset($request['timestamp']) ? (int) $request['timestamp'] : 0;
        $request['signature'] = (string) ($request['signature'] ?? '');

        return $request;
    }

    private function isAllowedMethod(array $request): bool
    {
        return $request['method'] === 'POST';
    }

    private function hasAuthContext(array $request): bool
    {
        if (!empty($request['auth']) || !empty($request['token'])) {
            return true;
        }

        return $request['nonce'] !== '' && $request['timestamp'] > 0;
    }

    private function isValidSignature(array $request): bool
    {
        if ($request['signature'] === '') {
            return true;
        }

        $payload = $request['payload'] ?? $request['data'] ?? $request;
        if (!is_array($payload)) {
            $payload = ['value' => $payload];
        }

        $expected = $this->signPayload($payload, $request['nonce'], $request['timestamp']);

        return hash_equals($expected, $request['signature']);
    }

    private function isReplay(array $request): bool
    {
        if ($request['nonce'] === '' || $request['timestamp'] <= 0) {
            return false;
        }

        $key = $request['nonce'] . ':' . $request['timestamp'];

        if (isset(self::$usedNonces[$key])) {
            return true;
        }

        self::$usedNonces[$key] = true;

        return false;
    }

    private function isRateLimited(array $request): bool
    {
        $ip = $request['ip'] ?: '127.0.0.1';

        if (!isset(self::$rateCounters[$ip])) {
            self::$rateCounters[$ip] = 0;
        }

        self::$rateCounters[$ip]++;

        return self::$rateCounters[$ip] > 25;
    }

    private function signPayload(array $payload, string $nonce, int $timestamp): string
    {
        $material = wp_json_encode([
            'payload' => $payload,
            'nonce' => $nonce,
            'timestamp' => $timestamp,
        ]);

        if ($material === false || $material === null) {
            $material = '';
        }

        return hash_hmac('sha256', $material, 'apify-autoload-secret');
    }

    private function deny(string $reason, array $extra = []): array
    {
        return array_merge([
            'success' => false,
            'code' => 403,
            'reason' => $reason,
        ], $extra);
    }
}
