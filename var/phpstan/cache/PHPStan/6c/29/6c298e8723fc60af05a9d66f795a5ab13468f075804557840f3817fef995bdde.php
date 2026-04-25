<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-WP_HTTP_Requests_Response
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'WP_HTTP_Requests_Response',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'WP_HTTP_Requests_Response',
    'shortName' => 'WP_HTTP_Requests_Response',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Core wrapper object for a WpOrg\\Requests\\Response for standardization.
 *
 * @since 4.6.0
 *
 * @see WP_HTTP_Response
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 43089,
    'endLine' => 43219,
    'startColumn' => 5,
    'endColumn' => 5,
    'parentClassName' => 'WP_HTTP_Response',
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
      'response' => 
      array (
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'name' => 'response',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Requests Response object.
 *
 * @since 4.6.0
 * @var \\WpOrg\\Requests\\Response
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43097,
        'endLine' => 43097,
        'startColumn' => 9,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filename' => 
      array (
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'name' => 'filename',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Filename the response was saved to.
 *
 * @since 4.6.0
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43104,
        'endLine' => 43104,
        'startColumn' => 9,
        'endColumn' => 28,
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
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WpOrg\\Requests\\Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43113,
            'endLine' => 43113,
            'startColumn' => 37,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'filename' => 
          array (
            'name' => 'filename',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 43113,
                'endLine' => 43113,
                'startTokenPos' => 74599,
                'startFilePos' => 1394398,
                'endTokenPos' => 74599,
                'endFilePos' => 1394399,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43113,
            'endLine' => 43113,
            'startColumn' => 73,
            'endColumn' => 86,
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
 * Constructor.
 *
 * @since 4.6.0
 *
 * @param \\WpOrg\\Requests\\Response $response HTTP response.
 * @param string                   $filename Optional. File name. Default empty.
 */',
        'startLine' => 43113,
        'endLine' => 43115,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'get_response_object' => 
      array (
        'name' => 'get_response_object',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the response object for the request.
 *
 * @since 4.6.0
 *
 * @return WpOrg\\Requests\\Response HTTP response.
 */',
        'startLine' => 43123,
        'endLine' => 43125,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
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
 * Retrieves headers associated with the response.
 *
 * @since 4.6.0
 *
 * @return \\WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary Map of header name to header value.
 */',
        'startLine' => 43133,
        'endLine' => 43135,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
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
            'startLine' => 43143,
            'endLine' => 43143,
            'startColumn' => 37,
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
 * Sets all header values.
 *
 * @since 4.6.0
 *
 * @param array $headers Map of header name to header value.
 */',
        'startLine' => 43143,
        'endLine' => 43145,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'header' => 
      array (
        'name' => 'header',
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
            'startLine' => 43156,
            'endLine' => 43156,
            'startColumn' => 32,
            'endColumn' => 35,
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
            'startLine' => 43156,
            'endLine' => 43156,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 43156,
                'endLine' => 43156,
                'startTokenPos' => 74667,
                'startFilePos' => 1395613,
                'endTokenPos' => 74667,
                'endFilePos' => 1395617,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43156,
            'endLine' => 43156,
            'startColumn' => 46,
            'endColumn' => 61,
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
 * Sets a single HTTP header.
 *
 * @since 4.6.0
 *
 * @param string $key     Header name.
 * @param string $value   Header value.
 * @param bool   $replace Optional. Whether to replace an existing header of the same name.
 *                        Default true.
 */',
        'startLine' => 43156,
        'endLine' => 43158,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'get_status' => 
      array (
        'name' => 'get_status',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the HTTP return code for the response.
 *
 * @since 4.6.0
 *
 * @return int The 3-digit HTTP status code.
 */',
        'startLine' => 43166,
        'endLine' => 43168,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'set_status' => 
      array (
        'name' => 'set_status',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43176,
            'endLine' => 43176,
            'startColumn' => 36,
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
 * Sets the 3-digit HTTP status code.
 *
 * @since 4.6.0
 *
 * @param int $code HTTP status.
 */',
        'startLine' => 43176,
        'endLine' => 43178,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'get_data' => 
      array (
        'name' => 'get_data',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the response data.
 *
 * @since 4.6.0
 *
 * @return string Response data.
 */',
        'startLine' => 43186,
        'endLine' => 43188,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'set_data' => 
      array (
        'name' => 'set_data',
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
            'startLine' => 43196,
            'endLine' => 43196,
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
 * Sets the response data.
 *
 * @since 4.6.0
 *
 * @param string $data Response data.
 */',
        'startLine' => 43196,
        'endLine' => 43198,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'get_cookies' => 
      array (
        'name' => 'get_cookies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves cookies from the response.
 *
 * @since 4.6.0
 *
 * @return WP_HTTP_Cookie[] List of cookie objects.
 */',
        'startLine' => 43206,
        'endLine' => 43208,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
        'aliasName' => NULL,
      ),
      'to_array' => 
      array (
        'name' => 'to_array',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Converts the object to a WP_Http response array.
 *
 * @since 4.6.0
 *
 * @return array WP_Http response array, per WP_Http::request().
 */',
        'startLine' => 43216,
        'endLine' => 43218,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_HTTP_Requests_Response',
        'implementingClassName' => 'WP_HTTP_Requests_Response',
        'currentClassName' => 'WP_HTTP_Requests_Response',
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