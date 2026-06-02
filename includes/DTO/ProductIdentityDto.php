<?php

declare(strict_types=1);

namespace Panda\Apify\DTO;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductIdentityDto
{
    public function __construct(
        public readonly ?string $gtin = null,
        public readonly ?string $ean = null,
        public readonly ?string $upc = null,
        public readonly ?string $mpn = null,
        public readonly ?string $brand = null,
        public readonly ?string $manufacturer = null,
        public readonly ?string $model = null,
        public readonly ?string $scopeKey = null,
        public readonly ?string $geoCode = null,
        public readonly ?string $sellerGroupCode = null,
        public readonly ?string $canonicalHash = null,
    ) {
    }

    /**
     * @param array<string, mixed> $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            gtin: self::normalizeBarcode($row['gtin'] ?? null),
            ean: self::normalizeBarcode($row['ean'] ?? null),
            upc: self::normalizeBarcode($row['upc'] ?? null),
            mpn: self::normalizeText($row['mpn'] ?? null),
            brand: self::normalizeText($row['brand'] ?? null),
            manufacturer: self::normalizeText($row['manufacturer'] ?? null),
            model: self::normalizeText($row['model'] ?? null),
            scopeKey: self::normalizeText($row['scope_key'] ?? null),
            geoCode: self::normalizeText($row['geo_code'] ?? null),
            sellerGroupCode: self::normalizeText($row['seller_group_code'] ?? null),
            canonicalHash: self::normalizeText($row['canonical_hash'] ?? null),
        );
    }

    public function hasStrongIdentifier(): bool
    {
        return $this->gtin !== null
            || $this->ean !== null
            || $this->upc !== null
            || $this->mpn !== null;
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

    public function primaryIdentifierType(): ?string
    {
        if ($this->gtin !== null && $this->gtin !== '') {
            return 'gtin';
        }

        if ($this->ean !== null && $this->ean !== '') {
            return 'ean';
        }

        if ($this->upc !== null && $this->upc !== '') {
            return 'upc';
        }

        if ($this->mpn !== null && $this->mpn !== '') {
            return 'mpn';
        }

        return null;
    }

    public function identitySeed(): string
    {
        return implode('|', [
            (string) ($this->brand ?? ''),
            (string) ($this->manufacturer ?? ''),
            (string) ($this->model ?? ''),
            (string) ($this->gtin ?? ''),
            (string) ($this->ean ?? ''),
            (string) ($this->upc ?? ''),
            (string) ($this->mpn ?? ''),
            (string) ($this->scopeKey ?? ''),
            (string) ($this->geoCode ?? ''),
            (string) ($this->sellerGroupCode ?? ''),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'gtin' => $this->gtin,
            'ean' => $this->ean,
            'upc' => $this->upc,
            'mpn' => $this->mpn,
            'brand' => $this->brand,
            'manufacturer' => $this->manufacturer,
            'model' => $this->model,
            'scope_key' => $this->scopeKey,
            'geo_code' => $this->geoCode,
            'seller_group_code' => $this->sellerGroupCode,
            'canonical_hash' => $this->canonicalHash,
        ];
    }

    private static function normalizeText(mixed $value): ?string
    {
        $value = trim((string) $value);

        return $value === '' ? null : $value;
    }

    private static function normalizeBarcode(mixed $value): ?string
    {
        $value = preg_replace('/\D+/', '', (string) $value) ?? '';
        $value = trim($value);

        return $value === '' ? null : $value;
    }
}
