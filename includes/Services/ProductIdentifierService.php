<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\DTO\ProductIdentityDto;
use Panda\Apify\Repositories\ProductIdentifierRepository;
use Panda\Apify\Repositories\ProductIdentifierRepositoryInterface;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductIdentifierService
{
    public function __construct(
        private readonly ProductIdentifierRepository $repository
    ) {
    }

    public function makeHash(string $type, string $value): string
    {
        return hash('sha256', strtolower(trim($type)) . '|' . preg_replace('/\s+/', '', trim($value)));
    }

    public function normalize(ProductIdentityDto $identity): ProductIdentityDto
    {
        return new ProductIdentityDto(
            gtin: $identity->gtin,
            ean: $identity->ean,
            upc: $identity->upc,
            mpn: $identity->mpn,
            brand: $identity->brand,
            manufacturer: $identity->manufacturer,
            model: $identity->model,
            scopeKey: $identity->scopeKey,
            geoCode: $identity->geoCode,
            sellerGroupCode: $identity->sellerGroupCode,
            canonicalHash: $identity->canonicalHash
        );
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function buildIdentifierRows(int $productId, ProductIdentityDto $identity): array
    {
        $rows = [];

        foreach ([
            'gtin' => $identity->gtin,
            'ean' => $identity->ean,
            'upc' => $identity->upc,
            'mpn' => $identity->mpn,
        ] as $type => $value) {
            if ($value === null || $value === '') {
                continue;
            }

            $rows[] = [
                'product_id' => $productId,
                'canonical_hash' => (string) ($identity->canonicalHash ?? ''),
                'identifier_type' => $type,
                'identifier_value' => $value,
                'identifier_hash' => $this->makeHash($type, $value),
                'source' => 'feed',
                'confidence' => 100,
                'is_primary' => $type === 'gtin',
                'verified_at' => null,
            ];
        }

        return $rows;
    }

    public function saveForProduct(int $productId, ProductIdentityDto $identity, int $scopeId = 0, int $runId = 0): array
    {
        $saved = [];

        foreach ($this->buildIdentifierRows($productId, $identity) as $row) {
            $identifierId = $this->repository->upsert($row);
            $linkId = $this->repository->linkToProduct(
                $productId,
                $identifierId,
                $scopeId,
                $runId,
                'feed',
                100
            );

            $saved[] = [
                'identifier_id' => $identifierId,
                'link_id' => $linkId,
                'identifier_type' => $row['identifier_type'],
                'identifier_value' => $row['identifier_value'],
            ];
        }

        return $saved;
    }
}
