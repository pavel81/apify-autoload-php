<?php
declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

use Panda\Apify\Api\EventIngestEndpoint;

final class EventRoutes
{
    public static function register(): void
    {
        add_action('rest_api_init', static function (): void {

            register_rest_route('panda/v1', '/event', [
                'methods'  => 'POST',
                'callback' => [EventIngestEndpoint::class, 'handle'],
                'permission_callback' => '__return_true',
            ]);

        });
    }
}
