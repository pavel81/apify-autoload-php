<?php
declare(strict_types=1);

namespace Panda\Apify\Seo;

final class LandingRepository
{
    /**
     * @param array<string, mixed> $data
     */
    public static function save(string $slug, array $data): void
    {
        $all = get_option('panda_landings', []);

        if (!is_array($all)) {
            $all = [];
        }

        $all[$slug] = $data;

        update_option('panda_landings', $all, false);
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function get(string $slug): ?array
    {
        $all = get_option('panda_landings', []);

        if (!is_array($all)) {
            return null;
        }

        return $all[$slug] ?? null;
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        $all = get_option('panda_landings', []);
        return is_array($all) ? $all : [];
    }
}