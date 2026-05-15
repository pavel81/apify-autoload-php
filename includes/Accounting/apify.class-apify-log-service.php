<?php

namespace Panda\Apify\Accounting;

if (!defined('ABSPATH')) {
    exit;
}

class Apify_Log_Service
{
    public static function log(string $type, string $message, array $context = []): void
    {
        global $wpdb;

        $table = $wpdb->prefix . 'apify_logs';

        $wpdb->insert(
            $table,
            [
                'type'       => $type,
                'message'    => $message,
                'context'    => wp_json_encode($context),
                'created_at' => current_time('mysql'),
            ],
            ['%s', '%s', '%s', '%s']
        );

        // fallback
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('[APIFY][' . $type . '] ' . $message);
        }
    }
}