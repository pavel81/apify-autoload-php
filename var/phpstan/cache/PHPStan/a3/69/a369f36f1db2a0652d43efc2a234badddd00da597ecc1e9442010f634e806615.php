<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-WP_REST_Response
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'WP_REST_Response',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'WP_REST_Response',
    'shortName' => 'WP_REST_Response',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Core class used to implement a REST response object.
 *
 * @since 4.4.0
 *
 * @see WP_HTTP_Response
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 73568,
    'endLine' => 73735,
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
      'links' => 
      array (
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'name' => 'links',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 73576,
            'endLine' => 73576,
            'startTokenPos' => 113545,
            'startFilePos' => 2484586,
            'endTokenPos' => 113547,
            'endFilePos' => 2484592,
          ),
        ),
        'docComment' => '/**
 * Links related to the response.
 *
 * @since 4.4.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73576,
        'endLine' => 73576,
        'startColumn' => 9,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'matched_route' => 
      array (
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'name' => 'matched_route',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 73583,
            'endLine' => 73583,
            'startTokenPos' => 113558,
            'startFilePos' => 2484766,
            'endTokenPos' => 113558,
            'endFilePos' => 2484767,
          ),
        ),
        'docComment' => '/**
 * The route that was to create the response.
 *
 * @since 4.4.0
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73583,
        'endLine' => 73583,
        'startColumn' => 9,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'matched_handler' => 
      array (
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'name' => 'matched_handler',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 73590,
            'endLine' => 73590,
            'startTokenPos' => 113569,
            'startFilePos' => 2484954,
            'endTokenPos' => 113569,
            'endFilePos' => 2484958,
          ),
        ),
        'docComment' => '/**
 * The handler that was used to create the response.
 *
 * @since 4.4.0
 * @var null|array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73590,
        'endLine' => 73590,
        'startColumn' => 9,
        'endColumn' => 43,
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
      'add_link' => 
      array (
        'name' => 'add_link',
        'parameters' => 
        array (
          'rel' => 
          array (
            'name' => 'rel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73606,
            'endLine' => 73606,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'href' => 
          array (
            'name' => 'href',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73606,
            'endLine' => 73606,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => 'array()',
              'attributes' => 
              array (
                'startLine' => 73606,
                'endLine' => 73606,
                'startTokenPos' => 113590,
                'startFilePos' => 2485700,
                'endTokenPos' => 113592,
                'endFilePos' => 2485706,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73606,
            'endLine' => 73606,
            'startColumn' => 47,
            'endColumn' => 67,
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
 * Adds a link to the response.
 *
 * {@internal The $rel parameter is first, as this looks nicer when sending multiple.}
 *
 * @since 4.4.0
 *
 * @link https://tools.ietf.org/html/rfc5988
 * @link https://www.iana.org/assignments/link-relations/link-relations.xml
 *
 * @param string $rel        Link relation. Either an IANA registered type,
 *                           or an absolute URL.
 * @param string $href       Target URI for the link.
 * @param array  $attributes Optional. Link parameters to send along with the URL. Default empty array.
 */',
        'startLine' => 73606,
        'endLine' => 73608,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'remove_link' => 
      array (
        'name' => 'remove_link',
        'parameters' => 
        array (
          'rel' => 
          array (
            'name' => 'rel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73619,
            'endLine' => 73619,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'href' => 
          array (
            'name' => 'href',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 73619,
                'endLine' => 73619,
                'startTokenPos' => 113614,
                'startFilePos' => 2486185,
                'endTokenPos' => 113614,
                'endFilePos' => 2486189,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73619,
            'endLine' => 73619,
            'startColumn' => 43,
            'endColumn' => 55,
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
 * Removes a link from the response.
 *
 * @since 4.4.0
 *
 * @param string      $rel  Link relation. Either an IANA registered type, or an absolute URL.
 * @param string|null $href Optional. Only remove links for the relation matching the given href.
 *                          Default null.
 * @phpstan-return void
 */',
        'startLine' => 73619,
        'endLine' => 73621,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'add_links' => 
      array (
        'name' => 'add_links',
        'parameters' => 
        array (
          'links' => 
          array (
            'name' => 'links',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73634,
            'endLine' => 73634,
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
 * Adds multiple links to the response.
 *
 * Link data should be an associative array with link relation as the key.
 * The value can either be an associative array of link attributes
 * (including `href` with the URL for the response), or a list of these
 * associative arrays.
 *
 * @since 4.4.0
 *
 * @param array $links Map of link relation to list of links.
 */',
        'startLine' => 73634,
        'endLine' => 73636,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'get_links' => 
      array (
        'name' => 'get_links',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves links for the response.
 *
 * @since 4.4.0
 *
 * @return array List of links.
 */',
        'startLine' => 73644,
        'endLine' => 73646,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'link_header' => 
      array (
        'name' => 'link_header',
        'parameters' => 
        array (
          'rel' => 
          array (
            'name' => 'rel',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73662,
            'endLine' => 73662,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 73662,
            'endLine' => 73662,
            'startColumn' => 43,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'other' => 
          array (
            'name' => 'other',
            'default' => 
            array (
              'code' => 'array()',
              'attributes' => 
              array (
                'startLine' => 73662,
                'endLine' => 73662,
                'startTokenPos' => 113668,
                'startFilePos' => 2487675,
                'endTokenPos' => 113670,
                'endFilePos' => 2487681,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73662,
            'endLine' => 73662,
            'startColumn' => 50,
            'endColumn' => 65,
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
 * Sets a single link header.
 *
 * {@internal The $rel parameter is first, as this looks nicer when sending multiple.}
 *
 * @since 4.4.0
 *
 * @link https://tools.ietf.org/html/rfc5988
 * @link https://www.iana.org/assignments/link-relations/link-relations.xml
 *
 * @param string $rel   Link relation. Either an IANA registered type, or an absolute URL.
 * @param string $link  Target IRI for the link.
 * @param array  $other Optional. Other parameters to send, as an associative array.
 *                      Default empty array.
 */',
        'startLine' => 73662,
        'endLine' => 73664,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'get_matched_route' => 
      array (
        'name' => 'get_matched_route',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the route that was used.
 *
 * @since 4.4.0
 *
 * @return string The matched route.
 */',
        'startLine' => 73672,
        'endLine' => 73674,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'set_matched_route' => 
      array (
        'name' => 'set_matched_route',
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
            'startLine' => 73682,
            'endLine' => 73682,
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
 * Sets the route (regex for path) that caused the response.
 *
 * @since 4.4.0
 *
 * @param string $route Route name.
 */',
        'startLine' => 73682,
        'endLine' => 73684,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'get_matched_handler' => 
      array (
        'name' => 'get_matched_handler',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the handler that was used to generate the response.
 *
 * @since 4.4.0
 *
 * @return null|array The handler that was used to create the response.
 */',
        'startLine' => 73692,
        'endLine' => 73694,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'set_matched_handler' => 
      array (
        'name' => 'set_matched_handler',
        'parameters' => 
        array (
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
            'startLine' => 73702,
            'endLine' => 73702,
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
 * Sets the handler that was responsible for generating the response.
 *
 * @since 4.4.0
 *
 * @param array $handler The matched handler.
 */',
        'startLine' => 73702,
        'endLine' => 73704,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'is_error' => 
      array (
        'name' => 'is_error',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the response is an error, i.e. >= 400 response code.
 *
 * @since 4.4.0
 *
 * @return bool Whether the response is an error.
 */',
        'startLine' => 73712,
        'endLine' => 73714,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'as_error' => 
      array (
        'name' => 'as_error',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves a WP_Error object from the response.
 *
 * @since 4.4.0
 *
 * @return WP_Error|null WP_Error or null on not an errored response.
 */',
        'startLine' => 73722,
        'endLine' => 73724,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
        'aliasName' => NULL,
      ),
      'get_curies' => 
      array (
        'name' => 'get_curies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the CURIEs (compact URIs) used for relations.
 *
 * @since 4.5.0
 *
 * @return array Compact URIs.
 */',
        'startLine' => 73732,
        'endLine' => 73734,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_REST_Response',
        'implementingClassName' => 'WP_REST_Response',
        'currentClassName' => 'WP_REST_Response',
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