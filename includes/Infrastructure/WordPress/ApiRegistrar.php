<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\WordPress;

use Panda\Apify\Api\ClickTracker;
use Panda\Apify\Api\Routes\EventIngestEndpoint;
use Panda\Apify\Api\Routes\ProductRoute;
use Panda\Apify\Api\Routes\RoutesBootstrap;

final class ApiRegistrar
{
    public static function register(): void
    {
        add_action('rest_api_init', [ProductRoute::class, 'register']);

        add_action('init', static function (): void {
            RoutesBootstrap::init();
        });

        add_action('init', static function (): void {
            ClickTracker::init();
        });

        add_action('rest_api_init', static function (): void {
            EventIngestEndpoint::init();
        });
    }
}
