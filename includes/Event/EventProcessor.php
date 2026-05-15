<?php
declare(strict_types=1);

namespace Panda\Apify\Event;

use Panda\Apify\Metrics\UsageStats;
use Panda\Apify\Recommendation\RelationBuilder;
use Panda\Apify\User\PreferenceRepository;
use Panda\Apify\User\DeviceRepository;
use Panda\Apify\Vendor\VendorStats;
use Panda\Apify\Seo\LandingService;
use Panda\Apify\Admin\Settings\SettingsService;

final class EventProcessor
{
    public static function process(EventDTO $event, ?int $userId, string $deviceId): void
    {
        switch ($event->type) {

            case 'search':
                UsageStats::update('search');

                if ($event->query !== null && $event->query !== '') {
                    DeviceRepository::add($deviceId, 'search', $event->query);

                    if ($userId !== null) {
                        PreferenceRepository::add($userId, 'search', $event->query);
                    }

                    $cfg = SettingsService::get();

                    // 🔥 respektuj collect-only režim
                    if (!$cfg->collectOnly) {
                        LandingService::getOrGenerate($event->query);
                    }
                }
                break;

            case 'click':
                UsageStats::update('click');

                if ($event->from !== null && $event->to !== null) {
                    RelationBuilder::log($event->from, $event->to);
                }

                if ($event->category !== null && $event->category !== '') {
                    DeviceRepository::add($deviceId, 'category', $event->category);

                    if ($userId !== null) {
                        PreferenceRepository::add($userId, 'category', $event->category);
                    }
                }

                if ($event->vendorId !== null && $event->vendorId !== '') {
                    VendorStats::click($event->vendorId);
                }

                break;

            case 'view':
                UsageStats::update('view');

                if ($event->vendorId !== null && $event->vendorId !== '') {
                    VendorStats::view($event->vendorId);
                }
                break;

            case 'conversion':
                if ($event->vendorId !== null && $event->vendorId !== '') {
                    VendorStats::conversion($event->vendorId);
                }
                break;
        }
    }
}