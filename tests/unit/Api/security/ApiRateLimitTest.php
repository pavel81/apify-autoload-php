<?php
// tests/api/security/ApiRateLimitTest.php

declare(strict_types=1);
namespace Tests\Api\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiRateLimitTest extends TestCase
{
    public function testFlood(): void
    {
        $api = new ApiHandler();

        $fails = 0;

        for ($i = 0; $i < 50; $i++) {
            $res = $api->handle(['ip' => '1.1.1.1']);
            if (!($res['success'] ?? false)) {
                $fails++;
            }
        }

        $this->assertGreaterThan(0, $fails);
    }
}
