<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Import\ProductImportService;

final class ProductImportRunner
{
    public function __construct(
        private readonly ImportPipelineService $pipelineService,
        private readonly ProductImportService $importService
    ) {
    }

    /**
     * @param array<int, array<string, mixed>> $items
     * @return array<int, array<string, mixed>>
     */
    public function run(array $items, ?string $scopeKey = null): array
    {
        $scope = null;

        if ($scopeKey !== null && $scopeKey !== '') {
            $scope = $this->pipelineService->resolveScope($scopeKey);

            if ($scope === null) {
                return [[
                    'success' => false,
                    'action' => 'invalid_scope',
                    'message' => 'Scope not found or inactive',
                ]];
            }
        }

        $runId = $this->pipelineService->startRun([
            'scope_id' => isset($scope['id']) ? (int) $scope['id'] : null,
            'status' => 'running',
            'batch_size' => count($items),
            'source_type' => 'apify',
        ]);

        $this->pipelineService->markRunning($runId);

        $results = [];

        foreach ($items as $item) {
            $results[] = $this->importService->importOne($item, $scopeKey, $runId);
        }

        $hasFailures = false;
        foreach ($results as $result) {
            if (($result['success'] ?? false) === false) {
                $hasFailures = true;
                break;
            }
        }

        $this->pipelineService->finishRun(
            $runId,
            $hasFailures ? 'finished_with_errors' : 'finished',
            $hasFailures ? 'Batch completed with errors' : 'Batch completed'
        );

        return $results;
    }
}
