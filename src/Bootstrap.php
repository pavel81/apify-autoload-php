<?php

declare(strict_types=1);

namespace Panda\Apify;

use Panda\Apify\Infrastructure\WordPress\AdminRegistrar;
use Panda\Apify\Infrastructure\WordPress\ApiRegistrar;
use Panda\Apify\Infrastructure\WordPress\ContentRegistrar;
use Panda\Apify\Infrastructure\WordPress\SystemRegistrar;

final class Bootstrap
{
    public static function init(): void
    {
        self::defineConstants();
        self::boot();
    }

    private static function boot(): void
    {
        SystemRegistrar::register();
        ContentRegistrar::register();
        ApiRegistrar::register();
        AdminRegistrar::register();
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
}
