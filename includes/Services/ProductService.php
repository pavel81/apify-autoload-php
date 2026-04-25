<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\Queries\ProductQuery;
use wpdb;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductService
{
    private ProductRepository $repo;
    private ProductQuery $query;

    private const CACHE_TTL = 300;
    private const GROUP     = 'apify_products';

    public function __construct(wpdb $db)
    {
        $this->repo  = new ProductRepository($db);
        $this->query = new ProductQuery($db);
    }

    /**
     * @return array<string,mixed>|null
     */
    public function getProductBySlugOrHash(string $value): ?array
    {
        $cacheKey = 'product_' . md5($value);

        $cached = wp_cache_get($cacheKey, self::GROUP);
        if (is_array($cached)) {
    /** @var array{
     *   product: array<string,mixed>,
     *   best_offer: array<string,mixed>|null,
     *   offers: array<int, array{shop:string, price:float, currency:string}>,
     *   price_min: float,
     *   price_max: float,
     *   rating_value: float|null,
     *   review_count: int|null
     * } $cached
     */
           
      
    return $cached;
}
        

        $product = $this->repo->findCanonicalBySlug($value);

        if (!is_array($product)) {
            return null;
        }

        $canonicalHash = $product['canonical_hash'] ?? $value;

        $data = $this->getProductWithOffers($canonicalHash);

        if ($data !== null) {
            wp_cache_set($cacheKey, $data, self::GROUP, self::CACHE_TTL);
        }

        return $data;
    }

    /**
     * @return array{
     *   product: array<string,mixed>,
     *   best_offer: array<string,mixed>|null,
     *   offers: array<int, array{shop:string, price:float, currency:string}>,
     *   price_min: float,
     *   price_max: float,
     *   rating_value: float|null,
     *   review_count: int|null
     * }|null
     */
    public function getProductWithOffers(string $canonicalHash): ?array
    {
        $cacheKey = 'product_hash_' . md5($canonicalHash);

        $cached = wp_cache_get($cacheKey, self::GROUP);

if (is_array($cached)) {
    /** @var array{
     *   product: array<string,mixed>,
     *   best_offer: array<string,mixed>|null,
     *   offers: array<int, array{shop:string, price:float, currency:string}>,
     *   price_min: float,
     *   price_max: float,
     *   rating_value: float|null,
     *   review_count: int|null
     * } $cached
     */
    return $cached;
}

        /** @var array<string,mixed>|null $main */
        $main = $this->repo->findCanonical($canonicalHash);

        if ($main === null) {
            return null;
        }

        /** @var array<int,array<string,mixed>> $all */
        $all = $this->repo->findAllByCanonical($canonicalHash);

        if ($all === []) {
            return null;
        }

        /** @var array<int,int> $ids */
        $ids = array_map(
            static fn(array $p): int => (int) $p['id'],
            $all
        );

        /** @var array<string,mixed>|null $bestOffer */
        $bestOffer = $this->query->findBestOffer($ids);

        /** @var array<int,array<string,mixed>> $offersRaw */
        $offersRaw = $this->query->findLatestPrices($ids);

        /** @var array<int, array{shop:string, price:float, currency:string}> $offers */
        $offers = [];

        foreach ($offersRaw as $row) {
            $offers[] = [
                'shop'     => (string) ($row['shop'] ?? ''),
                'price'    => (float) ($row['price'] ?? 0),
                'currency' => (string) ($row['currency'] ?? 'CZK'),
            ];
        }

        $allPrices = array_map(
            static fn(array $r): float => (float)($r['price'] ?? 0),
            $offersRaw
        );

        $minPrice = $allPrices !== [] ? min($allPrices) : 0.0;
        $maxPrice = $allPrices !== [] ? max($allPrices) : 0.0;

        $ratingValue = $offersRaw !== [] ? 4.2 : null;
        $reviewCount = $offersRaw !== [] ? count($offersRaw) * 2 : null;
/** @var array{
 *   product:array<string,mixed>,
 *   best_offer:array<string,mixed>|null,
 *   offers:array<int, array{shop:string, price:float, currency:string}>,
 *   price_min:float,
 *   price_max:float,
 *   rating_value:float|null,
 *   review_count:int|null
 * } $result
 */
        $result = [
            'product'       => $main,
            'best_offer'    => $bestOffer,
            'offers'        => $offers,
            'price_min'     => $minPrice,
            'price_max'     => $maxPrice,
            'rating_value'  => $ratingValue,
            'review_count'  => $reviewCount,
        ];

        wp_cache_set($cacheKey, $result, self::GROUP, self::CACHE_TTL);

        return $result;
    }

    public static function invalidate(string $value): void
    {
        wp_cache_delete('product_' . md5($value), self::GROUP);
        wp_cache_delete('product_hash_' . md5($value), self::GROUP);
    }

    /**
     * @param array<int,string> $values
     */
    public static function invalidateBatch(array $values): void
    {
        foreach ($values as $value) {
            self::invalidate($value);
        }
    }

    /**
     * @param array<int,string> $canonicalHashes
     */
    public function warmup(array $canonicalHashes): void
    {
        foreach ($canonicalHashes as $hash) {
            $this->getProductWithOffers($hash);
        }
    }
}
