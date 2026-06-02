<?php

declare(strict_types=1);

namespace Tests\Unit\Import;

use Brain\Monkey\Functions;
use Panda\Apify\Import\ProductImportGuard;
use PHPUnit\Framework\TestCase;

final class ProductImportGuardTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        \Brain\Monkey\setUp();
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testAcquireAndReleaseWorkForNewPayload(): void
    {
        Functions\when('get_transient')->justReturn(false);

        Functions\expect('set_transient')
            ->once()
            ->with(
                $this->isType('string'),
                1,
                120
            )
            ->andReturn(true);

        Functions\expect('delete_transient')
            ->once()
            ->with($this->isType('string'));

        $guard = new ProductImportGuard();

        $payload = [
            'external_id' => 'ext-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'sku' => 'sku-123',
            'canonical_hash' => 'hash-123',
            'title' => 'Gaming Notebook',
        ];

        self::assertTrue($guard->acquire($payload));
        $guard->release($payload);
    }

    public function testAcquireReturnsFalseForExistingLock(): void
    {
        Functions\when('get_transient')->justReturn(1);

        $guard = new ProductImportGuard();

        $payload = [
            'external_id' => 'ext-123',
            'shop' => 'amazon',
            'region' => 'eu',
            'sku' => 'sku-123',
            'canonical_hash' => 'hash-123',
            'title' => 'Gaming Notebook',
        ];

        self::assertFalse($guard->acquire($payload));
    }
}
