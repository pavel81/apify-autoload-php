<?php

declare(strict_types=1);

namespace Tests\Unit\Services;

use Panda\Apify\Repositories\ImportRunRepository;
use Panda\Apify\Repositories\ScopeRepository;
use Panda\Apify\Services\ImportPipelineService;
use PHPUnit\Framework\TestCase;

final class ImportPipelineServiceTest extends TestCase
{
    public function testResolveScopeReturnsScopeRow(): void
    {
        $scopeRepository = $this->createMock(ScopeRepository::class);
        $importRunRepository = $this->createMock(ImportRunRepository::class);

        $scopeRepository->expects($this->once())
            ->method('findByKey')
            ->with('food-cz')
            ->willReturn([
                'id' => 7,
                'scope_key' => 'food-cz',
                'category_code' => 'food',
                'geo_code' => 'CZ',
                'seller_group_code' => 'trusted',
            ]);

        $service = new ImportPipelineService($scopeRepository, $importRunRepository);

        $scope = $service->resolveScope('food-cz');

        self::assertSame('food-cz', $scope['scope_key']);
        self::assertSame('food', $scope['category_code']);
    }

    public function testStartRunCreatesImportRun(): void
    {
        $scopeRepository = $this->createMock(ScopeRepository::class);
        $importRunRepository = $this->createMock(ImportRunRepository::class);

        $importRunRepository->expects($this->once())
            ->method('create')
            ->with($this->callback(static function (array $data): bool {
                return $data['scope_id'] === 7
                    && $data['status'] === 'running'
                    && $data['batch_size'] === 25
                    && $data['source_type'] === 'apify';
            }))
            ->willReturn(99);

        $service = new ImportPipelineService($scopeRepository, $importRunRepository);

        $runId = $service->startRun([
            'scope_id' => 7,
            'status' => 'running',
            'batch_size' => 25,
            'source_type' => 'apify',
        ]);

        self::assertSame(99, $runId);
    }
}
