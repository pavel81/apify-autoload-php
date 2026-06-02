<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\DTO\ProductIdentityDto;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductIdentityService
{
    public function buildCanonicalHash(ProductIdentityDto $identity, string $slug = ''): string
    {
        $seed = $identity->identitySeed();

        if ($slug !== '') {
            $seed .= '|' . $slug;
        }

        return hash('sha256', $seed);
    }

    public function enrich(ProductIdentityDto $identity, string $slug = ''): ProductIdentityDto
    {
        $canonicalHash = $identity->canonicalHash;

        if ($canonicalHash === null || $canonicalHash === '') {
            $canonicalHash = $this->buildCanonicalHash($identity, $slug);
        }

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
            canonicalHash: $canonicalHash
        );
    }

    /**
     * @param array<string, mixed> $row
     */
    public function fromRow(array $row): ProductIdentityDto
    {
        return ProductIdentityDto::fromArray($row);
    }

    public function isBarcodeLikeValid(?string $value): bool
    {
        if ($value === null || $value === '') {
            return true;
        }

        $length = strlen($value);

        return in_array($length, [8, 12, 13, 14], true);
    }

    public function isValidIdentity(ProductIdentityDto $identity): bool
    {
        return $this->isBarcodeLikeValid($identity->gtin)
            && $this->isBarcodeLikeValid($identity->ean)
            && $this->isBarcodeLikeValid($identity->upc);
    }
}
