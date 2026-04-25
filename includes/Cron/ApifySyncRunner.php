<?php

declare(strict_types=1);

namespace Panda\Apify\Cron;

use Panda\Apify\Services\ApifySyncService;

if (!defined('ABSPATH')) {
    exit;
}

final class ApifySyncRunner
{
    private const CRON_HOOK = 'apify_sync_event';
    private const LAST_RUN_OPTION = 'apify_last_sync';
    private const MAX_DELAY = 600; // 10 min fallback

    public static function init(): void
    {
        add_action(self::CRON_HOOK, [self::class, 'run']);

        // fallback při requestu
        add_action('init', [self::class, 'maybe_run_fallback']);
    }

    public static function schedule(): void
    {
        if (!wp_next_scheduled(self::CRON_HOOK)) {
            wp_schedule_event(time(), 'five_minutes', self::CRON_HOOK);
        }
    }

    public static function run(): void
    {
        $result = ApifySyncService::import_all_feeds();

        update_option(self::LAST_RUN_OPTION, time());

        // volitelné logování
        if (function_exists('error_log')) {
            error_log('[ApifySync] run: ' . json_encode($result));
        }
    }

    public static function maybe_run_fallback(): void
    {
        $last = (int) get_option(self::LAST_RUN_OPTION, 0);

        if (time() - $last > self::MAX_DELAY) {
            do_action(self::CRON_HOOK);
        }
    }
}
