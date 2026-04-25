<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-register_rest_route
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'register_rest_route',
    'parameters' => 
    array (
      'route_namespace' => 
      array (
        'name' => 'route_namespace',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 140082,
        'endLine' => 140082,
        'startColumn' => 34,
        'endColumn' => 49,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'route' => 
      array (
        'name' => 'route',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 140082,
        'endLine' => 140082,
        'startColumn' => 52,
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
            'startLine' => 140082,
            'endLine' => 140082,
            'startTokenPos' => 189920,
            'startFilePos' => 4894397,
            'endTokenPos' => 189922,
            'endFilePos' => 4894403,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 140082,
        'endLine' => 140082,
        'startColumn' => 60,
        'endColumn' => 74,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'override' => 
      array (
        'name' => 'override',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 140082,
            'endLine' => 140082,
            'startTokenPos' => 189929,
            'startFilePos' => 4894418,
            'endTokenPos' => 189929,
            'endFilePos' => 4894423,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 140082,
        'endLine' => 140082,
        'startColumn' => 77,
        'endColumn' => 94,
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
 * Registers a REST API route.
 *
 * Note: Do not use before the {@see \'rest_api_init\'} hook.
 *
 * @since 4.4.0
 * @since 5.1.0 Added a `_doing_it_wrong()` notice when not called on or after the `rest_api_init` hook.
 * @since 5.5.0 Added a `_doing_it_wrong()` notice when the required `permission_callback` argument is not set.
 *
 * @param string $route_namespace The first URL segment after core prefix. Should be unique to your package/plugin.
 * @param string $route           The base URL for route you are adding.
 * @param array  $args            Optional. Either an array of options for the endpoint, or an array of arrays for
 *                                multiple methods. Default empty array.
 * @param bool   $override        Optional. If the route already exists, should we override it? True overrides,
 *                                false merges (with newer overriding if duplicate keys exist). Default false.
 * @return bool True on success, false on error.
 */',
    'startLine' => 140082,
    'endLine' => 140084,
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
        'name' => 'register_rest_route',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));