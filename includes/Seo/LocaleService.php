<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

use Panda\Apify\Admin\Settings\SettingsService;

final class LocaleService
{
    private const DEFAULT = 'cs';

    public static function detect(): string
    {
        $cfg = SettingsService::get();

        if (!$cfg->urlLangEnabled) {
            return self::normalize($cfg->urlDefaultLang);
        }

        // 1) query (?lang=xx)
        $q = $_GET['lang'] ?? null;
        if (is_string($q) && $q !== '') {
            return self::normalize($q);
        }

        // 2) cookie
        $cookie = $_COOKIE['panda_lang'] ?? null;
        if (is_string($cookie) && $cookie !== '') {
            return self::normalize($cookie);
        }

        // 3) Accept-Language
        $header = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
        if (is_string($header) && $header !== '') {
            $langs = explode(',', $header);

            foreach ($langs as $lang) {
                $lang = trim($lang);
                if ($lang !== '') {
                    return self::normalize($lang);
                }
            }
        }

        return self::normalize($cfg->urlDefaultLang);
    }

    public static function fromPath(string $path): ?string
    {
        $path = trim($path, '/');

        if ($path === '') {
            return null;
        }

        $parts = explode('/', $path);
        $first = $parts[0] ?? '';

        if (!is_string($first) || $first === '') {
            return null;
        }

        return self::normalize($first);
    }

    public static function stripPrefix(string $path): string
    {
        $path = trim($path, '/');

        if ($path === '') {
            return '';
        }

        $parts = explode('/', $path);

        if (isset($parts[0]) && is_string($parts[0]) && $parts[0] !== '') {
            // vždy ber první segment jako locale (bez omezení seznamem)
            array_shift($parts);
        }

        return implode('/', $parts);
    }

    public static function addPrefix(string $slug, string $lang): string
    {
        $slug = ltrim($slug, '/');
        $lang = self::normalize($lang);

        return $lang . '/' . $slug;
    }

    /**
     * @return array<string,string>
     */
    public static function hreflang(string $slug): array
    {
        $slug = ltrim($slug, '/');

        $cfg = SettingsService::get();

        $default = self::normalize($cfg->urlDefaultLang);
        $current = self::detect();

        $out = [
            $current => '/' . self::addPrefix($slug, $current),
            $default => '/' . self::addPrefix($slug, $default),
            'x-default' => '/' . self::addPrefix($slug, $default),
        ];

        return $out;
    }

    private static function normalize(string $lang): string
    {
        $lang = strtolower($lang);

        if (strpos($lang, '-') !== false) {
            $lang = explode('-', $lang)[0];
        }

        $lang = preg_replace('/[^a-z]/', '', $lang) ?? '';

        if ($lang === '') {
            return self::DEFAULT;
        }

        return substr($lang, 0, 5);
    }
}