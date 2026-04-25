<?php
namespace Panda\Apify\Accounting;

if (!defined('ABSPATH')) {
    exit;
}

class LedgerService
{
    public static function recordDataCost(float $mb): bool
    {
        if ($mb <= 0) {
            return false;
        }

        global $wpdb;
        $table = $wpdb->prefix . 'apify_ledger';

        $rate = (float) get_option('apify_data_cost_per_mb', '0.05');
        $cost = round($mb * $rate, 2);

        return (bool) $wpdb->insert($table, [
            'entry_date'    => current_time('Y-m-d'),
            'type'          => 'EXPENSE',
            'amount'        => $cost,
            'currency'      => get_option('apify_default_currency', 'CZK'),
            'provider'      => 'Apify',
            'data_usage_mb' => $mb,
            'data_cost'     => $cost,
            'note'          => 'Import feedu Apify',
        ]);
    }
}