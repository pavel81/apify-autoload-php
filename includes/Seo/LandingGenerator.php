<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

final class LandingGenerator
{
    public static function generate(string $query): string
    {
        $slug = SlugGenerator::deduplicate(
            SlugGenerator::generate($query)
        );

        $relations = get_option('panda_relations', []);
        if (!is_array($relations)) {
            $relations = [];
        }

        $related = $relations[$query] ?? [];

        $content = self::buildContent($query, $related);

        LandingRepository::save($slug, [
            'query' => $query,
            'content' => $content,
            'related' => $related,
            'created' => time(),
        ]);

        return $slug;
    }

    /**
     * @param string[] $related
     */
    private static function buildContent(string $query, array $related): string
    {
        $html = '<h1>' . esc_html($query) . '</h1>';

        $html .= do_shortcode('[panda_products search="' . esc_attr($query) . '"]');

        if ($related !== []) {
            $html .= '<h2>Související</h2>';

            foreach ($related as $r) {
                $html .= do_shortcode('[panda_products category="' . esc_attr($r) . '"]');
            }
        }

        return $html;
    }
}