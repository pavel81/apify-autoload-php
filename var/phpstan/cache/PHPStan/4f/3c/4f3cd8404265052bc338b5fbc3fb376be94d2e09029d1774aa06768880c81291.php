<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-esc_url_raw
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'esc_url_raw',
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
        'startLine' => 115181,
        'endLine' => 115181,
        'startColumn' => 26,
        'endColumn' => 29,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'protocols' => 
      array (
        'name' => 'protocols',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 115181,
            'endLine' => 115181,
            'startTokenPos' => 164505,
            'startFilePos' => 3918687,
            'endTokenPos' => 164505,
            'endFilePos' => 3918691,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 115181,
        'endLine' => 115181,
        'startColumn' => 32,
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
 * Sanitizes a URL for database or redirect usage.
 *
 * This function is an alias for sanitize_url().
 *
 * @since 2.8.0
 * @since 6.1.0 Turned into an alias for sanitize_url().
 * @since 6.9.0 Prepends `https://` to the URL if it does not already contain a scheme
 *              and the first item in `$protocols` is \'https\'.
 *
 * @see sanitize_url()
 *
 * @param string   $url       The URL to be cleaned.
 * @param string[] $protocols Optional. An array of acceptable protocols.
 *                            Defaults to return value of wp_allowed_protocols().
 * @return string The cleaned URL after sanitize_url() is run.
 */',
    'startLine' => 115181,
    'endLine' => 115183,
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
        'name' => 'esc_url_raw',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));