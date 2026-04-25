<?php

declare(strict_types=1);

namespace Panda\Apify\Core;

use RuntimeException;
use Opis\JsonSchema\Validator;
use Opis\JsonSchema\Errors\ValidationError;

final class Apify_Import_Validator
{
    /**
     * @return array{
     *     schema: string,
     *     type: string,
     *     required: array<int, string>,
     *     properties: array<string, mixed>
     * }
     */
    public function get_product_schema(): array
    {
        return [
            'schema' => 'http://json-schema.org/draft-07/schema#',
            'type' => 'object',
            'required' => ['title', 'price'],
            'properties' => [
                'title' => ['type' => 'string'],
                'price' => ['type' => ['number', 'string']],
                'currency' => ['type' => 'string'],
                'shop' => ['type' => 'string'],
                'image' => ['type' => 'string'],
                'description' => ['type' => 'string'],
            ],
        ];
    }

    /**
     * @param array<int, array<string, mixed>> $items
     * @return array{
     *     valid: array<int, array<string, mixed>>,
     *     invalid: array<int, array{
     *         index: int,
     *         item: mixed,
     *         error: string
     *     }>
     * }
     */
    public function validate_items(array $items): array
    {
        $valid = [];
        $invalid = [];

        foreach ($items as $index => $item) {
            try {
                $normalized = $this->validate_item($item);
                $valid[] = $normalized;
            } catch (\Throwable $e) {
                $invalid[] = [
                    'index' => (int)$index,
                    'item' => $item,
                    'error' => $e->getMessage(),
                ];
            }
        }

        return [
            'valid' => $valid,
            'invalid' => $invalid,
        ];
    }

    /**
     * @param array<string, mixed> $item
     * @return array<string, mixed>
     */
    public function validate_item(array $item): array
    {
        $schema = $this->get_product_schema();

        $validator = new Validator();
        $result = $validator->validate($item, (object)$schema);

        if (!$result->isValid()) {
            $error = $result->error();

            if ($error instanceof ValidationError) {
                throw new RuntimeException($error->message());
            }

            throw new RuntimeException('Unknown validation error');
        }

        return [
            'title' => (string)($item['title'] ?? ''),
            'price' => (float)($item['price'] ?? 0),
            'currency' => (string)($item['currency'] ?? 'CZK'),
            'shop' => (string)($item['shop'] ?? ''),
            'image' => (string)($item['image'] ?? ''),
            'description' => (string)($item['description'] ?? ''),
        ];
    }

    /**
     * @param string $input
     * @return array<int, array<string, mixed>>
     */
    public function decode_json(string $input): array
    {
        $data = json_decode($input, true);

        if (!is_array($data)) {
            throw new RuntimeException('Invalid JSON');
        }

        /** @var array<int, array<string, mixed>> $data */
        return $data;
    }
}