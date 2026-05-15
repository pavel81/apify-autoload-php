<?php
declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

use Panda\Apify\Api\ClickTracker;

final class ClickRoutes
{
    public static function register(): void
    {
        add_action('init', static function (): void {
            ClickTracker::init();
        });
    }
}
