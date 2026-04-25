<?php
namespace Panda\Apify\Queries;

if (!defined('ABSPATH')) exit;

class ApifyProductDto
{
    public int $id;
    public string $externalId;
    public string $shop;
    public string $sku;
    public string $title;
    public float $price;
    public string $currency;
    public string $category;
    public string $manufacturer;
    public string $imageUrl;
    public int $imageId;
    public string $updatedAt;
    public string $createdAt;

    public function __construct(
        int $id = 0,
        string $externalId = '',
        string $shop = '',
        string $sku = '',
        string $title = '',
        float $price = 0.0,
        string $currency = 'CZK',
        string $category = '',
        string $manufacturer = '',
        string $imageUrl = '',
        int $imageId = 0,
        string $updatedAt = '',
        string $createdAt = ''
    ) {
        $this->id = $id;
        $this->externalId = $externalId;
        $this->shop = $shop;
        $this->sku = $sku;
        $this->title = $title;
        $this->price = $price;
        $this->currency = $currency;
        $this->category = $category;
        $this->manufacturer = $manufacturer;
        $this->imageUrl = $imageUrl;
        $this->imageId = $imageId;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }
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
     * update_at?:string,
     * created_at?:string
     * }$row
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
 * @return array{
 * id:int,
 * external_id:string,
 * shop:string,
 * sku:string,
 * title:string,
 * price:float,
 * currency:string,
 * category:string,
 * manufacturer:string,
 * image_url:string,
 * image_id:int,
 * updated_at:string,
 * created_at:string
 * }
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
