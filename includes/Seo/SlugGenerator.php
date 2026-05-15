<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

final class SlugGenerator
{
    public static function generate(string $text, string $lang = 'cs'): string
    {
        $text = mb_strtolower($text);

        $text = preg_replace('~[^a-z0-9]+~u', '-', $text);
        $text = trim((string)$text, '-');

        return $lang . '/' . $text;
    }

    public static function deduplicate(string $slug): string
    {
        $existing = get_option('panda_slugs', []);

        if (!is_array($existing)) {
            $existing = [];
        }

        if (!in_array($slug, $existing, true)) {
            $existing[] = $slug;
            update_option('panda_slugs', $existing, false);
            return $slug;
        }

        $i = 2;
        while (in_array($slug . '-' . $i, $existing, true)) {
            $i++;
        }

        $final = $slug . '-' . $i;
        $existing[] = $final;

        update_option('panda_slugs', $existing, false);

        return $final;
    }
}