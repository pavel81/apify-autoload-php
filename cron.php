<?php
if (!defined('ABSPATH')) exit;

function apify_register_cron()
{
    add_action('apify_cron_tick', 'apify_cron_run');

    if (!wp_next_scheduled('apify_cron_tick')) {
        wp_schedule_event(time() + 60, 'hourly', 'apify_cron_tick');
    }
}

function apify_cron_run()
{
    $feed = get_option('apify_feed_url', '');

    if (!$feed) return;

    apify_sync_feed($feed);

    update_option('apify_last_cron', current_time('mysql'));
}