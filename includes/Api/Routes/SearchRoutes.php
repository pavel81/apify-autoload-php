<?php
declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

use Panda\Apify\Api\Routes\SearchEndpoint;

final class SearchRoutes
{
    public static function register(): void
    {
        add_action('rest_api_init', static function (): void {

            register_rest_route('panda/v1', '/search', [
                'methods'  => 'GET',
                'callback' => [SearchEndpoint::class, 'handle'],
                'permission_callback' => '__return_true',
            ]);

        });
    }
}
