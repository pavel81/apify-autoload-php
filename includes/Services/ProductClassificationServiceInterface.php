<?php

declare(strict_types=1);

namespace Panda\Apify\Services;

interface ProductClassificationServiceInterface
{
    /**
     * @param array<int, string|array<string, mixed>> $useCases
     * @param array<int, string|array<string, mixed>> $groups
     * @param array<int, string|array<string, mixed>> $tags
     *
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
    ): array;

    /**
     * @return array{
     *     use_cases: array<int, array<string, mixed>>,
     *     groups: array<int, array<string, mixed>>,
     *     tags: array<int, array<string, mixed>>
     * }
     */
    public function get(string $canonicalHash): array;
}
