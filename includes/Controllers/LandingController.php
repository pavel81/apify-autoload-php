<?php
declare(strict_types=1);

namespace Panda\Apify\Controllers;

use Panda\Apify\Routing\Request;
use Panda\Apify\Routing\Response;
use Panda\Apify\Seo\LandingRepository;
use Panda\Apify\Seo\LandingQualityService;
use Panda\Apify\Seo\PrettyUrlService;
use Panda\Apify\Seo\LocaleService;
use Panda\Apify\Seo\ClusterCanonicalService;
use Panda\Apify\Content\ContentService;
use Panda\Apify\Admin\Settings\SettingsService;
use Panda\Apify\Telemetry\LocaleTelemetryService;

final class LandingController
{
    public static function show(Request $req): Response
    {
        $path = is_string($req->path) ? $req->path : '';

        if ($path === '') {
            return self::badRequest();
        }

        // 🔥 slug z pretty URL (bez locale prefixu)
        $slug = PrettyUrlService::resolve($path);

        if ($slug === '') {
            return self::badRequest();
        }

        $landing = LandingRepository::get($slug);

        if (!is_array($landing)) {
            return self::notFound();
        }

        $query = is_string($landing['query'] ?? null) ? $landing['query'] : $slug;

        $content = ContentService::get($slug, $query);

        $title = is_string($content['title'] ?? null) ? $content['title'] : '';
        $body  = is_string($content['content'] ?? null) ? $content['content'] : '';

        $html = '<h1>' . esc_html($title) . '</h1>' . $body;

        // 🔥 locale + telemetry
        $lang = LocaleService::detect();
        LocaleTelemetryService::track($lang);

        // 🔥 canonical (cluster-aware)
        $canonical = ClusterCanonicalService::canonicalUrl($slug);
        $html = '<link rel="canonical" href="' . esc_attr($canonical) . '">' . $html;

        // 🔥 hreflang (pokud zapnuto)
        $alts = ClusterCanonicalService::hreflang($slug);
        foreach ($alts as $l => $url) {
            $html = '<link rel="alternate" hreflang="' . esc_attr($l) . '" href="' . esc_attr($url) . '">' . $html;
        }

        $cfg = SettingsService::get();

        if (!$cfg->indexationEnabled || $cfg->forceNoindex) {
            return Response::html('<meta name="robots" content="noindex,nofollow">' . $html);
        }

        if ($cfg->noindexBelowThreshold && !LandingQualityService::isIndexable($slug)) {
            $html = '<meta name="robots" content="noindex,nofollow">' . $html;
        } else {
            $robots = is_string($cfg->robotsMeta) ? $cfg->robotsMeta : 'index,follow';
            $html = '<meta name="robots" content="' . esc_attr($robots) . '">' . $html;
        }

        return Response::html($html);
    }

    private static function notFound(): Response
    {
        $res = new Response();
        $res->status = 404;
        $res->body = 'Not found';
        return $res;
    }

    private static function badRequest(): Response
    {
        $res = new Response();
        $res->status = 400;
        $res->body = 'Bad request';
        return $res;
    }
}