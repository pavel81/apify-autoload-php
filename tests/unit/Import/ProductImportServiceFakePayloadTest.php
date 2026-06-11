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

final class ProductImportServiceFakePayloadTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        \Brain\Monkey\setUp();

        Functions\when('sanitize_title')->justReturn('coca-cola-zero-330ml');
        Functions\when('get_transient')->justReturn(false);
        Functions\when('set_transient')->justReturn(true);
        Functions\when('delete_transient')->justReturn(true);
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testImportOneWithFullFakeProductPayload(): void
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
            'external_id' => 'fake-product-001',
            'sku' => 'SKU-FAKE-001',
            'shop' => 'tesco',
            'region' => 'cz',
            'domain' => 'tesco.example',
            'title' => 'Coca Cola Zero 330ml',
            'url' => 'https://example.com/products/coca-cola-zero',
            'image' => 'https://example.com/images/coca-cola-zero.jpg',
            'description' => 'Fake import payload for unit testing',
            'price' => 39.90,
            'currency' => 'CZK',
            'brand' => 'Coca Cola',
            'manufacturer' => 'The Coca-Cola Company',
            'model' => 'Zero 330ml',
            'gtin' => '8594001234567',
            'ean' => '8594001234567',
            'mpn' => 'CCZ330',
            'category_code' => 'food',
            'geo_code' => 'CZ',
            'seller_group_code' => 'trusted',
            'use_cases' => [
                ['slug' => 'drink', 'name' => 'Drink'],
            ],
            'product_groups' => [
                ['slug' => 'soft-drinks', 'name' => 'Soft Drinks'],
            ],
            'tags' => [
                ['slug' => 'zero-sugar', 'name' => 'Zero Sugar'],
                ['slug' => 'carbonated', 'name' => 'Carbonated'],
            ],
        ];

        $productRepository->expects($this->once())
            ->method('upsertProduct')
            ->willReturn(321);

        $productRepository->expects($this->once())
            ->method('insertPrice')
            ->with(321, 'tesco', 'cz', 'SKU-FAKE-001', 39.9, 'CZK')
            ->willReturn(null);

        $productRepository->expects($this->once())
            ->method('mapCanonical')
            ->with(321, $this->anything(), 'tesco', 'cz')
            ->willReturn(null);

        $productIdentifierRepository->expects($this->once())
            ->method('upsert')
            ->willReturn(11);

        $productIdentifierRepository->expects($this->once())
            ->method('linkToProduct')
            ->willReturn(21);

        $classificationService->expects($this->once())
            ->method('syncCanonical')
            ->willReturn([
                'use_cases' => [],
                'groups' => [],
                'tags' => [],
            ]);

        $service = new ProductImportService(
            $guard,
            $validator,
            $productRepository,
            $classificationService,
            $pipelineService,
            $identifierService
        );

        $result = $service->importOne($payload);

        self::assertTrue($result['success']);
        self::assertSame('saved', $result['action']);
        self::assertSame(321, $result['product_id']);
        self::assertSame('normalized-slug', $result['slug']);
    }
}
