<?php

declare(strict_types=1);

namespace Panda\Apify\Presentation;

use Panda\Apify\Services\ProductService;
use Panda\Apify\Presentation\Renderer\ProductRenderer;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductPage
{
    public static function boot(): void
    {
        add_action('template_redirect', [self::class, 'handle']);
    }

    public static function handle(): void
    {
        $slug = get_query_var('apify_product');

        if (!$slug) {
            return;
        }

        global $wpdb;

        $value = (string) $slug;

        $service = new ProductService($wpdb);
        $data = $service->getProductBySlugOrHash($value);

        if (!$data) {
            status_header(404);
            nocache_headers();
            echo 'Product not found';
            exit;
        }

        $product = $data['product'] ?? [];
        $title   = (string) ($product['title'] ?? '');
        $hash    = (string) ($product['canonical_hash'] ?? $value);

        // 🔥 SEO (canonical + title)
        add_action('wp_head', static function () use ($hash, $title): void {
            echo '<link rel="canonical" href="' . esc_url(home_url('/produkt/' . $hash)) . '" />' . "\n";

            if ($title !== '') {
                echo '<title>' . esc_html($title) . '</title>' . "\n";
            }
        });

        // 🔥 status jistota
        status_header(200);

        // 🔥 ochrana proti duplicitnímu renderu (WP někdy zlobí)
        if (did_action('apify_product_rendered')) {
            return;
        }
        do_action('apify_product_rendered');

        get_header();

        ProductRenderer::render(
            $data['product'],
            $data['offers'],
            $data['best_offer'] ?? null,
            $data
        );

        get_footer();

        exit;
    }
}