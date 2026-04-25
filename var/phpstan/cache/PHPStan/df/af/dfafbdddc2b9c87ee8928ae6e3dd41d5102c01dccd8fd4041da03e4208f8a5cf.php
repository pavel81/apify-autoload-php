<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-WP_Http_Cookie
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'WP_Http_Cookie',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'WP_Http_Cookie',
    'shortName' => 'WP_Http_Cookie',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Core class used to encapsulate a single cookie object for internal use.
 *
 * Returned cookies are represented using this class, and when cookies are set, if they are not
 * already a WP_Http_Cookie() object, then they are turned into one.
 *
 * @todo The WordPress convention is to use underscores instead of camelCase for function and method
 * names. Need to switch to use underscores instead for the methods.
 *
 * @since 2.8.0
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
    'startLine' => 42434,
    'endLine' => 42583,
    'startColumn' => 5,
    'endColumn' => 5,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'name' => 
      array (
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'name' => 'name',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cookie name.
 *
 * @since 2.8.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42444,
        'endLine' => 42444,
        'startColumn' => 9,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'value' => 
      array (
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'name' => 'value',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cookie value.
 *
 * @since 2.8.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42452,
        'endLine' => 42452,
        'startColumn' => 9,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expires' => 
      array (
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'name' => 'expires',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * When the cookie expires. Unix timestamp or formatted date.
 *
 * @since 2.8.0
 *
 * @var string|int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42460,
        'endLine' => 42460,
        'startColumn' => 9,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'path' => 
      array (
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'name' => 'path',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cookie URL path.
 *
 * @since 2.8.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42468,
        'endLine' => 42468,
        'startColumn' => 9,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'domain' => 
      array (
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'name' => 'domain',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cookie Domain.
 *
 * @since 2.8.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42476,
        'endLine' => 42476,
        'startColumn' => 9,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'port' => 
      array (
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'name' => 'port',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cookie port or comma-separated list of ports.
 *
 * @since 2.8.0
 *
 * @var int|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42484,
        'endLine' => 42484,
        'startColumn' => 9,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'host_only' => 
      array (
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'name' => 'host_only',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * host-only flag.
 *
 * @since 5.2.0
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42492,
        'endLine' => 42492,
        'startColumn' => 9,
        'endColumn' => 26,
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
            'startLine' => 42526,
            'endLine' => 42526,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'requested_url' => 
          array (
            'name' => 'requested_url',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 42526,
                'endLine' => 42526,
                'startTokenPos' => 73775,
                'startFilePos' => 1376833,
                'endTokenPos' => 73775,
                'endFilePos' => 1376834,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42526,
            'endLine' => 42526,
            'startColumn' => 44,
            'endColumn' => 62,
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
 * Sets up this cookie object.
 *
 * The parameter $data should be either an associative array containing the indices names below
 * or a header string detailing it.
 *
 * @since 2.8.0
 * @since 5.2.0 Added `host_only` to the `$data` parameter.
 *
 * @param string|array $data {
 *     Raw cookie data as header string or data array.
 *
 *     @type string          $name      Cookie name.
 *     @type mixed           $value     Value. Should NOT already be urlencoded.
 *     @type string|int|null $expires   Optional. Unix timestamp or formatted date. Default null.
 *     @type string          $path      Optional. Path. Default \'/\'.
 *     @type string          $domain    Optional. Domain. Default host of parsed $requested_url.
 *     @type int|string      $port      Optional. Port or comma-separated list of ports. Default null.
 *     @type bool            $host_only Optional. host-only storage flag. Default true.
 * }
 * @param string       $requested_url The URL which the cookie was set on, used for default $domain
 *                                    and $port values.
 * @phpstan-param array{
 *   name?: string,
 *   value?: mixed,
 *   expires?: string|int|null,
 *   path?: string,
 *   domain?: string,
 *   port?: int|string,
 *   host_only?: bool,
 * } $data
 * @phpstan-return void
 */',
        'startLine' => 42526,
        'endLine' => 42528,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'currentClassName' => 'WP_Http_Cookie',
        'aliasName' => NULL,
      ),
      'test' => 
      array (
        'name' => 'test',
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
            'startLine' => 42539,
            'endLine' => 42539,
            'startColumn' => 30,
            'endColumn' => 33,
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
 * Confirms that it\'s OK to send this cookie to the URL checked against.
 *
 * Decision is based on RFC 2109/2965, so look there for details on validity.
 *
 * @since 2.8.0
 *
 * @param string $url URL you intend to send this cookie to
 * @return bool true if allowed, false otherwise.
 */',
        'startLine' => 42539,
        'endLine' => 42541,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'currentClassName' => 'WP_Http_Cookie',
        'aliasName' => NULL,
      ),
      'getHeaderValue' => 
      array (
        'name' => 'getHeaderValue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert cookie name and value back to header string.
 *
 * @since 2.8.0
 *
 * @return string Header encoded cookie name and value.
 */',
        'startLine' => 42549,
        'endLine' => 42551,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'currentClassName' => 'WP_Http_Cookie',
        'aliasName' => NULL,
      ),
      'getFullHeader' => 
      array (
        'name' => 'getFullHeader',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve cookie header for usage in the rest of the WordPress HTTP API.
 *
 * @since 2.8.0
 *
 * @return string
 */',
        'startLine' => 42559,
        'endLine' => 42561,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'currentClassName' => 'WP_Http_Cookie',
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
 * Retrieves cookie attributes.
 *
 * @since 4.6.0
 *
 * @return array {
 *     List of attributes.
 *
 *     @type string|int|null $expires When the cookie expires. Unix timestamp or formatted date.
 *     @type string          $path    Cookie URL path.
 *     @type string          $domain  Cookie domain.
 * }
 * @phpstan-return array{
 *   expires: string|int|null,
 *   path: string,
 *   domain: string,
 * }
 */',
        'startLine' => 42580,
        'endLine' => 42582,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Http_Cookie',
        'implementingClassName' => 'WP_Http_Cookie',
        'currentClassName' => 'WP_Http_Cookie',
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