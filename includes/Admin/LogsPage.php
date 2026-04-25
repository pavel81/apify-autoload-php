<?php

declare(strict_types=1);

namespace Panda\Apify\Admin;

use wpdb;

if (!defined('ABSPATH')) {
    exit;
}

final class LogsPage
{
    public static function register(): void
    {
        add_action('admin_menu', [self::class, 'menu']);
        add_action('admin_enqueue_scripts', [self::class, 'assets']);

        add_action('wp_ajax_apify_logs_load', [self::class, 'ajaxLoad']);
        add_action('wp_ajax_apify_logs_clear', [self::class, 'ajaxClear']);
        add_action('wp_ajax_apify_logs_export', [self::class, 'ajaxExport']);
    }

    public static function menu(): void
    {
        add_submenu_page(
            'apify-feeds',
            'Apify Logs',
            'Logs',
            'manage_options',
            'apify-logs',
            [self::class, 'render']
        );
    }

    public static function assets(string $hook): void
    {
        if ($hook !== 'apify-feeds_page_apify-logs') {
            return;
        }

        wp_enqueue_script(
            'apify-logs',
            plugin_dir_url(__FILE__) . '../../assets/js/apify-logs.js',
            ['jquery'],
            '1.1',
            true
        );

        wp_localize_script('apify-logs', 'ApifyLogs', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('apify_logs'),
        ]);
    }

    public static function render(): void
    {
        ?>
        <div class="wrap">
            <h1>Apify Logs</h1>

            <div style="margin-bottom:10px;">
                <select id="apify-log-type">
                    <option value="">All</option>
                    <option value="webhook_success">Success</option>
                    <option value="batch_processed">Batch</option>
                    <option value="batch_error">Errors</option>
                    <option value="rate_limit">Rate limit</option>
                    <option value="verify_success">Auth Success</option>
                    <option value="verify_fail">Auth Fail</option>

                </select>

                <input type="date" id="apify-log-date" />

                <button id="apify-filter" class="button">Filter</button>
                <button id="apify-clear-logs" class="button button-danger">Clear Logs</button>
                <button id="apify-export" class="button">Export CSV</button>
            </div>

            <table class="widefat fixed striped" style="margin-top:20px;">
                <thead>
                    <tr>
                        <th width="150">Time</th>
                        <th width="120">Type</th>
                        <th>Message</th>
                        <th>Context</th>
                    </tr>
                </thead>
                <tbody id="apify-logs-body"></tbody>
            </table>

            <div style="margin-top:15px;">
                <button id="apify-load-more" class="button">Load more</button>
            </div>
        </div>
        <?php
    }

    public static function ajaxLoad(): void
    {
        check_ajax_referer('apify_logs', 'nonce');

        global $wpdb;
        /** @var wpdb $wpdb */

        $table = $wpdb->prefix . 'apify_logs';

        $offset = (int) ($_POST['offset'] ?? 0);
        $limit  = 50;
        $type   = sanitize_text_field((string) ($_POST['type'] ?? ''));
        $date   = sanitize_text_field((string) ($_POST['date'] ?? ''));

        $where  = [];
        $params = [];

        if ($type !== '') {
            $where[]  = 'type = %s';
            $params[] = $type;
        }

        if ($date !== '') {
            $where[]  = 'DATE(created_at) = %s';
            $params[] = $date;
        }

        $sql = "SELECT * FROM {$table}";

        if ($where !== []) {
            $sql .= ' WHERE ' . implode(' AND ', $where);
        }

        $sql .= ' ORDER BY created_at DESC LIMIT %d OFFSET %d';

        // LIMIT + OFFSET
        $params[] = $limit;
        $params[] = $offset;

        if ($where !== []) {
            /** @phpstan-ignore-next-line */
            $prepared = $wpdb->prepare($sql, ...$params);
            if (!is_string($prepared)) {
                wp_send_json_error([]);
            }

            /** @var array<int, array<string, mixed>> $logs */
            $logs = $wpdb->get_results($prepared, ARRAY_A) ?: [];
        } else {
            /** @var array<int, array<string, mixed>> $logs */
            $logs = $wpdb->get_results($sql, ARRAY_A) ?: [];
        }
        
        foreach ($logs as &$log) {
    if (!empty($log['context'])) {
        $decoded = json_decode((string) $log['context'], true);

        if (is_array($decoded)) {
            $log['context_parsed'] = $decoded;
        }
    }
}

        wp_send_json_success($logs);
    }

    public static function ajaxClear(): void
    {
        check_ajax_referer('apify_logs', 'nonce');

        global $wpdb;
        /** @var wpdb $wpdb */

        $table = $wpdb->prefix . 'apify_logs';
        $wpdb->query("TRUNCATE TABLE {$table}");

        wp_send_json_success();
    }

    public static function ajaxExport(): void
    {
        check_ajax_referer('apify_logs', 'nonce');

        global $wpdb;
        /** @var wpdb $wpdb */

        $table = $wpdb->prefix . 'apify_logs';

        $type = sanitize_text_field((string) ($_GET['type'] ?? ''));
        $date = sanitize_text_field((string) ($_GET['date'] ?? ''));

        $where  = [];
        $params = [];

        if ($type !== '') {
            $where[]  = 'type = %s';
            $params[] = $type;
        }

        if ($date !== '') {
            $where[]  = 'DATE(created_at) = %s';
            $params[] = $date;
        }

        $sql = "SELECT * FROM {$table}";

        if ($where !== []) {
            $sql .= ' WHERE ' . implode(' AND ', $where);
        }

        $sql .= ' ORDER BY created_at DESC';

        if ($where !== []) {
            /** @phpstan-ignore-next-line */
            $prepared = $wpdb->prepare($sql, ...$params);
            $logs = is_string($prepared)
                ? $wpdb->get_results($prepared, ARRAY_A)
                : [];
        } else {
            $logs = $wpdb->get_results($sql, ARRAY_A);
        }

        /** @var array<int, array<string, mixed>> $logs */
        $logs = is_array($logs) ? $logs : [];

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename=apify-logs.csv');

        $out = fopen('php://output', 'w');
        if ($out === false) {
            exit;
        }

        fputcsv($out, ['time', 'type', 'message', 'context']);

        foreach ($logs as $row) {
            fputcsv($out, [
                (string) ($row['created_at'] ?? ''),
                (string) ($row['type'] ?? ''),
                (string) ($row['message'] ?? ''),
                (string) ($row['context'] ?? ''),
            ]);
        }

        fclose($out);
        exit;
    }
}
