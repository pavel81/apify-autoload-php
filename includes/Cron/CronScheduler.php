<?php

declare(strict_types=1);

namespace Panda\Apify\Cron;

if (!defined('ABSPATH')) {
    exit;
}

final class CronScheduler
{
    public const HOOK = 'apify_feed_cron';

    public static function register(): void
    {
        add_filter('cron_schedules', [self::class, 'addInterval']);
        add_action(self::HOOK, [self::class, 'run']);
    }

    public static function schedule(): void
    {
        /** @var int|false $next */
        $next = wp_next_scheduled(self::HOOK);

        if ($next === false) {
            wp_schedule_event(time(), self::getIntervalKey(), self::HOOK);
        }
    }

    public static function unschedule(): void
    {
        /** @var int|false $timestamp */
        $timestamp = wp_next_scheduled(self::HOOK);

        if ($timestamp !== false) {
            wp_unschedule_event($timestamp, self::HOOK);
        }
    }

    public static function reschedule(): void
    {
        self::unschedule();
        self::schedule();
    }

    /**
     * @param array<string, array{interval:int, display:string}> $schedules
     * @return array<string, array{interval:int, display:string}>
     */
    public static function addInterval(array $schedules): array
    {
        $minutes = (int) get_option('apify_cron_interval', 5);

        $schedules['apify_custom'] = [
            'interval' => $minutes * 60,
            'display'  => 'Apify custom interval',
        ];

        return $schedules;
    }

    private static function getIntervalKey(): string
    {
        return 'apify_custom';
    }

    public static function run(): void
    {
        // WP-Cron nebo serverový cron › obojí spustí tento hook
        do_action('apify_run_feeds');
    }
}
