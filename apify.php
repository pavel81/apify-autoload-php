<?php
/*
Plugin Name: Panda Apify Product
Description: Import produktů z Apify feedu + cenové statistiky
Version: 1.0.0
Author: Panda
*/

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

define('APIFY_FILE', __FILE__);
define('APIFY_PATH', plugin_dir_path(__FILE__));
define('APIFY_URL', plugin_dir_url(__FILE__));

/**
 * Autoload (Composer)
 */
$autoload = APIFY_PATH . 'vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
}

/**
 * Install / Uninstall
 */
require_once APIFY_PATH . 'includes/install.php';
require_once APIFY_PATH . 'includes/uninstall.php';

register_activation_hook(APIFY_FILE, 'apify_install');
register_uninstall_hook(APIFY_FILE, 'apify_uninstall');

/**
 * Bootstrap (až po registraci hooků)
 */
require_once APIFY_PATH . 'src/bootstrap.php';

\Panda\Apify\Bootstrap::init();