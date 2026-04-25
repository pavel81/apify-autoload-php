<?php

declare(strict_types=1);

namespace Panda\Apify\DTO;

if (!defined('ABSPATH')) {
    exit;
}

final class ApifyProductDto
{
    public function __construct(
        public readonly int $id,
        public readonly string $externalId,
        public readonly string $shop,
        public readonly string $sku,
        public readonly string $title,
        public readonly float $price,
        public readonly string $currency,
        public readonly string $category,
        public readonly string $manufacturer,
        public readonly string $imageUrl,
        public readonly int $imageId,
        public readonly string $updatedAt,
        public readonly string $createdAt,
    ) {}

    /**
     * @param array{
     * id?:int,
     * external_id?:string,
     * shop?:string,
     * sku?:string,
     * title?:string,
     * price?:float|int|string,
     * currency?:string,
     * category?:string,
     * manufacturer?:string,
     * image_url?:string,
     * image_id?:int,
     * updated_at?:string,
     * created_at?:string
     * } $row
     */
    public static function fromArray(array $row): self
    {
        return new self(
            id: (int)($row['id'] ?? 0),
            externalId: (string)($row['external_id'] ?? ''),
            shop: (string)($row['shop'] ?? ''),
            sku: (string)($row['sku'] ?? ''),
            title: (string)($row['title'] ?? ''),
            price: (float)($row['price'] ?? 0),
            currency: (string)($row['currency'] ?? 'CZK'),
            category: (string)($row['category'] ?? ''),
            manufacturer: (string)($row['manufacturer'] ?? ''),
            imageUrl: (string)($row['image_url'] ?? ''),
            imageId: (int)($row['image_id'] ?? 0),
            updatedAt: (string)($row['updated_at'] ?? ''),
            createdAt: (string)($row['created_at'] ?? '')
        );
    }

    /**
     * @return array<string, scalar>
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'external_id' => $this->externalId,
            'shop' => $this->shop,
            'sku' => $this->sku,
            'title' => $this->title,
            'price' => $this->price,
            'currency' => $this->currency,
            'category' => $this->category,
            'manufacturer' => $this->manufacturer,
            'image_url' => $this->imageUrl,
            'image_id' => $this->imageId,
            'updated_at' => $this->updatedAt,
            'created_at' => $this->createdAt,
        ];
    }
}