<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-add_settings_section
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'add_settings_section',
    'parameters' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 93982,
        'endLine' => 93982,
        'startColumn' => 35,
        'endColumn' => 37,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'title' => 
      array (
        'name' => 'title',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 93982,
        'endLine' => 93982,
        'startColumn' => 40,
        'endColumn' => 45,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'callback' => 
      array (
        'name' => 'callback',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 93982,
        'endLine' => 93982,
        'startColumn' => 48,
        'endColumn' => 56,
        'parameterIndex' => 2,
        'isOptional' => false,
      ),
      'page' => 
      array (
        'name' => 'page',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 93982,
        'endLine' => 93982,
        'startColumn' => 59,
        'endColumn' => 63,
        'parameterIndex' => 3,
        'isOptional' => false,
      ),
      'args' => 
      array (
        'name' => 'args',
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 93982,
            'endLine' => 93982,
            'startTokenPos' => 141953,
            'startFilePos' => 3142636,
            'endTokenPos' => 141955,
            'endFilePos' => 3142642,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 93982,
        'endLine' => 93982,
        'startColumn' => 66,
        'endColumn' => 80,
        'parameterIndex' => 4,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Adds a new section to a settings page.
 *
 * Part of the Settings API. Use this to define new settings sections for an admin page.
 * Show settings sections in your admin page callback function with do_settings_sections().
 * Add settings fields to your section with add_settings_field().
 *
 * The $callback argument should be the name of a function that echoes out any
 * content you want to show at the top of the settings section before the actual
 * fields. It can output nothing if you want.
 *
 * @since 2.7.0
 * @since 6.1.0 Added an `$args` parameter for the section\'s HTML wrapper and class name.
 *
 * @global array $wp_settings_sections Storage array of all settings sections added to admin pages.
 *
 * @param string   $id       Slug-name to identify the section. Used in the \'id\' attribute of tags.
 * @param string   $title    Formatted title of the section. Shown as the heading for the section.
 * @param callable $callback Function that echos out any content at the top of the section (between heading and fields).
 * @param string   $page     The slug-name of the settings page on which to show the section. Built-in pages include
 *                           \'general\', \'reading\', \'writing\', \'discussion\', \'media\', etc. Create your own using
 *                           add_options_page();
 * @param array    $args     {
 *     Arguments used to create the settings section.
 *
 *     @type string $before_section HTML content to prepend to the section\'s HTML output.
 *                                  Receives the section\'s class name as `%s`. Default empty.
 *     @type string $after_section  HTML content to append to the section\'s HTML output. Default empty.
 *     @type string $section_class  The class name to use for the section. Default empty.
 * }
 * @phpstan-param array{
 *   before_section?: string,
 *   after_section?: string,
 *   section_class?: string,
 * } $args
 */',
    'startLine' => 93982,
    'endLine' => 93984,
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
        'name' => 'add_settings_section',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));