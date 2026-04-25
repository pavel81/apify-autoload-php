<?php

declare(strict_types=1);

// Oznaинme, ћe bмћн PHPStan
if (!defined('PHPSTAN_RUNNING')) {
    define('PHPSTAN_RUNNING', true);
}

// Autoload (jen pokud existuje)
$autoload = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
}

// WordPress stubs (jen pro PHPStan)
$stubs = __DIR__ . '/../vendor/php-stubs/wordpress-stubs/wordpress-stubs.php';
if (file_exists($stubs)) {
    require_once $stubs;
}

// Fallbacky pro WP funkce
if (!function_exists('plugin_dir_path')) {
    function plugin_dir_path(string $file): string
    {
        return dirname($file) . '/';
    }
}

if (!function_exists('plugin_dir_url')) {
    function plugin_dir_url(string $file): string
    {
        return 'http://localhost/wp-content/plugins/apify-autoload/';
    }
}

if (!function_exists('add_action')) {
    function add_action(string $hook, callable $callback): void {}
}

if (!function_exists('add_filter')) {
    function add_filter(string $hook, callable $callback): void {}
}

if (!function_exists('is_admin')) {
    function is_admin(): bool
    {
        return false;
    }
}

// Konstanty
if (!defined('APIFY_PATH')) {
    define('APIFY_PATH', dirname(__DIR__) . '/');
}

if (!defined('APIFY_URL')) {
    define('APIFY_URL', 'http://localhost/wp-content/plugins/apify-autoload/');
}
