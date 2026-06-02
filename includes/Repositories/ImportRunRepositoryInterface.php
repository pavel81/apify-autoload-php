<?php

declare(strict_types=1);

namespace Panda\Apify\Repositories;

interface ImportRunRepositoryInterface
{
    /**
     * @param array<string, mixed> $data
     */
    public function create(array $data): int;

    public function markRunning(int $runId): void;

    public function markFinished(int $runId, string $status = 'finished', ?string $message = null): void;

    public function addError(int $runId, string $message): void;
}
