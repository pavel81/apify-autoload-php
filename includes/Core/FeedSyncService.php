<?php
declare(strict_types=1);

namespace Panda\Apify\Core;

use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

class FeedSyncService
{
    /**
     * @return array<string, mixed>
     */
    public static function importFromFeed(string $feedUrl): array
    {
        global $wpdb;
/** @var array<string, mixed>|WP_Error|false $response */
        $response = wp_remote_get($feedUrl, ['timeout' => 30]);

  if ($response instanceof WP_Error) {
    return [
        'ok' => false,
        'error' => $response->get_error_message(),
    ];
}

        if (!is_array($response)) {
            return [
                'ok'    => false,
                'error' => 'HTTP request failed',
            ];
        }

        $body = wp_remote_retrieve_body($response);

        if (!is_string($body) || $body === '') {
            return [
                'ok'    => false,
                'error' => 'Empty or invalid response body',
            ];
        }

        $sizeMb = round(strlen($body) / 1024 / 1024, 3);

        $json = json_decode($body, true);
        if (!is_array($json)) {
            return [
                'ok'    => false,
                'error' => 'Neplatný JSON feed',
            ];
        }

        $table = $wpdb->prefix . 'apify_products';

        $inserted = 0;
        $updated  = 0;

        foreach ($json as $item) {
            if (!is_array($item)) {
                continue;
            }

            $externalId = (string) ($item['id'] ?? '');
            if ($externalId === '') {
                continue;
            }

            $data = [
                'external_id' => $externalId,
                'name'        => (string) ($item['name'] ?? ''),
                'price'       => (float) ($item['price'] ?? 0),
                'currency'    => (string) ($item['currency'] ?? 'CZK'),
                'updated_at'  => current_time('mysql'),
            ];

            $exists = $wpdb->get_var(
                $wpdb->prepare(
                    "SELECT id FROM {$table} WHERE external_id = %s LIMIT 1",
                    $externalId
                )
            );

            if ($exists) {
                $wpdb->update(
                    $table,
                    $data,
                    ['external_id' => $externalId],
                    ['%s', '%s', '%f', '%s', '%s'],
                    ['%s']
                );
                $updated++;
            } else {
                $wpdb->insert(
                    $table,
                    $data,
                    ['%s', '%s', '%f', '%s', '%s']
                );
                $inserted++;
            }
        }

        return [
            'ok'       => true,
            'inserted' => $inserted,
            'updated'  => $updated,
            'size_mb'  => $sizeMb,
        ];
    }
}