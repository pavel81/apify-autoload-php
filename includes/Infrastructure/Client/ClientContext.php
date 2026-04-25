<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\Client;
use Panda\Apify\Infrastructure\Device\DeviceDetector;

if (!defined('ABSPATH')) {
    exit;
}

final class ClientContext
{
    private string $ip;
    private string $ua;
    private string $referer;
    private string $locale;

    private DeviceDetector $device;

    private function __construct(
        string $ip,
        string $ua,
        string $referer,
        string $locale,
        DeviceDetector $device
    ) {
        $this->ip       = $ip;
        $this->ua       = $ua;
        $this->referer  = $referer;
        $this->locale   = $locale;
        $this->device   = $device;
    }

    public static function fromGlobals(): self
    {
        $ua = (string) ($_SERVER['HTTP_USER_AGENT'] ?? '');
        $ip = (string) ($_SERVER['REMOTE_ADDR'] ?? '');
        $ref = (string) ($_SERVER['HTTP_REFERER'] ?? '');
        $locale = function_exists('get_locale') ? (string) get_locale() : 'en_US';

        return new self(
            $ip,
            $ua,
            $ref,
            $locale,
            new DeviceDetector($ua)
        );
    }

    /**
     * Lightweight context pro API (user + plan)
     *
     * @return array{
     *     user_id: int|null,
     *     device_id: string|null,
     *     ip: string|null,
     *     ua: string|null,
     *     plan: string
     * }
     */
    public static function resolve(): array
    {
        $userId = get_current_user_id();

        $deviceId = $_SERVER['HTTP_X_DEVICE_ID'] ?? null;
        $ip = $_SERVER['REMOTE_ADDR'] ?? null;
        $ua = $_SERVER['HTTP_USER_AGENT'] ?? null;

        $plan = $userId > 0 ? 'pro' : 'free';

        return [
            'user_id'   => $userId > 0 ? $userId : null,
            'device_id' => is_string($deviceId) ? $deviceId : null,
            'ip'        => is_string($ip) ? $ip : null,
            'ua'        => is_string($ua) ? $ua : null,
            'plan'      => $plan,
        ];
    }

    /**
     * Full context (device + prostøedí)
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'ip'         => $this->ip,
            'ua'         => $this->ua,
            'referer'    => $this->referer,
            'locale'     => $this->locale,

            'device'     => $this->device->type(),

            'is_mobile'  => $this->device->isMobile(),
            'is_tablet'  => $this->device->isTablet(),
            'is_desktop' => $this->device->isDesktop(),
            'is_bot'     => $this->device->isBot(),
            'is_touch'   => $this->device->isTouch(),
        ];
    }
}
