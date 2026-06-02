<?php

declare(strict_types=1);

namespace Panda\Apify\Import;

use Panda\Apify\DTO\ProductIdentityDto;

final class ProductImportValidator
{
    /**
     * @param array<string, mixed> $payload
     * @return array{success: bool, errors: array<int, string>, payload?: array<string, mixed>, identity?: ProductIdentityDto}
     */
    public function validate(array $payload): array
    {
        $errors = [];

        foreach (['external_id', 'sku', 'shop', 'region', 'domain', 'title'] as $field) {
            if (trim((string) ($payload[$field] ?? '')) === '') {
                $errors[] = sprintf('Missing required field: %s', $field);
            }
        }

        $identity = ProductIdentityDto::fromArray($payload);

        if (!$this->validateBarcodeField($identity->gtin)) {
            $errors[] = 'Invalid GTIN';
        }

        if (!$this->validateBarcodeField($identity->ean)) {
            $errors[] = 'Invalid EAN';
        }

        if (!$this->validateBarcodeField($identity->upc)) {
            $errors[] = 'Invalid UPC';
        }

        if ($identity->mpn !== null && $identity->mpn === '') {
            $errors[] = 'Invalid MPN';
        }

        if (($payload['url'] ?? '') !== '' && filter_var((string) $payload['url'], FILTER_VALIDATE_URL) === false) {
            $errors[] = 'Invalid URL';
        }

        if (array_key_exists('price', $payload) && $payload['price'] !== null && $payload['price'] !== '' && !is_numeric($payload['price'])) {
            $errors[] = 'Invalid price';
        }

        foreach (['use_cases', 'product_groups', 'tags'] as $bucket) {
            if (array_key_exists($bucket, $payload) && !is_array($payload[$bucket])) {
                $errors[] = sprintf('Invalid classification payload: %s', $bucket);
            }
        }

        if ($errors !== []) {
            return [
                'success' => false,
                'errors' => $errors,
            ];
        }

        return [
            'success' => true,
            'errors' => [],
            'payload' => $payload,
            'identity' => $identity,
        ];
    }

    private function validateBarcodeField(?string $value): bool
    {
        if ($value === null || $value === '') {
            return true;
        }

        $length = strlen($value);

        return in_array($length, [8, 12, 13, 14], true);
    }
}
