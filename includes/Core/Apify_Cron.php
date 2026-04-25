<?php

declare(strict_types=1);


namespace Panda\Apify\Core;

use Panda\Apify\Cache\Apify_Feed_Loader;
use Panda\Apify\Services\Apify_Sync_Service;

if (!defined('ABSPATH')) {
    exit;
}

class Apify_Cron
{
    public static function register_hooks(): void
    {
        add_action('apify_cron_tick', [self::class, 'run']);
        add_action('rest_api_init', [self::class, 'register_rest_route']);
    }

    public static function schedule(): void
    {
        $mode = (string) get_option('apify_cron_mode', 'wp');

        if ($mode === 'wp') {
            if (!wp_next_scheduled('apify_cron_tick')) {
                wp_schedule_event(time() + 60, 'hourly', 'apify_cron_tick');
            }
        } else {
            wp_clear_scheduled_hook('apify_cron_tick');
        }
    }

  public static function run(): void
{
    if (get_transient('apify_cron_lock')) {
        return;
    }

    set_transient('apify_cron_lock', 1, 15 * MINUTE_IN_SECONDS);

    $summary = [
        'ok'         => true,
        'feeds'      => [],
        'started_at' => current_time('mysql'),
    ];

    try {
        $feeds = Apify_Feed_Loader::get_due_feeds();

        foreach ($feeds as $feed) {
            $url   = (string) ($feed['url'] ?? '');
            $shop  = (string) ($feed['shop'] ?? 'default');
            $ttl   = max(60, (int) ($feed['cache_ttl'] ?? 300));

            if ($url === '') {
                continue;
            }

            // oprava: load() nepodporuje force
            $loaded = Apify_Feed_Loader::load(
                url: $url,
                shop: $shop,
                ttl: $ttl
            );

            if (!empty($loaded['ok']) && !empty($loaded['data']) && is_array($loaded['data'])) {

                // normalize() mùže vracet jednu položku nebo více › flatten
$normalized = [];

foreach ($loaded['data'] as $row) {
    $item = Apify_Feed_Loader::normalize($row);

    // normalize() mùže vracet jednu položku nebo více › flatten
    if (array_is_list($item) && isset($item[0]) && is_array($item[0])) {
        // normalize() vrátilo pole položek
        foreach ($item as $sub) {
            // zajistit správný typ: array<string,mixed>
            $normalized[] = (array) $sub;
        }
    } else {
        // normalize() vrátilo jednu položku
        $normalized[] = (array)$item;
    }
}
/**
 * @var array<int, array<string, mixed>> $normalized
 */ 
               $result = Apify_Sync_Service::sync_feed($normalized, $shop);

                Apify_Feed_Loader::mark_feed_run($url, $shop, [
                    'ok'     => true,
                    'count'  => count($normalized),
                    'cached' => !empty($loaded['cached']),
                    'sync'   => $result,
                ]);

                $summary['feeds'][] = [
                    'shop'   => $shop,
                    'url'    => $url,
                    'ok'     => true,
                    'count'  => count($normalized),
                    'cached' => !empty($loaded['cached']),
                    'sync'   => $result,
                ];

            } else {

                Apify_Feed_Loader::mark_feed_run($url, $shop, [
                    'ok'    => false,
                    'error' => $loaded['error'] ?? 'Feed load failed',
                ]);

                $summary['feeds'][] = [
                    'shop'  => $shop,
                    'url'   => $url,
                    'ok'    => false,
                    'error' => $loaded['error'] ?? 'Feed load failed',
                ];
            }

            $sleep = (int) get_option('apify_cron_sleep', 2);
            if ($sleep > 0 && $sleep <= 10) {
                sleep($sleep);
            }
        }

        update_option('apify_last_cron', current_time('mysql'));
        update_option('apify_last_sync_result', $summary);

        if (get_option('apify_log_enabled', '1') === '1') {
            error_log('[Apify] Cron run: ' . wp_json_encode($summary));
        }

    } catch (\Throwable $e) {
        error_log('[Apify][CRON ERROR] ' . $e->getMessage());
    }

    delete_transient('apify_cron_lock');
}


    public static function deactivate(): void
    {
        wp_clear_scheduled_hook('apify_cron_tick');
        delete_transient('apify_cron_lock');
    }

    public static function register_rest_route(): void
    {
        register_rest_route('apify/v1', '/cron', [
            'methods'             => ['GET', 'POST'],
            'permission_callback' => '__return_true',
            'callback'            => [self::class, 'run_external'],
        ]);
    }

    public static function run_external(\WP_REST_Request $request): \WP_REST_Response
    {
        $secret = (string) get_option('apify_cron_secret', '');
        $given  = (string) ($request->get_param('secret') ?? '');

        if ($secret === '' || $given !== $secret) {
            return new \WP_REST_Response([
                'ok'    => false,
                'error' => 'forbidden',
            ], 403);
        }

        self::run();

        return new \WP_REST_Response([
            'ok'   => true,
            'time' => current_time('mysql'),
        ], 200);
    }
}
