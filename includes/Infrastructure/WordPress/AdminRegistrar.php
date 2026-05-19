<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\WordPress;

use Panda\Apify\Admin\ApifySecurityPage;
use Panda\Apify\Admin\FeedSettingsPage;
use Panda\Apify\Admin\LogsPage;

final class AdminRegistrar
{
    public static function register(): void
    {
        if (is_admin() && function_exists('apify_register_admin')) {
            apify_register_admin();
        }

        ApifySecurityPage::register();
        FeedSettingsPage::register();
        LogsPage::register();
    }
}
