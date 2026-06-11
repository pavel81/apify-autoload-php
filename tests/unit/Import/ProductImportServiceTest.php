<?php

declare(strict_types=1);

namespace Tests\Unit\Import;

use Brain\Monkey\Functions;
use Panda\Apify\DTO\ProductIdentityDto;
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

final class ProductImportServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        \Brain\Monkey\setUp();

        Functions\when('sanitize_title')->justReturn('normalized-slug');
        Functions\when('get_transient')->justReturn(false);
        Functions\when('set_transient')->justReturn(true);
        Functions\when('delete_transient')->justReturn(true);
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testImportOneSavesProductAndSyncsClassification(): void
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
            'url' => 'https://example.com/product',
            'image' => 'https://example.com/image.jpg',
            'description' => 'Test product',
            'price' => 1299.90,
            'currency' => 'EUR',
            'brand' => 'Acer',
            'manufacturer' => 'Acer Inc.',
            'model' => 'Nitro',
            'gtin' => '8591234567890',
            'mpn' => 'NITRO-123',
            'category_code' => 'electronics',
            'geo_code' => 'CZ',
            'seller_group_code' => 'trusted',
            'use_cases' => [
                ['slug' => 'gaming', 'name' => 'Gaming'],
            ],
            'product_groups' => [
                ['slug' => 'notebook', 'name' => 'Notebook'],
            ],
            'tags' => [
                ['slug' => 'wifi-7', 'name' => 'WiFi 7'],
            ],
        ];

        $productRepository->expects($this->once())
            ->method('upsertProduct')
            ->with($this->isType('array'))
            ->willReturn(123);

        $productRepository->expects($this->once())
            ->method('insertPrice')
            ->with(123, 'amazon', 'eu', 'sku-123', 1299.9, 'EUR');

        $productRepository->expects($this->once())
            ->method('mapCanonical')
            ->with(123, $this->anything(), 'amazon', 'eu');

        $productIdentifierRepository->expects($this->exactly(2))
            ->method('upsert')
            ->willReturnOnConsecutiveCalls(11, 12);

        $productIdentifierRepository->expects($this->exactly(2))
            ->method('linkToProduct')
            ->willReturnOnConsecutiveCalls(21, 22);

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
        self::assertSame(123, $result['product_id']);
        self::assertSame('normalized-slug', $result['slug']);
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
            ->with($this->isType('array'))
            ->willReturn(321);

        $productRepository->expects($this->once())
            ->method('insertPrice')
            ->with(321, 'tesco', 'cz', 'SKU-FAKE-001', 39.9, 'CZK');

        $productRepository->expects($this->once())
            ->method('mapCanonical')
            ->with(321, $this->anything(), 'tesco', 'cz');

        $productIdentifierRepository->expects($this->exactly(3))
            ->method('upsert')
            ->willReturnOnConsecutiveCalls(11, 12, 13);

        $productIdentifierRepository->expects($this->exactly(3))
            ->method('linkToProduct')
            ->willReturnOnConsecutiveCalls(21, 22, 23);

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

    public function testImportOneReturnsDuplicateWhenGuardBlocks(): void
    {
        Functions\when('get_transient')->justReturn(1);

        $guard = new ProductImportGuard();
        $validator = new ProductImportValidator();

        $productRepository = $this->createMock(ProductRepositoryInterface::class);
        $classificationService = $this->createMock(ProductClassificationServiceInterface::class);

        $scopeRepository = $this->createMock(ScopeRepositoryInterface::class);
        $importRunRepository = $this->createMock(ImportRunRepositoryInterface::class);
        $pipelineService = new ImportPipelineService($scopeRepository, $importRunRepository);

        $productIdentifierRepository = $this->createMock(ProductIdentifierRepositoryInterface::class);
        $identifierService = new ProductIdentifierService($productIdentifierRepository);

        $productRepository->expects($this->never())
            ->method('upsertProduct');

        $productRepository->expects($this->never())
            ->method('insertPrice');

        $productRepository->expects($this->never())
            ->method('mapCanonical');

        $productIdentifierRepository->expects($this->never())
            ->method('upsert');

        $productIdentifierRepository->expects($this->never())
            ->method('linkToProduct');

        $classificationService->expects($this->never())
            ->method('syncCanonical');

        $service = new ProductImportService(
            $guard,
            $validator,
            $productRepository,
            $classificationService,
            $pipelineService,
            $identifierService
        );

        $result = $service->importOne([
            'external_id' => 'ext-123',
            'sku' => 'sku-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'domain' => 'amazon.example',
            'title' => 'Gaming Notebook',
        ]);

        self::assertFalse($result['success']);
        self::assertSame('duplicate', $result['action']);
    }
}
