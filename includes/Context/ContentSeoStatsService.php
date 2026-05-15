<?php
declare(strict_types=1);

namespace Panda\Apify\Content;

final class ContentSeoStatsService
{
    private const OPTION_KEY = 'panda_content_seo_stats';

    public static function visit(string $slug): void
    {
        self::inc($slug, 'visits');
        self::updateTs($slug);
    }

    public static function organicVisit(string $slug): void
    {
        self::inc($slug, 'organic');
        self::updateTs($slug);
    }

    public static function bounce(string $slug): void
    {
        self::inc($slug, 'bounces');
    }

    /**
     * @return array{visits:int,organic:int,bounces:int,ctr:float,bounceRate:float,lastTs:int}
     */
    public static function get(string $slug): array
    {
        $data = get_option(self::OPTION_KEY, []);

        if (!is_array($data) || !isset($data[$slug]) || !is_array($data[$slug])) {
            return [
                'visits' => 0,
                'organic' => 0,
                'bounces' => 0,
                'ctr' => 0.0,
                'bounceRate' => 0.0,
                'lastTs' => 0,
            ];
        }

        $row = $data[$slug];

        $visits = isset($row['visits']) && is_numeric($row['visits']) ? (int)$row['visits'] : 0;
        $organic = isset($row['organic']) && is_numeric($row['organic']) ? (int)$row['organic'] : 0;
        $bounces = isset($row['bounces']) && is_numeric($row['bounces']) ? (int)$row['bounces'] : 0;
        $lastTs = isset($row['ts']) && is_numeric($row['ts']) ? (int)$row['ts'] : 0;

        $ctr = $visits > 0 ? $organic / $visits : 0.0;
        $bounceRate = $visits > 0 ? $bounces / $visits : 0.0;

        return [
            'visits' => $visits,
            'organic' => $organic,
            'bounces' => $bounces,
            'ctr' => $ctr,
            'bounceRate' => $bounceRate,
            'lastTs' => $lastTs,
        ];
    }

    private static function inc(string $slug, string $key): void
    {
        if ($slug === '') {
            return;
        }

        $data = get_option(self::OPTION_KEY, []);

        if (!is_array($data)) {
            $data = [];
        }

        if (!isset($data[$slug]) || !is_array($data[$slug])) {
            $data[$slug] = [
                'visits' => 0,
                'organic' => 0,
                'bounces' => 0,
                'ts' => time(),
            ];
        }

        $data[$slug][$key] = isset($data[$slug][$key]) && is_numeric($data[$slug][$key])
            ? (int)$data[$slug][$key] + 1
            : 1;

        update_option(self::OPTION_KEY, $data, false);
    }

    private static function updateTs(string $slug): void
    {
        $data = get_option(self::OPTION_KEY, []);

        if (!is_array($data) || !isset($data[$slug]) || !is_array($data[$slug])) {
            return;
        }

        $data[$slug]['ts'] = time();

        update_option(self::OPTION_KEY, $data, false);
    }
}