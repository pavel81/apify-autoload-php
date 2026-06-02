<?php

declare(strict_types=1);

namespace Panda\Apify\Import;

final class ProductImportGuard
{
    private const LOCK_TTL = 120;
    private const LOCK_PREFIX = 'apify_import_lock_';

    /**
     * @param array<string, mixed> $payload
     */
    public function acquire(array $payload): bool
    {
        $key = $this->buildKey($payload);

        if ($key === '') {
            return false;
        }

        if (get_transient($key) !== false) {
            return false;
        }

        return set_transient($key, 1, self::LOCK_TTL);
    }

    /**
     * @param array<string, mixed> $payload
     */
    public function release(array $payload): void
    {
        $key = $this->buildKey($payload);

        if ($key === '') {
            return;
        }

        delete_transient($key);
    }

    /**
     * @param array<string, mixed> $payload
     */
    private function buildKey(array $payload): string
    {
        $externalId = trim((string) ($payload['external_id'] ?? ''));
        $shop = trim((string) ($payload['shop'] ?? ''));
        $region = trim((string) ($payload['region'] ?? ''));
        $sku = trim((string) ($payload['sku'] ?? ''));
        $canonicalHash = trim((string) ($payload['canonical_hash'] ?? ''));
        $title = trim((string) ($payload['title'] ?? ''));

        if ($externalId === '' && $canonicalHash === '' && $title === '') {
            return '';
        }

        $fingerprint = implode('|', [
            $externalId,
            $shop,
            $region,
            $sku,
            $canonicalHash,
            $title,
        ]);

        return self::LOCK_PREFIX . hash('sha256', $fingerprint);
    }
}
