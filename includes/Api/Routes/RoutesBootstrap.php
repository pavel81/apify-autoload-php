<?php
declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

final class RoutesBootstrap
{
    public static function init(): void
    {
        EventRoutes::register();
        ClickRoutes::register();
        PreferenceRoutes::register();
        SearchRoutes::register();
    }
}
