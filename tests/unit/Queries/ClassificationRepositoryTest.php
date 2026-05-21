<?php

declare(strict_types=1);

namespace Tests\Unit\Queries;

require_once dirname(__DIR__) . '/Support/FakeWpdb.php';

use Brain\Monkey\Functions;
use Panda\Apify\Queries\ClassificationRepository;
use PHPUnit\Framework\TestCase;
use wpdb;
final class ClassificationRepositoryTest extends TestCase
{
    private wpdb $db;
    private ClassificationRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        \Brain\Monkey\setUp();

        $this->db = new wpdb();
        $this->db->prefix = 'wp_';
        $this->repository = new ClassificationRepository($this->db);
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testUpsertUseCaseInsertsRow(): void
    {
        Functions\when('current_time')->justReturn('2026-05-20 10:00:00');

        $id = $this->repository->upsertUseCase([
            'slug' => 'gaming',
            'name' => 'Gaming',
            'description' => 'Gaming products',
            'is_active' => 1,
            'sort_order' => 10,
        ]);

        self::assertSame(1, $id);
        self::assertSame('wp_apify_product_use_cases', $this->db->lastInsert['table']);
        self::assertSame('gaming', $this->db->lastInsert['data']['slug']);
        self::assertSame('Gaming', $this->db->lastInsert['data']['name']);
        self::assertSame('Gaming products', $this->db->lastInsert['data']['description']);
        self::assertSame(1, $this->db->lastInsert['data']['is_active']);
        self::assertSame(10, $this->db->lastInsert['data']['sort_order']);
        self::assertSame('2026-05-20 10:00:00', $this->db->lastInsert['data']['created_at']);
        self::assertSame('2026-05-20 10:00:00', $this->db->lastInsert['data']['updated_at']);
    }

    public function testAssignTagAndGetByCanonicalHash(): void
    {
        Functions\when('current_time')->justReturn('2026-05-20 10:00:00');

        $useCaseId = $this->repository->upsertUseCase([
            'slug' => 'gaming',
            'name' => 'Gaming',
            'sort_order' => 1,
        ]);

        $groupId = $this->repository->upsertGroup([
            'slug' => 'notebook',
            'name' => 'Notebook',
            'sort_order' => 2,
        ]);

        $tagId = $this->repository->upsertTag([
            'slug' => 'wifi-7',
            'name' => 'WiFi 7',
            'sort_order' => 3,
        ]);

        $this->repository->assignUseCase('hash-1', $useCaseId, 'manual', true, 95);
        $this->repository->assignGroup('hash-1', $groupId, 'manual', false, 90);
        $this->repository->assignTag('hash-1', $tagId, 'manual', false, 85);

        $bundle = $this->repository->getByCanonicalHash('hash-1');

        self::assertCount(1, $bundle['use_cases']);
        self::assertCount(1, $bundle['groups']);
        self::assertCount(1, $bundle['tags']);

        self::assertSame('Gaming', $bundle['use_cases'][0]['name']);
        self::assertSame('Notebook', $bundle['groups'][0]['name']);
        self::assertSame('WiFi 7', $bundle['tags'][0]['name']);

        self::assertSame(95, $bundle['use_cases'][0]['confidence']);
        self::assertSame(90, $bundle['groups'][0]['confidence']);
        self::assertSame(85, $bundle['tags'][0]['confidence']);
    }

    public function testClearCanonicalRemovesMaps(): void
    {
        Functions\when('current_time')->justReturn('2026-05-20 10:00:00');

        $useCaseId = $this->repository->upsertUseCase([
            'slug' => 'office',
            'name' => 'Office',
        ]);

        $this->repository->assignUseCase('hash-2', $useCaseId, 'manual', true, 100);

        self::assertCount(1, $this->db->tables['wp_apify_product_use_case_map']);

        $this->repository->clearCanonical('hash-2');

        self::assertCount(0, $this->db->tables['wp_apify_product_use_case_map']);
    }
}
