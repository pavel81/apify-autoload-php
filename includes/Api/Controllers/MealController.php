<?php

declare(strict_types=1);

namespace Plugin\Api\Controllers;

use WP_REST_Request;
use WP_REST_Response;

class MealController
{
    public static function create(WP_REST_Request $request): WP_REST_Response
    {
        global $wpdb;

        $data = $request->get_json_params();

        $mealId = uniqid('meal_');

        $wpdb->insert($wpdb->prefix . 'hb_meals', [
            'id' => $mealId,
            'name' => $data['name'],
        ]);

        foreach ($data['items'] as $item) {
            $wpdb->insert($wpdb->prefix . 'hb_meal_items', [
                'meal_id' => $mealId,
                'food_id' => $item['foodId'],
                'amount' => $item['amount'],
            ]);
        }

        return new WP_REST_Response(['id' => $mealId]);
    }
}