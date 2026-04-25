<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_remote_post
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_remote_post',
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
        'startLine' => 122058,
        'endLine' => 122058,
        'startColumn' => 29,
        'endColumn' => 32,
        'parameterIndex' => 0,
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
            'startLine' => 122058,
            'endLine' => 122058,
            'startTokenPos' => 171608,
            'startFilePos' => 4177017,
            'endTokenPos' => 171610,
            'endFilePos' => 4177023,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 122058,
        'endLine' => 122058,
        'startColumn' => 35,
        'endColumn' => 49,
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
 * Performs an HTTP request using the POST method and returns its response.
 *
 * Important: If the URL is user-controlled, use `wp_safe_remote_post()` instead.
 *
 * @since 2.7.0
 *
 * @see wp_remote_request() For more information on the response array format.
 * @see WP_Http::request() For default arguments information.
 *
 * @param string $url  URL to retrieve.
 * @param array  $args Optional. Request arguments. Default empty array.
 *                     See WP_Http::request() for information on accepted arguments.
 * @return array|WP_Error The response or WP_Error on failure.
 *                        See WP_Http::request() for information on return value.
 * @phpstan-param array{
 *   method?: string,
 *   timeout?: float,
 *   redirection?: int,
 *   httpversion?: string,
 *   user-agent?: string,
 *   reject_unsafe_urls?: bool,
 *   blocking?: bool,
 *   headers?: string|array,
 *   cookies?: array,
 *   body?: string|array,
 *   compress?: bool,
 *   decompress?: bool,
 *   sslverify?: bool,
 *   sslcertificates?: string,
 *   stream?: bool,
 *   filename?: string,
 *   limit_response_size?: int,
 * } $args See WP_Http::request()
 * @phpstan-return array{headers: \\WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary, body: string, response: array{code: int, message: string}, cookies: array<int, \\WP_Http_Cookie>, filename: string|null, http_response: \\WP_HTTP_Requests_Response}|\\WP_Error
 */',
    'startLine' => 122058,
    'endLine' => 122060,
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
        'name' => 'wp_remote_post',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));