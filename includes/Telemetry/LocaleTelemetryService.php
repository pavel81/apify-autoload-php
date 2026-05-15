<?php
declare(strict_types=1);

namespace Panda\Apify\Telemetry;

final class LocaleTelemetryService
{
    private const OPTION_KEY = 'panda_locale_stats';

    public static function track(string $lang): void
    {
        if ($lang === '') {
            return;
        }

        $country = self::detectCountry();

        $data = get_option(self::OPTION_KEY, []);
        if (!is_array($data)) {
            $data = [];
        }

        $key = $lang . ':' . $country;

        if (!isset($data[$key]) || !is_numeric($data[$key])) {
            $data[$key] = 0;
        }

        $data[$key] = (int)$data[$key] + 1;

        update_option(self::OPTION_KEY, $data, false);
    }

    /**
     * 🔒 žádná IP storage → jen derived country
     */
    private static function detectCountry(): string
    {
        // CDN / proxy header (Cloudflare, etc.)
        $cf = $_SERVER['HTTP_CF_IPCOUNTRY'] ?? null;
        if (is_string($cf) && $cf !== '') {
            return strtolower($cf);
        }

        // fallback (bez geo lookupu → anonymní)
        return 'xx';
    }

    /**
     * @return array<string,int>
     */
    public static function stats(): array
    {
        $data = get_option(self::OPTION_KEY, []);
        return is_array($data) ? $data : [];
    }
}