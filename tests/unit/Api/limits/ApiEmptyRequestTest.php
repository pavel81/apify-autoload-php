<?php
// tests/api/limits/ApiEmptyRequestTest.php

declare(strict_types=1);
namespace Tests\Api\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiEmptyRequestTest extends TestCase
{
    public function testEmpty(): void
    {
        $api = new ApiHandler();

        $res = $api->handle([]);

        $this->assertIsArray($res);
    }
}
