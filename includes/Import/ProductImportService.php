<?php

declare(strict_types=1);

namespace Panda\Apify\Import;

use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\Services\ProductClassificationService;
use Throwable;

final class ProductImportService
{
    public function __construct(
        private readonly ProductImportGuard $guard,
        private readonly ProductImportValidator $validator,
        private readonly ProductRepository $productRepository,
        private readonly ProductClassificationService $classificationService
    ) {
    }

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function importOne(array $payload): array
    {
        if (!$this->guard->acquire($payload)) {
            return [
                'success' => false,
                'action' => 'duplicate',
                'message' => 'Import is already running for this payload',
            ];
        }

        try {
            $validation = $this->validator->validate($payload);

            if (!$validation['success']) {
                return [
                    'success' => false,
                    'action' => 'invalid',
                    'errors' => $validation['errors'],
                    'message' => 'Payload validation failed',
                ];
            }

            $data = $this->normalizePayload($validation['payload']);

            $productId = $this->productRepository->upsertProduct($data);

            if ($this->hasPrice($data)) {
                $this->productRepository->insertPrice(
                    $productId,
                    (string) $data['shop'],
                    (string) $data['region'],
                    (string) $data['sku'],
                    (float) $data['price'],
                    (string) $data['currency']
                );
            }

            $this->productRepository->mapCanonical(
                $productId,
                (string) $data['canonical_hash'],
                (string) $data['shop'],
                (string) $data['region']
            );

            $classificationSynced = false;

            if (
                array_key_exists('use_cases', $validation['payload'])
                && array_key_exists('product_groups', $validation['payload'])
                && array_key_exists('tags', $validation['payload'])
            ) {
                $this->classificationService->syncCanonical(
                    (string) $data['canonical_hash'],
                    $data['use_cases'],
                    $data['product_groups'],
                    $data['tags'],
                    true
                );

                $classificationSynced = true;
            }

            return [
                'success' => true,
                'action' => 'saved',
                'product_id' => $productId,
                'canonical_hash' => $data['canonical_hash'],
                'slug' => $data['slug'],
                'classification_synced' => $classificationSynced,
                'message' => 'Product imported successfully',
            ];
        } catch (Throwable $e) {
            return [
                'success' => false,
                'action' => 'failed',
                'message' => $e->getMessage(),
            ];
        } finally {
            $this->guard->release($payload);
        }
    }

    /**
     * @param array<int, array<string, mixed>> $items
     * @return array<int, array<string, mixed>>
     */
    public function importBatch(array $items): array
    {
        $results = [];

        foreach ($items as $item) {
            $results[] = $this->importOne($item);
        }

        return $results;
    }

    /**
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    private function normalizePayload(array $data): array
    {
        $title = (string) ($data['title'] ?? '');
        $slug = sanitize_title($title);

        $canonicalHash = (string) ($data['canonical_hash'] ?? '');
        if ($canonicalHash === '') {
            $canonicalHash = $this->deriveCanonicalHash($data, $slug);
        }

        return [
            'external_id' => (string) ($data['external_id'] ?? ''),
            'sku' => (string) ($data['sku'] ?? ''),
            'shop' => (string) ($data['shop'] ?? ''),
            'region' => (string) ($data['region'] ?? ''),
            'domain' => (string) ($data['domain'] ?? ''),
            'title' => $title,
            'slug' => $slug,
            'url' => (string) ($data['url'] ?? ''),
            'image' => (string) ($data['image'] ?? ''),
            'description' => (string) ($data['description'] ?? ''),
            'canonical_hash' => $canonicalHash,
            'brand' => (string) ($data['brand'] ?? ''),
            'model' => (string) ($data['model'] ?? ''),
            'price' => $data['price'] ?? null,
            'currency' => (string) ($data['currency'] ?? ''),
            'use_cases' => $this->normalizeClassificationItems($data['use_cases'] ?? []),
            'product_groups' => $this->normalizeClassificationItems($data['product_groups'] ?? []),
            'tags' => $this->normalizeClassificationItems($data['tags'] ?? []),
        ];
    }

    /**
     * @param array<string, mixed> $data
     */
    private function hasPrice(array $data): bool
    {
        return isset($data['price']) && is_numeric($data['price']) && (float) $data['price'] > 0;
    }

    /**
     * @param array<string, mixed> $data
     */
    private function deriveCanonicalHash(array $data, string $slug): string
    {
        return hash(
            'sha256',
            implode('|', [
                (string) ($data['external_id'] ?? ''),
                (string) ($data['shop'] ?? ''),
                (string) ($data['region'] ?? ''),
                (string) ($data['sku'] ?? ''),
                (string) ($data['domain'] ?? ''),
                (string) ($data['brand'] ?? ''),
                (string) ($data['model'] ?? ''),
                $slug,
            ])
        );
    }

    /**
     * @param mixed $value
     * @return array<int, array<string, mixed>>
     */
    private function normalizeClassificationItems(mixed $value): array
    {
        if (!is_array($value)) {
            return [];
        }

        $items = [];

        foreach ($value as $item) {
            if (is_string($item)) {
                $name = trim($item);

                if ($name === '') {
                    continue;
                }

                $items[] = [
                    'slug' => sanitize_title($name),
                    'name' => $name,
                    'description' => '',
                    'is_active' => 1,
                    'sort_order' => 0,
                    'source' => 'feed',
                    'confidence' => 100,
                    'is_primary' => false,
                ];

                continue;
            }

            if (!is_array($item)) {
                continue;
            }

            $name = trim((string) ($item['name'] ?? ''));
            $slug = trim((string) ($item['slug'] ?? ''));

            if ($slug === '' && $name !== '') {
                $slug = sanitize_title($name);
            }

            if ($name === '' || $slug === '') {
                continue;
            }

            $items[] = [
                'slug' => $slug,
                'name' => $name,
                'description' => (string) ($item['description'] ?? ''),
                'is_active' => isset($item['is_active']) ? (int) (bool) $item['is_active'] : 1,
                'sort_order' => isset($item['sort_order']) ? (int) $item['sort_order'] : 0,
                'parent_id' => array_key_exists('parent_id', $item) ? $item['parent_id'] : null,
                'source' => (string) ($item['source'] ?? 'feed'),
                'confidence' => isset($item['confidence']) ? (int) $item['confidence'] : 100,
                'is_primary' => !empty($item['is_primary']),
            ];
        }

        return $items;
    }
}
