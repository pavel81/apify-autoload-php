<?php

declare(strict_types=1);

namespace Plugin\Infrastructure\Auth;

final class MembershipResolver
{
    public const FREE = 'free';
    public const PREMIUM = 'premium';

    public static function resolve(int $userId): string
    {
        if ($userId === 0) {
            return self::FREE;
        }

        // 👉 WP-Members (qp-members) – příklad meta
        $level = get_user_meta($userId, 'membership_level', true);

        if ($level === 'premium') {
            return self::PREMIUM;
        }

        return self::FREE;
    }

    public static function isPremium(int $userId): bool
    {
        return self::resolve($userId) === self::PREMIUM;
    }
}