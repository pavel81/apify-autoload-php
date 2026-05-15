<?php
declare(strict_types=1);

namespace Panda\Apify\Context;

use Panda\Apify\User\PreferenceRepository;
use Panda\Apify\User\DeviceRepository;
use Panda\Apify\Api\DeviceAuth;

final class UserContext
{
    /**
     * @return array{prefs:array<string,array<string,int>>}
     */
    public static function get(): array
    {
        $userId = get_current_user_id();
        $deviceId = DeviceAuth::getDeviceId();

        $device = DeviceRepository::get($deviceId);
        $user = $userId ? PreferenceRepository::get($userId) : [];

        return [
            'prefs' => array_merge_recursive($device, $user),
        ];
    }
}
