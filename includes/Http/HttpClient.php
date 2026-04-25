<?php

declare(strict_types=1);

namespace Panda\Apify\Http;

use GuzzleHttp\Client;

class HttpClient
{
    private Client $client;

    public function __construct(float $timeout = 5.0)
    {
        $this->client = new Client([
            'timeout' => $timeout,
            'http_errors' => true,
        ]);
    }

/**
 * @param array<string, non-empty-string> $headers
 * @return array<string, mixed>
 */
public function getJson(string $url, array $headers = []): array
{
    return $this->requestJson('GET', $url, [
        'headers' => $headers,
    ]);
}

/**
 * @param array<string, mixed> $body
 * @param array<string, non-empty-string> $headers
 * @return array<string, mixed>
 */
public function postJson(string $url, array $body, array $headers = []): array
{
    return $this->requestJson('POST', $url, [
        'headers' => $headers,
        'json' => $body,
    ]);
}

    /**
     * @param array<string, mixed> $options
     * @return array<string, mixed>
     * @throws \RuntimeException
     */
    private function requestJson(string $method, string $url, array $options = []): array
    {
        $attempts = 0;
        $maxAttempts = 3;

        while ($attempts < $maxAttempts) {
            try {
                $response = $this->client->request($method, $url, $options);

                $content = (string) $response->getBody();
                $data = json_decode($content, true);

                if (!is_array($data)) {
                    throw new \RuntimeException('Invalid JSON response');
                }

                return $data;

            } catch (\Throwable $e) {
                $attempts++;

                error_log('[HttpClient] ' . $e->getMessage());

                if ($attempts >= $maxAttempts) {
                    throw new \RuntimeException(
                        'HTTP request failed after retries: ' . $e->getMessage(),
                        0,
                        $e
                    );
                }

                usleep(200000 * $attempts); // 200ms, 400ms, 600ms
            }
        }

        throw new \RuntimeException('HTTP request failed');
    }
}
