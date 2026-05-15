<?php
declare(strict_types=1);

namespace Panda\Apify\Api;

use Panda\Apify\Metrics\UsageStats;
use Panda\Apify\Recommendation\RelationBuilder;
use Panda\Apify\Vendor\VendorStats;

final class ClickTracker
{
    public static function init(): void
    {
        add_action('wp_ajax_panda_click', [self::class, 'handle']);
        add_action('wp_ajax_nopriv_panda_click', [self::class, 'handle']);
    }

    public static function handle(): void
    {
        $from = isset($_POST['from']) ? sanitize_text_field(wp_unslash($_POST['from'])) : '';
        $to   = isset($_POST['to']) ? sanitize_text_field(wp_unslash($_POST['to'])) : '';
        $vendorId = isset($_POST['vendor_id']) ? sanitize_text_field(wp_unslash($_POST['vendor_id'])) : '';

        if ($from !== '' && $to !== '') {
            UsageStats::update('click');
            RelationBuilder::log($from, $to);
        }

        if ($vendorId !== '') {
            VendorStats::click($vendorId);
        }

        wp_send_json_success();
    }
}
