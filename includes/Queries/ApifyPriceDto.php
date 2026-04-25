<?php

namespace Panda\Apify\Queries;

if (!defined('ABSPATH')) exit;

class ApifyPriceDto
{
    public int $productId;
    public string $shop;
    public string $sku;
    public float $price;
    public string $currency;
    public string $recordedAt;

    public function __construct(
        int $productId = 0,
        string $shop = '',
        string $sku = '',
        float $price = 0.0,
        string $currency = 'CZK',
        string $recordedAt = ''
    ) {
        $this->productId = $productId;
        $this->shop = $shop;
        $this->sku = $sku;
        $this->price = $price;
        $this->currency = $currency;
        $this->recordedAt = $recordedAt;
    }

    /**
     * @param array{
     *     product_id?: int|string,
     *     shop?: string,
     *     sku?: string,
     *     price?: float|int|string,
     *     currency?: string,
     *     recorded_at?: string
     * } $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            productId: (int)($row['product_id'] ?? 0),
            shop: (string)($row['shop'] ?? ''),
            sku: (string)($row['sku'] ?? ''),
            price: (float)($row['price'] ?? 0),
            currency: (string)($row['currency'] ?? 'CZK'),
            recordedAt: (string)($row['recorded_at'] ?? '')
        );
    }

    /**
     * @return array{
     *     product_id: int,
     *     shop: string,
     *     sku: string,
     *     price: float,
     *     currency: string,
     *     recorded_at: string
     * }
     */
    public function toArray(): array
    {
        return [
            'product_id'  => $this->productId,
            'shop'        => $this->shop,
            'sku'         => $this->sku,
            'price'       => $this->price,
            'currency'    => $this->currency,
            'recorded_at' => $this->recordedAt,
        ];
    }
}
