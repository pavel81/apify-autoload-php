<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_send_json_error
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_send_json_error',
    'parameters' => 
    array (
      'value' => 
      array (
        'name' => 'value',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 117418,
            'endLine' => 117418,
            'startTokenPos' => 166871,
            'startFilePos' => 3996762,
            'endTokenPos' => 166871,
            'endFilePos' => 3996766,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 117418,
        'endLine' => 117418,
        'startColumn' => 33,
        'endColumn' => 46,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'status_code' => 
      array (
        'name' => 'status_code',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 117418,
            'endLine' => 117418,
            'startTokenPos' => 166878,
            'startFilePos' => 3996784,
            'endTokenPos' => 166878,
            'endFilePos' => 3996788,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 117418,
        'endLine' => 117418,
        'startColumn' => 49,
        'endColumn' => 68,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'flags' => 
      array (
        'name' => 'flags',
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 117418,
            'endLine' => 117418,
            'startTokenPos' => 166885,
            'startFilePos' => 3996800,
            'endTokenPos' => 166885,
            'endFilePos' => 3996800,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 117418,
        'endLine' => 117418,
        'startColumn' => 71,
        'endColumn' => 80,
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
 * Sends a JSON response back to an Ajax request, indicating failure.
 *
 * If the `$value` parameter is a WP_Error object, the errors
 * within the object are processed and output as an array of error
 * codes and corresponding messages. All other types are output
 * without further processing.
 *
 * @since 3.5.0
 * @since 4.1.0 The `$value` parameter is now processed if a WP_Error object is passed in.
 * @since 4.7.0 The `$status_code` parameter was added.
 * @since 5.6.0 The `$flags` parameter was added.
 *
 * @param mixed $value       Optional. Data to encode as JSON, then print and die. Default null.
 * @param int   $status_code Optional. The HTTP status code to output. Default null.
 * @param int   $flags       Optional. Options to be passed to json_encode(). Default 0.
 * @phpstan-return never
 */',
    'startLine' => 117418,
    'endLine' => 117420,
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
        'name' => 'wp_send_json_error',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));