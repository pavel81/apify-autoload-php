<?php
// tests/api/limits/ApiInvalidDataTypesTest.php

declare(strict_types=1);
namespace Tests\Api\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiInvalidDataTypesTest extends TestCase
{
    public function testWeirdTypes(): void
    {
        $api = new ApiHandler();

        $cases = [
            null,
            true,
            123,
            fopen('php://memory', 'r'),
        ];

        foreach ($cases as $c) {
            $res = $api->handle(['data' => $c]);
            $this->assertIsArray($res);
        }
    }
}
