<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-add_menu_page
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'add_menu_page',
    'parameters' => 
    array (
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
        'startLine' => 91818,
        'endLine' => 91818,
        'startColumn' => 28,
        'endColumn' => 38,
        'parameterIndex' => 0,
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
        'startLine' => 91818,
        'endLine' => 91818,
        'startColumn' => 41,
        'endColumn' => 51,
        'parameterIndex' => 1,
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
        'startLine' => 91818,
        'endLine' => 91818,
        'startColumn' => 54,
        'endColumn' => 64,
        'parameterIndex' => 2,
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
        'startLine' => 91818,
        'endLine' => 91818,
        'startColumn' => 67,
        'endColumn' => 76,
        'parameterIndex' => 3,
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
            'startLine' => 91818,
            'endLine' => 91818,
            'startTokenPos' => 139257,
            'startFilePos' => 3059781,
            'endTokenPos' => 139257,
            'endFilePos' => 3059782,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91818,
        'endLine' => 91818,
        'startColumn' => 79,
        'endColumn' => 92,
        'parameterIndex' => 4,
        'isOptional' => true,
      ),
      'icon_url' => 
      array (
        'name' => 'icon_url',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 91818,
            'endLine' => 91818,
            'startTokenPos' => 139264,
            'startFilePos' => 3059797,
            'endTokenPos' => 139264,
            'endFilePos' => 3059798,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91818,
        'endLine' => 91818,
        'startColumn' => 95,
        'endColumn' => 108,
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
            'startLine' => 91818,
            'endLine' => 91818,
            'startTokenPos' => 139271,
            'startFilePos' => 3059813,
            'endTokenPos' => 139271,
            'endFilePos' => 3059817,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 91818,
        'endLine' => 91818,
        'startColumn' => 111,
        'endColumn' => 127,
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
 * Adds a top-level menu page.
 *
 * This function takes a capability which will be used to determine whether
 * or not a page is included in the menu.
 *
 * The function which is hooked in to handle the output of the page must check
 * that the user has the required capability as well.
 *
 * @since 1.5.0
 *
 * @global array $menu
 * @global array $admin_page_hooks
 * @global array $_registered_pages
 * @global array $_parent_pages
 *
 * @param string    $page_title The text to be displayed in the title tags of the page when the menu is selected.
 * @param string    $menu_title The text to be used for the menu.
 * @param string    $capability The capability required for this menu to be displayed to the user.
 * @param string    $menu_slug  The slug name to refer to this menu by. Should be unique for this menu page and only
 *                              include lowercase alphanumeric, dashes, and underscores characters to be compatible
 *                              with sanitize_key().
 * @param callable  $callback   Optional. The function to be called to output the content for this page.
 * @param string    $icon_url   Optional. The URL to the icon to be used for this menu.
 *                              * Pass a base64-encoded SVG using a data URI, which will be colored to match
 *                                the color scheme. This should begin with \'data:image/svg+xml;base64,\'.
 *                              * Pass the name of a Dashicons helper class to use a font icon,
 *                                e.g. \'dashicons-chart-pie\'.
 *                              * Pass \'none\' to leave div.wp-menu-image empty so an icon can be added via CSS.
 * @param int|float $position   Optional. The position in the menu order this item should appear.
 * @return string The resulting page\'s hook_suffix.
 * @phpstan-param \'\'|callable $callback
 */',
    'startLine' => 91818,
    'endLine' => 91820,
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
        'name' => 'add_menu_page',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));