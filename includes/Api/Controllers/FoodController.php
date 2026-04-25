<?php

declare(strict_types=1);

namespace Panda\Apify\Api\Controllers;

use WP_REST_Request;
use WP_REST_Response;
use Panda\Apify\Http\HttpClient;

final class FoodController
{
    private const CACHE_TTL = 3600; // 1h

    public static function search(WP_REST_Request $request): WP_REST_Response
    {
        $query = trim((string) $request->get_param('q'));

        if ($query === '' || strlen($query) < 2 || strlen($query) > 100) {
            return new WP_REST_Response([
                'error' => 'Invalid query'
            ], 400);
        }

        $cacheKey = 'hb_food_' . md5($query);

        $cached = get_transient($cacheKey);
        if ($cached !== false) {
            return new WP_REST_Response($cached);
        }

        $url = self::buildApifyUrl($query);
        $client = new HttpClient();

        try {
          /** @var array<int, mixed> $data */
            $data = $client->getJson($url);
        } catch (\Throwable $e) {
            return new WP_REST_Response([
                'error' => 'External API failed'
            ], 502);
        }

         $products = [];

        foreach ($data as $item) {
            if (!is_array($item)) {
                continue;
            }

            $mapped = self::mapProduct($item);

            if ($mapped !== null) {
                $products[] = $mapped;
            }
        }

        set_transient($cacheKey, $products, self::CACHE_TTL);

        return new WP_REST_Response($products);
    }

    private static function buildApifyUrl(string $query): string
    {
        $base = 'https://api.apify.com/v2/actor-tasks/YOUR_TASK/run-sync-get-dataset-items';
        $token = defined('HB_APIFY_TOKEN') ? HB_APIFY_TOKEN : 'XXX';

        return $base . '?token=' . $token . '&q=' . urlencode($query);
    }

    /**
     * @param array<string, mixed> $item
     * @return array<string, mixed>|null
     */
    private static function mapProduct(array $item): ?array
    {
        if (empty($item['name'])) {
            return null;
        }

        $nutrients = self::sanitizeNutrients($item['nutrients'] ?? []);

        return [
            'id'        => self::sanitizeId($item['id'] ?? null),
            'name'      => self::sanitizeString((string) $item['name']),
            'price'     => isset($item['price']) ? (float) $item['price'] : null,
            'nutrients' => $nutrients,
        ];
    }

    /**
     * @param mixed $input
     * @return array<string, float>
     */
    private static function sanitizeNutrients($input): array
    {
        if (!is_array($input)) {
            return [];
        }

        $result = [];

        foreach ($input as $key => $value) {
            if (!is_string($key)) {
                continue;
            }

            if (is_numeric($value)) {
                $result[$key] = (float) $value;
            }
        }

        return $result;
    }

    private static function sanitizeId(?string $id): string
    {
        if ($id && preg_match('/^[a-zA-Z0-9_\-]+$/', $id)) {
            return $id;
        }

        return uniqid('food_', true);
    }

    private static function sanitizeString(string $value): string
    {
        return trim(strip_tags($value));
    }
}
