<?php
declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

use Panda\Apify\Api\Routes\PreferenceEndpoint;

final class PreferenceRoutes
{
    public static function register(): void
    {
        add_action('rest_api_init', static function (): void {

            register_rest_route('panda/v1', '/preferences', [
                'methods'  => 'GET',
                'callback' => [PreferenceEndpoint::class, 'get'],
                'permission_callback' => '__return_true',
            ]);

            register_rest_route('panda/v1', '/preferences', [
                'methods'  => 'POST',
                'callback' => [PreferenceEndpoint::class, 'set'],
                'permission_callback' => '__return_true',
            ]);

        });
    }
}
