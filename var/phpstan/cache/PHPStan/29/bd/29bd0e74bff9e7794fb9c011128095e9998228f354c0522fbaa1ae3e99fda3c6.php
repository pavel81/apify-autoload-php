<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-get_user_meta
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'get_user_meta',
    'parameters' => 
    array (
      'user_id' => 
      array (
        'name' => 'user_id',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 147931,
        'endLine' => 147931,
        'startColumn' => 28,
        'endColumn' => 35,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'key' => 
      array (
        'name' => 'key',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 147931,
            'endLine' => 147931,
            'startTokenPos' => 197354,
            'startFilePos' => 5188010,
            'endTokenPos' => 197354,
            'endFilePos' => 5188011,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 147931,
        'endLine' => 147931,
        'startColumn' => 38,
        'endColumn' => 46,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'single' => 
      array (
        'name' => 'single',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 147931,
            'endLine' => 147931,
            'startTokenPos' => 197361,
            'startFilePos' => 5188024,
            'endTokenPos' => 197361,
            'endFilePos' => 5188029,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 147931,
        'endLine' => 147931,
        'startColumn' => 49,
        'endColumn' => 64,
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
 * Retrieves user meta field for a user.
 *
 * @since 3.0.0
 *
 * @link https://developer.wordpress.org/reference/functions/get_user_meta/
 *
 * @param int    $user_id User ID.
 * @param string $key     Optional. The meta key to retrieve. By default,
 *                        returns data for all keys.
 * @param bool   $single  Optional. Whether to return a single value.
 *                        This parameter has no effect if `$key` is not specified.
 *                        Default false.
 * @return mixed An array of values if `$single` is false.
 *               The value of meta data field if `$single` is true.
 *               False for an invalid `$user_id` (non-numeric, zero, or negative value).
 *               An empty array if a valid but non-existing user ID is passed and `$single` is false.
 *               An empty string if a valid but non-existing user ID is passed and `$single` is true.
 *               Note: Non-serialized values are returned as strings:
 *               - false values are returned as empty strings (\'\')
 *               - true values are returned as \'1\'
 *               - numbers (both integer and float) are returned as strings
 *               Arrays and objects retain their original type.
 */',
    'startLine' => 147931,
    'endLine' => 147933,
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
        'name' => 'get_user_meta',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));