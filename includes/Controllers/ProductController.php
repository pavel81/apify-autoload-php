<?php

declare(strict_types=1);

namespace Panda\Apify\Controllers;

use Panda\Apify\Services\ProductService;
use WP_REST_Request;
use WP_Error;
use Panda\Apify\Infrastructure\Client\ClientContext;

if (!defined('ABSPATH')) {
    exit;
}

final class ProductController
{  

 /**
 * @return array{
 *     ok: bool,
 *     plan: string,
 *     product: mixed,
 *     offers: array<int, array<string, mixed>>,
 *     meta: array{
 *         total_offers: int,
 *         visible_offers: int
 *     },
 *     upsell: array<string, mixed>|null
 * }|WP_Error
 */
    public function detail(WP_REST_Request $request): array|WP_Error
    {
        global $wpdb;
        /** @var \wpdb $wpdb */

        $hash = (string) $request->get_param('hash');

        if ($hash === '') {
            return new WP_Error('missing_hash', 'Missing hash', ['status' => 400]);
        }

        // 🔐 client context (user + plan)
        $ctx = ClientContext::resolve();
        $plan = $ctx['plan'];

        $service = new ProductService($wpdb);

        $data = $service->getProductWithOffers($hash);

        if(empty($data)) {
            return new WP_Error('not_found', 'Product not found', ['status' => 404]);
        }

        $product = $data['product'] ?? null;
        $offers = $data['offers'] ?? [];

        $totalOffers = count($offers);

        // 🔥 NORMALIZACE + BASIC SCORING
        $offers = $this->normalizeOffers($offers);
        $offers = $this->addScoring($offers);

        // 🔥 BEST DEAL FLAG
        if (!empty($offers)) {
            $offers[0]['badge'] = 'best_price';
        }

        // 🔐 PLAN GATING
        $visibleOffers = $offers;

        if ($plan === 'free') {
            $visibleOffers = array_slice($offers, 0, 3);

            // ❌ schovej URL pro free
            $visibleOffers = array_map(static function (array $o): array {
                unset($o['url']);
                return $o;
            }, $visibleOffers);
        }

        // 🔥 UPSELL LOGIC
        $upsell = null;

        if ($plan === 'free' && $totalOffers > count($visibleOffers)) {
            $upsell = [
                'locked' => true,
                'message' => 'Zobrazit všechny nabídky',
                'cta' => 'Go Premium',
            ];
        }

        return [
            'ok' => true,
            'plan' => $plan,
            'product' => $product,
            'offers' => $visibleOffers,
            'meta' => [
                'total_offers' => $totalOffers,
                'visible_offers' => count($visibleOffers),
            ],
            'upsell' => $upsell,
        ];
    }

    /**
     * @param array<int, array<string, mixed>> $offers
     * @return array<int, array<string, mixed>>
     */
    private function normalizeOffers(array $offers): array
    {
       return array_values(array_map(static function (array $o): array {
    return [
        'shop' => (string) ($o['shop'] ?? ''),
        'price' => isset($o['price']) ? (float) $o['price'] : 0.0,
        'url' => isset($o['url']) ? (string) $o['url'] : '',
    ];
}, $offers));


    }

    /**
     * @param array<int, array<string, mixed>> $offers
     * @return array<int, array<string, mixed>>
     */
    private function addScoring(array $offers): array
    {
        usort($offers, static function ($a, $b) {
            return ($a['price'] ?? 0) <=> ($b['price'] ?? 0);
        });

        if (empty($offers)) {
            return $offers;
        }

        $bestPrice = $offers[0]['price'];

        foreach ($offers as &$offer) {
            $price = $offer['price'];

            if ($price > 0 && $bestPrice > 0) {
                $offer['discount_percent'] = (int) round(
                    100 - ($price / $bestPrice * 100)
                );
            } else {
                $offer['discount_percent'] = 0;
            }
        }

        return $offers;
    }
}
