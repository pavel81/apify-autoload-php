<?php

declare(strict_types=1);

namespace Tests\Unit\Api\Routes;

use Brain\Monkey\Functions;
use Panda\Apify\Api\Routes\EventIngestEndpoint;
use PHPUnit\Framework\TestCase;

final class EventIngestEndpointTest extends TestCase
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

    public function testInitRegistersRestRoute(): void
    {
        $restApiCallback = null;
        $capturedRoute = null;

        Functions\expect('add_action')
            ->once()
            ->with(
                'rest_api_init',
                \Mockery::on(static function ($callback) use (&$restApiCallback): bool {
                    $restApiCallback = $callback;

                    return is_callable($callback);
                })
            );

        Functions\when('register_rest_route')->alias(
            static function (string $namespace, string $route, array $args) use (&$capturedRoute): void {
                $capturedRoute = [
                    'namespace' => $namespace,
                    'route' => $route,
                    'args' => $args,
                ];
            }
        );

        EventIngestEndpoint::init();

        self::assertIsCallable($restApiCallback);

        $restApiCallback();

        self::assertIsArray($capturedRoute);
        self::assertSame('panda/v1', $capturedRoute['namespace']);
        self::assertSame('/event', $capturedRoute['route']);
        self::assertSame('POST', $capturedRoute['args']['methods'] ?? null);
        self::assertSame([EventIngestEndpoint::class, 'handle'], $capturedRoute['args']['callback'] ?? null);
    }
}
