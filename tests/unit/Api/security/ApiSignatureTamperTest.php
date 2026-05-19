<?php
// tests/api/security/ApiSignatureTamperTest.php

declare(strict_types=1);
namespace Tests\Api\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Api\ApiHandler;

final class ApiSignatureTamperTest extends TestCase
{
    public function testTamperedPayload(): void
    {
        $api = new ApiHandler();

        $payload = ['data' => 'ok'];
        $tampered = ['data' => 'hacked'];

        $res = $api->handle([
            'payload' => $tampered,
            'signature' => 'valid-for-original',
        ]);

        $this->assertFalse($res['success'] ?? true);
    }
}
