<?php

declare(strict_types=1);

namespace Panda\Apify\Repositories;

interface ProductIdentifierRepositoryInterface
{
    /**
     * @return array<string, mixed>|null
     */
    public function findByIdentifier(string $type, string $value): ?array;

    /**
     * @param array<string, mixed> $data
     */
    public function upsert(array $data): int;

    public function linkToProduct(
        int $productId,
        int $identifierId,
        int $scopeId = 0,
        int $runId = 0,
        string $matchMethod = 'manual',
        int $confidence = 100
    ): int;
}
