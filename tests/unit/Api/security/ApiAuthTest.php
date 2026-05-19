<?php
// tests/api/security/ApiAuthTest.php

declare(strict_types=1);
namespace Tests\Api\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiAuthTest extends TestCase
{
    public function testMissingAuth(): void
    {
        $api = new ApiHandler();

        $res = $api->handle([]);
        $this->assertFalse($res['success'] ?? true);
    }
}
