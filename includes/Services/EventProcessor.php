<?php
declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Event\EventDTO;
use Panda\Apify\Metrics\UsageStats;
use Panda\Apify\Recommendation\RelationBuilder;
use Panda\Apify\User\PreferenceRepository;
use Panda\Apify\User\DeviceRepository;
use Panda\Apify\Vendor\VendorStats;

final class EventProcessor
{
    public static function process(EventDTO $event, ?int $userId, string $deviceId): void
    {
        switch ($event->type) {

            case 'search':
                UsageStats::update('search');

                if ($event->query !== null) {
                    DeviceRepository::add($deviceId, 'search', $event->query);

                    if ($userId !== null) {
                        PreferenceRepository::add($userId, 'search', $event->query);
                    }
                }
                break;

            case 'click':
                UsageStats::update('click');

                if ($event->from !== null && $event->to !== null) {
                    RelationBuilder::log($event->from, $event->to);
                }

                if ($event->category !== null) {
                    DeviceRepository::add($deviceId, 'category', $event->category);

                    if ($userId !== null) {
                        PreferenceRepository::add($userId, 'category', $event->category);
                    }
                }

                if ($event->vendorId !== null) {
                    VendorStats::click($event->vendorId);
                }
                break;

            case 'view':
                UsageStats::update('view');

                if ($event->vendorId !== null) {
                    VendorStats::view($event->vendorId);
                }
                break;

            case 'conversion':
                if ($event->vendorId !== null) {
                    VendorStats::conversion($event->vendorId);
                }
                break;
        }
    }
}
