<?php
declare(strict_types=1);

namespace Panda\Apify\Vendor;

final class VendorRepository
{
    private static function key(string $vendorId): string
    {
        return 'panda_vendor_' . $vendorId;
    }

    /**
     * @return array{views?: float, clicks?: float, conversions?: float, ts?: int}
     */
    public static function get(string $vendorId): array
    {
        $data = get_option(self::key($vendorId), []);

        return is_array($data) ? $data : [];
    }

    /**
     * @param array{views?: float, clicks?: float, conversions?: float, ts?: int} $data
     */
    public static function updateRaw(string $vendorId, array $data): void
    {
        update_option(self::key($vendorId), $data, false);
    }
}
