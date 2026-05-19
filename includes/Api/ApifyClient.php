<?php

declare(strict_types=1);

namespace Panda\Apify\Api;

use WP_Error;

final class ApifyClient
{
    private string $token;
    private string $baseUrl;

    public function __construct(?string $token = null, string $baseUrl = 'https://api.apify.com/v2')
    {
        $this->token = $token ?? (string) get_option('apify_api_token', '');
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    public function runActor(string $actorId, array $input = [])
    {
        $url = "{$this->baseUrl}/acts/{$actorId}/runs?token={$this->token}";

        return $this->request('POST', $url, [
            'json' => $input,
        ]);
    }

    public function getDatasetItems(string $datasetId, int $limit = 100)
    {
        $url = "{$this->baseUrl}/datasets/{$datasetId}/items?token={$this->token}&limit={$limit}&clean=true";

        $response = $this->request('GET', $url);

        if (is_wp_error($response)) {
            return $response;
        }

        return is_array($response) ? $response : [];
    }

    public function getRun(string $runId)
    {
        $url = "{$this->baseUrl}/actor-runs/{$runId}?token={$this->token}";

        return $this->request('GET', $url);
    }

    public function waitForRun(string $runId, int $timeoutSec = 60)
    {
        $start = time();

        do {
            $run = $this->getRun($runId);

            if (is_wp_error($run)) {
                return $run;
            }

            $status = (string) ($run['data']['status'] ?? '');

            if (in_array($status, ['SUCCEEDED', 'FAILED', 'ABORTED'], true)) {
                return $run;
            }

            sleep(2);
        } while ((time() - $start) < $timeoutSec);

        return new WP_Error('apify_timeout', 'Apify run timeout');
    }

    private function request(string $method, string $url, array $options = [])
    {
        $args = [
            'method'  => $method,
            'timeout' => 30,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ];

        if (isset($options['json'])) {
            $body = wp_json_encode($options['json']);
            $args['body'] = $body !== false ? $body : '';
        }

        $response = wp_remote_request($url, $args);

        if (is_wp_error($response)) {
            return $response;
        }

        $code = (int) wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);

        $data = json_decode($body, true);

        if ($code >= 400) {
            return new WP_Error('apify_error', 'Apify API error: ' . $code);
        }

        if (!is_array($data)) {
            return new WP_Error('apify_invalid_json', 'Invalid JSON response from Apify');
        }

        return $data;
    }
}
