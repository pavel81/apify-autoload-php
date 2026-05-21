<?php
// tests/bootstrap.php
// PHPUnit bootstrap for Panda Forms Manager (Brain Monkey + autoload)

declare(strict_types=1);

if (! defined('WP_DEBUG')) {
    define('WP_DEBUG', true);
}

// Composer autoload (vendor must exist)
$autoload = __DIR__ . '/../vendor/autoload.php';
if (! file_exists($autoload)) {
    fwrite(STDERR, "Please run `composer install` before running tests.\n");
    exit(1);
}
require_once $autoload;

// Brain Monkey helpers
use Brain\Monkey;

Monkey\setUp();

// Provide basic stubs for common WP functions used in tests.
// Brain Monkey provides helpers under Brain\Monkey\WP\Functions, Actions, Filters, etc.
// We'll ensure Filters and Actions are available as stubs.
\Brain\Monkey\WP\Actions::stub();
\Brain\Monkey\WP\Filters::stub();
\Brain\Monkey\WP\Functions::stub();

// Optionally define minimal constants that plugin relies on
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/../'); // not used to include WordPress; just a placeholder
}
if (! defined('WP_CONTENT_DIR')) {
    define('WP_CONTENT_DIR', dirname(__DIR__) . '/wp-content');
}

// Load plugin bootstrap (if your plugin relies on src/bootstrap.php to register classes)
$plugin_bootstrap = __DIR__ . '/../src/bootstrap.php';
if (file_exists($plugin_bootstrap)) {
    require_once $plugin_bootstrap;
}

// Register shutdown hook to tear down Brain Monkey if PHPUnit process ends unexpectedly
register_shutdown_function(function () {
    \Brain\Monkey\tearDown();
});
