<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-register_setting
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'register_setting',
    'parameters' => 
    array (
      'option_group' => 
      array (
        'name' => 'option_group',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133346,
        'endLine' => 133346,
        'startColumn' => 31,
        'endColumn' => 43,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'option_name' => 
      array (
        'name' => 'option_name',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133346,
        'endLine' => 133346,
        'startColumn' => 46,
        'endColumn' => 57,
        'parameterIndex' => 1,
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
            'startLine' => 133346,
            'endLine' => 133346,
            'startTokenPos' => 183806,
            'startFilePos' => 4611911,
            'endTokenPos' => 183808,
            'endFilePos' => 4611917,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133346,
        'endLine' => 133346,
        'startColumn' => 60,
        'endColumn' => 74,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Registers a setting and its data.
 *
 * @since 2.7.0
 * @since 3.0.0 The `misc` option group was deprecated.
 * @since 3.5.0 The `privacy` option group was deprecated.
 * @since 4.7.0 `$args` can be passed to set flags on the setting, similar to `register_meta()`.
 * @since 5.5.0 `$new_whitelist_options` was renamed to `$new_allowed_options`.
 *              Please consider writing more inclusive code.
 * @since 6.6.0 Added the `label` argument.
 *
 * @global array $new_allowed_options
 * @global array $wp_registered_settings
 *
 * @param string $option_group A settings group name. Should correspond to an allowed option key name.
 *                             Default allowed option key names include \'general\', \'discussion\', \'media\',
 *                             \'reading\', \'writing\', and \'options\'.
 * @param string $option_name The name of an option to sanitize and save.
 * @param array  $args {
 *     Data used to describe the setting when registered.
 *
 *     @type string     $type              The type of data associated with this setting.
 *                                         Valid values are \'string\', \'boolean\', \'integer\', \'number\', \'array\', and \'object\'.
 *     @type string     $label             A label of the data attached to this setting.
 *     @type string     $description       A description of the data attached to this setting.
 *     @type callable   $sanitize_callback A callback function that sanitizes the option\'s value.
 *     @type bool|array $show_in_rest      Whether data associated with this setting should be included in the REST API.
 *                                         When registering complex settings, this argument may optionally be an
 *                                         array with a \'schema\' key.
 *     @type mixed      $default           Default value when calling `get_option()`.
 * }
 * @phpstan-param array{
 *   type?: string,
 *   label?: string,
 *   description?: string,
 *   sanitize_callback?: callable,
 *   show_in_rest?: bool|array,
 *   default?: mixed,
 * } $args
 */',
    'startLine' => 133346,
    'endLine' => 133348,
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
        'name' => 'register_setting',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));