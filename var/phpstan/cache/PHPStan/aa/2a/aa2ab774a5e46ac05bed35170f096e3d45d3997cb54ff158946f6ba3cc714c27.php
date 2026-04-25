<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-settings_errors
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'settings_errors',
    'parameters' => 
    array (
      'setting' => 
      array (
        'name' => 'setting',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 94166,
            'endLine' => 94166,
            'startTokenPos' => 142089,
            'startFilePos' => 3151452,
            'endTokenPos' => 142089,
            'endFilePos' => 3151453,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 94166,
        'endLine' => 94166,
        'startColumn' => 30,
        'endColumn' => 42,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'sanitize' => 
      array (
        'name' => 'sanitize',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 94166,
            'endLine' => 94166,
            'startTokenPos' => 142096,
            'startFilePos' => 3151468,
            'endTokenPos' => 142096,
            'endFilePos' => 3151473,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 94166,
        'endLine' => 94166,
        'startColumn' => 45,
        'endColumn' => 62,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'hide_on_update' => 
      array (
        'name' => 'hide_on_update',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 94166,
            'endLine' => 94166,
            'startTokenPos' => 142103,
            'startFilePos' => 3151494,
            'endTokenPos' => 142103,
            'endFilePos' => 3151499,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 94166,
        'endLine' => 94166,
        'startColumn' => 65,
        'endColumn' => 88,
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
 * Displays settings errors registered by add_settings_error().
 *
 * Part of the Settings API. Outputs a div for each error retrieved by
 * get_settings_errors().
 *
 * This is called automatically after a settings page based on the
 * Settings API is submitted. Errors should be added during the validation
 * callback function for a setting defined in register_setting().
 *
 * The $sanitize option is passed into get_settings_errors() and will
 * re-run the setting sanitization
 * on its current value.
 *
 * The $hide_on_update option will cause errors to only show when the settings
 * page is first loaded. if the user has already saved new values it will be
 * hidden to avoid repeating messages already shown in the default error
 * reporting after submission. This is useful to show general errors like
 * missing settings when the user arrives at the settings page.
 *
 * @since 3.0.0
 * @since 5.3.0 Legacy `error` and `updated` CSS classes are mapped to
 *              `notice-error` and `notice-success`.
 *
 * @param string $setting        Optional slug title of a specific setting whose errors you want.
 * @param bool   $sanitize       Whether to re-sanitize the setting value before returning errors.
 * @param bool   $hide_on_update If set to true errors will not be shown if the settings page has
 *                               already been submitted.
 * @phpstan-return void
 */',
    'startLine' => 94166,
    'endLine' => 94168,
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
        'name' => 'settings_errors',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));