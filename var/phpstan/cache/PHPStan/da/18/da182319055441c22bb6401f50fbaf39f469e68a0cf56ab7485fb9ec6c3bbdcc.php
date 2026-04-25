<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-WP_REST_Server
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'WP_REST_Server',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'WP_REST_Server',
    'shortName' => 'WP_REST_Server',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Core class used to implement the WordPress REST API server.
 *
 * @since 4.4.0
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
    'startLine' => 73741,
    'endLine' => 74309,
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
      'READABLE' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'READABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'GET\'',
          'attributes' => 
          array (
            'startLine' => 73750,
            'endLine' => 73750,
            'startTokenPos' => 113799,
            'startFilePos' => 2489826,
            'endTokenPos' => 113799,
            'endFilePos' => 2489830,
          ),
        ),
        'docComment' => '/**
 * Alias for GET transport method.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73750,
        'endLine' => 73750,
        'startColumn' => 9,
        'endColumn' => 31,
      ),
      'CREATABLE' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'CREATABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'POST\'',
          'attributes' => 
          array (
            'startLine' => 73757,
            'endLine' => 73757,
            'startTokenPos' => 113810,
            'startFilePos' => 2489985,
            'endTokenPos' => 113810,
            'endFilePos' => 2489990,
          ),
        ),
        'docComment' => '/**
 * Alias for POST transport method.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73757,
        'endLine' => 73757,
        'startColumn' => 9,
        'endColumn' => 33,
      ),
      'EDITABLE' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'EDITABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'POST, PUT, PATCH\'',
          'attributes' => 
          array (
            'startLine' => 73764,
            'endLine' => 73764,
            'startTokenPos' => 113821,
            'startFilePos' => 2490166,
            'endTokenPos' => 113821,
            'endFilePos' => 2490183,
          ),
        ),
        'docComment' => '/**
 * Alias for POST, PUT, PATCH transport methods together.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73764,
        'endLine' => 73764,
        'startColumn' => 9,
        'endColumn' => 44,
      ),
      'DELETABLE' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'DELETABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'DELETE\'',
          'attributes' => 
          array (
            'startLine' => 73771,
            'endLine' => 73771,
            'startTokenPos' => 113832,
            'startFilePos' => 2490340,
            'endTokenPos' => 113832,
            'endFilePos' => 2490347,
          ),
        ),
        'docComment' => '/**
 * Alias for DELETE transport method.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73771,
        'endLine' => 73771,
        'startColumn' => 9,
        'endColumn' => 35,
      ),
      'ALLMETHODS' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'ALLMETHODS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'GET, POST, PUT, PATCH, DELETE\'',
          'attributes' => 
          array (
            'startLine' => 73778,
            'endLine' => 73778,
            'startTokenPos' => 113843,
            'startFilePos' => 2490539,
            'endTokenPos' => 113843,
            'endFilePos' => 2490569,
          ),
        ),
        'docComment' => '/**
 * Alias for GET, POST, PUT, PATCH & DELETE transport methods together.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73778,
        'endLine' => 73778,
        'startColumn' => 9,
        'endColumn' => 59,
      ),
    ),
    'immediateProperties' => 
    array (
      'namespaces' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'namespaces',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 73785,
            'endLine' => 73785,
            'startTokenPos' => 113854,
            'startFilePos' => 2490733,
            'endTokenPos' => 113856,
            'endFilePos' => 2490739,
          ),
        ),
        'docComment' => '/**
 * Namespaces registered to the server.
 *
 * @since 4.4.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73785,
        'endLine' => 73785,
        'startColumn' => 9,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'endpoints' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'endpoints',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 73792,
            'endLine' => 73792,
            'startTokenPos' => 113867,
            'startFilePos' => 2490901,
            'endTokenPos' => 113869,
            'endFilePos' => 2490907,
          ),
        ),
        'docComment' => '/**
 * Endpoints registered to the server.
 *
 * @since 4.4.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73792,
        'endLine' => 73792,
        'startColumn' => 9,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'route_options' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'route_options',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 73799,
            'endLine' => 73799,
            'startTokenPos' => 113880,
            'startFilePos' => 2491069,
            'endTokenPos' => 113882,
            'endFilePos' => 2491075,
          ),
        ),
        'docComment' => '/**
 * Options defined for the routes.
 *
 * @since 4.4.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73799,
        'endLine' => 73799,
        'startColumn' => 9,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'embed_cache' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'embed_cache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 73806,
            'endLine' => 73806,
            'startTokenPos' => 113893,
            'startFilePos' => 2491229,
            'endTokenPos' => 113895,
            'endFilePos' => 2491235,
          ),
        ),
        'docComment' => '/**
 * Caches embedded requests.
 *
 * @since 5.4.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73806,
        'endLine' => 73806,
        'startColumn' => 9,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dispatching_requests' => 
      array (
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'name' => 'dispatching_requests',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 73813,
            'endLine' => 73813,
            'startTokenPos' => 113906,
            'startFilePos' => 2491429,
            'endTokenPos' => 113908,
            'endFilePos' => 2491435,
          ),
        ),
        'docComment' => '/**
 * Stores request objects that are currently being handled.
 *
 * @since 6.5.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73813,
        'endLine' => 73813,
        'startColumn' => 9,
        'endColumn' => 50,
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
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instantiates the REST server.
 *
 * @since 4.4.0
 */',
        'startLine' => 73819,
        'endLine' => 73821,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'check_authentication' => 
      array (
        'name' => 'check_authentication',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks the authentication headers if supplied.
 *
 * @since 4.4.0
 *
 * @return WP_Error|null|true WP_Error if authentication error occurred, null if authentication
 *                            method wasn\'t used, true if authentication succeeded.
 */',
        'startLine' => 73830,
        'endLine' => 73832,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'error_to_response' => 
      array (
        'name' => 'error_to_response',
        'parameters' => 
        array (
          'error' => 
          array (
            'name' => 'error',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73846,
            'endLine' => 73846,
            'startColumn' => 46,
            'endColumn' => 51,
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
 * Converts an error to a response object.
 *
 * This iterates over all error codes and messages to change it into a flat
 * array. This enables simpler client behavior, as it is represented as a
 * list in JSON rather than an object/map.
 *
 * @since 4.4.0
 * @since 5.7.0 Converted to a wrapper of {@see rest_convert_error_to_response()}.
 *
 * @param WP_Error $error WP_Error instance.
 * @return WP_REST_Response List of associative arrays with code and message keys.
 */',
        'startLine' => 73846,
        'endLine' => 73848,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'json_error' => 
      array (
        'name' => 'json_error',
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
            'startLine' => 73864,
            'endLine' => 73864,
            'startColumn' => 39,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73864,
            'endLine' => 73864,
            'startColumn' => 46,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'status' => 
          array (
            'name' => 'status',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 73864,
                'endLine' => 73864,
                'startTokenPos' => 113972,
                'startFilePos' => 2493451,
                'endTokenPos' => 113972,
                'endFilePos' => 2493455,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73864,
            'endLine' => 73864,
            'startColumn' => 56,
            'endColumn' => 70,
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
 * Retrieves an appropriate error representation in JSON.
 *
 * Note: This should only be used in WP_REST_Server::serve_request(), as it
 * cannot handle WP_Error internally. All callbacks and other internal methods
 * should instead return a WP_Error with the data set to an array that includes
 * a \'status\' key, with the value being the HTTP status to send.
 *
 * @since 4.4.0
 *
 * @param string   $code    WP_Error-style code.
 * @param string   $message Human-readable message.
 * @param int|null $status  Optional. HTTP status code to send. Default null.
 * @return string JSON representation of the error.
 */',
        'startLine' => 73864,
        'endLine' => 73866,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_json_encode_options' => 
      array (
        'name' => 'get_json_encode_options',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WP_REST_Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73876,
            'endLine' => 73876,
            'startColumn' => 52,
            'endColumn' => 76,
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
 * Gets the encoding options passed to {@see wp_json_encode}.
 *
 * @since 6.1.0
 *
 * @param \\WP_REST_Request $request The current request object.
 *
 * @return int The JSON encode options.
 */',
        'startLine' => 73876,
        'endLine' => 73878,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'serve_request' => 
      array (
        'name' => 'serve_request',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 73895,
                'endLine' => 73895,
                'startTokenPos' => 114008,
                'startFilePos' => 2494571,
                'endTokenPos' => 114008,
                'endFilePos' => 2494575,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73895,
            'endLine' => 73895,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles serving a REST API request.
 *
 * Matches the current server URI to a route and runs the first matching
 * callback then outputs a JSON representation of the returned value.
 *
 * @since 4.4.0
 *
 * @see WP_REST_Server::dispatch()
 *
 * @global WP_User $current_user The currently authenticated user.
 *
 * @param string|null $path Optional. The request route. If not set, `$_SERVER[\'PATH_INFO\']` will be used.
 *                          Default null.
 * @return null|false Null if not served and a HEAD request, false otherwise.
 */',
        'startLine' => 73895,
        'endLine' => 73897,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'response_to_data' => 
      array (
        'name' => 'response_to_data',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73917,
            'endLine' => 73917,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'embed' => 
          array (
            'name' => 'embed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73917,
            'endLine' => 73917,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Converts a response to data to send.
 *
 * @since 4.4.0
 * @since 5.4.0 The `$embed` parameter can now contain a list of link relations to include.
 *
 * @param WP_REST_Response $response Response object.
 * @param bool|string[]    $embed    Whether to embed all links, a filtered list of link relations, or no links.
 * @return array {
 *     Data with sub-requests embedded.
 *
 *     @type array $_links    Links.
 *     @type array $_embedded Embedded objects.
 * }
 * @phpstan-return array{
 *   _links: array,
 *   _embedded: array,
 * }
 */',
        'startLine' => 73917,
        'endLine' => 73919,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_response_links' => 
      array (
        'name' => 'get_response_links',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73931,
            'endLine' => 73931,
            'startColumn' => 51,
            'endColumn' => 59,
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
 * Retrieves links from a response.
 *
 * Extracts the links from a response into a structured hash, suitable for
 * direct output.
 *
 * @since 4.4.0
 *
 * @param WP_REST_Response $response Response to extract links from.
 * @return array Map of link relation to list of link hashes.
 */',
        'startLine' => 73931,
        'endLine' => 73933,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_target_hints_for_link' => 
      array (
        'name' => 'get_target_hints_for_link',
        'parameters' => 
        array (
          'link' => 
          array (
            'name' => 'link',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73942,
            'endLine' => 73942,
            'startColumn' => 61,
            'endColumn' => 65,
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
 * Gets the target hints for a REST API Link.
 *
 * @since 6.7.0
 *
 * @param array $link The link to get target hints for.
 * @return array|null
 */',
        'startLine' => 73942,
        'endLine' => 73944,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_compact_response_links' => 
      array (
        'name' => 'get_compact_response_links',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73956,
            'endLine' => 73956,
            'startColumn' => 59,
            'endColumn' => 67,
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
 * Retrieves the CURIEs (compact URIs) used for relations.
 *
 * Extracts the links from a response into a structured hash, suitable for
 * direct output.
 *
 * @since 4.5.0
 *
 * @param WP_REST_Response $response Response to extract links from.
 * @return array Map of link relation to list of link hashes.
 */',
        'startLine' => 73956,
        'endLine' => 73958,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'embed_links' => 
      array (
        'name' => 'embed_links',
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
            'startLine' => 73979,
            'endLine' => 73979,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'embed' => 
          array (
            'name' => 'embed',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 73979,
                'endLine' => 73979,
                'startTokenPos' => 114099,
                'startFilePos' => 2497455,
                'endTokenPos' => 114099,
                'endFilePos' => 2497459,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73979,
            'endLine' => 73979,
            'startColumn' => 47,
            'endColumn' => 60,
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
 * Embeds the links from the data into the request.
 *
 * @since 4.4.0
 * @since 5.4.0 The `$embed` parameter can now contain a list of link relations to include.
 *
 * @param array         $data  Data from the request.
 * @param bool|string[] $embed Whether to embed all links or a filtered list of link relations.
 *                             Default true.
 * @return array {
 *     Data with sub-requests embedded.
 *
 *     @type array $_links    Links.
 *     @type array $_embedded Embedded objects.
 * }
 * @phpstan-return array{
 *   _links: array,
 *   _embedded: array,
 * }
 */',
        'startLine' => 73979,
        'endLine' => 73981,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'envelope_response' => 
      array (
        'name' => 'envelope_response',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73996,
            'endLine' => 73996,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'embed' => 
          array (
            'name' => 'embed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73996,
            'endLine' => 73996,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Wraps the response in an envelope.
 *
 * The enveloping technique is used to work around browser/client
 * compatibility issues. Essentially, it converts the full HTTP response to
 * data instead.
 *
 * @since 4.4.0
 * @since 6.0.0 The `$embed` parameter can now contain a list of link relations to include.
 *
 * @param WP_REST_Response $response Response object.
 * @param bool|string[]    $embed    Whether to embed all links, a filtered list of link relations, or no links.
 * @return WP_REST_Response New response with wrapped data
 */',
        'startLine' => 73996,
        'endLine' => 73998,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'register_route' => 
      array (
        'name' => 'register_route',
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
            'startLine' => 74010,
            'endLine' => 74010,
            'startColumn' => 40,
            'endColumn' => 55,
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
            'startLine' => 74010,
            'endLine' => 74010,
            'startColumn' => 58,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'route_args' => 
          array (
            'name' => 'route_args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74010,
            'endLine' => 74010,
            'startColumn' => 66,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'override' => 
          array (
            'name' => 'override',
            'default' => 
            array (
              'code' => '\\false',
              'attributes' => 
              array (
                'startLine' => 74010,
                'endLine' => 74010,
                'startTokenPos' => 114145,
                'startFilePos' => 2498767,
                'endTokenPos' => 114145,
                'endFilePos' => 2498772,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74010,
            'endLine' => 74010,
            'startColumn' => 79,
            'endColumn' => 96,
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
 * Registers a route to the server.
 *
 * @since 4.4.0
 *
 * @param string $route_namespace Namespace.
 * @param string $route           The REST route.
 * @param array  $route_args      Route arguments.
 * @param bool   $override        Optional. Whether the route should be overridden if it already exists.
 *                                Default false.
 */',
        'startLine' => 74010,
        'endLine' => 74012,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_routes' => 
      array (
        'name' => 'get_routes',
        'parameters' => 
        array (
          'route_namespace' => 
          array (
            'name' => 'route_namespace',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 74035,
                'endLine' => 74035,
                'startTokenPos' => 114164,
                'startFilePos' => 2499923,
                'endTokenPos' => 114164,
                'endFilePos' => 2499924,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74035,
            'endLine' => 74035,
            'startColumn' => 36,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the route map.
 *
 * The route map is an associative array with path regexes as the keys. The
 * value is an indexed array with the callback function/method as the first
 * item, and a bitmask of HTTP methods as the second item (see the class
 * constants).
 *
 * Each route can be mapped to more than one callback by using an array of
 * the indexed arrays. This allows mapping e.g. GET requests to one callback
 * and POST requests to another.
 *
 * Note that the path regexes (array keys) must have @ escaped, as this is
 * used as the delimiter with preg_match()
 *
 * @since 4.4.0
 * @since 5.4.0 Added `$route_namespace` parameter.
 *
 * @param string $route_namespace Optionally, only return routes in the given namespace.
 * @return array `\'/path/regex\' => array( $callback, $bitmask )` or
 *               `\'/path/regex\' => array( array( $callback, $bitmask ), ...)`.
 */',
        'startLine' => 74035,
        'endLine' => 74037,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_namespaces' => 
      array (
        'name' => 'get_namespaces',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves namespaces registered on the server.
 *
 * @since 4.4.0
 *
 * @return string[] List of registered namespaces.
 */',
        'startLine' => 74045,
        'endLine' => 74047,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_route_options' => 
      array (
        'name' => 'get_route_options',
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
            'startLine' => 74056,
            'endLine' => 74056,
            'startColumn' => 43,
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
 * Retrieves specified options for a route.
 *
 * @since 4.4.0
 *
 * @param string $route Route pattern to fetch options for.
 * @return array|null Data as an associative array if found, or null if not found.
 */',
        'startLine' => 74056,
        'endLine' => 74058,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'dispatch' => 
      array (
        'name' => 'dispatch',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74067,
            'endLine' => 74067,
            'startColumn' => 34,
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
 * Matches the request to a callback and call it.
 *
 * @since 4.4.0
 *
 * @param WP_REST_Request $request Request to attempt dispatching.
 * @return WP_REST_Response Response returned by the callback.
 */',
        'startLine' => 74067,
        'endLine' => 74069,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'is_dispatching' => 
      array (
        'name' => 'is_dispatching',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether the REST server is currently dispatching / responding to a request.
 *
 * This may be a standalone REST API request, or an internal request dispatched from within a regular page load.
 *
 * @since 6.5.0
 *
 * @return bool Whether the REST server is currently handling a request.
 */',
        'startLine' => 74079,
        'endLine' => 74081,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'match_request_to_handler' => 
      array (
        'name' => 'match_request_to_handler',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74091,
            'endLine' => 74091,
            'startColumn' => 53,
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
 * Matches a request object to its handler.
 *
 * @access private
 * @since 5.6.0
 *
 * @param WP_REST_Request $request The request object.
 * @return array|WP_Error The route and request handler on success or a WP_Error instance if no handler was found.
 */',
        'startLine' => 74091,
        'endLine' => 74093,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'respond_to_request' => 
      array (
        'name' => 'respond_to_request',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74106,
            'endLine' => 74106,
            'startColumn' => 47,
            'endColumn' => 54,
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
            'startLine' => 74106,
            'endLine' => 74106,
            'startColumn' => 57,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74106,
            'endLine' => 74106,
            'startColumn' => 65,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74106,
            'endLine' => 74106,
            'startColumn' => 75,
            'endColumn' => 83,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dispatches the request to the callback handler.
 *
 * @access private
 * @since 5.6.0
 *
 * @param WP_REST_Request $request  The request object.
 * @param string          $route    The matched route regex.
 * @param array           $handler  The matched route handler.
 * @param WP_Error|null   $response The current error object if any.
 * @return WP_REST_Response
 */',
        'startLine' => 74106,
        'endLine' => 74108,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_json_last_error' => 
      array (
        'name' => 'get_json_last_error',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns if an error occurred during most recent JSON encode/decode.
 *
 * Strings to be translated will be in format like
 * "Encoding error: Maximum stack depth exceeded".
 *
 * @since 4.4.0
 *
 * @return false|string Boolean false or string error message.
 */',
        'startLine' => 74119,
        'endLine' => 74121,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_index' => 
      array (
        'name' => 'get_index',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74132,
            'endLine' => 74132,
            'startColumn' => 35,
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
 * Retrieves the site index.
 *
 * This endpoint describes the capabilities of the site.
 *
 * @since 4.4.0
 *
 * @param WP_REST_Request $request Request data.
 * @return WP_REST_Response The API root index data.
 */',
        'startLine' => 74132,
        'endLine' => 74134,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'add_active_theme_link_to_index' => 
      array (
        'name' => 'add_active_theme_link_to_index',
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
                'name' => 'WP_REST_Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74142,
            'endLine' => 74142,
            'startColumn' => 59,
            'endColumn' => 85,
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
 * Adds a link to the active theme for users who have proper permissions.
 *
 * @since 5.7.0
 *
 * @param WP_REST_Response $response REST API response.
 */',
        'startLine' => 74142,
        'endLine' => 74144,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'add_site_logo_to_index' => 
      array (
        'name' => 'add_site_logo_to_index',
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
                'name' => 'WP_REST_Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74155,
            'endLine' => 74155,
            'startColumn' => 51,
            'endColumn' => 77,
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
 * Exposes the site logo through the WordPress REST API.
 *
 * This is used for fetching this information when user has no rights
 * to update settings.
 *
 * @since 5.8.0
 *
 * @param WP_REST_Response $response REST API response.
 */',
        'startLine' => 74155,
        'endLine' => 74157,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'add_site_icon_to_index' => 
      array (
        'name' => 'add_site_icon_to_index',
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
                'name' => 'WP_REST_Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74168,
            'endLine' => 74168,
            'startColumn' => 51,
            'endColumn' => 77,
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
 * Exposes the site icon through the WordPress REST API.
 *
 * This is used for fetching this information when user has no rights
 * to update settings.
 *
 * @since 5.9.0
 *
 * @param WP_REST_Response $response REST API response.
 */',
        'startLine' => 74168,
        'endLine' => 74170,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'add_image_to_index' => 
      array (
        'name' => 'add_image_to_index',
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
                'name' => 'WP_REST_Response',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74182,
            'endLine' => 74182,
            'startColumn' => 47,
            'endColumn' => 73,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'image_id' => 
          array (
            'name' => 'image_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74182,
            'endLine' => 74182,
            'startColumn' => 76,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74182,
            'endLine' => 74182,
            'startColumn' => 87,
            'endColumn' => 91,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Exposes an image through the WordPress REST API.
 * This is used for fetching this information when user has no rights
 * to update settings.
 *
 * @since 5.9.0
 *
 * @param WP_REST_Response $response REST API response.
 * @param int              $image_id Image attachment ID.
 * @param string           $type     Type of Image.
 */',
        'startLine' => 74182,
        'endLine' => 74184,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_namespace_index' => 
      array (
        'name' => 'get_namespace_index',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74194,
            'endLine' => 74194,
            'startColumn' => 45,
            'endColumn' => 52,
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
 * Retrieves the index for a namespace.
 *
 * @since 4.4.0
 *
 * @param WP_REST_Request $request REST request instance.
 * @return WP_REST_Response|WP_Error WP_REST_Response instance if the index was found,
 *                                   WP_Error if the namespace isn\'t set.
 */',
        'startLine' => 74194,
        'endLine' => 74196,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_data_for_routes' => 
      array (
        'name' => 'get_data_for_routes',
        'parameters' => 
        array (
          'routes' => 
          array (
            'name' => 'routes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74207,
            'endLine' => 74207,
            'startColumn' => 45,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'context' => 
          array (
            'name' => 'context',
            'default' => 
            array (
              'code' => '\'view\'',
              'attributes' => 
              array (
                'startLine' => 74207,
                'endLine' => 74207,
                'startTokenPos' => 114401,
                'startFilePos' => 2505716,
                'endTokenPos' => 114401,
                'endFilePos' => 2505721,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74207,
            'endLine' => 74207,
            'startColumn' => 54,
            'endColumn' => 70,
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
 * Retrieves the publicly-visible data for routes.
 *
 * @since 4.4.0
 *
 * @param array  $routes  Routes to get data for.
 * @param string $context Optional. Context for data. Accepts \'view\' or \'help\'. Default \'view\'.
 * @return array[] Route data to expose in indexes, keyed by route.
 * @phpstan-param \'view\'|\'help\' $context
 */',
        'startLine' => 74207,
        'endLine' => 74209,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_data_for_route' => 
      array (
        'name' => 'get_data_for_route',
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
            'startLine' => 74221,
            'endLine' => 74221,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callbacks' => 
          array (
            'name' => 'callbacks',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74221,
            'endLine' => 74221,
            'startColumn' => 52,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'context' => 
          array (
            'name' => 'context',
            'default' => 
            array (
              'code' => '\'view\'',
              'attributes' => 
              array (
                'startLine' => 74221,
                'endLine' => 74221,
                'startTokenPos' => 114426,
                'startFilePos' => 2506317,
                'endTokenPos' => 114426,
                'endFilePos' => 2506322,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74221,
            'endLine' => 74221,
            'startColumn' => 64,
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
 * Retrieves publicly-visible data for the route.
 *
 * @since 4.4.0
 *
 * @param string $route     Route to get data for.
 * @param array  $callbacks Callbacks to convert to data.
 * @param string $context   Optional. Context for the data. Accepts \'view\' or \'help\'. Default \'view\'.
 * @return array|null Data for the route, or null if no publicly-visible data.
 * @phpstan-param \'view\'|\'help\' $context
 */',
        'startLine' => 74221,
        'endLine' => 74223,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_max_batch_size' => 
      array (
        'name' => 'get_max_batch_size',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the maximum number of requests that can be included in a batch.
 *
 * @since 5.6.0
 *
 * @return int The maximum requests.
 */',
        'startLine' => 74231,
        'endLine' => 74233,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'serve_batch_request_v1' => 
      array (
        'name' => 'serve_batch_request_v1',
        'parameters' => 
        array (
          'batch_request' => 
          array (
            'name' => 'batch_request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WP_REST_Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74242,
            'endLine' => 74242,
            'startColumn' => 48,
            'endColumn' => 78,
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
 * Serves the batch/v1 request.
 *
 * @since 5.6.0
 *
 * @param WP_REST_Request $batch_request The batch request object.
 * @return WP_REST_Response The generated response object.
 */',
        'startLine' => 74242,
        'endLine' => 74244,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
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
            'startLine' => 74252,
            'endLine' => 74252,
            'startColumn' => 39,
            'endColumn' => 43,
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
 * Sends an HTTP status code.
 *
 * @since 4.4.0
 *
 * @param int $code HTTP status.
 */',
        'startLine' => 74252,
        'endLine' => 74254,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'send_header' => 
      array (
        'name' => 'send_header',
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
            'startLine' => 74263,
            'endLine' => 74263,
            'startColumn' => 37,
            'endColumn' => 40,
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
            'startLine' => 74263,
            'endLine' => 74263,
            'startColumn' => 43,
            'endColumn' => 48,
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
 * Sends an HTTP header.
 *
 * @since 4.4.0
 *
 * @param string $key Header key.
 * @param string $value Header value.
 */',
        'startLine' => 74263,
        'endLine' => 74265,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'send_headers' => 
      array (
        'name' => 'send_headers',
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
            'startLine' => 74273,
            'endLine' => 74273,
            'startColumn' => 38,
            'endColumn' => 45,
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
 * Sends multiple HTTP headers.
 *
 * @since 4.4.0
 *
 * @param array $headers Map of header name to header value.
 */',
        'startLine' => 74273,
        'endLine' => 74275,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
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
            'startLine' => 74283,
            'endLine' => 74283,
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
 * Removes an HTTP header from the current response.
 *
 * @since 4.8.0
 *
 * @param string $key Header key.
 */',
        'startLine' => 74283,
        'endLine' => 74285,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_raw_data' => 
      array (
        'name' => 'get_raw_data',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the raw request entity (body).
 *
 * @since 4.4.0
 *
 * @global string $HTTP_RAW_POST_DATA Raw post data.
 *
 * @return string Raw request data.
 */',
        'startLine' => 74295,
        'endLine' => 74297,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
        'aliasName' => NULL,
      ),
      'get_headers' => 
      array (
        'name' => 'get_headers',
        'parameters' => 
        array (
          'server' => 
          array (
            'name' => 'server',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74306,
            'endLine' => 74306,
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
        ),
        'docComment' => '/**
 * Extracts headers from a PHP-style $_SERVER array.
 *
 * @since 4.4.0
 *
 * @param array $server Associative array similar to `$_SERVER`.
 * @return array Headers extracted from the input.
 */',
        'startLine' => 74306,
        'endLine' => 74308,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Server',
        'implementingClassName' => 'WP_REST_Server',
        'currentClassName' => 'WP_REST_Server',
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