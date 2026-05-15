<?php

declare(strict_types=1);

namespace Panda\Apify\Controllers;

use WP_REST_Request;
use WP_REST_Response;
use Panda\Apify\Infrastructure\Client\ClientContext;

if (!defined('ABSPATH')) {
    exit;
}

final class AnalyticsController
{
    private const DEDUPE_WINDOW_SECONDS = 5;

    /**
     * 🔹 Single event (fallback)
     */
    public static function trackOfferClick(WP_REST_Request $request): WP_REST_Response
    {
        global $wpdb;
        /** @var \wpdb $wpdb */

        $data = $request->get_json_params();

        $productHash = (string) ($data['product_hash'] ?? '');
        $shop = (string) ($data['shop'] ?? '');
        $price = isset($data['price']) ? (float) $data['price'] : null;

        if ($productHash === '' || $shop === '') {
            return new WP_REST_Response(['error' => 'Invalid payload'], 400);
        }

        $ctx = ClientContext::resolve();
        $deviceId = (string) $request->get_header('x-device-id');

        // 🔥 DEDUPE
        $exists = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}hb_offer_clicks
             WHERE device_id = %s
             AND product_hash = %s
             AND shop = %s
             AND created_at > %s",
            $deviceId,
            $productHash,
            $shop,
            gmdate('Y-m-d H:i:s', time() - self::DEDUPE_WINDOW_SECONDS)
        ));

        if ($exists) {
            return new WP_REST_Response([
                'ok' => true,
                'deduped' => true,
            ]);
        }

        $wpdb->insert($wpdb->prefix . 'hb_offer_clicks', [
            'device_id' => $deviceId,
            'user_id' => $ctx['user_id'] ?: null,
            'product_hash' => $productHash,
            'shop' => $shop,
            'price' => $price,
            'created_at' => current_time('mysql'),
        ]);

        return new WP_REST_Response(['ok' => true]);
    }

    /**
     * 🔥 Batch endpoint (main)
     */
    public static function trackBatch(WP_REST_Request $request): WP_REST_Response
    {
        global $wpdb;
        /** @var \wpdb $wpdb */

        $events = $request->get_json_params();

        if (!is_array($events)) {
            return new WP_REST_Response(['error' => 'Invalid payload'], 400);
        }

        $ctx = ClientContext::resolve();
        $deviceId = (string) $request->get_header('x-device-id');

        foreach ($events as $event) {
            if (!is_array($event)) {
                continue;
            }

            if (($event['type'] ?? '') !== 'offer_click') {
                continue;
            }

            $payload = $event['payload'] ?? [];

            if (!is_array($payload)) {
                continue;
            }

            $productHash = (string) ($payload['product_hash'] ?? '');
            $shop = (string) ($payload['shop'] ?? '');
            $price = isset($payload['price']) ? (float) $payload['price'] : null;

            if ($productHash === '' || $shop === '') {
                continue;
            }

            // 🔥 DEDUPE (batch)
            $exists = $wpdb->get_var($wpdb->prepare(
                "SELECT COUNT(*) FROM {$wpdb->prefix}hb_offer_clicks
                 WHERE device_id = %s
                 AND product_hash = %s
                 AND shop = %s
                 AND created_at > %s",
                $deviceId,
                $productHash,
                $shop,
                gmdate('Y-m-d H:i:s', time() - self::DEDUPE_WINDOW_SECONDS)
            ));

            if ($exists) {
                continue;
            }

            $wpdb->insert($wpdb->prefix . 'hb_offer_clicks', [
                'device_id' => $deviceId,
                'user_id' => $ctx['user_id'] ?: null,
                'product_hash' => $productHash,
                'shop' => $shop,
                'price' => $price,
                'created_at' => current_time('mysql'),
            ]);
        }

        return new WP_REST_Response(['ok' => true]);
    }
}
