<?php

declare(strict_types=1);

namespace Panda\Apify\Shortcodes;

use Panda\Apify\Services\ProductService;
use Panda\Apify\Presentation\Renderer\ProductRenderer;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductShortcode
{
    public static function register(): void
    {
        add_shortcode('apify_product', [self::class, 'render']);
    }

    /**
     * @param array<string,string> $atts
     */
    public static function render(array $atts): string
    {
        global $wpdb;

        $hash = (string) ($atts['hash'] ?? '');

        if ($hash === '') {
            return 'Missing product hash';
        }

        $service = new ProductService($wpdb);
        
/**
 * @var array<string, mixed>|null $data
 */ 
        $data = $service->getProductWithOffers($hash);

        if (!$data) {
            return 'Product not found';
        }

        ob_start();

        ProductRenderer::render(
           (array)($data['product'] ??[]),
           (array)($data['offers'] ??[]),
           isset ($data['best_offer']) &&
           is_array($data['best_offer']) 
           ? $data['best_offer']:null
           );
           
           

        $output = ob_get_clean();
        return $output !== false ? $output:''; 
    }
}
