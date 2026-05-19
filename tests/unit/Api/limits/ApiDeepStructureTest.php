<?php
// tests/api/limits/ApiDeepStructureTest.php

declare(strict_types=1);
namespace Tests\Api\Limits;
use Panda\Apify\Api\ApiHandler;
use PHPUnit\Framework\TestCase;


final class ApiDeepStructureTest extends TestCase
{
    public function testDeepJson(): void
    {
        $api = new ApiHandler();

        $data = [];
        $ref = &$data;

        for ($i = 0; $i < 50; $i++) {
            $ref['x'] = [];
            $ref = &$ref['x'];
        }

        $res = $api->handle($data);

        $this->assertIsArray($res);
    }
}
