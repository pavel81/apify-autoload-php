<?php

declare(strict_types=1);

namespace Panda\Apify\Queries;

interface ProductRepositoryInterface
{
    /**
     * @param array<string, mixed> $data
     */
    public function upsertProduct(array $data): int;

    public function insertPrice(
        int $productId,
        string $shop,
        string $region,
        string $sku,
        float $price,
        string $currency
    ): void;

    public function mapCanonical(
        int $productId,
        string $canonicalHash,
        string $shop,
        string $region
    ): void;

    /**
     * @return array<string, mixed>|null
     */
    public function findCanonical(string $hash): ?array;

    /**
     * @return array<string, mixed>|null
     */
    public function findCanonicalBySlug(string $slug): ?array;

    /**
     * @return array<int, array<string, mixed>>
     */
    public function findAllByCanonical(string $hash): array;

    /**
     * @param array<int, int> $productIds
     * @return array<int, array<string, mixed>>
     */
    public function getOffers(array $productIds): array;

    /**
     * @return array{avg: float|null, count: int}
     */
    public function getRatingStats(string $canonicalHash): array;
}
