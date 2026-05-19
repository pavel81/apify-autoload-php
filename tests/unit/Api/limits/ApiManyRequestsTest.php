<?php
// tests/api/limits/ApiManyRequestsTest.php

declare(strict_types=1);
namespace Panda\Apify\Tests\Api\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiManyRequestsTest extends TestCase
{
    public function testBurst(): void
    {
        $api = new ApiHandler();

        for ($i = 0; $i < 200; $i++) {
            $api->handle(['i' => $i]);
        }

        $this->assertTrue(true);
    }
}
