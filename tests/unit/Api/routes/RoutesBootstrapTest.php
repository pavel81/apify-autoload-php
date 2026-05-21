<?php

declare(strict_types=1);

namespace Tests\Unit\Api\Routes;

use PHPUnit\Framework\TestCase;

final class RoutesBootstrapTest extends TestCase
{
    public function testInitFansOutToAllRouteRegistrars(): void
    {
        $source = file_get_contents(
            __DIR__ . '/../../../../includes/Api/Routes/RoutesBootstrap.php'
        );

        self::assertIsString($source);
        self::assertStringContainsString('EventRoutes::register();', $source);
        self::assertStringContainsString('ClickRoutes::register();', $source);
        self::assertStringContainsString('PreferenceRoutes::register();', $source);
        self::assertStringContainsString('SearchRoutes::register();', $source);
    }
}
