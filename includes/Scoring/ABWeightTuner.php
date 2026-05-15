<?php
declare(strict_types=1);

namespace Panda\Apify\Scoring;

use Panda\Apify\Admin\Settings\SettingsService;

final class ABWeightTuner
{
    private const KEY = 'panda_ab_weights';

    /**
     * @return array{ctr: float, cr: float}
     */
    public static function weights(): array
    {
        $cfg = SettingsService::get();

        if (!$cfg->abEnabled) {
            return [
                'ctr' => (float) $cfg->vendorWeightCtr,
                'cr'  => (float) $cfg->vendorWeightCr,
            ];
        }

        $stored = get_option(self::KEY, null);

        if (is_array($stored) && isset($stored['ctr'], $stored['cr'])) {
            return [
                'ctr' => (float) $stored['ctr'],
                'cr'  => (float) $stored['cr'],
            ];
        }

        return [
            'ctr' => (float) $cfg->vendorWeightCtr,
            'cr'  => (float) $cfg->vendorWeightCr,
        ];
    }

    /**
     * @param array{ctr?: float|int|string, cr?: float|int|string} $stats
     */
    public static function update(array $stats): void
    {
        if (!isset($stats['ctr'], $stats['cr'])) {
            return;
        }

        $ctr = is_numeric($stats['ctr']) ? max(0.0, (float) $stats['ctr']) : 0.0;
        $cr  = is_numeric($stats['cr']) ? max(0.0, (float) $stats['cr']) : 0.0;

        $sum = $ctr + $cr;
        if ($sum <= 0.0) {
            return;
        }

        $weights = [
            'ctr' => ($ctr / $sum) * 40.0,
            'cr'  => ($cr / $sum) * 60.0,
        ];

        update_option(self::KEY, $weights, false);
    }
}