<?php
declare(strict_types=1);

namespace Panda\Apify\Content;

use Panda\Apify\Admin\Settings\SettingsService;

final class ContentService
{
    /**
     * @return array{title:string,content:string}
     */
    public static function get(string $slug, string $query): array
    {
        $cfg = SettingsService::get();

        // A) lokální override (plugin)
        $local = get_option('panda_lp_content', []);
        if (is_array($local) && isset($local[$slug]) && is_array($local[$slug])) {
            return [
                'title' => is_string($local[$slug]['title'] ?? null) ? $local[$slug]['title'] : self::title($query),
                'content' => is_string($local[$slug]['content'] ?? null) ? $local[$slug]['content'] : self::fallback($query),
            ];
        }

        // B) externí plugin (endpoint)
        $endpoint = method_exists($cfg, 'contentExternalEndpoint') ? (string) $cfg->contentExternalEndpoint : '';
        if ($endpoint !== '') {
            $url = $endpoint . '?slug=' . rawurlencode($slug);

            $res = wp_remote_get($url, ['timeout' => 3]);
            if (!is_wp_error($res)) {
                $body = wp_remote_retrieve_body($res);
                $json = json_decode($body, true);

                if (is_array($json)) {
                    return [
                        'title' => is_string($json['title'] ?? null) ? $json['title'] : self::title($query),
                        'content' => is_string($json['content'] ?? null) ? $json['content'] : self::fallback($query),
                    ];
                }
            }
        }

        // fallback
        return [
            'title' => self::title($query),
            'content' => self::fallback($query),
        ];
    }

    private static function title(string $q): string
    {
        return 'Výsledky: ' . $q;
    }

    private static function fallback(string $q): string
    {
        return '<p>Nejlepší nabídky pro: ' . esc_html($q) . '</p>';
    }
}