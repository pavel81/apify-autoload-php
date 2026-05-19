<?php
// tests/api/security/ApiInvalidMethodTest.php

declare(strict_types=1);
namespace Tests\Api\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiInvalidMethodTest extends TestCase
{
    public function testInvalidMethod(): void
    {
        $api = new ApiHandler();

        $res = $api->handle(['method' => 'DELETE_ALL']);

        $this->assertFalse($res['success'] ?? true);
    }
}
