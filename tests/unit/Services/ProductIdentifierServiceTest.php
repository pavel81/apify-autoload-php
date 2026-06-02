<?php

declare(strict_types=1);

namespace Tests\Unit\Services;

use Panda\Apify\DTO\ProductIdentityDto;
use Panda\Apify\Repositories\ProductIdentifierRepository;
use Panda\Apify\Services\ProductIdentifierService;
use PHPUnit\Framework\TestCase;

final class ProductIdentifierServiceTest extends TestCase
{
    public function testBuildIdentifierRowsCreatesRowsForPresentIdentifiers(): void
    {
        $repository = $this->createMock(ProductIdentifierRepository::class);
        $service = new ProductIdentifierService($repository);

        $identity = new ProductIdentityDto(
            gtin: '8591234567890',
            ean: '8591234567890',
            upc: null,
            mpn: 'ABC-123',
            brand: 'Acme',
            manufacturer: 'Acme',
            model: 'X1',
            canonicalHash: 'hash-1'
        );

        $rows = $service->buildIdentifierRows(12, $identity);

        self::assertCount(3, $rows);
        self::assertSame('gtin', $rows[0]['identifier_type']);
        self::assertSame('ean', $rows[1]['identifier_type']);
        self::assertSame('mpn', $rows[2]['identifier_type']);
    }

    public function testSaveForProductStoresAndLinksIdentifiers(): void
    {
        $repository = $this->createMock(ProductIdentifierRepository::class);
        $service = new ProductIdentifierService($repository);

        $identity = new ProductIdentityDto(
            gtin: '8591234567890',
            ean: null,
            upc: null,
            mpn: 'ABC-123',
            brand: 'Acme',
            manufacturer: 'Acme',
            model: 'X1',
            canonicalHash: 'hash-1'
        );

        $repository->expects($this->exactly(2))
            ->method('upsert')
            ->willReturnOnConsecutiveCalls(101, 102);

        $repository->expects($this->exactly(2))
            ->method('linkToProduct')
            ->willReturnOnConsecutiveCalls(201, 202);

        $result = $service->saveForProduct(12, $identity, 7, 99);

        self::assertCount(2, $result);
        self::assertSame('gtin', $result[0]['identifier_type']);
        self::assertSame('mpn', $result[1]['identifier_type']);
    }
}
