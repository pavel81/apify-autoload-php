<?php
declare(strict_types=1);

namespace Panda\Apify\Content;

use Panda\Apify\Admin\Settings\SettingsService;

final class ArticleRepository
{
    private const OPTION_KEY = 'panda_articles';

    /**
     * @return array{title:string,content:string,landing:int,status:string,priority:int,noindex:int}|null
     */
    public static function get(string $slug): ?array
    {
        // 1) local
        $local = self::getLocal($slug);
        if ($local !== null) {
            return $local;
        }

        // 2) remote (externí app / S3 / API)
        return self::getRemote($slug);
    }

    /**
     * @return array{title:string,content:string,landing:int,status:string,priority:int,noindex:int}|null
     */
    private static function getLocal(string $slug): ?array
    {
        $data = get_option(self::OPTION_KEY, []);

        if (!is_array($data) || !isset($data[$slug]) || !is_array($data[$slug])) {
            return null;
        }

        $row = $data[$slug];

        return self::normalize($row);
    }

    /**
     * @return array{title:string,content:string,landing:int,status:string,priority:int,noindex:int}|null
     */
    private static function getRemote(string $slug): ?array
    {
        $cfg = SettingsService::get();

        $endpoint = property_exists($cfg, 'articleEndpoint')
            ? (string) $cfg->articleEndpoint
            : '';

        if ($endpoint === '') {
            return null;
        }

        $url = $endpoint . '?slug=' . rawurlencode($slug);

        $res = wp_remote_get($url, ['timeout' => 3]);

        if (is_wp_error($res)) {
            return null;
        }

        $body = wp_remote_retrieve_body($res);

        if (!is_string($body) || $body === '') {
            return null;
        }

        $json = json_decode($body, true);

        if (!is_array($json)) {
            return null;
        }

        return self::normalize($json);
    }

    /**
     * @param array<string,mixed> $row
     * @return array{title:string,content:string,landing:int,status:string,priority:int,noindex:int}
     */
    private static function normalize(array $row): array
    {
        return [
            'title' => is_string($row['title'] ?? null) ? $row['title'] : '',
            'content' => is_string($row['content'] ?? null) ? $row['content'] : '',
            'landing' => isset($row['landing']) && (int)$row['landing'] === 1 ? 1 : 0,
            'status' => is_string($row['status'] ?? null) ? $row['status'] : 'draft',
            'priority' => isset($row['priority']) && is_numeric($row['priority']) ? (int)$row['priority'] : 0,
            'noindex' => isset($row['noindex']) && (int)$row['noindex'] === 1 ? 1 : 0,
        ];
    }
}