<?php

declare(strict_types=1);

namespace Panda\Apify\Core;

if (!defined('ABSPATH')) {
    exit;
}

final class Helpers
{
    public static function normalize(string $value): string
    {
        return strtolower(trim($value));
    }

    public static function hashProduct(string $title, string $brand, string $model): string
    {
        return hash('sha256', self::normalize($title . '|' . $brand . '|' . $model));
    }
}