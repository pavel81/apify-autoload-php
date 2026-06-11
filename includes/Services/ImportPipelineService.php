<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Repositories\ScopeRepositoryInterface;
use Panda\Apify\Repositories\ImportRunRepositoryInterface;

final class ImportPipelineService
{
    public function __construct(
         private ScopeRepositoryInterface $scopeRepository,
         private ImportRunRepositoryInterface $importRunRepository
    ) {
    }

    /**
     * @return array<string, mixed>|null
     */
    public function resolveScope(string $scopeKey): ?array
    {
        return $this->ScopeRepository->findByKey($scopeKey);
    }

    /**
     * @param array<string, mixed> $data
     */
    public function startRun(array $data): int
    {
        return $this->importRunRepository->create($data);
    }

    public function finishRun(int $runId, string $status = 'finished', ?string $message = null): void
    {
        $this->importRunRepository->markFinished($runId, $status, $message);
    }

    public function markRunning(int $runId): void
    {
        $this->importRunRepository->markRunning($runId);
    }

    public function addError(int $runId, string $message): void
    {
        $this->importRunRepository->addError($runId, $message);
    }
}
