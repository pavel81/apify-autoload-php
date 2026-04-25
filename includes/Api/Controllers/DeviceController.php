<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Controllers;

use WP_REST_Request;
use WP_REST_Response;
use Panda\Apify\Infrastructure\Device\DeviceRepository;
use Panda\Apify\Infrastructure\Device\DeviceDetector;

if (!defined('ABSPATH')) {
    exit;
}

final class DeviceController
{
    /**
     * 🔐 INIT (vytvoření challenge)
     */
    public static function init(WP_REST_Request $request): WP_REST_Response
    {
        global $wpdb;
        /** @var \wpdb $wpdb */

        $data = $request->get_json_params();

        if (empty($data['publicKey'])) {
            return new WP_REST_Response(['error' => 'Missing publicKey'], 400);
        }

        $challenge = base64_encode(random_bytes(32));
        $token = uniqid('tmp_', true);

        $wpdb->insert($wpdb->prefix . 'hb_device_challenges', [
            'token' => $token,
            'public_key' => $data['publicKey'],
            'challenge' => $challenge,
            'created_at' => current_time('mysql'),
        ]);

        return new WP_REST_Response([
            'challenge' => $challenge,
            'token' => $token,
        ]);
    }

    /**
     * 🔐 COMPLETE (ověření + registrace device)
     */
 public static function complete(WP_REST_Request $request): WP_REST_Response
{
    global $wpdb;
    /** @var \wpdb $wpdb */

    $data = $request->get_json_params();

    $token = $data['token'] ?? null;
    $signature = base64_decode($data['signature'] ?? '', true);

    if (!is_string($token) || !is_string($signature) || $signature === '') {
        return new WP_REST_Response(['error' => 'Invalid payload'], 400);
    }

    $row = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}hb_device_challenges WHERE token = %s",
            $token
        )
    );

    if (!$row) {
        return new WP_REST_Response(['error' => 'Invalid token'], 400);
    }

    // 🔐 Validate public key
    $publicKey = base64_decode($row->public_key, true);

    if (!is_string($publicKey) || $publicKey === '') {
        return new WP_REST_Response(['error' => 'Invalid public key'], 400);
    }

    // 🔐 Verify signature
    $valid = sodium_crypto_sign_verify_detached(
        $signature,
        $row->challenge,
        $publicKey
    );

    if (!$valid) {
        return new WP_REST_Response(['error' => 'Invalid signature'], 403);
    }

    // 🔥 Create device
    $deviceId = uniqid('dev_', true);

    $repo = new DeviceRepository($wpdb);

    $repo->insert(array_merge([
        'id'         => $deviceId,
        'user_id'    => get_current_user_id(),
        'public_key' => $row->public_key,
    ], DeviceDetector::fromRequest($request)));

    // 🧹 Cleanup
    $wpdb->delete(
        $wpdb->prefix . 'hb_device_challenges',
        ['token' => $token]
    );

    return new WP_REST_Response([
        'deviceId' => $deviceId,
    ]);
}

    /**
     * 📋 LIST DEVICES
     */
    public static function list(WP_REST_Request $request): WP_REST_Response
    {
        global $wpdb;

        $userId = get_current_user_id();

        if (!$userId) {
            return new WP_REST_Response(['error' => 'Not authenticated'], 401);
        }

        $repo = new DeviceRepository($wpdb);
        $devices = $repo->findByUser($userId);

        return new WP_REST_Response($devices);
    }

    /**
     * ❌ REVOKE DEVICE
     */
    public static function revoke(WP_REST_Request $request): WP_REST_Response
    {
        global $wpdb;

        $userId = get_current_user_id();
        $deviceId = (string) $request->get_param('deviceId');

        if (!$userId || !$deviceId) {
            return new WP_REST_Response(['error' => 'Invalid request'], 400);
        }

        $repo = new DeviceRepository($wpdb);
        $deleted = $repo->delete($deviceId, $userId);

        if (!$deleted) {
            return new WP_REST_Response(['error' => 'Device not found'], 404);
        }

        return new WP_REST_Response([
            'status' => 'revoked',
            'deviceId' => $deviceId,
        ]);
    }

    /**
     * ✏️ RENAME DEVICE (bonus – připraveno)
     */
    public static function rename(WP_REST_Request $request): WP_REST_Response
    {
        global $wpdb;

        $userId = get_current_user_id();
        $deviceId = (string) $request->get_param('deviceId');
        $name = trim((string) $request->get_param('name'));

        if (!$userId || !$deviceId || $name === '') {
            return new WP_REST_Response(['error' => 'Invalid request'], 400);
        }

        $repo = new DeviceRepository($wpdb);
        $updated = $repo->rename($deviceId, $userId, $name);

        if (!$updated) {
            return new WP_REST_Response(['error' => 'Update failed'], 500);
        }

        return new WP_REST_Response([
            'status' => 'renamed',
            'deviceId' => $deviceId,
            'name' => $name,
        ]);
    }
}
