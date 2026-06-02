<?php

declare(strict_types=1);

namespace Panda\Apify\Dto;

final class ProductImportPayloadDto
{
    public function __construct(
        public readonly string $externalId,
        public readonly string $sku,
        public readonly string $shop,
        public readonly string $region,
        public readonly string $domain,
        public readonly string $title,
        public readonly ?string $url = null,
        public readonly ?string $image = null,
        public readonly ?string $description = null,
        public readonly ?string $canonicalHash = null,
        public readonly ?string $brand = null,
        public readonly ?string $manufacturer = null,
        public readonly ?string $model = null,
        public readonly ?string $mpn = null,
        public readonly ?string $gtin = null,
        public readonly ?string $categoryCode = null,
        public readonly ?string $geoCode = null,
        public readonly ?string $sellerGroupCode = null,
        public readonly int|float|string|null $price = null,
        public readonly ?string $currency = null,
        /** @var array<int, array<string, mixed>> */
        public readonly array $useCases = [],
        /** @var array<int, array<string, mixed>> */
        public readonly array $productGroups = [],
        /** @var array<int, array<string, mixed>> */
        public readonly array $tags = [],
        /** @var array<string, mixed> */
        public readonly array $raw = [],
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            externalId: trim((string) ($data['external_id'] ?? '')),
            sku: trim((string) ($data['sku'] ?? '')),
            shop: trim((string) ($data['shop'] ?? '')),
            region: trim((string) ($data['region'] ?? '')),
            domain: trim((string) ($data['domain'] ?? '')),
            title: trim((string) ($data['title'] ?? '')),
            url: self::nullOrTrim($data['url'] ?? null),
            image: self::nullOrTrim($data['image'] ?? null),
            description: self::nullOrTrim($data['description'] ?? null),
            canonicalHash: self::nullOrTrim($data['canonical_hash'] ?? null),
            brand: self::nullOrTrim($data['brand'] ?? null),
            manufacturer: self::nullOrTrim($data['manufacturer'] ?? null),
            model: self::nullOrTrim($data['model'] ?? null),
            mpn: self::nullOrTrim($data['mpn'] ?? null),
            gtin: self::nullOrTrim($data['gtin'] ?? null),
            categoryCode: self::nullOrTrim($data['category_code'] ?? null),
            geoCode: self::nullOrTrim($data['geo_code'] ?? null),
            sellerGroupCode: self::nullOrTrim($data['seller_group_code'] ?? null),
            price: array_key_exists('price', $data) ? $data['price'] : null,
            currency: self::nullOrTrim($data['currency'] ?? null),
            useCases: is_array($data['use_cases'] ?? null) ? $data['use_cases'] : [],
            productGroups: is_array($data['product_groups'] ?? null) ? $data['product_groups'] : [],
            tags: is_array($data['tags'] ?? null) ? $data['tags'] : [],
            raw: $data,
        );
    }

    public function isValid(): bool
    {
        return $this->externalId !== ''
            && $this->sku !== ''
            && $this->shop !== ''
            && $this->region !== ''
            && $this->domain !== ''
            && $this->title !== '';
    }

    public function toCanonicalSeed(): string
    {
        return implode('|', [
            $this->externalId,
            $this->shop,
            $this->region,
            $this->sku,
            $this->domain,
            (string) $this->brand,
            (string) $this->manufacturer,
            (string) $this->model,
            (string) $this->gtin,
            (string) $this->mpn,
            $this->title,
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'external_id' => $this->externalId,
            'sku' => $this->sku,
            'shop' => $this->shop,
            'region' => $this->region,
            'domain' => $this->domain,
            'title' => $this->title,
            'url' => $this->url,
            'image' => $this->image,
            'description' => $this->description,
            'canonical_hash' => $this->canonicalHash,
            'brand' => $this->brand,
            'manufacturer' => $this->manufacturer,
            'model' => $this->model,
            'mpn' => $this->mpn,
            'gtin' => $this->gtin,
            'category_code' => $this->categoryCode,
            'geo_code' => $this->geoCode,
            'seller_group_code' => $this->sellerGroupCode,
            'price' => $this->price,
            'currency' => $this->currency,
            'use_cases' => $this->useCases,
            'product_groups' => $this->productGroups,
            'tags' => $this->tags,
            'raw' => $this->raw,
        ];
    }

    private static function nullOrTrim(mixed $value): ?string
    {
        $value = trim((string) $value);

        return $value === '' ? null : $value;
    }
}
