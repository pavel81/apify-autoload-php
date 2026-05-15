<?php
declare(strict_types=1);

namespace Panda\Apify\Api\Routes;

use Panda\Apify\Security\ApiAuth;
use Panda\Apify\Api\DeviceAuth;
use Panda\Apify\Event\EventValidator;
use Panda\Apify\Event\EventProcessor;

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
            return ['error' => 'invalid_json'];
        }

        $event = EventValidator::validate($data);

        if ($event === null) {
            return ['error' => 'invalid_event'];
        }

        EventProcessor::process($event, $userId, $deviceId);

        return ['ok' => true];
    }
}