<?php

declare(strict_types=1);

namespace Tests\Unit\Import;

use Panda\Apify\Import\ProductImportValidator;
use PHPUnit\Framework\TestCase;

final class ProductImportValidatorTest extends TestCase
{
    public function testValidateReturnsSuccessForValidPayload(): void
    {
        $validator = new ProductImportValidator();

        $result = $validator->validate([
            'external_id' => 'ext-123',
            'sku' => 'sku-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'domain' => 'amazon.example',
            'title' => 'Gaming Notebook',
            'url' => 'https://example.com/product',
            'price' => 1299.90,
            'currency' => 'EUR',
            'use_cases' => ['gaming'],
            'product_groups' => ['notebook'],
            'tags' => ['wifi-7'],
        ]);

        self::assertTrue($result['success']);
        self::assertSame([], $result['errors']);

        self::assertSame(
            'ext-123',
            $result['payload']['external_id']
        );

        self::assertSame(
            'Gaming Notebook',
            $result['payload']['title']
        );
    }

    public function testValidateReturnsErrorsForMissingFields(): void
    {
        $validator = new ProductImportValidator();

        $result = $validator->validate([
            'title' => 'Broken payload',
        ]);

        self::assertFalse($result['success']);

        self::assertContains(
            'Missing required field: external_id',
            $result['errors']
        );

        self::assertContains(
            'Missing required field: sku',
            $result['errors']
        );

        self::assertContains(
            'Missing required field: shop',
            $result['errors']
        );

        self::assertContains(
            'Missing required field: region',
            $result['errors']
        );

        self::assertContains(
            'Missing required field: domain',
            $result['errors']
        );
    }

    public function testValidateRejectsInvalidUrl(): void
    {
        $validator = new ProductImportValidator();

        $result = $validator->validate([
            'external_id' => 'ext-123',
            'sku' => 'sku-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'domain' => 'amazon.example',
            'title' => 'Gaming Notebook',
            'url' => 'not-a-valid-url',
        ]);

        self::assertFalse($result['success']);

        self::assertContains(
            'Invalid URL',
            $result['errors']
        );
    }

    public function testValidateRejectsInvalidPrice(): void
    {
        $validator = new ProductImportValidator();

        $result = $validator->validate([
            'external_id' => 'ext-123',
            'sku' => 'sku-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'domain' => 'amazon.example',
            'title' => 'Gaming Notebook',
            'price' => 'invalid-price',
        ]);

        self::assertFalse($result['success']);

        self::assertContains(
            'Invalid price',
            $result['errors']
        );
    }

    public function testValidateRejectsInvalidClassificationPayload(): void
    {
        $validator = new ProductImportValidator();

        $result = $validator->validate([
            'external_id' => 'ext-123',
            'sku' => 'sku-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'domain' => 'amazon.example',
            'title' => 'Gaming Notebook',
            'use_cases' => 'gaming',
        ]);

        self::assertFalse($result['success']);

        self::assertContains(
            'Invalid classification payload: use_cases',
            $result['errors']
        );
    }
}
