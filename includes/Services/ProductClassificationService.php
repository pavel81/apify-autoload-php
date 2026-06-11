<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

use Panda\Apify\Queries\ClassificationRepository;
use Panda\Apify\Services\ProductClassificationServiceInterface;

final class ProductClassificationService implements ProductClassificationServiceInterface
{
    public function __construct(private ClassificationRepository $repository)
    {
    }

    /**
     * @param array<int, string|array<string, mixed>> $useCases
     * @param array<int, string|array<string, mixed>> $groups
     * @param array<int, string|array<string, mixed>> $tags
     * @return array{
     *     use_cases: array<int, array<string, mixed>>,
     *     groups: array<int, array<string, mixed>>,
     *     tags: array<int, array<string, mixed>>
     * }
     */
    public function syncCanonical(
        string $canonicalHash,
        array $useCases = [],
        array $groups = [],
        array $tags = [],
        bool $replaceExisting = true
    ): array {
        if ($canonicalHash === '') {
            return [
                'use_cases' => [],
                'groups' => [],
                'tags' => [],
            ];
        }

        if ($replaceExisting) {
            $this->repository->clearCanonical($canonicalHash);
        }

        $this->syncUseCases($canonicalHash, $useCases);
        $this->syncGroups($canonicalHash, $groups);
        $this->syncTags($canonicalHash, $tags);

        return $this->repository->getByCanonicalHash($canonicalHash);
    }

    /**
     * @return array{
     *     use_cases: array<int, array<string, mixed>>,
     *     groups: array<int, array<string, mixed>>,
     *     tags: array<int, array<string, mixed>>
     * }
     */
    public function get(string $canonicalHash): array
    {
        return $this->repository->getByCanonicalHash($canonicalHash);
    }

    /**
     * @param array<int, string|array<string, mixed>> $items
     */
    private function syncUseCases(string $canonicalHash, array $items): void
    {
        foreach ($this->normalizeItems($items) as $item) {
            $id = $this->repository->upsertUseCase($item);

            if ($id > 0) {
                $this->repository->assignUseCase(
                    $canonicalHash,
                    $id,
                    (string) ($item['source'] ?? 'manual'),
                    (bool) ($item['is_primary'] ?? false),
                    (int) ($item['confidence'] ?? 100)
                );
            }
        }
    }

    /**
     * @param array<int, string|array<string, mixed>> $items
     */
    private function syncGroups(string $canonicalHash, array $items): void
    {
        foreach ($this->normalizeItems($items) as $item) {
            $id = $this->repository->upsertGroup($item);

            if ($id > 0) {
                $this->repository->assignGroup(
                    $canonicalHash,
                    $id,
                    (string) ($item['source'] ?? 'manual'),
                    (bool) ($item['is_primary'] ?? false),
                    (int) ($item['confidence'] ?? 100)
                );
            }
        }
    }

    /**
     * @param array<int, string|array<string, mixed>> $items
     */
    private function syncTags(string $canonicalHash, array $items): void
    {
        foreach ($this->normalizeItems($items) as $item) {
            $id = $this->repository->upsertTag($item);

            if ($id > 0) {
                $this->repository->assignTag(
                    $canonicalHash,
                    $id,
                    (string) ($item['source'] ?? 'manual'),
                    (bool) ($item['is_primary'] ?? false),
                    (int) ($item['confidence'] ?? 100)
                );
            }
        }
    }

    /**
     * @param array<int, string|array<string, mixed>> $items
     * @return array<int, array<string, mixed>>
     */
    private function normalizeItems(array $items): array
    {
        $normalized = [];

        foreach ($items as $item) {
            if (is_string($item)) {
                $name = trim($item);
                if ($name === '') {
                    continue;
                }

                $normalized[] = [
                    'slug' => sanitize_title($name),
                    'name' => $name,
                    'description' => '',
                    'is_active' => 1,
                    'sort_order' => 0,
                    'source' => 'manual',
                    'confidence' => 100,
                    'is_primary' => false,
                ];
                continue;
            }

            if (!is_array($item)) {
                continue;
            }

            $name = trim((string) ($item['name'] ?? ''));
            $slug = trim((string) ($item['slug'] ?? ''));

            if ($slug === '' && $name !== '') {
                $slug = sanitize_title($name);
            }

            if ($name === '' || $slug === '') {
                continue;
            }

            $normalized[] = [
                'slug' => $slug,
                'name' => $name,
                'description' => (string) ($item['description'] ?? ''),
                'is_active' => isset($item['is_active']) ? (int) (bool) $item['is_active'] : 1,
                'sort_order' => isset($item['sort_order']) ? (int) $item['sort_order'] : 0,
                'parent_id' => array_key_exists('parent_id', $item) ? $item['parent_id'] : null,
                'source' => (string) ($item['source'] ?? 'manual'),
                'confidence' => isset($item['confidence']) ? (int) $item['confidence'] : 100,
                'is_primary' => !empty($item['is_primary']),
            ];
        }

        return $normalized;
    }
}
