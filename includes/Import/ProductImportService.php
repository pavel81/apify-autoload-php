<?php

declare(strict_types=1);

namespace Panda\Apify\Import;

use Panda\Apify\DTO\ProductIdentityDto;
use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\Services\ImportPipelineService;
use Panda\Apify\Services\ProductClassificationService;
use Panda\Apify\Services\ProductIdentifierService;
use Panda\Apify\Repositories\ProductIdentifierRepositoryInterface;
use Panda\Apify\Queries\ProductRepositoryInterface;
use Throwable;

final class ProductImportService
{
  public function __construct(
    private readonly ProductImportGuard $guard,
    private readonly ProductImportValidator $validator,
    private readonly ProductRepositoryInterface $productRepository,
    private readonly ProductClassificationService $classificationService,
    private readonly ImportPipelineService $pipelineService,
    private readonly ProductIdentifierService $identifierService
) {
}

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function importOne(array $payload, ?string $scopeKey = null, ?int $runId = null): array
    {
        $validation = $this->validator->validate($payload);

        if (!$validation['success']) {
            if ($runId !== null) {
                $this->pipelineService->addError($runId, 'Payload validation failed');
            }

            return [
                'success' => false,
                'action' => 'invalid',
                'errors' => $validation['errors'],
                'message' => 'Payload validation failed',
            ];
        }

        /** @var ProductIdentityDto $identity */
        $identity = $validation['identity'];
        $scope = null;

        if ($scopeKey !== null && $scopeKey !== '') {
            $scopeRow = $this->pipelineService->resolveScope($scopeKey);

            if ($scopeRow === null) {
                return [
                    'success' => false,
                    'action' => 'invalid_scope',
                    'message' => 'Scope not found or inactive',
                ];
            }

            $scope = $scopeRow;

           if (!$this->matchesScope($identity, $payload, $scopeRow)) {
                return [
                    'success' => true,
                    'action' => 'skipped',
                    'message' => 'Payload does not match scope',
                    'scope_key' => (string) ($scopeRow['scope_key'] ?? $scopeKey),
                ];
            }
        }

        $guardPayload = array_merge($payload, [
            'canonical_hash' => $identity->canonicalHash,
            'gtin' => $identity->gtin,
            'ean' => $identity->ean,
            'upc' => $identity->upc,
            'mpn' => $identity->mpn,
            'brand' => $identity->brand,
            'manufacturer' => $identity->manufacturer,
            'model' => $identity->model,
            'scope_key' => $identity->scopeKey,
            'geo_code' => $identity->geoCode,
            'seller_group_code' => $identity->sellerGroupCode,
        ]);

        if (!$this->guard->acquire($guardPayload)) {
            return [
                'success' => false,
                'action' => 'duplicate',
                'message' => 'Import is already running for this payload',
            ];
        }

        try {
            $normalized = $this->normalizePayload($payload, $identity);

            $productId = $this->productRepository->upsertProduct($normalized);

            if ($this->hasPrice($normalized)) {
                $this->productRepository->insertPrice(
                    $productId,
                    (string) $normalized['shop'],
                    (string) $normalized['region'],
                    (string) $normalized['sku'],
                    (float) $normalized['price'],
                    (string) $normalized['currency']
                );
            }

            $this->productRepository->mapCanonical(
                $productId,
                (string) $normalized['canonical_hash'],
                (string) $normalized['shop'],
                (string) $normalized['region']
            );
            
            $this->identifierService->saveForProduct(
               $productId,
               $identity,
               $scopeId,
               $runId ?? 0
            );

            $scopeId = isset($scope['id']) ? (int) $scope['id'] : 0;

            $this->identifierService->saveForProduct(
                $productId,
                $identity,
                $scopeId,
                $runId ?? 0
            );

            $this->classificationService->syncCanonical(
                (string) $normalized['canonical_hash'],
                $normalized['use_cases'],
                $normalized['product_groups'],
                $normalized['tags'],
                true
            );

            if ($runId !== null) {
                $this->pipelineService->finishRun($runId, 'finished', 'Imported successfully');
            }

            return [
                'success' => true,
                'action' => 'saved',
                'product_id' => $productId,
                'canonical_hash' => $normalized['canonical_hash'],
                'slug' => $normalized['slug'],
                'classification_synced' => true,
                'message' => 'Product imported successfully',
            ];
        } catch (Throwable $e) {
            if ($runId !== null) {
                $this->pipelineService->finishRun($runId, 'failed', $e->getMessage());
            }

            return [
                'success' => false,
                'action' => 'failed',
                'message' => $e->getMessage(),
            ];
        } finally {
            $this->guard->release($guardPayload);
        }
    }

    /**
     * @param array<int, array<string, mixed>> $items
     * @return array<int, array<string, mixed>>
     */
    public function importBatch(array $items, ?string $scopeKey = null): array
    {
        $scope = null;

        if ($scopeKey !== null && $scopeKey !== '') {
            $scope = $this->pipelineService->resolveScope($scopeKey);

            if ($scope === null) {
                return [[
                    'success' => false,
                    'action' => 'invalid_scope',
                    'message' => 'Scope not found or inactive',
                ]];
            }
        }

        $runId = $this->pipelineService->startRun([
            'scope_id' => isset($scope['id']) ? (int) $scope['id'] : null,
            'status' => 'running',
            'batch_size' => count($items),
            'source_type' => 'apify',
        ]);

        $this->pipelineService->markRunning($runId);

        $results = [];

        foreach ($items as $item) {
            $results[] = $this->importOne($item, $scopeKey, $runId);
        }

        $hasFailures = false;
        foreach ($results as $result) {
            if (($result['success'] ?? false) === false) {
                $hasFailures = true;
                break;
            }
        }

        $this->pipelineService->finishRun(
            $runId,
            $hasFailures ? 'finished_with_errors' : 'finished',
            $hasFailures ? 'Batch completed with errors' : 'Batch completed'
        );

        return $results;
    }

    /**
     * @param array<string, mixed> $payload
     * @param ProductIdentityDto $identity
     * @return array<string, mixed>
     */
    private function normalizePayload(array $payload, ProductIdentityDto $identity): array
    {
        $title = (string) ($payload['title'] ?? '');
        $slug = sanitize_title($title);

        $canonicalHash = $identity->canonicalHash;
        if ($canonicalHash === null || $canonicalHash === '') {
            $canonicalHash = hash('sha256', $identity->identitySeed() . '|' . $slug);
        }

        return [
            'external_id' => (string) ($payload['external_id'] ?? ''),
            'sku' => (string) ($payload['sku'] ?? ''),
            'shop' => (string) ($payload['shop'] ?? ''),
            'region' => (string) ($payload['region'] ?? ''),
            'domain' => (string) ($payload['domain'] ?? ''),
            'category_code' => (string) ($payload['category_code'] ?? ''),
            'geo_code' => (string) ($payload['geo_code'] ?? ''),
            'seller_group_code' => (string) ($payload['seller_group_code'] ?? ''),
            'title' => $title,
            'slug' => $slug,
            'url' => (string) ($payload['url'] ?? ''),
            'image' => (string) ($payload['image'] ?? ''),
            'description' => (string) ($payload['description'] ?? ''),
            'canonical_hash' => $canonicalHash,
            'brand' => $identity->brand,
            'manufacturer' => $identity->manufacturer,
            'model' => $identity->model,
            'mpn' => $identity->mpn,
            'gtin' => $identity->gtin,
            'price' => $payload['price'] ?? null,
            'currency' => (string) ($payload['currency'] ?? ''),
            'use_cases' => $this->normalizeClassificationItems($payload['use_cases'] ?? []),
            'product_groups' => $this->normalizeClassificationItems($payload['product_groups'] ?? []),
            'tags' => $this->normalizeClassificationItems($payload['tags'] ?? []),
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
 * @param array<string, mixed> $payload
 * @param array<string, mixed> $scope
 */
private function matchesScope(ProductIdentityDto $identity, array $payload, array $scope): bool
{
    $scopeCategory = (string) ($scope['category_code'] ?? '');
    $scopeGeo = (string) ($scope['geo_code'] ?? '');
    $scopeSeller = (string) ($scope['seller_group_code'] ?? '');

    $payloadCategory = (string) ($payload['category_code'] ?? '');
    $payloadGeo = (string) ($payload['geo_code'] ?? '');
    $payloadSeller = (string) ($payload['seller_group_code'] ?? '');

    if ($scopeCategory !== '' && $payloadCategory !== $scopeCategory) {
        return false;
    }

    if ($scopeGeo !== '' && $payloadGeo !== $scopeGeo) {
        return false;
    }

    if ($scopeSeller !== '' && $payloadSeller !== $scopeSeller) {
        return false;
    }

    return true;
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
