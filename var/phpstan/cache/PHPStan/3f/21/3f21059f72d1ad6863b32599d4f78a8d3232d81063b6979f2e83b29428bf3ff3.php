<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-add_settings_field
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'add_settings_field',
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
        'startLine' => 94024,
        'endLine' => 94024,
        'startColumn' => 33,
        'endColumn' => 35,
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
        'startLine' => 94024,
        'endLine' => 94024,
        'startColumn' => 38,
        'endColumn' => 43,
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
        'startLine' => 94024,
        'endLine' => 94024,
        'startColumn' => 46,
        'endColumn' => 54,
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
        'startLine' => 94024,
        'endLine' => 94024,
        'startColumn' => 57,
        'endColumn' => 61,
        'parameterIndex' => 3,
        'isOptional' => false,
      ),
      'section' => 
      array (
        'name' => 'section',
        'default' => 
        array (
          'code' => '\'default\'',
          'attributes' => 
          array (
            'startLine' => 94024,
            'endLine' => 94024,
            'startTokenPos' => 141984,
            'startFilePos' => 3144774,
            'endTokenPos' => 141984,
            'endFilePos' => 3144782,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 94024,
        'endLine' => 94024,
        'startColumn' => 64,
        'endColumn' => 83,
        'parameterIndex' => 4,
        'isOptional' => true,
      ),
      'args' => 
      array (
        'name' => 'args',
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 94024,
            'endLine' => 94024,
            'startTokenPos' => 141991,
            'startFilePos' => 3144793,
            'endTokenPos' => 141993,
            'endFilePos' => 3144799,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 94024,
        'endLine' => 94024,
        'startColumn' => 86,
        'endColumn' => 100,
        'parameterIndex' => 5,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Adds a new field to a section of a settings page.
 *
 * Part of the Settings API. Use this to define a settings field that will show
 * as part of a settings section inside a settings page. The fields are shown using
 * do_settings_fields() in do_settings_sections().
 *
 * The $callback argument should be the name of a function that echoes out the
 * HTML input tags for this setting field. Use get_option() to retrieve existing
 * values to show.
 *
 * @since 2.7.0
 * @since 4.2.0 The `$class` argument was added.
 *
 * @global array $wp_settings_fields Storage array of settings fields and info about their pages/sections.
 *
 * @param string   $id       Slug-name to identify the field. Used in the \'id\' attribute of tags.
 * @param string   $title    Formatted title of the field. Shown as the label for the field
 *                           during output.
 * @param callable $callback Function that fills the field with the desired form inputs. The
 *                           function should echo its output.
 * @param string   $page     The slug-name of the settings page on which to show the section
 *                           (general, reading, writing, ...).
 * @param string   $section  Optional. The slug-name of the section of the settings page
 *                           in which to show the box. Default \'default\'.
 * @param array    $args {
 *     Optional. Extra arguments that get passed to the callback function.
 *
 *     @type string $label_for When supplied, the setting title will be wrapped
 *                             in a `<label>` element, its `for` attribute populated
 *                             with this value.
 *     @type string $class     CSS Class to be added to the `<tr>` element when the
 *                             field is output.
 * }
 * @phpstan-param array{
 *   label_for?: string,
 *   class?: string,
 * } $args
 */',
    'startLine' => 94024,
    'endLine' => 94026,
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
        'name' => 'add_settings_field',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));