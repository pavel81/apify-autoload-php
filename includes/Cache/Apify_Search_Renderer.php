<?php

declare(strict_types=1);

namespace Panda\Apify\Cache;

use Panda\Apify\Queries\ApifyProductQuery;

final class Apify_Search_Renderer
{
    /**
     * @param array{term:string, shop:string, limit:int} $params
     */
    public static function render_search(array $params): string
    {
        $term  = trim($params['term']);
        $shop  = trim($params['shop']);
        $limit = max(1, min(100, (int) $params['limit']));

        if ($term === '') {
            return '<em>Empty search</em>';
        }

        /** @var array<int, array<string, mixed>> $rows */
        $rows = ApifyProductQuery::get_latest_products([
            'term'  => $term,
            'shop'  => $shop,
            'limit' => $limit,
        ]);

        if (!$rows) {
            return '<em>No results</em>';
        }

        ob_start();
        ?>
        <div class="apify-search-render">
            <ul>
                <?php foreach ($rows as $row): ?>
                    <li>
                        <strong><?php echo esc_html((string)($row['title'] ?? '')); ?></strong><br>
                        <?php echo esc_html((string)($row['price'] ?? '')); ?>
                        <?php echo esc_html((string)($row['currency'] ?? '')); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php

        return (string) ob_get_clean();
    }
}