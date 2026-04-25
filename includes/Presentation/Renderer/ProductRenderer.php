<?php

declare(strict_types=1);

namespace Panda\Apify\Presentation\Renderer;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductRenderer
{
    /**
     * @param array<string, mixed> $product
     * @param array<int, array<string, mixed>> $offers
     * @param array<string, mixed>|null $bestOffer
     * @param array<string, mixed> $meta
     */
    public static function render(
        array $product,
        array $offers = [],
        ?array $bestOffer = null,
        array $meta = []
    ): void {
        $template = self::templatePath('product-detail.php');

        if (!file_exists($template)) {
            echo 'Template missing';
            return;
        }

        // 👉 BC (staré názvy)
        $productData = $product;
        $offersData  = $offers;

        // 👉 nové názvy pro template
        $product   = $productData;
        $topOffers = array_slice($offersData, 0, 5);

        // 🔥 meta (SEO / schema)
        $priceMin    = (float) ($meta['price_min'] ?? 0);
        $priceMax    = (float) ($meta['price_max'] ?? 0);
        $ratingValue = isset($meta['rating_value']) ? (float) $meta['rating_value'] : null;
        $reviewCount = isset($meta['review_count']) ? (int) $meta['review_count'] : null;

        include $template;
    }

    private static function templatePath(string $file): string
    {
        return plugin_dir_path(__FILE__) . '../Templates/' . $file;
    }
}