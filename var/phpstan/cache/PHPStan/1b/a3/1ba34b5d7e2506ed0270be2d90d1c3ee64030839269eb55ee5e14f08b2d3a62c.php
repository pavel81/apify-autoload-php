<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-add_submenu_page
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'add_submenu_page',
    'parameters' => 
    array (
      'parent_slug' => 
      array (
        'name' => 'parent_slug',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91854,
        'endLine' => 91854,
        'startColumn' => 31,
        'endColumn' => 42,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'page_title' => 
      array (
        'name' => 'page_title',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91854,
        'endLine' => 91854,
        'startColumn' => 45,
        'endColumn' => 55,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'menu_title' => 
      array (
        'name' => 'menu_title',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91854,
        'endLine' => 91854,
        'startColumn' => 58,
        'endColumn' => 68,
        'parameterIndex' => 2,
        'isOptional' => false,
      ),
      'capability' => 
      array (
        'name' => 'capability',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91854,
        'endLine' => 91854,
        'startColumn' => 71,
        'endColumn' => 81,
        'parameterIndex' => 3,
        'isOptional' => false,
      ),
      'menu_slug' => 
      array (
        'name' => 'menu_slug',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91854,
        'endLine' => 91854,
        'startColumn' => 84,
        'endColumn' => 93,
        'parameterIndex' => 4,
        'isOptional' => false,
      ),
      'callback' => 
      array (
        'name' => 'callback',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 91854,
            'endLine' => 91854,
            'startTokenPos' => 139303,
            'startFilePos' => 3061744,
            'endTokenPos' => 139303,
            'endFilePos' => 3061745,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91854,
        'endLine' => 91854,
        'startColumn' => 96,
        'endColumn' => 109,
        'parameterIndex' => 5,
        'isOptional' => true,
      ),
      'position' => 
      array (
        'name' => 'position',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 91854,
            'endLine' => 91854,
            'startTokenPos' => 139310,
            'startFilePos' => 3061760,
            'endTokenPos' => 139310,
            'endFilePos' => 3061764,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91854,
        'endLine' => 91854,
        'startColumn' => 112,
        'endColumn' => 128,
        'parameterIndex' => 6,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Adds a submenu page.
 *
 * This function takes a capability which will be used to determine whether
 * or not a page is included in the menu.
 *
 * The function which is hooked in to handle the output of the page must check
 * that the user has the required capability as well.
 *
 * @since 1.5.0
 * @since 5.3.0 Added the `$position` parameter.
 *
 * @global array $submenu
 * @global array $menu
 * @global array $_wp_real_parent_file
 * @global bool  $_wp_submenu_nopriv
 * @global array $_registered_pages
 * @global array $_parent_pages
 *
 * @param string    $parent_slug The slug name for the parent menu (or the file name of a standard
 *                               WordPress admin page).
 * @param string    $page_title  The text to be displayed in the title tags of the page when the menu
 *                               is selected.
 * @param string    $menu_title  The text to be used for the menu.
 * @param string    $capability  The capability required for this menu to be displayed to the user.
 * @param string    $menu_slug   The slug name to refer to this menu by. Should be unique for this menu
 *                               and only include lowercase alphanumeric, dashes, and underscores characters
 *                               to be compatible with sanitize_key().
 * @param callable  $callback    Optional. The function to be called to output the content for this page.
 * @param int|float $position    Optional. The position in the menu order this item should appear.
 * @return string|false The resulting page\'s hook_suffix, or false if the user does not have the capability required.
 * @phpstan-param \'\'|callable $callback
 */',
    'startLine' => 91854,
    'endLine' => 91856,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => false,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'add_submenu_page',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));