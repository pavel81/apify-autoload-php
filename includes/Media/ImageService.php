<?php
declare(strict_types=1);

namespace Panda\Apify\Media;

use WP_Error;

if (!defined('ABSPATH')) {
    exit;
}

class ImageService
{
    public static function table(): string
    {
        global $wpdb;
        return $wpdb->prefix . 'apify_images';
    }

    public static function fetch(string $url): string|WP_Error
    {
        if ($url === '') {
            return new WP_Error('apify_no_image_url', 'Chybí URL obrázku.');
        }
/** @var array<string, mixed>|WP_Error|false $response */
        $response = wp_remote_get($url, ['timeout' => 30]);

        if ($response instanceof WP_Error) {
    return $response;
}

        if (!is_array($response)) {
            return new WP_Error('apify_http_error', 'HTTP request failed');
        }

        $body = wp_remote_retrieve_body($response);

        if (!is_string($body)) {
            return new WP_Error('apify_invalid_body', 'Body není string.');
        }

        if ($body === '') {
            return new WP_Error('apify_empty_body', 'Prázdné tělo.');
        }

        return $body;
    }

    public static function find_attachment_by_checksum(string $checksum): int
    {
        global $wpdb;

        /** @var string|int|null $attachment_id */
        $attachment_id = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT attachment_id FROM " . self::table() . " WHERE checksum = %s LIMIT 1",
                $checksum
            )
        );

        return $attachment_id ? (int) $attachment_id : 0;
    }

    public static function store(string $body, string $url, string $checksum): int|WP_Error
    {
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        $parsed_path = (string) parse_url($url, PHP_URL_PATH);
        $filename = basename($parsed_path ?: 'apify-image.jpg');

        if ($filename === '' || $filename === '/') {
            $filename = 'apify-image.jpg';
        }

        /** @var array{file:string, url:string, error:string|false} $upload */
        $upload = wp_upload_bits($filename, null, $body);

        if (!empty($upload['error'])) {
            return new WP_Error('apify_upload_error', (string) $upload['error']);
        }

        $filetype = wp_check_filetype($upload['file'], null);
        $mime = is_array($filetype) && !empty($filetype['type'])
            ? (string) $filetype['type']
            : 'image/jpeg';

        $attachment = [
            'post_mime_type' => $mime,
            'post_title'     => sanitize_file_name(basename($upload['file'])),
            'post_content'   => '',
            'post_status'    => 'inherit',
        ];

        $attachment_id = wp_insert_attachment($attachment, $upload['file']);

        if (is_wp_error($attachment_id) || !$attachment_id) {
            return new WP_Error('apify_attachment_error', 'Nepodařilo se vytvořit attachment.');
        }

        $metadata = wp_generate_attachment_metadata($attachment_id, $upload['file']);
        wp_update_attachment_metadata($attachment_id, $metadata);

        global $wpdb;
        $wpdb->insert(
            self::table(),
            [
                'checksum'      => $checksum,
                'attachment_id' => $attachment_id,
                'source_url'    => $url,
            ],
            ['%s', '%d', '%s']
        );

        return (int) $attachment_id;
    }

    public static function action_badge_html(): string
    {
        $mode = get_option('apify_action_badge_mode', 'text');

        if ($mode === 'image') {
            $id = (int) get_option('apify_action_badge_image_id', 0);
            if ($id) {
                return (string) wp_get_attachment_image($id, 'thumbnail', false, ['class' => 'apify-badge']);
            }
        }

        return '<span class="apify-badge">AKCE</span>';
    }
}