<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

use Panda\Apify\Api\Controllers\ProductController;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductRoute
{
    public static function register(): void
    {
        register_rest_route('apify/v1', '/product/(?P<hash>[a-z0-9]+)', [
            'methods'  => 'GET',
            'callback' => [new ProductController(), 'detail'],
            'permission_callback' => '__return_true',
        ]);
    }
}