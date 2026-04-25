<?php

declare(strict_types=1);

namespace Panda\Apify\Shortcodes;

use Panda\Apify\Cache\Apify_Product_Renderer;
use Panda\Apify\Cache\Apify_Search_Renderer;
use Panda\Apify\Queries\ApifyProductQuery;
use Panda\Apify\Services\Apify_Price_Service;

if (!defined('ABSPATH')) {
    exit;
}

final class Apify_Shortcodes
{
    public static function register(): void
    {
        add_shortcode('apify_price_intl', [self::class, 'price_intl']);
        add_shortcode('apify_price_list', [self::class, 'price_list']);
        add_shortcode('apify_search', [self::class, 'search']);
    }

    /**
     * @param array<string, mixed> $atts
     */
    public static function price_intl(array $atts = []): string
    {
        /** @var array<string, mixed> $a */
        $a = shortcode_atts([
            'sku'          => '',
            'shop'         => '',
            'months'       => (int) get_option('apify_price_intl_window_days', 3),
            'currency'     => get_option('apify_default_currency', 'CZK'),
            'show_history' => 0,
            'use_cache'    => 1,
        ], $atts, 'apify_price_intl');

        $sku          = trim((string) $a['sku']);
        $shop         = trim((string) $a['shop']);
        $months       = max(1, (int) $a['months']);
        $currency     = trim((string) $a['currency']);
        $show_history = !empty($a['show_history']);
        $use_cache    = !empty($a['use_cache']);

        if ($sku === '') {
            return '<em>Missing SKU</em>';
        }

        if ($use_cache) {
            return Apify_Product_Renderer::render_price_box(
                $sku,
                $shop,
                $months,
                $currency,
                $show_history
            );
        }

        /** @var array<string, mixed>|null $stats */
        $stats = Apify_Price_Service::get_stats($sku, $shop, $months);

        if (!$stats) {
            return '<em>No data</em>';
        }

        ob_start();
        ?>
        <div class="apify-price-box">
            <strong>SKU:</strong> <?php echo esc_html($sku); ?><br>

            <?php if ($shop !== ''): ?>
                <strong>Shop:</strong> <?php echo esc_html($shop); ?><br>
            <?php endif; ?>

            <strong>Min:</strong> <?php echo esc_html((string) ($stats['min'] ?? '')); ?> <?php echo esc_html($currency); ?><br>
            <strong>Max:</strong> <?php echo esc_html((string) ($stats['max'] ?? '')); ?> <?php echo esc_html($currency); ?><br>
            <strong>Avg:</strong> <?php echo esc_html((string) ($stats['avg'] ?? '')); ?> <?php echo esc_html($currency); ?><br>
            <strong>Change:</strong> <?php echo esc_html((string) ($stats['change'] ?? '')); ?> (<?php echo esc_html((string) ($stats['change_pct'] ?? '')); ?>%)<br>

            <?php if ($show_history): ?>
                <?php
                $json = wp_json_encode($stats['history'] ?? [], JSON_UNESCAPED_UNICODE);
                ?>
                <pre><?php echo esc_html($json !== false ? $json : ''); ?></pre>
            <?php endif; ?>
        </div>
        <?php
        return (string) ob_get_clean();
    }

    /**
     * @param array<string, mixed> $atts
     */
    public static function price_list(array $atts = []): string
    {
        /** @var array<string, mixed> $a */
        $a = shortcode_atts([
            'term'         => '',
            'shop'         => '',
            'category'     => '',
            'manufacturer' => '',
            'sku'          => '',
            'limit'        => 10,
            'use_cache'    => 1,
        ], $atts, 'apify_price_list');

        $term         = trim((string) $a['term']);
        $shop         = trim((string) $a['shop']);
        $category     = trim((string) $a['category']);
        $manufacturer = trim((string) $a['manufacturer']);
        $sku          = trim((string) $a['sku']);
        $limit        = max(1, min(100, (int) $a['limit']));
        $use_cache    = !empty($a['use_cache']);

        if ($use_cache && $term !== '') {
            /** @var array{term:string,shop:string,limit:int} $params */
            $params = [
                'term'  => $term,
                'shop'  => $shop,
                'limit' => $limit,
            ];

            return Apify_Search_Renderer::render_search($params);
        }

        /** @var array<int, array<string, mixed>> $rows */
        $rows = ApifyProductQuery::get_latest_products([
            'term'         => $term,
            'shop'         => $shop,
            'category'     => $category,
            'manufacturer' => $manufacturer,
            'sku'          => $sku,
            'limit'        => $limit,
        ]);

        if (!$rows) {
            return '<em>No products</em>';
        }

        ob_start();
        ?>
        <div class="apify-price-list">
            <table class="widefat striped">
                <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo esc_html((string) ($row['title'] ?? '')); ?></td>
                        <td><?php echo esc_html((string) ($row['price'] ?? '')); ?> <?php echo esc_html((string) ($row['currency'] ?? '')); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php
        return (string) ob_get_clean();
    }

    /**
     * @param array<string, mixed> $atts
     */
    public static function search(array $atts = []): string
    {
        /** @var array<string, mixed> $a */
        $a = shortcode_atts([
            'term'       => '',
            'shop'       => '',
            'limit'      => 10,
            'use_cache'  => 1,
        ], $atts, 'apify_search');

        $term      = trim((string) $a['term']);
        $shop      = trim((string) $a['shop']);
        $limit     = max(1, min(100, (int) $a['limit']));
        $use_cache = !empty($a['use_cache']);

        if ($term === '') {
            return '<em>Zadej hledaný výraz</em>';
        }

        if ($use_cache) {
            /** @var array{term:string,shop:string,limit:int} $params */
            $params = [
                'term'  => $term,
                'shop'  => $shop,
                'limit' => $limit,
            ];

            return Apify_Search_Renderer::render_search($params);
        }

        /** @var array<int, array<string, mixed>> $rows */
        $rows = ApifyProductQuery::get_latest_products([
            'term'  => $term,
            'shop'  => $shop,
            'limit' => $limit,
        ]);

        if (!$rows) {
            return '<em>Nic nenalezeno</em>';
        }

        ob_start();
        ?>
        <ul class="apify-search-results">
            <?php foreach ($rows as $row): ?>
                <li>
                    <strong><?php echo esc_html((string) ($row['title'] ?? '')); ?></strong><br>
                    <?php echo esc_html((string) ($row['price'] ?? '')); ?> <?php echo esc_html((string) ($row['currency'] ?? '')); ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
        return (string) ob_get_clean();
    }
}