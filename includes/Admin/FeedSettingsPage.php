<?php

declare(strict_types=1);

namespace Panda\Apify\Admin;

if (!defined('ABSPATH')) {
    exit;
}

final class FeedSettingsPage
{
    public static function register(): void
    {
        add_action('admin_menu', [self::class, 'menu']);
        add_action('admin_init', [self::class, 'registerSettings']);
    }

    public static function menu(): void
    {
        add_menu_page(
            'Apify Feeds',
            'Apify Feeds',
            'manage_options',
            'apify-feeds',
            [self::class, 'render'],
            'dashicons-update',
            26
        );
    }

    public static function registerSettings(): void
    {
        register_setting('apify_feed_settings', 'apify_batch_size');
        register_setting('apify_feed_settings', 'apify_cron_interval');

        add_settings_section(
            'apify_main',
            'Feed Settings',
            '__return_false',
            'apify-feeds'
        );

        add_settings_field(
            'apify_batch_size',
            'Batch size',
            [self::class, 'batchField'],
            'apify-feeds',
            'apify_main'
        );

        add_settings_field(
            'apify_cron_interval',
            'Cron interval (minutes)',
            [self::class, 'cronField'],
            'apify-feeds',
            'apify_main'
        );
    }

    public static function batchField(): void
    {
        $value = (int) get_option('apify_batch_size', 200);

        echo '<input type="number" name="apify_batch_size" value="' . esc_attr((string)$value) . '" min="10" max="1000" />';
    }

    public static function cronField(): void
    {
        $value = (int) get_option('apify_cron_interval', 5);

        echo '<input type="number" name="apify_cron_interval" value="' . esc_attr((string)$value) . '" min="1" max="60" />';
    }

    public static function render(): void
    {
        ?>
        <div class="wrap">
            <h1>Apify Feed Settings</h1>

            <form method="post" action="options.php">
                <?php
                settings_fields('apify_feed_settings');
                do_settings_sections('apify-feeds');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
}