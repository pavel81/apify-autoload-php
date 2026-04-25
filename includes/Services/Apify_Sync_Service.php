<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Queries\ProductRepository;
use Panda\Apify\Cache\Apify_Cache;
use Panda\Apify\Core\Apify_Duplicate_Policy;

if (!defined('ABSPATH')) {
    exit;
}

final class Apify_Sync_Service
{
    /**
     * @param array<int, array<string, mixed>> $items
     * @return array{
     *   inserted:int,
     *   updated:int,
     *   skipped:int,
     *   errors:array<int, string>
     * }
     */
    public static function sync_feed(array $items, string $shop): array
    {
        $inserted = 0;
        $updated  = 0;
        $skipped  = 0;
        $errors   = [];

        foreach ($items as $item) {
            try {
                $result = self::sync_product($item, $shop);

                if ($result === 'insert') {
                    $inserted++;
                } elseif ($result === 'update') {
                    $updated++;
                } else {
                    $skipped++;
                }

            } catch (\Throwable $e) {
                $errors[] = $e->getMessage();
            }
        }

        return [
            'inserted' => $inserted,
            'updated'  => $updated,
            'skipped'  => $skipped,
            'errors'   => $errors,
        ];
    }

    /**
     * @param array<string, mixed> $item
     */
    protected static function sync_product(array $item, string $shop): string
    {
        global $wpdb;
        /** @var \wpdb $wpdb */

        $externalId = (string) ($item['external_id'] ?? '');
        $sku        = (string) ($item['sku'] ?? '');

        if ($externalId === '' || $sku === '') {
            return 'skip';
        }

        // region + domain
        $region = (string) ($item['region'] ?? 'CZ');
        $domain = (string) ($item['domain'] ?? '');

        // canonical hash
        $hash = hash(
            'sha256',
            strtolower(
                ($item['title'] ?? '') .
                ($item['brand'] ?? '') .
                ($item['model'] ?? '')
            )
        );

        // duplicate policy
        if (Apify_Duplicate_Policy::should_skip()) {
            return 'skip';
        }

        $repo = new ProductRepository($wpdb);

        // UPSERT produkt
        $productId = $repo->upsertProduct([
            'external_id'    => $externalId,
            'sku'            => $sku,
            'shop'           => $shop,
            'region'         => $region,
            'domain'         => $domain,
            'title'          => (string) ($item['title'] ?? ''),
            'url'            => (string) ($item['url'] ?? ''),
            'canonical_hash' => $hash,
            'brand'          => (string) ($item['brand'] ?? ''),
            'model'          => (string) ($item['model'] ?? ''),
        ]);

        // PRICE history
        $repo->insertPrice(
            $productId,
            $shop,
            $region,
            $sku,
            (float) ($item['price'] ?? 0),
            (string) ($item['currency'] ?? 'CZK')
        );

        // CANONICAL map
        $repo->mapCanonical(
            $productId,
            $hash,
            $shop,
            $region
        );

        // cache flush
        Apify_Cache::flush_product($sku, $shop);

        // jednoduché rozlišení (můžeš později zpřesnit)
        return 'insert';
    }
}