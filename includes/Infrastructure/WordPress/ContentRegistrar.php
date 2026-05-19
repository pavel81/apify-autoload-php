<?php

declare(strict_types=1);

namespace Panda\Apify\Infrastructure\WordPress;

use Panda\Apify\Presentation\ProductPage;
use Panda\Apify\Shortcodes\ProductShortcode;

final class ContentRegistrar
{
    public static function register(): void
    {
        if (function_exists('apify_register_shortcodes')) {
            apify_register_shortcodes();
        }

        add_action('init', [ProductShortcode::class, 'register']);

        add_action('init', static function (): void {
            add_rewrite_rule(
                '^produkt/([^/]+)/?$',
                'index.php?apify_product=$matches[1]',
                'top'
            );
        });

        add_filter('query_vars', static function (array $vars): array {
            $vars[] = 'apify_product';

            return $vars;
        });

        add_action('init', [ProductPage::class, 'boot']);
    }
}
