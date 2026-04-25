<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-WP_REST_Request
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'WP_REST_Request',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'WP_REST_Request',
    'shortName' => 'WP_REST_Request',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Core class used to implement a REST request object.
 *
 * Contains data from the request, to be passed to the callback.
 *
 * Note: This implements ArrayAccess, and acts as an array of parameters when
 * used in that manner. It does not use ArrayObject (as we cannot rely on SPL),
 * so be aware it may have non-array behavior in some cases.
 *
 * Note: When using features provided by ArrayAccess, be aware that WordPress deliberately
 * does not distinguish between arguments of the same name for different request methods.
 * For instance, in a request with `GET id=1` and `POST id=2`, `$request[\'id\']` will equal
 * 2 (`POST`) not 1 (`GET`). For more precision between request methods, use
 * WP_REST_Request::get_body_params(), WP_REST_Request::get_url_params(), etc.
 *
 * @since 4.4.0
 *
 * @link https://www.php.net/manual/en/class.arrayaccess.php
 * @phpstan-template T of array = array<string, mixed>
 * @phpstan-implements ArrayAccess<key-of<T>, value-of<T>>
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'AllowDynamicProperties',
        'isRepeated' => false,
        'arguments' => 
        array (
        ),
      ),
    ),
    'startLine' => 72945,
    'endLine' => 73560,
    'startColumn' => 5,
    'endColumn' => 5,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'ArrayAccess',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'method' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'method',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 72954,
            'endLine' => 72954,
            'startTokenPos' => 112732,
            'startFilePos' => 2466449,
            'endTokenPos' => 112732,
            'endFilePos' => 2466450,
          ),
        ),
        'docComment' => '/**
 * HTTP method.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72954,
        'endLine' => 72954,
        'startColumn' => 9,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'params' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'params',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Parameters passed to the request.
 *
 * These typically come from the `$_GET`, `$_POST` and `$_FILES`
 * superglobals when being created from the global scope.
 *
 * @since 4.4.0
 * @var array Contains GET, POST and FILES keys mapping to arrays of data.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72964,
        'endLine' => 72964,
        'startColumn' => 9,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'headers' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'headers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 72971,
            'endLine' => 72971,
            'startTokenPos' => 112750,
            'startFilePos' => 2467041,
            'endTokenPos' => 112752,
            'endFilePos' => 2467047,
          ),
        ),
        'docComment' => '/**
 * HTTP headers for the request.
 *
 * @since 4.4.0
 * @var array Map of key to value. Key is always lowercase, as per HTTP specification.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72971,
        'endLine' => 72971,
        'startColumn' => 9,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'body' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'body',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 72978,
            'endLine' => 72978,
            'startTokenPos' => 112763,
            'startFilePos' => 2467210,
            'endTokenPos' => 112763,
            'endFilePos' => 2467214,
          ),
        ),
        'docComment' => '/**
 * Body data.
 *
 * @since 4.4.0
 * @var string Binary data from the request.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72978,
        'endLine' => 72978,
        'startColumn' => 9,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'route' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'route',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Route matched for the request.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72985,
        'endLine' => 72985,
        'startColumn' => 9,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 72995,
            'endLine' => 72995,
            'startTokenPos' => 112781,
            'startFilePos' => 2467745,
            'endTokenPos' => 112783,
            'endFilePos' => 2467751,
          ),
        ),
        'docComment' => '/**
 * Attributes (options) for the route that was matched.
 *
 * This is the options array used when the route was registered, typically
 * containing the callback as well as the valid methods for the route.
 *
 * @since 4.4.0
 * @var array Attributes for the request.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72995,
        'endLine' => 72995,
        'startColumn' => 9,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'parsed_json' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'parsed_json',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 73004,
            'endLine' => 73004,
            'startTokenPos' => 112794,
            'startFilePos' => 2468005,
            'endTokenPos' => 112794,
            'endFilePos' => 2468010,
          ),
        ),
        'docComment' => '/**
 * Used to determine if the JSON data has been parsed yet.
 *
 * Allows lazy-parsing of JSON data where possible.
 *
 * @since 4.4.0
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73004,
        'endLine' => 73004,
        'startColumn' => 9,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'parsed_body' => 
      array (
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'name' => 'parsed_body',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 73011,
            'endLine' => 73011,
            'startTokenPos' => 112805,
            'startFilePos' => 2468193,
            'endTokenPos' => 112805,
            'endFilePos' => 2468198,
          ),
        ),
        'docComment' => '/**
 * Used to determine if the body data has been parsed yet.
 *
 * @since 4.4.0
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73011,
        'endLine' => 73011,
        'startColumn' => 9,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 73021,
                'endLine' => 73021,
                'startTokenPos' => 112820,
                'startFilePos' => 2468584,
                'endTokenPos' => 112820,
                'endFilePos' => 2468585,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73021,
            'endLine' => 73021,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'route' => 
          array (
            'name' => 'route',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 73021,
                'endLine' => 73021,
                'startTokenPos' => 112827,
                'startFilePos' => 2468597,
                'endTokenPos' => 112827,
                'endFilePos' => 2468598,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73021,
            'endLine' => 73021,
            'startColumn' => 51,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => 'array()',
              'attributes' => 
              array (
                'startLine' => 73021,
                'endLine' => 73021,
                'startTokenPos' => 112834,
                'startFilePos' => 2468615,
                'endTokenPos' => 112836,
                'endFilePos' => 2468621,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73021,
            'endLine' => 73021,
            'startColumn' => 64,
            'endColumn' => 84,
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
 * Constructor.
 *
 * @since 4.4.0
 *
 * @param string $method     Optional. Request method. Default empty.
 * @param string $route      Optional. Request route. Default empty.
 * @param array  $attributes Optional. Request attributes. Default empty array.
 */',
        'startLine' => 73021,
        'endLine' => 73023,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_method' => 
      array (
        'name' => 'get_method',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the HTTP method for the request.
 *
 * @since 4.4.0
 *
 * @return string HTTP method.
 */',
        'startLine' => 73031,
        'endLine' => 73033,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_method' => 
      array (
        'name' => 'set_method',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73041,
            'endLine' => 73041,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets HTTP method for the request.
 *
 * @since 4.4.0
 *
 * @param string $method HTTP method.
 */',
        'startLine' => 73041,
        'endLine' => 73043,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_headers' => 
      array (
        'name' => 'get_headers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves all headers from the request.
 *
 * @since 4.4.0
 *
 * @return array Map of key to value. Key is always lowercase, as per HTTP specification.
 */',
        'startLine' => 73051,
        'endLine' => 73053,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'is_method' => 
      array (
        'name' => 'is_method',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73062,
            'endLine' => 73062,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the request is the given method.
 *
 * @since 6.8.0
 *
 * @param string $method HTTP method.
 * @return bool Whether the request is of the given method.
 */',
        'startLine' => 73062,
        'endLine' => 73064,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'canonicalize_header_name' => 
      array (
        'name' => 'canonicalize_header_name',
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
            'startLine' => 73083,
            'endLine' => 73083,
            'startColumn' => 57,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Canonicalizes the header name.
 *
 * Ensures that header names are always treated the same regardless of
 * source. Header names are always case-insensitive.
 *
 * Note that we treat `-` (dashes) and `_` (underscores) as the same
 * character, as per header parsing rules in both Apache and nginx.
 *
 * @link https://stackoverflow.com/q/18185366
 * @link https://www.nginx.com/resources/wiki/start/topics/tutorials/config_pitfalls/#missing-disappearing-http-headers
 * @link https://nginx.org/en/docs/http/ngx_http_core_module.html#underscores_in_headers
 *
 * @since 4.4.0
 *
 * @param string $key Header name.
 * @return string Canonicalized name.
 */',
        'startLine' => 73083,
        'endLine' => 73085,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_header' => 
      array (
        'name' => 'get_header',
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
            'startLine' => 73098,
            'endLine' => 73098,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the given header from the request.
 *
 * If the header has multiple values, they will be concatenated with a comma
 * as per the HTTP specification. Be aware that some non-compliant headers
 * (notably cookie headers) cannot be joined this way.
 *
 * @since 4.4.0
 *
 * @param string $key Header name, will be canonicalized to lowercase.
 * @return string|null String value if set, null otherwise.
 */',
        'startLine' => 73098,
        'endLine' => 73100,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_header_as_array' => 
      array (
        'name' => 'get_header_as_array',
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
            'startLine' => 73109,
            'endLine' => 73109,
            'startColumn' => 45,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves header values from the request.
 *
 * @since 4.4.0
 *
 * @param string $key Header name, will be canonicalized to lowercase.
 * @return array|null List of string values if set, null otherwise.
 */',
        'startLine' => 73109,
        'endLine' => 73111,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_header' => 
      array (
        'name' => 'set_header',
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
            'startLine' => 73120,
            'endLine' => 73120,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73120,
            'endLine' => 73120,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the header on request.
 *
 * @since 4.4.0
 *
 * @param string $key   Header name.
 * @param string $value Header value, or list of values.
 */',
        'startLine' => 73120,
        'endLine' => 73122,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'add_header' => 
      array (
        'name' => 'add_header',
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
            'startLine' => 73131,
            'endLine' => 73131,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73131,
            'endLine' => 73131,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Appends a header value for the given header.
 *
 * @since 4.4.0
 *
 * @param string $key   Header name.
 * @param string $value Header value, or list of values.
 */',
        'startLine' => 73131,
        'endLine' => 73133,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'remove_header' => 
      array (
        'name' => 'remove_header',
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
            'startLine' => 73141,
            'endLine' => 73141,
            'startColumn' => 39,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Removes all values for a header.
 *
 * @since 4.4.0
 *
 * @param string $key Header name.
 */',
        'startLine' => 73141,
        'endLine' => 73143,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_headers' => 
      array (
        'name' => 'set_headers',
        'parameters' => 
        array (
          'headers' => 
          array (
            'name' => 'headers',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73152,
            'endLine' => 73152,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'override' => 
          array (
            'name' => 'override',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 73152,
                'endLine' => 73152,
                'startTokenPos' => 113014,
                'startFilePos' => 2472634,
                'endTokenPos' => 113014,
                'endFilePos' => 2472638,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73152,
            'endLine' => 73152,
            'startColumn' => 47,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets headers on the request.
 *
 * @since 4.4.0
 *
 * @param array $headers  Map of header name to value.
 * @param bool  $override If true, replace the request\'s headers. Otherwise, merge with existing.
 */',
        'startLine' => 73152,
        'endLine' => 73154,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_content_type' => 
      array (
        'name' => 'get_content_type',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the Content-Type of the request.
 *
 * @since 4.4.0
 *
 * @return array|null Map containing \'value\' and \'parameters\' keys
 *                    or null when no valid Content-Type header was
 *                    available.
 */',
        'startLine' => 73164,
        'endLine' => 73166,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'is_json_content_type' => 
      array (
        'name' => 'is_json_content_type',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the request has specified a JSON Content-Type.
 *
 * @since 5.6.0
 *
 * @return bool True if the Content-Type header is JSON.
 */',
        'startLine' => 73174,
        'endLine' => 73176,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_parameter_order' => 
      array (
        'name' => 'get_parameter_order',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the parameter priority order.
 *
 * Used when checking parameters in WP_REST_Request::get_param().
 *
 * @since 4.4.0
 *
 * @return string[] Array of types to check, in order of priority.
 */',
        'startLine' => 73186,
        'endLine' => 73188,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_param' => 
      array (
        'name' => 'get_param',
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
            'startLine' => 73200,
            'endLine' => 73200,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves a parameter from the request.
 *
 * @since 4.4.0
 *
 * @param string $key Parameter name.
 * @return mixed|null Value if set, null otherwise.
 * @phpstan-template TOffset of key-of<T>
 * @phpstan-param TOffset $key
 * @phpstan-return T[TOffset]|null
 */',
        'startLine' => 73200,
        'endLine' => 73202,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'has_param' => 
      array (
        'name' => 'has_param',
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
            'startLine' => 73215,
            'endLine' => 73215,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if a parameter exists in the request.
 *
 * This allows distinguishing between an omitted parameter,
 * and a parameter specifically set to null.
 *
 * @since 5.3.0
 *
 * @param string $key Parameter name.
 * @return bool True if a param exists for the given key.
 * @phpstan-param key-of<T> $key
 */',
        'startLine' => 73215,
        'endLine' => 73217,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_param' => 
      array (
        'name' => 'set_param',
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
            'startLine' => 73234,
            'endLine' => 73234,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73234,
            'endLine' => 73234,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets a parameter on the request.
 *
 * If the given parameter key exists in any parameter type an update will take place,
 * otherwise a new param will be created in the first parameter type (respecting
 * get_parameter_order()).
 *
 * @since 4.4.0
 *
 * @param string $key   Parameter name.
 * @param mixed  $value Parameter value.
 * @phpstan-template TOffset of key-of<T>
 * @phpstan-param TOffset $key
 * @phpstan-param T[TOffset] $value
 * @phpstan-return void
 */',
        'startLine' => 73234,
        'endLine' => 73236,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_params' => 
      array (
        'name' => 'get_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves merged parameters from the request.
 *
 * The equivalent of get_param(), but returns all parameters for the request.
 * Handles merging all the available values into a single array.
 *
 * @since 4.4.0
 *
 * @return array Map of key to value.
 * @phpstan-return T
 */',
        'startLine' => 73248,
        'endLine' => 73250,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_url_params' => 
      array (
        'name' => 'get_url_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves parameters from the route itself.
 *
 * These are parsed from the URL using the regex.
 *
 * @since 4.4.0
 *
 * @return array Parameter map of key to value.
 */',
        'startLine' => 73260,
        'endLine' => 73262,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_url_params' => 
      array (
        'name' => 'set_url_params',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73272,
            'endLine' => 73272,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets parameters from the route.
 *
 * Typically, this is set after parsing the URL.
 *
 * @since 4.4.0
 *
 * @param array $params Parameter map of key to value.
 */',
        'startLine' => 73272,
        'endLine' => 73274,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_query_params' => 
      array (
        'name' => 'get_query_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves parameters from the query string.
 *
 * These are the parameters you\'d typically find in `$_GET`.
 *
 * @since 4.4.0
 *
 * @return array Parameter map of key to value.
 */',
        'startLine' => 73284,
        'endLine' => 73286,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_query_params' => 
      array (
        'name' => 'set_query_params',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73296,
            'endLine' => 73296,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets parameters from the query string.
 *
 * Typically, this is set from `$_GET`.
 *
 * @since 4.4.0
 *
 * @param array $params Parameter map of key to value.
 */',
        'startLine' => 73296,
        'endLine' => 73298,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_body_params' => 
      array (
        'name' => 'get_body_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves parameters from the body.
 *
 * These are the parameters you\'d typically find in `$_POST`.
 *
 * @since 4.4.0
 *
 * @return array Parameter map of key to value.
 */',
        'startLine' => 73308,
        'endLine' => 73310,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_body_params' => 
      array (
        'name' => 'set_body_params',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73320,
            'endLine' => 73320,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets parameters from the body.
 *
 * Typically, this is set from `$_POST`.
 *
 * @since 4.4.0
 *
 * @param array $params Parameter map of key to value.
 */',
        'startLine' => 73320,
        'endLine' => 73322,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_file_params' => 
      array (
        'name' => 'get_file_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves multipart file parameters from the body.
 *
 * These are the parameters you\'d typically find in `$_FILES`.
 *
 * @since 4.4.0
 *
 * @return array Parameter map of key to value.
 */',
        'startLine' => 73332,
        'endLine' => 73334,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_file_params' => 
      array (
        'name' => 'set_file_params',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73344,
            'endLine' => 73344,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets multipart file parameters from the body.
 *
 * Typically, this is set from `$_FILES`.
 *
 * @since 4.4.0
 *
 * @param array $params Parameter map of key to value.
 */',
        'startLine' => 73344,
        'endLine' => 73346,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_default_params' => 
      array (
        'name' => 'get_default_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the default parameters.
 *
 * These are the parameters set in the route registration.
 *
 * @since 4.4.0
 *
 * @return array Parameter map of key to value.
 */',
        'startLine' => 73356,
        'endLine' => 73358,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_default_params' => 
      array (
        'name' => 'set_default_params',
        'parameters' => 
        array (
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73368,
            'endLine' => 73368,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets default parameters.
 *
 * These are the parameters set in the route registration.
 *
 * @since 4.4.0
 *
 * @param array $params Parameter map of key to value.
 */',
        'startLine' => 73368,
        'endLine' => 73370,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_body' => 
      array (
        'name' => 'get_body',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the request body content.
 *
 * @since 4.4.0
 *
 * @return string Binary data from the request body.
 */',
        'startLine' => 73378,
        'endLine' => 73380,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_body' => 
      array (
        'name' => 'set_body',
        'parameters' => 
        array (
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
            'startLine' => 73388,
            'endLine' => 73388,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets body content.
 *
 * @since 4.4.0
 *
 * @param string $data Binary data from the request body.
 */',
        'startLine' => 73388,
        'endLine' => 73390,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_json_params' => 
      array (
        'name' => 'get_json_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the parameters from a JSON-formatted body.
 *
 * @since 4.4.0
 *
 * @return array Parameter map of key to value.
 */',
        'startLine' => 73398,
        'endLine' => 73400,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'parse_json_params' => 
      array (
        'name' => 'parse_json_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parses the JSON parameters.
 *
 * Avoids parsing the JSON data until we need to access it.
 *
 * @since 4.4.0
 * @since 4.7.0 Returns error instance if value cannot be decoded.
 * @return true|WP_Error True if the JSON data was passed or no JSON data was provided, WP_Error if invalid JSON was passed.
 */',
        'startLine' => 73410,
        'endLine' => 73412,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'parse_body_params' => 
      array (
        'name' => 'parse_body_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parses the request body parameters.
 *
 * Parses out URL-encoded bodies for request methods that aren\'t supported
 * natively by PHP.
 *
 * @since 4.4.0
 * @phpstan-return void
 */',
        'startLine' => 73422,
        'endLine' => 73424,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_route' => 
      array (
        'name' => 'get_route',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the route that matched the request.
 *
 * @since 4.4.0
 *
 * @return string Route matching regex.
 */',
        'startLine' => 73432,
        'endLine' => 73434,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_route' => 
      array (
        'name' => 'set_route',
        'parameters' => 
        array (
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
            'startLine' => 73442,
            'endLine' => 73442,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the route that matched the request.
 *
 * @since 4.4.0
 *
 * @param string $route Route matching regex.
 */',
        'startLine' => 73442,
        'endLine' => 73444,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'get_attributes' => 
      array (
        'name' => 'get_attributes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the attributes for the request.
 *
 * These are the options for the route that was matched.
 *
 * @since 4.4.0
 *
 * @return array Attributes for the request.
 */',
        'startLine' => 73454,
        'endLine' => 73456,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'set_attributes' => 
      array (
        'name' => 'set_attributes',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73464,
            'endLine' => 73464,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the attributes for the request.
 *
 * @since 4.4.0
 *
 * @param array $attributes Attributes for the request.
 */',
        'startLine' => 73464,
        'endLine' => 73466,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'sanitize_params' => 
      array (
        'name' => 'sanitize_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sanitizes (where possible) the params on the request.
 *
 * This is primarily based off the sanitize_callback param on each registered
 * argument.
 *
 * @since 4.4.0
 *
 * @return true|WP_Error True if parameters were sanitized, WP_Error if an error occurred during sanitization.
 */',
        'startLine' => 73477,
        'endLine' => 73479,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'has_valid_params' => 
      array (
        'name' => 'has_valid_params',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks whether this request is valid according to its attributes.
 *
 * @since 4.4.0
 *
 * @return true|WP_Error True if there are no parameters to validate or if all pass validation,
 *                       WP_Error if required parameters are missing.
 */',
        'startLine' => 73488,
        'endLine' => 73490,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'offsetExists' => 
      array (
        'name' => 'offsetExists',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73501,
            'endLine' => 73501,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Checks if a parameter is set.
 *
 * @since 4.4.0
 *
 * @param string $offset Parameter name.
 * @return bool Whether the parameter is set.
 * @phpstan-param key-of<T> $offset
 */',
        'startLine' => 73500,
        'endLine' => 73503,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'offsetGet' => 
      array (
        'name' => 'offsetGet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73516,
            'endLine' => 73516,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Retrieves a parameter from the request.
 *
 * @since 4.4.0
 *
 * @param string $offset Parameter name.
 * @return mixed|null Value if set, null otherwise.
 * @phpstan-template TOffset of key-of<T>
 * @phpstan-param TOffset $offset
 * @phpstan-return T[TOffset]|null
 */',
        'startLine' => 73515,
        'endLine' => 73518,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'offsetSet' => 
      array (
        'name' => 'offsetSet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73532,
            'endLine' => 73532,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73532,
            'endLine' => 73532,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Sets a parameter on the request.
 *
 * @since 4.4.0
 *
 * @param string $offset Parameter name.
 * @param mixed  $value  Parameter value.
 * @phpstan-template TOffset of key-of<T>
 * @phpstan-param TOffset $offset
 * @phpstan-param T[TOffset] $value
 * @phpstan-return void
 */',
        'startLine' => 73531,
        'endLine' => 73534,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'offsetUnset' => 
      array (
        'name' => 'offsetUnset',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73546,
            'endLine' => 73546,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Removes a parameter from the request.
 *
 * @since 4.4.0
 *
 * @param string $offset Parameter name.
 * @phpstan-template TOffset of key-of<T>
 * @phpstan-param TOffset $offset
 * @phpstan-return void
 */',
        'startLine' => 73545,
        'endLine' => 73548,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
      'from_url' => 
      array (
        'name' => 'from_url',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73557,
            'endLine' => 73557,
            'startColumn' => 41,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves a WP_REST_Request object from a full URL.
 *
 * @since 4.5.0
 *
 * @param string $url URL with protocol, domain, path and query args.
 * @return WP_REST_Request|false WP_REST_Request object on success, false on failure.
 */',
        'startLine' => 73557,
        'endLine' => 73559,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Request',
        'implementingClassName' => 'WP_REST_Request',
        'currentClassName' => 'WP_REST_Request',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));