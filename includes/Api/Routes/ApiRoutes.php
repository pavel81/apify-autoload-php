<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

use WP_REST_Server;
use Panda\Apify\Api\Controllers\DeviceController;
use Panda\Apify\Api\Controllers\SecureTestController;
use Panda\Apify\Api\Controllers\FoodController;
use Panda\Apify\Api\Controllers\ProductController;
use Panda\Apify\Api\Middleware\SecurityMiddleware;
use Panda\Apify\Api\Middleware\PublicRateLimitMiddleware;
use Panda\Apify\Api\Controllers\AnalyticsController;

register_rest_route('hb/v1', '/analytics/click', [
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => [AnalyticsController::class, 'trackOfferClick'],
    'permission_callback' => [SecurityMiddleware::class, 'handle'],
]);

if (!defined('ABSPATH')) {
    exit;
}

final class ApiRoutes
{
    public static function register(): void
    {
        // 🔐 HANDSHAKE (public, rate limited)
        register_rest_route('hb/v1', '/device/init', [
            'methods' => WP_REST_Server::CREATABLE,
            'callback' => [DeviceController::class, 'init'],
            'permission_callback' => [PublicRateLimitMiddleware::class, 'handle'],
        ]);
register_rest_route('hb/v1', '/analytics/click', [
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => [AnalyticsController::class, 'trackOfferClick'],
    'permission_callback' => [SecurityMiddleware::class, 'handle'],
]);

        register_rest_route('hb/v1', '/device/complete', [
            'methods' => WP_REST_Server::CREATABLE,
            'callback' => [DeviceController::class, 'complete'],
            'permission_callback' => [PublicRateLimitMiddleware::class, 'handle'],
        ]);
        register_rest_route('hb/v1', '/analytics/click', [
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => [AnalyticsController::class, 'trackOfferClick'],
    'permission_callback' => [SecurityMiddleware::class, 'handle'],
]);

        // 🔐 DEVICE MANAGEMENT
        register_rest_route('hb/v1', '/device/list', [
            'methods' => WP_REST_Server::READABLE,
            'callback' => [DeviceController::class, 'list'],
            'permission_callback' => [SecurityMiddleware::class, 'handle'],
        ]);

        register_rest_route('hb/v1', '/device/revoke', [
            'methods' => WP_REST_Server::CREATABLE,
            'callback' => [DeviceController::class, 'revoke'],
            'permission_callback' => [SecurityMiddleware::class, 'handle'],
        ]);

        register_rest_route('hb/v1', '/device/rename', [
            'methods' => WP_REST_Server::CREATABLE,
            'callback' => [DeviceController::class, 'rename'],
            'permission_callback' => [SecurityMiddleware::class, 'handle'],
        ]);

        // 🔐 SECURE PRODUCT (app verze – gated)
        register_rest_route('hb/v1', '/product/(?P<hash>[a-z0-9]+)', [
            'methods' => WP_REST_Server::READABLE,
            'callback' => [new ProductController(), 'detail'],
            'permission_callback' => [SecurityMiddleware::class, 'handle'],
        ]);

        // 🔐 TEST
        register_rest_route('hb/v1', '/secure/test', [
            'methods' => WP_REST_Server::READABLE,
            'callback' => [SecureTestController::class, 'test'],
            'permission_callback' => [SecurityMiddleware::class, 'handle'],
        ]);

        // 🔐 FOOD SEARCH
        register_rest_route('hb/v1', '/foods/search', [
            'methods' => WP_REST_Server::READABLE,
            'callback' => [FoodController::class, 'search'],
            'permission_callback' => [SecurityMiddleware::class, 'handle'],
        ]);
    }
}
