<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_cache_set
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_cache_set',
    'parameters' => 
    array (
      'key' => 
      array (
        'name' => 'key',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 104086,
        'endLine' => 104086,
        'startColumn' => 27,
        'endColumn' => 30,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'data' => 
      array (
        'name' => 'data',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 104086,
        'endLine' => 104086,
        'startColumn' => 33,
        'endColumn' => 37,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'group' => 
      array (
        'name' => 'group',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 104086,
            'endLine' => 104086,
            'startTokenPos' => 152459,
            'startFilePos' => 3490414,
            'endTokenPos' => 152459,
            'endFilePos' => 3490415,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 104086,
        'endLine' => 104086,
        'startColumn' => 40,
        'endColumn' => 50,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'expire' => 
      array (
        'name' => 'expire',
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 104086,
            'endLine' => 104086,
            'startTokenPos' => 152466,
            'startFilePos' => 3490428,
            'endTokenPos' => 152466,
            'endFilePos' => 3490428,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 104086,
        'endLine' => 104086,
        'startColumn' => 53,
        'endColumn' => 63,
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
 * Saves the data to the cache.
 *
 * Differs from wp_cache_add() and wp_cache_replace() in that it will always write data.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::set()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The cache key to use for retrieval later.
 * @param mixed      $data   The contents to store in the cache.
 * @param string     $group  Optional. Where to group the cache contents. Enables the same key
 *                           to be used across groups. Default empty.
 * @param int        $expire Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool True on success, false on failure.
 */',
    'startLine' => 104086,
    'endLine' => 104088,
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
        'name' => 'wp_cache_set',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));