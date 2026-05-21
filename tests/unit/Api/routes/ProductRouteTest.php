<?php

declare(strict_types=1);

namespace Tests\Unit\Api\Routes;

use Brain\Monkey\Functions;
use Panda\Apify\Api\Routes\ProductRoute;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class ProductRouteTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        \Brain\Monkey\setUp();

        if (!defined('ABSPATH')) {
            define('ABSPATH', __DIR__);
        }
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testRegistersExpectedRestRoute(): void
    {
        $captured = null;

        Functions\when('register_rest_route')->alias(
            static function (string $namespace, string $route, array $args) use (&$captured): void {
                $captured = [
                    'namespace' => $namespace,
                    'route' => $route,
                    'args' => $args,
                ];

                throw new RuntimeException('stop-after-route-registration');
            }
        );

        try {
            ProductRoute::register();
            self::fail('ProductRoute::register() should stop after the first REST registration in this test.');
        } catch (RuntimeException $e) {
            self::assertSame('stop-after-route-registration', $e->getMessage());
        }

        self::assertIsArray($captured);
self::assertSame('apify/v1', $captured['namespace']);
self::assertSame('/product/(?P<hash>[a-z0-9]+)', $captured['route']);
self::assertSame('GET', $captured['args']['methods'] ?? null);

$callback = $captured['args']['callback'] ?? null;

self::assertIsArray($callback);
self::assertCount(2, $callback);
self::assertSame('detail', $callback[1]);

self::assertSame('__return_true', $captured['args']['permission_callback'] ?? null);
    }
}
