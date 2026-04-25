<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\Device;

use WP_REST_Request;

final class DeviceDetector
{
    private string $ua;

    public function __construct(?string $ua = null)
    {
        $this->ua = strtolower($ua ?? (string) ($_SERVER['HTTP_USER_AGENT'] ?? ''));
    }

    /**
     * @return array{
     *     device_type: string|null,
     *     os: string|null,
     *     browser: string|null,
     *     ua: string,
     *     ip: string|null
     * }
     */
    public static function fromRequest(WP_REST_Request $request): array
    {
        $ua = (string) ($request->get_header('user-agent') ?: '');
        $ip = $_SERVER['REMOTE_ADDR'] ?? null;

        return [
            'device_type' => self::detectDeviceType($ua),
            'os'          => self::detectOs($ua),
            'browser'     => self::detectBrowser($ua),
            'ua'          => $ua,
            'ip'          => is_string($ip) ? $ip : null,
        ];
    }

    public static function fromGlobals(): self
    {
        return new self((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''));
    }

    public function isMobile(): bool
    {
        return $this->match('/iphone|ipod|android.*mobile|windows phone|blackberry/');
    }

    public function isTablet(): bool
    {
        return $this->match('/ipad|android(?!.*mobile)|tablet/');
    }

    public function isDesktop(): bool
    {
        return !$this->isMobile() && !$this->isTablet();
    }

    public function isBot(): bool
    {
        return $this->match('/bot|crawl|spider|slurp|mediapartners/');
    }

    /**
     * @return 'mobile'|'tablet'|'desktop'|'bot'
     */
    public function type(): string
    {
        if ($this->isBot()) {
            return 'bot';
        }

        if ($this->isTablet()) {
            return 'tablet';
        }

        if ($this->isMobile()) {
            return 'mobile';
        }

        return 'desktop';
    }

    public function isTouch(): bool
    {
        return $this->isMobile() || $this->isTablet();
    }

    /**
     * @return array<string, bool|string>
     */
    public function context(): array
    {
        return [
            'type'    => $this->type(),
            'mobile'  => $this->isMobile(),
            'tablet'  => $this->isTablet(),
            'desktop' => $this->isDesktop(),
            'bot'     => $this->isBot(),
            'touch'   => $this->isTouch(),
            'ua'      => $this->ua,
        ];
    }

    private function match(string $pattern): bool
    {
        return preg_match($pattern . 'i', $this->ua) === 1;
    }

   /**
 * @return 'mobile'|'tablet'|'desktop'|'bot'
 */
private static function detectDeviceType(string $ua): string
    {
        $ua = strtolower($ua);

        if (preg_match('/bot|crawl|spider/', $ua)) {
            return 'bot';
        }

        if (preg_match('/tablet|ipad/', $ua)) {
            return 'tablet';
        }

        if (preg_match('/mobile|iphone|android/', $ua)) {
            return 'mobile';
        }

        return 'desktop';
    }

    private static function detectOs(string $ua): ?string
    {
        $ua = strtolower($ua);

        return match (true) {
            str_contains($ua, 'windows') => 'windows',
            str_contains($ua, 'mac os') => 'macos',
            str_contains($ua, 'android') => 'android',
            str_contains($ua, 'iphone'), str_contains($ua, 'ios') => 'ios',
            str_contains($ua, 'linux') => 'linux',
            default => null,
        };
    }

    private static function detectBrowser(string $ua): ?string
    {
        $ua = strtolower($ua);

        return match (true) {
            str_contains($ua, 'chrome') => 'chrome',
            str_contains($ua, 'safari') => 'safari',
            str_contains($ua, 'firefox') => 'firefox',
            str_contains($ua, 'edge') => 'edge',
            default => null,
        };
    }
}
