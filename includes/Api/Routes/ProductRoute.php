<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Routes;


use Panda\Apify\Controllers\ProductController;
use Panda\Apify\Controllers\LandingController;

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
     // ?? PRODUCT DETAIL (např. /cs/produkt/rajcata-123)
        $router->add(
            '{lang}/produkt/{slug}',
            [ProductController::class, 'detail']
        );

        // ?? SEO LANDING FALLBACK (MUSÍ BÝT POSLEDNÍ)
        $router->add(
            '{lang}/{any}',
            [LandingController::class, 'show']
        );
    }
    }

