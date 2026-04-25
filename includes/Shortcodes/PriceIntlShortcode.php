<?php

declare(strict_types=1);

namespace Panda\Apify\Shortcodes;

use Panda\Apify\Core\QueryService;

if (!defined('ABSPATH')) {
    exit;
}

class PriceIntlShortcode
{
    public static function register(): void
    {
        add_shortcode('apify_price_intl', [self::class, 'render']);
    }

    /**
     * @param array<string, mixed> $atts
     */
    public static function render(array $atts): string
    {
        $a = shortcode_atts([
            'sku'          => '',
            'currency'     => get_option('apify_default_currency', 'CZK'),
            'months'       => 3,
            'show_history' => false,
        ], $atts, 'apify_price_intl');

        $sku = trim((string) $a['sku']);
        if ($sku === '') {
            return '<em>SKU chybí.</em>';
        }

        $months       = max(1, (int) $a['months']);
        $currency     = (string) $a['currency'];
        $showHistory  = (bool) $a['show_history'];

        $stats = QueryService::priceStatsForSku($sku, $months);
        if (!$stats) {
            return '<em>Data nejsou k dispozici.</em>';
        }

        $html  = '<div class="apify-price-box">';
        $html .= '<strong>SKU:</strong> ' . esc_html($sku) . ' | ';
        $html .= '<strong>Min:</strong> ' . esc_html((string) ($stats['min'] ?? '')) . ' ' . esc_html($currency) . ' | ';
        $html .= '<strong>Max:</strong> ' . esc_html((string) ($stats['max'] ?? '')) . ' ' . esc_html($currency) . ' | ';
        $html .= '<strong>Průměr:</strong> ' . esc_html((string) ($stats['avg'] ?? '')) . ' ' . esc_html($currency);

        if ($showHistory) {
            $historyJson = wp_json_encode($stats['history'] ?? [], JSON_UNESCAPED_UNICODE);
            $html .= '<pre style="white-space:pre-wrap">' .
                esc_html((string) ($historyJson !== false ? $historyJson : '')) .
                '</pre>';
        }

        $html .= '</div>';

        return $html;
    }
}
