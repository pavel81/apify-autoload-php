<?php

declare(strict_types=1);

namespace Panda\Apify\Cron;

use Panda\Apify\Api\ApifyClient;;
use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\Services\Apify_Sync_Service;
use wpdb;
use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

final class Apify_Feed_Runner
{
    public const HOOK = 'apify_run_feeds';

    public static function register(): void
    {
        add_action(self::HOOK, [self::class, 'run']);
    }

    public static function schedule(): void
    {
        if (!wp_next_scheduled(self::HOOK)) {
            wp_schedule_event(time() + 60, 'hourly', self::HOOK);
        }
    }

    public static function unschedule(): void
    {
        $ts = wp_next_scheduled(self::HOOK);
        if ($ts) {
            wp_unschedule_event($ts, self::HOOK);
        }
    }

    public static function run(): void
    {
        global $wpdb;
        /** @var wpdb $wpdb */

        $feeds = self::getActiveFeeds($wpdb);

        if ($feeds === []) {
            return;
        }

        $token = (string) get_option('apify_token', '');
        if ($token === '') {
            self::log($wpdb, 'error', 'Missing Apify token');
            return;
        }

        $client = new ApifyClient($token);
        $repo   = new ProductRepository($wpdb);

        foreach ($feeds as $feed) {
            self::runSingleFeed($wpdb, $client, $repo, $feed);
        }
    }

    /**
     * @param array<string, mixed> $feed
     */
    private static function runSingleFeed(
        wpdb $db,
        ApifyClient $client,
        ProductRepository $repo,
        array $feed
    ): void {
        $feedId  = (int) ($feed['id'] ?? 0);
        $actorId = (string) ($feed['actor_id'] ?? '');
        $shop    = (string) ($feed['shop'] ?? '');

        if ($actorId === '') {
            self::fail($db, $feedId, 'Missing actor_id');
            return;
        }

        $run = $client->runActor($actorId);

        if (is_wp_error($run)) {
            self::fail($db, $feedId, $run->get_error_message());
            return;
        }

        $datasetId = (string) ($run['data']['defaultDatasetId'] ?? '');

        if ($datasetId === '') {
            self::fail($db, $feedId, 'Missing datasetId');
            return;
        }

        $items = $client->getDatasetItems($datasetId);

        if (is_wp_error($items)) {
            self::fail($db, $feedId, $items->get_error_message());
            return;
        }

        // 👉 tady používáš svůj existující sync
        $result = Apify_Sync_Service::sync_feed($items, $shop);

        self::success($db, $feedId, $result);
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private static function getActiveFeeds(wpdb $db): array
    {
        $table = $db->prefix . 'apify_feeds';

        /** @var array<int, array<string, mixed>> $rows */
        $rows = $db->get_results(
            "SELECT * FROM {$table} WHERE is_active = 1",
            ARRAY_A
        );

        return $rows ?: [];
    }

    /**
     * @param array<string, mixed> $result
     */
    private static function success(wpdb $db, int $feedId, array $result): void
    {
        $table = $db->prefix . 'apify_feeds';

        $db->update(
            $table,
            [
                'last_run_at' => current_time('mysql'),
                'last_status' => 'OK: ' . json_encode($result),
            ],
            ['id' => $feedId]
        );
    }

    private static function fail(wpdb $db, int $feedId, string $error): void
    {
        $table = $db->prefix . 'apify_feeds';

        $db->update(
            $table,
            [
                'last_run_at' => current_time('mysql'),
                'last_status' => 'ERROR: ' . $error,
            ],
            ['id' => $feedId]
        );

        self::log($db, 'error', $error, ['feed_id' => $feedId]);
    }

    /**
     * @param array<string, mixed> $context
     */
    private static function log(wpdb $db, string $type, string $message, array $context = []): void
    {
        $table = $db->prefix . 'apify_logs';

        $db->insert($table, [
            'type'       => $type,
            'message'    => $message,
            'context'    => wp_json_encode($context),
            'created_at' => current_time('mysql'),
        ]);
    }
}
