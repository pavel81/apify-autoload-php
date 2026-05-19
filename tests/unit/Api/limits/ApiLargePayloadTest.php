<?php

declare(strict_types=1);

namespace Tests\Unit\Api\Limits;

use Brain\Monkey\Functions;
use Panda\Apify\Api\ApifyClient;
use PHPUnit\Framework\TestCase;

final class ApiLargePayloadTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        \Brain\Monkey\setUp();
    }

    protected function tearDown(): void
    {
        \Brain\Monkey\tearDown();
        parent::tearDown();
    }

    public function testLargePayloadIsEncodedAndSent(): void
    {
        $payload = [
            'actor' => 'big-payload-test',
            'items' => array_map(
                static fn (int $i): array => [
                    'id' => $i,
                    'name' => str_repeat('x', 120),
                    'description' => str_repeat('payload-', 50),
                ],
                range(1, 250)
            ),
        ];

        Functions\when('is_wp_error')->justReturn(false);

        Functions\when('wp_json_encode')->alias(
            static fn (mixed $value): string => json_encode(
                $value,
                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
            ) ?: ''
        );

        Functions\expect('wp_remote_request')
            ->once()
            ->andReturn([
                'response' => ['code' => 200],
                'body' => '{"ok":true}',
            ]);

        Functions\when('wp_remote_retrieve_response_code')->justReturn(200);
        Functions\when('wp_remote_retrieve_body')->justReturn('{"ok":true}');

        $client = new ApifyClient('test-token', 'https://api.apify.com/v2');
        $result = $client->runActor('example-actor', $payload);

        $this->assertIsArray($result);
        $this->assertSame(['ok' => true], $result);
    }
}
