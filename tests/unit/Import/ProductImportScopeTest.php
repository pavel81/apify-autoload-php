<?php

declare(strict_types=1);

namespace Tests\Unit\Import;

use Panda\Apify\Import\ProductImportGuard;
use Panda\Apify\Import\ProductImportService;
use Panda\Apify\Import\ProductImportValidator;
use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\Services\ImportPipelineService;
use Panda\Apify\Services\ProductClassificationService;
use PHPUnit\Framework\TestCase;

final class ProductImportScopeTest extends TestCase
{
    public function testImportOneSkipsPayloadOutsideScope(): void
    {
        $guard = $this->createMock(ProductImportGuard::class);
        $validator = $this->createMock(ProductImportValidator::class);
        $productRepository = $this->createMock(ProductRepository::class);
        $classificationService = $this->createMock(ProductClassificationService::class);
        $pipelineService = $this->createMock(ImportPipelineService::class);

        $payload = [
            'external_id' => 'ext-123',
            'sku' => 'sku-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'domain' => 'amazon.example',
            'title' => 'Gaming Notebook',
            'category_code' => 'electronics',
            'geo_code' => 'CZ',
            'seller_group_code' => 'trusted',
        ];

        $guard->expects($this->once())->method('acquire')->willReturn(true);
        $guard->expects($this->once())->method('release');

        $validator->expects($this->once())
            ->method('validate')
            ->willReturn([
                'success' => true,
                'errors' => [],
                'payload' => $payload,
            ]);

        $pipelineService->expects($this->once())
            ->method('resolveScope')
            ->with('food-cz')
            ->willReturn([
                'id' => 7,
                'scope_key' => 'food-cz',
                'category_code' => 'food',
                'geo_code' => 'CZ',
                'seller_group_code' => 'trusted',
            ]);

        $productRepository->expects($this->never())->method('upsertProduct');
        $classificationService->expects($this->never())->method('syncCanonical');

        $service = new ProductImportService(
            $guard,
            $validator,
            $productRepository,
            $classificationService,
            $pipelineService
        );

        $result = $service->importOne($payload, 'food-cz', 55);

        self::assertTrue($result['success']);
        self::assertSame('skipped', $result['action']);
    }
}
