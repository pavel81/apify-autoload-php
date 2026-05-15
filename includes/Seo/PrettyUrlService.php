<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

final class PrettyUrlService
{
    public static function resolve(string $path): string
    {
        $path = trim($path, '/');

        if ($path === '') {
            return '';
        }

        $parts = explode('/', $path);
        $slug = end($parts);

        return is_string($slug) ? $slug : '';
    }

    public static function fromQuery(string $query): string
    {
        $q = mb_strtolower($query);

        $q = iconv('UTF-8', 'ASCII//TRANSLIT', $q);
        if (!is_string($q)) {
            $q = $query;
        }

        $q = mb_strtolower($q);

        $q = preg_replace('/[^a-z0-9\s-]/', '', $q) ?? $q;
        $q = preg_replace('/\s+/', '-', $q) ?? $q;
        $q = preg_replace('/-+/', '-', $q) ?? $q;

        $q = trim($q, '-');

        return $q !== '' ? $q : 'page';
    }
}