<?php

declare(strict_types=1);

namespace Panda\Apify\Cache;

use Panda\Apify\Cache\ProductCache;
use Panda\Apify\Services\Apify_Price_Service;

final class Renderer
{
    public static function render_price_box(
        string $sku,
        string $shop = '',
        int $months = 3,
        string $currency = 'CZK',
        bool $show_history = false
    ): string {

        // cache key (deterministický)
        $cache_id = md5($sku . '|' . $shop . '|' . $months . '|' . $currency . '|' . (int) $show_history);

        $cached = ProductCache::get('product_render_' . $cache_id);
        if ($cached !== false) {
            return (string) $cached;
        }

        $stats = Apify_Price_Service::get_stats($sku, $shop, $months);

        if (!is_array($stats)) {
            return '<em>No data</em>';
        }

        ob_start();
        ?>

        <div class="apify-price-box">
            <strong>SKU:</strong> <?php echo esc_html((string) $sku); ?><br>

            <?php if ($shop !== ''): ?>
                <strong>Shop:</strong> <?php echo esc_html((string) $shop); ?><br>
            <?php endif; ?>

            <strong>Min:</strong> <?php echo esc_html((string) ($stats['min'] ?? '')); ?> <?php echo esc_html($currency); ?><br>
            <strong>Max:</strong> <?php echo esc_html((string) ($stats['max'] ?? '')); ?> <?php echo esc_html($currency); ?><br>
            <strong>Avg:</strong> <?php echo esc_html((string) ($stats['avg'] ?? '')); ?> <?php echo esc_html($currency); ?><br>
            <strong>Change:</strong>
            <?php echo esc_html((string) ($stats['change'] ?? '')); ?>
            (<?php echo esc_html((string) ($stats['change_pct'] ?? '')); ?>)<br>

            <?php if ($show_history && isset($stats['history'])): ?>
                <pre>
<?php echo esc_html((string) wp_json_encode($stats['history'], JSON_UNESCAPED_UNICODE)); ?>
                </pre>
            <?php endif; ?>
        </div>

        <?php

        $html = ob_get_clean();

        if (!is_string($html)) {
            $html = '';
        }

        ProductCache::set('product_render_' . $cache_id, $html, 1800);

        return $html;
    }
}
