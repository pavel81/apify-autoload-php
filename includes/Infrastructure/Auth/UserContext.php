<?php

declare(strict_types=1);

namespace Plugin\Infrastructure\Auth;

final class UserContext
{
    public static function getUserId(): int
    {
        return get_current_user_id() ?: 0;
    }

    public static function isLogged(): bool
    {
        return self::getUserId() > 0;
    }
}