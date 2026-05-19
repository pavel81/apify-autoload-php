<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\WordPress;

use Panda\Apify\Cron\ApifySyncRunner;
use Panda\Apify\Infrastructure\Database\Migrations;

final class SystemRegistrar
{
    public static function register(): void
    {
        if (function_exists('apify_register_cron')) {
            apify_register_cron();
        }

        add_filter('cron_schedules', static function (array $schedules): array {
            $schedules['five_minutes'] = [
                'interval' => 300,
                'display' => 'Every 5 minutes',
            ];

            return $schedules;
        });

        add_action('init', static function (): void {
            Migrations::run();
        });

        add_action('init', static function (): void {
            ApifySyncRunner::init();
        });

        add_action('init', static function (): void {
            ApifySyncRunner::schedule();
        });
    }
}
