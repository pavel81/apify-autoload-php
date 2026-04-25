<?php

declare(strict_types=1);

namespace Panda\Apify\Feeds;

use Panda\Apify\Security\RequestSigner;
use WP_Error;
use WP_Http_Cookie;
use WP_HTTP_Requests_Response;
use WpOrg\Requests\Utility\CaseInsensitiveDictionary;

if (!defined('ABSPATH')) {
    exit;
}

final class FeedClient
{
    private string $token;
    private ?string $secret;

    public function __construct(string $token, ?string $secret = null)
    {
        $this->token  = $token;
        $this->secret = $secret;
    }

    /**
     * @param array<string, mixed> $input
     * @return array<string, mixed>|WP_Error
     */
    public function runActor(string $actorId, array $input = []): array|WP_Error
    {
        $url = "https://api.apify.com/v2/acts/{$actorId}/runs?token={$this->token}";

        $body = json_encode($input);
        if ($body === false) {
            return new WP_Error('json_error', 'JSON encode failed');
        }

       /** @var array<string, non-empty-string> $headers */
        $headers = [
            'Content-Type' => 'application/json',
        ];

        if ($this->secret) {
            $signed = RequestSigner::sign($body, $this->secret);

            $headers['X-Signature'] = $signed['signature'];
            $headers['X-Nonce']     = $signed['nonce'];
            $headers['X-Timestamp'] = (string) $signed['timestamp'];
        }

        return $this->postWithRetry($url, $headers, $body);
    }

    /**
     * @return array<int, array<string, mixed>>|WP_Error
     */
    public function getDatasetItemsPage(
        string $datasetId,
        int $offset = 0,
        int $limit = 200
    ): array|WP_Error {
        $url = sprintf(
            'https://api.apify.com/v2/datasets/%s/items?clean=true&offset=%d&limit=%d',
            $datasetId,
            $offset,
            $limit
        );

        $result = $this->getWithRetry($url);

        if (is_wp_error($result)) {
            return $result;
        }

        if (!is_array($result) || !array_is_list($result)) {
            return new WP_Error('invalid_dataset', 'Invalid dataset response');
        }

        /** @var array<int, array<string, mixed>> $result */
        return $result;
    }

    /**
     * @return \Generator<int, array<int, array<string, mixed>>>
     */
    public function iterateDataset(string $datasetId, int $limit = 200): \Generator
    {
        $offset = 0;

        while (true) {
            $items = $this->getDatasetItemsPage($datasetId, $offset, $limit);

            if (is_wp_error($items) || $items === []) {
                break;
            }

            yield $items;

            $offset += $limit;
        }
    }

    /**
     * @param array<string, non-empty-string> $headers
     * @return array<string, mixed>|WP_Error
     */
    private function postWithRetry(string $url, array $headers, string $body): array|WP_Error
    {
        $attempts = 3;

        for ($i = 0; $i < $attempts; $i++) {
            $response = wp_remote_post($url, [
                'timeout' => 30,
                'headers' => $headers,
                'body'    => $body,
            ]);

            if (!is_wp_error($response)) {
                return $this->decode($response);
            }

            usleep(200000);
        }

        return new WP_Error('http_retry_failed', 'All retries failed');
    }

    /**
     * @return array<string, mixed>|WP_Error
     */
    private function getWithRetry(string $url): array|WP_Error
    {
        $attempts = 3;

        for ($i = 0; $i < $attempts; $i++) {
            $response = wp_remote_get($url, [
                'timeout' => 30,
            ]);

            if (!is_wp_error($response)) {
                return $this->decode($response);
            }

            usleep(200000);
        }

        return new WP_Error('http_retry_failed', 'All retries failed');
    }

   /**
 * @param array<string, mixed>
 *     | array<string, array<int|string, mixed>>
 *     | string
 *     | WP_HTTP_Requests_Response
 *     | CaseInsensitiveDictionary
 *     | null $response
 *
 * @return array<string, mixed>|WP_Error
 */
private function decode(
    array|string|WP_HTTP_Requests_Response|CaseInsensitiveDictionary|null $response
): array|WP_Error
{
        $body = wp_remote_retrieve_body($response);

        if (!is_string($body) || $body === '') {
            return new WP_Error('empty_body', 'Empty response');
        }

        $json = json_decode($body, true);

        if (!is_array($json)) {
            return new WP_Error('invalid_json', 'Invalid JSON');
        }

        /** @var array<string, mixed> $json */
        return $json;
    }
}
