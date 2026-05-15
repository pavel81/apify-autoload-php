<?php

declare(strict_types=1);

namespace Panda\Apify;

use Panda\Apify\Admin\FeedSettingsPage;
use Panda\Apify\Admin\LogsPage;
use Panda\Apify\Api\Routes\ProductRoute;
use Panda\Apify\Cron\CronScheduler;
use Panda\Apify\Presentation\ProductPage;
use Panda\Apify\Shortcodes\ProductShortcode;
use Panda\Apify\Api\Controllers\DebugCanonicalController;
use Panda\Api\Routes\RoutesBootstrap;
use Panda\Api\ClickTracker;
use Panda\Api\EventIngestEndpoint;

final class Bootstrap
{
    public static function init(): void
    {
        self::defineConstants();

        add_action('init', [self::class, 'boot']);
    }

    private static function defineConstants(): void
    {
        if (!defined('APIFY_PATH')) {
            define('APIFY_PATH', dirname(__DIR__) . '/');
        }

        if (!defined('APIFY_URL') && defined('APIFY_FILE')) {
            define('APIFY_URL', plugin_dir_url(APIFY_FILE));
        }
    }

    public static function boot(): void
    {
        self::registerFeatures();
    }

    private static function registerFeatures(): void
    {
        // CRON
        if (function_exists('apify_register_cron')) {
            apify_register_cron();
        }

        add_filter('cron_schedules', static function (array $schedules): array {
            $schedules['five_minutes'] = [
                'interval' => 300,
                'display'  => 'Every 5 minutes',
            ];
            return $schedules;
        });

        register_activation_hook(APIFY_FILE, static function (): void {
            \Panda\Apify\Infrastructure\Database\Schema::install();
        });

        add_action('init', static function (): void {
            \Panda\Apify\Infrastructure\Database\Migrations::run();
        });

        \Panda\Apify\Cron\ApifySyncRunner::init();
        \Panda\Apify\Cron\ApifySyncRunner::schedule();

        add_action('rest_api_init', [ProductRoute::class, 'register']);

        // SHORTCODES
        if (function_exists('apify_register_shortcodes')) {
            apify_register_shortcodes();
        }
        add_action('init', [ProductShortcode::class, 'register']);

        // rewrite
        add_action('init', static function (): void {
            add_rewrite_rule(
                '^produkt/([^/]+)/?$',
                'index.php?apify_product=$matches[1]',
                'top'
            );
        });
        
        
        'permission_callback' -> function () {
    // jen admin + debug režim + localhost
    $isLocal = in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1'], true);

    return $isLocal
        && defined('WP_DEBUG') && WP_DEBUG
        && current_user_can('manage_options');
}
        //Panda\Apify\Security\JsonCanonicalizer
'permission_callback' => function () {
    return current_user_can('manage_options');
}

//security, admin
        \Panda\Apify\Admin\ApifySecurityPage::register();
        // query var
        add_filter('query_vars', static function (array $vars): array {
            $vars[] = 'apify_product';
            return $vars;
        });

        // router
        add_action('init', [ProductPage::class, 'boot']);

        // ADMIN
        if (is_admin() && function_exists('apify_register_admin')) {
            apify_register_admin();
        }

        FeedSettingsPage::register();
        CronScheduler::register();
        CronScheduler::schedule();
        LogsPage::register();
        
        add_action('init', function (): void {
    RoutesBootstrap::init();
});

add_action('init', function (): void {
    ClickTracker::init();
});

add_action('rest_api_init', function (): void {
    EventIngestEndpoint::init();
});
    }
}
