<?php
// tests/api/security/ApiReplayAttackTest.php

declare(strict_types=1);
namespace Tests\Api\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiReplayAttackTest extends TestCase
{
    public function testReplay(): void
    {
        $api = new ApiHandler();

        $req = [
            'nonce' => 'fixed',
            'timestamp' => time(),
        ];

        $first = $api->handle($req);
        $second = $api->handle($req);

        $this->assertTrue($first['success'] ?? false);
        $this->assertFalse($second['success'] ?? true);
    }
}
