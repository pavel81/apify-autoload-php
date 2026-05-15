<?php
declare(strict_types=1);

namespace Panda\Apify\Admin;

final class ContentPermissions
{
    public static function init(): void
    {
        add_action('init', [self::class, 'addCaps']);
    }

    public static function addCaps(): void
    {
        $roles = ['administrator', 'editor'];

        foreach ($roles as $roleName) {
            $role = get_role($roleName);
            if ($role === null) {
                continue;
            }

            $role->add_cap('panda_manage_content');
        }
    }

    public static function canManage(): bool
    {
        return current_user_can('panda_manage_content') || current_user_can('manage_options');
    }
}