<?php
declare(strict_types=1);

namespace Panda\Apify\User;

final class AnonymousRepository
{
    public static function getId(): string
    {
        if (!empty($_COOKIE['panda_device'])) {
            return (string)$_COOKIE['panda_device'];
        }

        $id = bin2hex(random_bytes(8));

        setcookie('panda_device', $id, time() + 31536000, '/');

        return $id;
    }
}
