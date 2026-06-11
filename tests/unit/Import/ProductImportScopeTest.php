<?php

declare(strict_types=1);

namespace Tests\Unit\Import;

use Brain\Monkey\Functions;
use Panda\Apify\Import\ProductImportGuard;
use Panda\Apify\Import\ProductImportService;
use Panda\Apify\Import\ProductImportValidator;
use Panda\Apify\Queries\ProductRepositoryInterface;
use Panda\Apify\Repositories\ImportRunRepositoryInterface;
use Panda\Apify\Repositories\ProductIdentifierRepositoryInterface;
use Panda\Apify\Repositories\ScopeRepositoryInterface;
use Panda\Apify\Services\ImportPipelineService;
use Panda\Apify\Services\ProductClassificationServiceInterface;
use Panda\Apify\Services\ProductIdentifierService;
use PHPUnit\Framework\TestCase;

final class ProductImportScopeTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        \Brain\Monkey\setUp();

        Functions\when('sanitize_title')->justReturn('gaming-notebook');
        Functions\when('get_transient')->justReturn(false);
        Functions\when('set_transient')->justReturn(true);
        Functions\when('delete_transient')->justReturn(true);
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testImportOneSkipsPayloadOutsideScope(): void
    {
        $guard = new ProductImportGuard();
        $validator = new ProductImportValidator();

        $productRepository = $this->createMock(ProductRepositoryInterface::class);
        $classificationService = $this->createMock(ProductClassificationServiceInterface::class);

        $scopeRepository = $this->createMock(ScopeRepositoryInterface::class);
        $importRunRepository = $this->createMock(ImportRunRepositoryInterface::class);
        $pipelineService = new ImportPipelineService($scopeRepository, $importRunRepository);

        $productIdentifierRepository = $this->createMock(ProductIdentifierRepositoryInterface::class);
        $identifierService = new ProductIdentifierService($productIdentifierRepository);

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

        $scopeRepository->expects($this->once())
            ->method('findByKey')
            ->with('food-cz')
            ->willReturn([
                'id' => 7,
                'scope_key' => 'food-cz',
                'name' => 'Food CZ',
                'category_code' => 'food',
                'geo_code' => 'CZ',
                'seller_group_code' => 'trusted',
                'is_active' => 1,
            ]);

        $productRepository->expects($this->never())->method('upsertProduct');
        $productRepository->expects($this->never())->method('insertPrice');
        $productRepository->expects($this->never())->method('mapCanonical');
        $classificationService->expects($this->never())->method('syncCanonical');

        $service = new ProductImportService(
            $guard,
            $validator,
            $productRepository,
            $classificationService,
            $pipelineService,
            $identifierService
        );

        $result = $service->importOne($payload, 'food-cz', 55);

        self::assertTrue($result['success']);
        self::assertSame('skipped', $result['action']);
        self::assertSame('Payload does not match scope', $result['message']);
        self::assertSame('food-cz', $result['scope_key']);
    }
}
