<?php

namespace Panda\Apify\Core;

if (!defined('ABSPATH')) {
    exit;
}

class Apify_Import_Sanitizer
{
/**
 * @param array<string, mixed> $item
 * @return array<string, mixed>
 */ 
    public static function sanitize_item(array $item, string $default_shop = 'default'): array
    {
        $idRaw = $item['id'] ?? $item['product_id'] ?? '';
        $skuRaw = $item['sku'] ?? $item['code'] ?? '';
        $titleRaw = $item['title'] ?? $item['name'] ?? '';
        $priceRaw = $item['price'] ?? $item['price_vat'] ?? 0;
        $currencyRaw = $item['currency'] ?? 'CZK';
        $categoryRaw = $item['category'] ?? '';
        $manufacturerRaw = $item['manufacturer'] ?? $item['brand'] ?? '';
        $imageRaw = $item['image'] ?? $item['image_url'] ?? '';
        $shopRaw = $item['shop'] ?? $default_shop;

        $externalId = sanitize_text_field((string) $idRaw);
        $sku = sanitize_text_field((string) $skuRaw);
        $title = sanitize_text_field((string) $titleRaw);
        $currency = strtoupper(sanitize_text_field((string) $currencyRaw));
        $category = sanitize_text_field((string) $categoryRaw);
        $manufacturer = sanitize_text_field((string) $manufacturerRaw);
        $shop = sanitize_text_field((string) $shopRaw);
        $imageUrl = esc_url_raw((string) $imageRaw);
        $price = is_numeric($priceRaw) ? (float) $priceRaw : 0.0;

        if ($price < 0) {
            $price = 0.0;
        }

        return [
            'external_id' => $externalId,
            'sku' => $sku,
            'title' => $title !== '' ? $title : 'Bez názvu',
            'price' => $price,
            'currency' => $currency !== '' ? $currency : 'CZK',
            'category' => $category,
            'manufacturer' => $manufacturer,
            'image_url' => $imageUrl,
            'shop' => $shop !== '' ? $shop : 'default',
            'source_payload' => wp_json_encode(self::sanitize_payload_recursive($item), JSON_UNESCAPED_UNICODE),
        ];
    }
/**
 * @param array<int, array<string, mixed>> $items
 * @return array<int, array<string, mixed>>
 */ 
    public static function sanitize_items(array $items, string $default_shop = 'default'): array
    {
        $out = [];

        foreach ($items as $item) {
            if (!is_array($item)) {
                continue;
            }

            $row = self::sanitize_item($item, $default_shop);

            if ($row['external_id'] === '' || $row['sku'] === '') {
                continue;
            }

            $out[] = $row;
        }

        return $out;
    }
/**
 * @param mixed $value
 * @return mixed
 */
    protected static function sanitize_payload_recursive($value)
    {
        if (is_array($value)) {
            $out = [];
            foreach ($value as $key => $item) {
                $cleanKey = is_string($key) ? sanitize_text_field($key) : $key;
                $out[$cleanKey] = self::sanitize_payload_recursive($item);
            }
            return $out;
        }

        if (is_object($value)) {
            $vars = get_object_vars($value);
            return self::sanitize_payload_recursive($vars);
        }

        if (is_string($value)) {
            return sanitize_text_field($value);
        }

        if (is_bool($value) || is_int($value) || is_float($value) || $value === null) {
            return $value;
        }

        return sanitize_text_field((string) $value);
    }
}
