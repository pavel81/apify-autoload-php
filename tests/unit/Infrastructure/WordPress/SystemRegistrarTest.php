<?php

declare(strict_types=1);

namespace Tests\Unit\Infrastructure\WordPress;

use Brain\Monkey\Actions;
use Brain\Monkey\Filters;
use Panda\Apify\Infrastructure\WordPress\SystemRegistrar;
use PHPUnit\Framework\TestCase;

final class SystemRegistrarTest extends TestCase
{
    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testRegistersCronSchedule(): void
    {
        Filters\expectAdded('cron_schedules')->once();

        SystemRegistrar::register();

        $this->assertTrue(true);
    }

    public function testRegistersInitAction(): void
    {
        Actions\expectAdded('init')->times(3);

        SystemRegistrar::register();

        $this->assertTrue(true);
    }
}
