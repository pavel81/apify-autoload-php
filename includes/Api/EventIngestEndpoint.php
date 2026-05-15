<?php
declare(strict_types=1);

namespace Panda\Apify\Api;

use Panda\Apify\Security\ApiAuth;
use Panda\Apify\Api\DeviceAuth;
use Panda\Apify\User\PreferenceRepository;
use Panda\Apify\User\DeviceRepository;
use Panda\Apify\Recommendation\RelationBuilder;
use Panda\Apify\Metrics\UsageStats;
use Panda\Apify\Vendor\VendorStats;

final class EventIngestEndpoint
{
    public static function init(): void
    {
        add_action('rest_api_init', function (): void {
            register_rest_route('panda/v1', '/event', [
                'methods' => 'POST',
                'callback' => [self::class, 'handle'],
            ]);
        });
    }

    /**
     * @return array{ok?: bool, error?: string}
     */
    public static function handle(): array
    {
        $userId = ApiAuth::check();
        $deviceId = DeviceAuth::getDeviceId();

        $raw = file_get_contents('php://input');
        $data = is_string($raw) ? json_decode($raw, true) : null;

        if (!is_array($data)) {
            return ['error' => 'invalid'];
        }

        $type = isset($data['type']) ? (string)$data['type'] : '';
        $vendorId = isset($data['vendor_id']) ? (string)$data['vendor_id'] : '';

        switch ($type) {

            case 'search':
                UsageStats::update('search');

                if (!empty($data['query'])) {
                    $query = (string)$data['query'];

                    DeviceRepository::add($deviceId, 'search', $query);

                    if ($userId !== null) {
                        PreferenceRepository::add($userId, 'search', $query);
                    }
                }
                break;

            case 'click':
                UsageStats::update('click');

                if (!empty($data['from']) && !empty($data['to'])) {
                    RelationBuilder::log((string)$data['from'], (string)$data['to']);
                }

                if (!empty($data['category'])) {
                    $category = (string)$data['category'];

                    DeviceRepository::add($deviceId, 'category', $category);

                    if ($userId !== null) {
                        PreferenceRepository::add($userId, 'category', $category);
                    }
                }

                if ($vendorId !== '') {
                    VendorStats::click($vendorId);
                }

                break;

            case 'view':
                UsageStats::update('view');

                if ($vendorId !== '') {
                    VendorStats::view($vendorId);
                }
                break;

            case 'conversion':
                if ($vendorId !== '') {
                    VendorStats::conversion($vendorId);
                }
                break;
        }

        return ['ok' => true];
    }
}
