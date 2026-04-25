<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_cache_get
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_cache_get',
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
        'startLine' => 104123,
        'endLine' => 104123,
        'startColumn' => 27,
        'endColumn' => 30,
        'parameterIndex' => 0,
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
            'startLine' => 104123,
            'endLine' => 104123,
            'startTokenPos' => 152515,
            'startFilePos' => 3492122,
            'endTokenPos' => 152515,
            'endFilePos' => 3492123,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 104123,
        'endLine' => 104123,
        'startColumn' => 33,
        'endColumn' => 43,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'force' => 
      array (
        'name' => 'force',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 104123,
            'endLine' => 104123,
            'startTokenPos' => 152522,
            'startFilePos' => 3492135,
            'endTokenPos' => 152522,
            'endFilePos' => 3492140,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 104123,
        'endLine' => 104123,
        'startColumn' => 46,
        'endColumn' => 60,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'found' => 
      array (
        'name' => 'found',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 104123,
            'endLine' => 104123,
            'startTokenPos' => 152530,
            'startFilePos' => 3492153,
            'endTokenPos' => 152530,
            'endFilePos' => 3492157,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => true,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 104123,
        'endLine' => 104123,
        'startColumn' => 63,
        'endColumn' => 77,
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
 * Retrieves the cache contents from the cache by key and group.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::get()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key   The key under which the cache contents are stored.
 * @param string     $group Optional. Where the cache contents are grouped. Default empty.
 * @param bool       $force Optional. Whether to force an update of the local cache
 *                          from the persistent cache. Default false.
 * @param bool|null  $found Optional. Whether the key was found in the cache (passed by reference).
 *                          Disambiguates a return of false, a storable value. Default null.
 * @return mixed|false The cache contents on success, false on failure to retrieve contents.
 */',
    'startLine' => 104123,
    'endLine' => 104125,
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
        'name' => 'wp_cache_get',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));