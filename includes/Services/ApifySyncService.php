<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Api\ApifyClient;
use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\DTO\ApifyProductDto;
use wpdb;
use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

final class ApifySyncService
{
    private wpdb $db;
    private ApifyClient $client;
    private ProductRepository $repo;

    public function __construct(
        wpdb $db,
        ApifyClient $client,
        ProductRepository $repo
    ) {
        $this->db = $db;
        $this->client = $client;
        $this->repo = $repo;
    }

    public function runFeed(int $feedId): void
    {
        $feed = $this->getFeed($feedId);

        if ($feed === null) {
            $this->log('error', 'Feed not found', ['feed_id' => $feedId]);
            return;
        }

        if (!(bool)$feed['is_active']) {
            return;
        }

        $actorId = (string)($feed['actor_id'] ?? '');

        if ($actorId === '') {
            $this->log('error', 'Missing actor_id', ['feed_id' => $feedId]);
            return;
        }

        /** @var array<string,mixed>|WP_Error $run */
        $run = $this->client->runActor($actorId);

        if (is_wp_error($run)) {
            $this->failFeed($feedId, $run->get_error_message());
            return;
        }

        /** @var array<string,mixed> $run */
        $datasetId = (string)($run['data']['defaultDatasetId'] ?? '');

        if ($datasetId === '') {
            $this->failFeed($feedId, 'Missing datasetId');
            return;
        }

        /** @var array<string,mixed>|WP_Error $items */
        $items = $this->client->getDatasetItems($datasetId);

        if (is_wp_error($items)) {
            $this->failFeed($feedId, $items->get_error_message());
            return;
        }

        if (!is_array($items)) {
            $this->failFeed($feedId, 'Invalid dataset items');
            return;
        }

        $processed = 0;

        foreach ($items as $raw) {
            if (!is_array($raw)) {
                continue;
            }

            // fromArray() vždy vrací ApifyProductDto › instanceof je zbyteèný
            $dto = ApifyProductDto::fromArray($raw);

            $hash = $this->makeCanonicalHash($dto);

            $productId = $this->repo->upsertProduct([
                'external_id'    => $dto->externalId,
                'sku'            => $dto->sku,
                'shop'           => $dto->shop,
                'region'         => $feed['region'],
                'domain'         => $feed['domain'],
                'title'          => $dto->title,
                'url'            => '',
                'canonical_hash' => $hash,
                'brand'          => $dto->manufacturer,
                'model'          => '',
            ]);

            $this->repo->insertPrice(
                $productId,
                $dto->shop,
                $feed['region'],
                $dto->sku,
                $dto->price,
                $dto->currency
            );

            $this->repo->mapCanonical(
                $productId,
                $hash,
                $dto->shop,
                $feed['region']
            );

            $processed++;
        }

        $this->successFeed($feedId, $processed);
    }

    /**
     * @return array<string, mixed>|null
     */
    private function getFeed(int $feedId): ?array
    {
        $table = $this->db->prefix . 'apify_feeds';

        $prepared = $this->db->prepare(
            "SELECT * FROM {$table} WHERE id = %d LIMIT 1",
            $feedId
        );

        if (!is_string($prepared)) {
            return null;
        }

        /** @var array<string,mixed>|null $row */
        $row = $this->db->get_row($prepared, ARRAY_A);

        return $row ?: null;
    }

    /**
     * @return array<int, int>
     */
    public static function import_all_feeds(): array
    {
        global $wpdb;

        $service = new self(
            $wpdb,
            new ApifyClient(),
            new ProductRepository($wpdb)
        );

        /** @var array<int, array{id:int}> $feeds */
        $feeds = $wpdb->get_results(
            "SELECT id FROM {$wpdb->prefix}apify_feeds WHERE is_active = 1",
            ARRAY_A
        ) ?? [];

        $results = [];

        foreach ($feeds as $feed) {
            $service->runFeed((int)$feed['id']);
            $results[] = (int)$feed['id'];
        }

        return $results;
    }

    private function makeCanonicalHash(ApifyProductDto $dto): string
    {
        $base = strtolower(trim(
            $dto->title . '|' . $dto->manufacturer . '|' . $dto->sku
        ));

        return hash('sha256', $base);
    }

    private function successFeed(int $feedId, int $count): void
    {
        $this->updateFeed($feedId, [
            'last_run_at' => current_time('mysql'),
            'last_status' => 'OK (' . $count . ')',
        ]);
    }

    private function failFeed(int $feedId, string $message): void
    {
        $this->updateFeed($feedId, [
            'last_run_at' => current_time('mysql'),
            'last_status' => 'ERROR: ' . $message,
        ]);

        $this->log('error', $message, ['feed_id' => $feedId]);
    }

    /**
     * @param array<string, mixed> $data
     */
    private function updateFeed(int $feedId, array $data): void
    {
        $table = $this->db->prefix . 'apify_feeds';

        $this->db->update(
            $table,
            $data,
            ['id' => $feedId]
        );
    }

    /**
     * @param array<string, mixed> $context
     */
    private function log(string $type, string $message, array $context = []): void
    {
        $table = $this->db->prefix . 'apify_logs';

        $this->db->insert($table, [
            'type'       => $type,
            'message'    => $message,
            'context'    => wp_json_encode($context),
            'created_at' => current_time('mysql'),
        ]);
    }
}
