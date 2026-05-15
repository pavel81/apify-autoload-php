<?php
declare(strict_types=1);

namespace Panda\Apify\Vendor;

final class VendorStats
{
    private const HALF_LIFE = 604800; // 7 dní

    public static function view(?string $vendorId): void
    {
        if ($vendorId === null || $vendorId === '') return;
        self::update($vendorId, 'views');
    }

    public static function click(?string $vendorId): void
    {
        if ($vendorId === null || $vendorId === '') return;
        self::update($vendorId, 'clicks');
    }

    public static function conversion(?string $vendorId): void
    {
        if ($vendorId === null || $vendorId === '') return;
        self::update($vendorId, 'conversions');
    }

    private static function update(string $vendorId, string $key): void
    {
        $data = VendorRepository::get($vendorId);
        $now = time();

        foreach (['views','clicks','conversions'] as $k) {
            if (isset($data[$k], $data['ts'])) {
                $data[$k] = self::decay((float)$data[$k], (int)$data['ts'], $now);
            }
        }

        $data[$key] = (float) (($data[$key] ?? 0.0) + 1.0);
        $data['ts'] = $now;

        VendorRepository::updateRaw($vendorId, $data);
    }

    private static function decay(float $value, int $lastTs, int $now): float
    {
        $lambda = log(2) / self::HALF_LIFE;
        return $value * exp(-$lambda * ($now - $lastTs));
    }

    public static function score(string $vendorId): float
    {
        $data = VendorRepository::get($vendorId);

        $views = (float) ($data['views'] ?? 0.0);
        $clicks = (float) ($data['clicks'] ?? 0.0);
        $conv = (float) ($data['conversions'] ?? 0.0);

        $ctr = $views > 0 ? $clicks / $views : 0.0;
        $cr  = $clicks > 0 ? $conv / $clicks : 0.0;

        return ($ctr * 10.0) + ($cr * 30.0);
    }
}
