<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_clear_scheduled_hook
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_clear_scheduled_hook',
    'parameters' => 
    array (
      'hook' => 
      array (
        'name' => 'hook',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108573,
        'endLine' => 108573,
        'startColumn' => 38,
        'endColumn' => 42,
        'parameterIndex' => 0,
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
            'startLine' => 108573,
            'endLine' => 108573,
            'startTokenPos' => 157057,
            'startFilePos' => 3680497,
            'endTokenPos' => 157059,
            'endFilePos' => 3680503,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108573,
        'endLine' => 108573,
        'startColumn' => 45,
        'endColumn' => 59,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'wp_error' => 
      array (
        'name' => 'wp_error',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 108573,
            'endLine' => 108573,
            'startTokenPos' => 157066,
            'startFilePos' => 3680518,
            'endTokenPos' => 157066,
            'endFilePos' => 3680523,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108573,
        'endLine' => 108573,
        'startColumn' => 62,
        'endColumn' => 79,
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
 * Unschedules all events attached to the hook with the specified arguments.
 *
 * Warning: This function may return boolean false, but may also return a non-boolean
 * value which evaluates to false. For information about casting to booleans see the
 * {@link https://www.php.net/manual/en/language.types.boolean.php PHP documentation}. Use
 * the `===` operator for testing the return value of this function.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to indicate success or failure,
 *              {@see \'pre_clear_scheduled_hook\'} filter added to short-circuit the function.
 * @since 5.7.0 The `$wp_error` parameter was added.
 *
 * @param string $hook     Action hook, the execution of which will be unscheduled.
 * @param array  $args     Optional. Array containing each separate argument to pass to the hook\'s callback function.
 *                         Although not passed to a callback, these arguments are used to uniquely identify the
 *                         event, so they should be the same as those used when originally scheduling the event.
 *                         Default empty array.
 * @param bool   $wp_error Optional. Whether to return a WP_Error on failure. Default false.
 * @return int|false|WP_Error On success an integer indicating number of events unscheduled (0 indicates no
 *                            events were registered with the hook and arguments combination), false or WP_Error
 *                            if unscheduling one or more events fail.
 * @phpstan-param list<mixed> $args
 * @phpstan-return (int<0, max>|($wp_error is false ? false : \\WP_Error))
 */',
    'startLine' => 108573,
    'endLine' => 108575,
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
        'name' => 'wp_clear_scheduled_hook',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));