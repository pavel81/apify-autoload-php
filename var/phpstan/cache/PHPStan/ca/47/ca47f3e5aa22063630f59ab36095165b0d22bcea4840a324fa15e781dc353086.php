<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_unschedule_event
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_unschedule_event',
    'parameters' => 
    array (
      'timestamp' => 
      array (
        'name' => 'timestamp',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108545,
        'endLine' => 108545,
        'startColumn' => 34,
        'endColumn' => 43,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
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
        'startLine' => 108545,
        'endLine' => 108545,
        'startColumn' => 46,
        'endColumn' => 50,
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
            'startLine' => 108545,
            'endLine' => 108545,
            'startTokenPos' => 157028,
            'startFilePos' => 3678676,
            'endTokenPos' => 157030,
            'endFilePos' => 3678682,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108545,
        'endLine' => 108545,
        'startColumn' => 53,
        'endColumn' => 67,
        'parameterIndex' => 2,
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
            'startLine' => 108545,
            'endLine' => 108545,
            'startTokenPos' => 157037,
            'startFilePos' => 3678697,
            'endTokenPos' => 157037,
            'endFilePos' => 3678702,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108545,
        'endLine' => 108545,
        'startColumn' => 70,
        'endColumn' => 87,
        'parameterIndex' => 3,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Unschedules a previously scheduled event.
 *
 * The `$timestamp` and `$hook` parameters are required so that the event can be
 * identified.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to boolean indicating success or failure,
 *              {@see \'pre_unschedule_event\'} filter added to short-circuit the function.
 * @since 5.7.0 The `$wp_error` parameter was added.
 *
 * @param int    $timestamp Unix timestamp (UTC) of the event.
 * @param string $hook      Action hook of the event.
 * @param array  $args      Optional. Array containing each separate argument to pass to the hook\'s callback function.
 *                          Although not passed to a callback, these arguments are used to uniquely identify the
 *                          event, so they should be the same as those used when originally scheduling the event.
 *                          Default empty array.
 * @param bool   $wp_error  Optional. Whether to return a WP_Error on failure. Default false.
 * @return bool|WP_Error True if event successfully unscheduled. False or WP_Error on failure.
 * @phpstan-param list<mixed> $args
 * @phpstan-return ($wp_error is false ? bool : true|\\WP_Error)
 */',
    'startLine' => 108545,
    'endLine' => 108547,
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
        'name' => 'wp_unschedule_event',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));