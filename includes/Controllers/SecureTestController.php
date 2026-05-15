<?php

declare(strict_types=1);

namespace Plugin\Api\Controllers;

use WP_REST_Request;
use WP_REST_Response;

class SecureTestController
{
    public static function test(WP_REST_Request $request): WP_REST_Response
    {
        return new WP_REST_Response([
            'status' => 'secure ok'
        ]);
    }
}