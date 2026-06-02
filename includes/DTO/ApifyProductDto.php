<?php

declare(strict_types=1);

namespace Panda\Apify\DTO;

if (!defined('ABSPATH')) {
    exit;
}

final class ApifyProductDto
{
    public function __construct(
        public readonly int $id,
        public readonly string $externalId,
        public readonly string $shop,
        public readonly string $sku,
        public readonly string $title,
        public readonly float $price,
        public readonly string $currency,
        public readonly string $category,
        public readonly string $manufacturer,
        public readonly string $imageUrl,
        public readonly int $imageId,
        public readonly string $updatedAt,
        public readonly string $createdAt,
        public readonly ?string $gtin = null,
        public readonly ?string $ean = null,
        public readonly ?string $upc = null,
        public readonly ?string $mpn = null,
        public readonly ?string $scopeKey = null,
        public readonly ?string $geoCode = null,
        public readonly ?string $sellerGroupCode = null,
    ) {
    }

    /**
     * @param array{
     *     id?:int,
     *     external_id?:string,
     *     shop?:string,
     *     sku?:string,
     *     title?:string,
     *     price?:float|int|string,
     *     currency?:string,
     *     category?:string,
     *     manufacturer?:string,
     *     image_url?:string,
     *     image_id?:int,
     *     updated_at?:string,
     *     created_at?:string,
     *     gtin?:string,
     *     ean?:string,
     *     upc?:string,
     *     mpn?:string,
     *     scope_key?:string,
     *     geo_code?:string,
     *     seller_group_code?:string
     * } $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            id: (int) ($row['id'] ?? 0),
            externalId: (string) ($row['external_id'] ?? ''),
            shop: (string) ($row['shop'] ?? ''),
            sku: (string) ($row['sku'] ?? ''),
            title: (string) ($row['title'] ?? ''),
            price: (float) ($row['price'] ?? 0),
            currency: (string) ($row['currency'] ?? 'CZK'),
            category: (string) ($row['category'] ?? ''),
            manufacturer: (string) ($row['manufacturer'] ?? ''),
            imageUrl: (string) ($row['image_url'] ?? ''),
            imageId: (int) ($row['image_id'] ?? 0),
            updatedAt: (string) ($row['updated_at'] ?? ''),
            createdAt: (string) ($row['created_at'] ?? ''),
            gtin: self::nullOrTrim($row['gtin'] ?? null),
            ean: self::nullOrTrim($row['ean'] ?? null),
            upc: self::nullOrTrim($row['upc'] ?? null),
            mpn: self::nullOrTrim($row['mpn'] ?? null),
            scopeKey: self::nullOrTrim($row['scope_key'] ?? null),
            geoCode: self::nullOrTrim($row['geo_code'] ?? null),
            sellerGroupCode: self::nullOrTrim($row['seller_group_code'] ?? null),
        );
    }

    /**
     * @return array<string, scalar|null>
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'external_id' => $this->externalId,
            'shop' => $this->shop,
            'sku' => $this->sku,
            'title' => $this->title,
            'price' => $this->price,
            'currency' => $this->currency,
            'category' => $this->category,
            'manufacturer' => $this->manufacturer,
            'image_url' => $this->imageUrl,
            'image_id' => $this->imageId,
            'updated_at' => $this->updatedAt,
            'created_at' => $this->createdAt,
            'gtin' => $this->gtin,
            'ean' => $this->ean,
            'upc' => $this->upc,
            'mpn' => $this->mpn,
            'scope_key' => $this->scopeKey,
            'geo_code' => $this->geoCode,
            'seller_group_code' => $this->sellerGroupCode,
        ];
    }

    public function primaryIdentifier(): ?string
    {
        foreach ([$this->gtin, $this->ean, $this->upc, $this->mpn] as $value) {
            if ($value !== null && $value !== '') {
                return $value;
            }
        }

        return null;
    }

    public function identitySeed(): string
    {
        return implode('|', [
            $this->externalId,
            $this->shop,
            $this->sku,
            $this->title,
            $this->manufacturer,
            $this->gtin ?? '',
            $this->ean ?? '',
            $this->upc ?? '',
            $this->mpn ?? '',
            $this->scopeKey ?? '',
            $this->geoCode ?? '',
            $this->sellerGroupCode ?? '',
        ]);
    }

    private static function nullOrTrim(mixed $value): ?string
    {
        $value = trim((string) $value);

        return $value === '' ? null : $value;
    }
}
