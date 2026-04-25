<?php

namespace Panda\Apify\Core;

if (!defined('ABSPATH')) {
    exit;
}

class Apify_Duplicate_Policy
{
    public const MODE_UPDATE = 'update'; // default
    public const MODE_SKIP   = 'skip';
    public const MODE_ERROR  = 'error';
    public const MODE_LOG    = 'log';

    public static function get_mode(): string
    {
        return (string) get_option('apify_duplicate_mode', self::MODE_UPDATE);
    }

    public static function should_throw(): bool
    {
        return self::get_mode() === self::MODE_ERROR;
    }

    public static function should_skip(): bool
    {
        return self::get_mode() === self::MODE_SKIP;
    }

    public static function should_log(): bool
    {
        return in_array(self::get_mode(), [self::MODE_LOG, self::MODE_ERROR], true);
    }
}