<?php

namespace Panda\Apify\Cache;

use Panda\Apify\Queries\ApifyProductQuery;
use Panda\Apify\Queries\ApifyProductDto;

if (!defined('ABSPATH')) {
    exit;
}

class Apify_Product_Search
{
    /**
     * @return array<int, ApifyProductDto>
     */
    public static function search(string $term, string $shop = '', int $limit = 10): array
    {
        $term = trim($term);
        if ($term === '') {
            return [];
        }

        $cacheId = $term . '|' . $shop . '|' . $limit;
        $cached = Apify_Cache::get('product_search', $cacheId);

        if ($cached !== false && is_array($cached)) {
            return array_map(
                static fn(array $row): ApifyProductDto => ApifyProductDto::fromArray($row),
                $cached
            );
        }

        $results = ApifyProductQuery::getLatestProducts([
            'term'  => $term,
            'shop'  => $shop,
            'limit' => $limit,
        ]);

        Apify_Cache::set(
            'product_search',
            $cacheId,
            array_map(
                static fn(ApifyProductDto $dto): array => $dto->toArray(),
                $results
            ),
            300
        );

        return $results;
    }
}
