<?php

declare(strict_types=1);

namespace Panda\Apify\Import;

final class ProductImportValidator
{
    /**
     * @phpstan-param array<string, mixed> $payload
     * @phpstan-return array{
     *     success: bool,
     *     errors: array<int, string>,
     *     payload: array<string, mixed>
     * }
     */
    public function validate(array $payload): array
    {
        $normalized = $this->normalize($payload);
        $errors = [];

        foreach (['external_id', 'sku', 'shop', 'region', 'domain', 'title'] as $field) {
            if ($normalized[$field] === '') {
                $errors[] = sprintf('Missing required field: %s', $field);
            }
        }

        if ($normalized['url'] !== '' && filter_var($normalized['url'], FILTER_VALIDATE_URL) === false) {
            $errors[] = 'Invalid URL';
        }

        if ($normalized['price'] !== null && !is_numeric($normalized['price'])) {
            $errors[] = 'Invalid price';
        }

        if ($normalized['currency'] !== '' && strlen($normalized['currency']) > 10) {
            $errors[] = 'Invalid currency';
        }

        foreach (['use_cases', 'product_groups', 'tags'] as $bucket) {
            if (array_key_exists($bucket, $payload) && !is_array($payload[$bucket])) {
                $errors[] = sprintf('Invalid classification payload: %s', $bucket);
            }
        }

        return [
            'success' => $errors === [],
            'errors' => $errors,
            'payload' => $normalized,
        ];
    }

    /**
     * @phpstan-param array<string, mixed> $payload
     * @phpstan-return array<string, mixed>
     */
    private function normalize(array $payload): array
    {
        return [
            'external_id' => trim((string) ($payload['external_id'] ?? '')),
            'sku' => trim((string) ($payload['sku'] ?? '')),
            'shop' => trim((string) ($payload['shop'] ?? '')),
            'region' => trim((string) ($payload['region'] ?? '')),
            'domain' => trim((string) ($payload['domain'] ?? '')),
            'title' => trim((string) ($payload['title'] ?? '')),
            'url' => trim((string) ($payload['url'] ?? '')),
            'image' => trim((string) ($payload['image'] ?? '')),
            'description' => trim((string) ($payload['description'] ?? '')),
            'canonical_hash' => trim((string) ($payload['canonical_hash'] ?? '')),
            'brand' => trim((string) ($payload['brand'] ?? '')),
            'model' => trim((string) ($payload['model'] ?? '')),
            'price' => array_key_exists('price', $payload) && $payload['price'] !== '' ? $payload['price'] : null,
            'currency' => trim((string) ($payload['currency'] ?? '')),
            'use_cases' => $payload['use_cases'] ?? [],
            'product_groups' => $payload['product_groups'] ?? [],
            'tags' => $payload['tags'] ?? [],
        ];
    }
}
