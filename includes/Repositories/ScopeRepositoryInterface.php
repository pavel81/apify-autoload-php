<?php

declare(strict_types=1);

namespace Panda\Apify\Repositories;

interface ScopeRepositoryInterface
{
    /**
     * @return array<string, mixed>|null
     */
    public function findByKey(string $scopeKey): ?array;

    /**
     * @return array<int, array<string, mixed>>
     */
    public function findActive(): array;
}
