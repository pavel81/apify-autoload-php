<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

if (!defined('ABSPATH')) {
    exit;
}

final class JsonCanonicalizer
{
    public static function canonicalize(string $json): string
    {
        $data = json_decode($json, true);

        if (!is_array($data)) {
            return $json;
        }

        $normalized = self::normalize($data);

        return json_encode(
            $normalized,
            JSON_UNESCAPED_SLASHES
            | JSON_UNESCAPED_UNICODE
            | JSON_PRESERVE_ZERO_FRACTION // ?? dùležité
        ) ?: '';
    }

    /**
     * @param mixed $data
     * @return mixed
     */
    private static function normalize($data)
    {
        if (is_array($data)) {
            if (self::isAssoc($data)) {
                ksort($data);

                foreach ($data as $k => $v) {
                    $data[$k] = self::normalize($v);
                }

                return $data;
            }

            return array_map([self::class, 'normalize'], $data);
        }

        // ?? FLOAT — NEMÌNIT hodnotu
        if (is_float($data)) {
            return $data;
        }

        // ?? STRING — normalize Unicode
        if (is_string($data)) {
            return self::normalizeString($data);
        }

        return $data;
    }

    private static function normalizeString(string $value): string
    {
        if (class_exists('\Normalizer')) {
            $normalized = \Normalizer::normalize($value, \Normalizer::FORM_C);

            if (is_string($normalized)) {
                return $normalized;
            }
        }

        return $value;
    }

    private static function isAssoc(array $arr): bool
    {
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
