<?php
namespace Panda\Apify\Core;

if (!defined('ABSPATH')) {
    exit;
}

class QueryService
{
/**
 * @return array{
 * min: float,
 * max: float,
 * avg: float,
 * history: array<int, array<string, mixed>>
 *}|null
 */ 
    public static function priceStatsForSku(string $sku, int $months = 3): ?array
    {
        global $wpdb;

        $table = $wpdb->prefix . 'apify_products';
        $timestamp = strtotime("-{$months} months");
        if($timestamp === false){
        return null;
        }
        
        $since = gmdate('Y-m-d H:i:s',  $timestamp);

/**
 * @var array<int, array{price:string, updated_at:string}> $rows
 */ 
        $rows = $wpdb->get_results(
            $wpdb->prepare("
                SELECT price, updated_at
                FROM $table
                WHERE sku = %s
                AND updated_at >= %s
                ORDER BY updated_at ASC
            ", $sku, $since),
            ARRAY_A
        );

        if (!$rows) {
            return null;
        }

        $prices = array_map(static fn(array $r) => (float) $r['price'], $rows);
        if($prices===[]){
        return null;
        }

        return [
            'min'     => min($prices),
            'max'     => max($prices),
            'avg'     => round(array_sum($prices) / count($prices), 2),
            'history' => $rows,
        ];
    }

    public static function updateDailyStats(): void
    {
        global $wpdb;

        $productsTable = $wpdb->prefix . 'apify_products';
        $statsTable    = $wpdb->prefix . 'apify_stats_daily';
        $day           = current_time('Y-m-d');

        $stats = $wpdb->get_row("
            SELECT 
                COUNT(*) as products_count,
                MIN(price) as min_price,
                MAX(price) as max_price,
                AVG(price) as avg_price
            FROM $productsTable
        ", ARRAY_A);

        $exists = $wpdb->get_var(
            $wpdb->prepare("SELECT day FROM $statsTable WHERE day = %s", $day)
        );

        $data = [
            'products_count' => (int) ($stats['products_count'] ?? 0),
            'min_price'      => (float) ($stats['min_price'] ?? 0),
            'max_price'      => (float) ($stats['max_price'] ?? 0),
            'avg_price'      => round((float) ($stats['avg_price'] ?? 0), 2),
            'last_sync'      => current_time('mysql'),
        ];

        if ($exists) {
            $wpdb->update($statsTable, $data, ['day' => $day]);
        } else {
            $data['day'] = $day;
            $wpdb->insert($statsTable, $data);
        }
    }
}
