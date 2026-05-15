<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

final class SeoSlugService
{
    public static function fromQuery(string $query): string
    {
        $q = mb_strtolower($query);

        // odstranění diakritiky (basic)
        $q = iconv('UTF-8', 'ASCII//TRANSLIT', $q);
        if (!is_string($q)) {
            $q = $query;
        }

        $q = mb_strtolower($q);

        // jen písmena + čísla
        $q = preg_replace('/[^a-z0-9\s-]/', '', $q) ?? $q;

        // mezery → -
        $q = preg_replace('/\s+/', '-', $q) ?? $q;

        // vícenásobné -
        $q = preg_replace('/-+/', '-', $q) ?? $q;

        $q = trim($q, '-');

        return $q !== '' ? $q : 'page';
    }
}