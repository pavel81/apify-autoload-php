<?php

declare(strict_types=1);

namespace Tests\Unit\Services;

require_once dirname(__DIR__) . '/Support/FakeWpdb.php';

use Brain\Monkey\Functions;
use Panda\Apify\Queries\ClassificationRepository;
use Panda\Apify\Services\ProductClassificationService;
use PHPUnit\Framework\TestCase;
use wpdb;

final class ProductClassificationServiceTest extends TestCase
{
    private wpdb $db;
    private ClassificationRepository $repository;
    private ProductClassificationService $service;

    protected function setUp(): void
    {
        parent::setUp();
        \Brain\Monkey\setUp();

        $this->db = new wpdb();
        $this->db->prefix = 'wp_';

        $this->repository = new ClassificationRepository($this->db);
        $this->service = new ProductClassificationService($this->repository);
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testSyncCanonicalReplacesExistingMappingsAndReturnsNewBundle(): void
    {
        Functions\when('current_time')->justReturn('2026-05-20 10:00:00');

        $oldUseCaseId = $this->repository->upsertUseCase([
            'slug' => 'office',
            'name' => 'Office',
        ]);
        $this->repository->assignUseCase('hash-1', $oldUseCaseId);

        $oldGroupId = $this->repository->upsertGroup([
            'slug' => 'laptops',
            'name' => 'Laptops',
        ]);
        $this->repository->assignGroup('hash-1', $oldGroupId);

        $oldTagId = $this->repository->upsertTag([
            'slug' => 'wifi-6',
            'name' => 'WiFi 6',
        ]);
        $this->repository->assignTag('hash-1', $oldTagId);

        $bundle = $this->service->syncCanonical(
            'hash-1',
            [
                [
                    'slug' => 'gaming',
                    'name' => 'Gaming',
                    'sort_order' => 1,
                    'is_primary' => true,
                    'confidence' => 97,
                ],
            ],
            [
                [
                    'slug' => 'notebook',
                    'name' => 'Notebook',
                    'sort_order' => 2,
                ],
            ],
            [
                [
                    'slug' => 'wifi-7',
                    'name' => 'WiFi 7',
                    'sort_order' => 3,
                ],
            ]
        );

        self::assertCount(1, $bundle['use_cases']);
        self::assertCount(1, $bundle['groups']);
        self::assertCount(1, $bundle['tags']);

        self::assertSame('Gaming', $bundle['use_cases'][0]['name']);
        self::assertSame('Notebook', $bundle['groups'][0]['name']);
        self::assertSame('WiFi 7', $bundle['tags'][0]['name']);

        self::assertSame(1, $bundle['use_cases'][0]['is_primary']);
        self::assertSame(97, $bundle['use_cases'][0]['confidence']);

        self::assertCount(1, $this->db->tables['wp_apify_product_use_case_map']);
        self::assertCount(1, $this->db->tables['wp_apify_product_group_map']);
        self::assertCount(1, $this->db->tables['wp_apify_product_tag_map']);
    }

    public function testGetReturnsBundleFromRepository(): void
    {
        Functions\when('current_time')->justReturn('2026-05-20 10:00:00');

        $this->service->syncCanonical(
            'hash-2',
            [
                ['slug' => 'gaming', 'name' => 'Gaming'],
            ],
            [
                ['slug' => 'notebook', 'name' => 'Notebook'],
            ],
            [
                ['slug' => 'wifi-7', 'name' => 'WiFi 7'],
            ]
        );

        $bundle = $this->service->get('hash-2');

        self::assertSame('Gaming', $bundle['use_cases'][0]['name']);
        self::assertSame('Notebook', $bundle['groups'][0]['name']);
        self::assertSame('WiFi 7', $bundle['tags'][0]['name']);
    }
}
