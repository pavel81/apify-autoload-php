<?php

declare(strict_types=1);

namespace Panda\Apify\Dto;

final class ImportScopeDto
{
    public function __construct(
        public readonly int $id,
        public readonly string $scopeKey,
        public readonly string $name,
        public readonly string $categoryCode,
        public readonly string $geoCode,
        public readonly ?string $sellerGroupCode = null,
        public readonly bool $isActive = true,
    ) {
    }

    /**
     * @param array<string, mixed> $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            id: (int) ($row['id'] ?? 0),
            scopeKey: (string) ($row['scope_key'] ?? ''),
            name: (string) ($row['name'] ?? ''),
            categoryCode: (string) ($row['category_code'] ?? ''),
            geoCode: (string) ($row['geo_code'] ?? ''),
            sellerGroupCode: isset($row['seller_group_code']) && (string) $row['seller_group_code'] !== ''
                ? (string) $row['seller_group_code']
                : null,
            isActive: (bool) ($row['is_active'] ?? true),
        );
    }

    public function matches(ProductImportPayloadDto $payload): bool
    {
        if (!$this->isActive) {
            return false;
        }

        if ($this->categoryCode !== '' && $payload->categoryCode !== null && $payload->categoryCode !== $this->categoryCode) {
            return false;
        }

        if ($this->geoCode !== '' && $payload->geoCode !== null && $payload->geoCode !== $this->geoCode) {
            return false;
        }

        if ($this->sellerGroupCode !== null && $payload->sellerGroupCode !== null && $payload->sellerGroupCode !== $this->sellerGroupCode) {
            return false;
        }

        return true;
    }
}
