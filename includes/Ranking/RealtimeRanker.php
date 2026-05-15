<?php
declare(strict_types=1);

namespace Panda\Apify\Ranking;

use Panda\Apify\Vendor\VendorStats;

final class RealtimeRanker
{
    /**
     * @param array<int,array<string,mixed>> $items
     * @param array<string,mixed> $context
     * @return array<int,array<string,mixed>>
     */
    public static function rank(array $items, array $context): array
    {
        $prefs = $context['prefs']['category'] ?? [];

        usort($items, function ($a, $b) use ($prefs) {
            return self::score($b, $prefs) <=> self::score($a, $prefs);
        });

        return $items;
    }

    /**
     * @param array<string,mixed> $item
     * @param array<string,int> $prefs
     */
    private static function score(array $item, array $prefs): int
    {
        $score = 0;

        $cat = (string)($item['category'] ?? '');

        if (isset($prefs[$cat])) {
            $score += (int)$prefs[$cat] * 2;
        }

        if (!empty($item['vendor_id'])) {
            $score += (int)VendorStats::score((string)$item['vendor_id']);
        }

        return $score;
    }
}
