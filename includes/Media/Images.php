<?php
declare(strict_types=1);

namespace Panda\Apify\Media;

use WP_Error;

class Images
{
    public static function fetch(string $url): int|WP_Error
    {
        if ($url === '') {
            return new WP_Error('no_url', 'Chybí URL obrázku');
        }

        /** @var array<string, mixed>|WP_Error|false $response */
        $response = wp_remote_get($url, ['timeout' => 30]);

        if ($response instanceof WP_Error) {
            return $response;
        }

        if (!is_array($response)) {
            return new WP_Error('http_error', 'HTTP request failed');
        }

        $body = wp_remote_retrieve_body($response);

        if (!is_string($body) || $body === '') {
            return new WP_Error('invalid_body', 'Neplatné tělo odpovědi');
        }

        $checksum = hash('sha256', $body);

        $existing = self::findByChecksum($checksum);
        if ($existing > 0) {
            return $existing;
        }

        /** @var int|WP_Error $stored */
        $stored = self::store($body, $url, $checksum);

        if ($stored instanceof WP_Error) {
            return $stored;
        }

        return $stored;
    }

    public static function findByChecksum(string $checksum): int
    {
        global $wpdb;
        $table = $wpdb->prefix . 'apify_images';

        /** @var string|int|null $attachmentId */
        $attachmentId = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT attachment_id FROM {$table} WHERE checksum = %s LIMIT 1",
                $checksum
            )
        );

        return $attachmentId ? (int) $attachmentId : 0;
    }

    public static function store(string $body, string $url, string $checksum): int|WP_Error
    {
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        $path = (string) parse_url($url, PHP_URL_PATH);
        $filename = basename($path ?: 'apify-image.jpg');

        if ($filename === '' || $filename === '/') {
            $filename = 'apify-image.jpg';
        }

        /** @var array{file:string, url:string, error:string|false} $upload */
        $upload = wp_upload_bits($filename, null, $body);

        if (!empty($upload['error'])) {
            return new WP_Error('upload_error', (string) $upload['error']);
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

        $attachmentId = wp_insert_attachment($attachment, $upload['file']);

        if (is_wp_error($attachmentId) || !$attachmentId) {
            return new WP_Error('attachment_error', 'Nepodařilo se vytvořit attachment.');
        }

        $metadata = wp_generate_attachment_metadata($attachmentId, $upload['file']);
        wp_update_attachment_metadata($attachmentId, $metadata);

        global $wpdb;
        $table = $wpdb->prefix . 'apify_images';

        $wpdb->insert(
            $table,
            [
                'checksum'      => $checksum,
                'attachment_id' => $attachmentId,
                'source_url'    => $url,
            ],
            ['%s', '%d', '%s']
        );

        return (int) $attachmentId;
    }
}