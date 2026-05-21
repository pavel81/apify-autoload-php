<?php

declare(strict_types=1);

namespace Tests\Unit\Import;

use Brain\Monkey\Functions;
use Panda\Apify\Import\ProductImportGuard;
use Panda\Apify\Import\ProductImportService;
use Panda\Apify\Import\ProductImportValidator;
use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\Services\ProductClassificationService;
use PHPUnit\Framework\TestCase;

final class ProductImportServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        \Brain\Monkey\setUp();

        Functions\when('sanitize_title')->alias(
            function (string $value) {
                $value = strtolower(trim($value));
                $value = preg_replace('/[^a-z0-9]+/i', '-', $value) ?? $value;

                return trim($value, '-');
            }
        );

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

        $productRepository = $this->createMock(ProductRepository::class);
        $classificationService = $this->createMock(ProductClassificationService::class);

        $payload = [
            'external_id' => 'ext-123',
            'sku' => 'sku-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'domain' => 'amazon.example',
            'title' => 'Gaming Notebook',
            'url' => 'https://example.com/product',
            'price' => 1299.90,
            'currency' => 'EUR',
            'brand' => 'Acer',
            'model' => 'Nitro',
            'use_cases' => [
                [
                    'slug' => 'gaming',
                    'name' => 'Gaming',
                    'is_primary' => true,
                    'confidence' => 95,
                ],
            ],
            'product_groups' => [
                [
                    'slug' => 'notebook',
                    'name' => 'Notebook',
                ],
            ],
            'tags' => [
                [
                    'slug' => 'wifi-7',
                    'name' => 'WiFi 7',
                ],
            ],
        ];

        $productRepository->expects($this->once())
            ->method('upsertProduct')
            ->willReturn(123);

        $productRepository->expects($this->once())
            ->method('insertPrice')
            ->willReturn(null);

        $productRepository->expects($this->once())
            ->method('mapCanonical')
            ->willReturn(null);

        $classificationService->expects($this->once())
            ->method('syncCanonical')
            ->willReturn([]);

        $service = new ProductImportService(
            $guard,
            $validator,
            $productRepository,
            $classificationService
        );

        $result = $service->importOne($payload);

        self::assertTrue($result['success']);
        self::assertSame('saved', $result['action']);
        self::assertSame(123, $result['product_id']);
        self::assertSame('gaming-notebook', $result['slug']);
        self::assertTrue($result['classification_synced']);
    }

    public function testImportOneReturnsDuplicateWhenGuardBlocks(): void
    {
        Functions\when('get_transient')->justReturn(1);
        Functions\when('set_transient')->justReturn(true);
        Functions\when('delete_transient')->justReturn(true);

        $guard = new ProductImportGuard();
        $validator = new ProductImportValidator();

        $productRepository = $this->createMock(ProductRepository::class);
        $classificationService = $this->createMock(ProductClassificationService::class);

        $productRepository->expects($this->never())
            ->method('upsertProduct');

        $classificationService->expects($this->never())
            ->method('syncCanonical');

        $service = new ProductImportService(
            $guard,
            $validator,
            $productRepository,
            $classificationService
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
