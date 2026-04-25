<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-esc_url
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'esc_url',
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
        'startLine' => 115161,
        'endLine' => 115161,
        'startColumn' => 22,
        'endColumn' => 25,
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
            'startLine' => 115161,
            'endLine' => 115161,
            'startTokenPos' => 164478,
            'startFilePos' => 3917895,
            'endTokenPos' => 164478,
            'endFilePos' => 3917899,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 115161,
        'endLine' => 115161,
        'startColumn' => 28,
        'endColumn' => 45,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      '_context' => 
      array (
        'name' => '_context',
        'default' => 
        array (
          'code' => '\'display\'',
          'attributes' => 
          array (
            'startLine' => 115161,
            'endLine' => 115161,
            'startTokenPos' => 164485,
            'startFilePos' => 3917914,
            'endTokenPos' => 164485,
            'endFilePos' => 3917922,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 115161,
        'endLine' => 115161,
        'startColumn' => 48,
        'endColumn' => 68,
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
 * Checks and cleans a URL.
 *
 * A number of characters are removed from the URL. If the URL is for displaying
 * (the default behavior) ampersands are also replaced. The {@see \'clean_url\'} filter
 * is applied to the returned cleaned URL.
 *
 * @since 2.8.0
 * @since 6.9.0 Prepends `https://` to the URL if it does not already contain a scheme
 *              and the first item in `$protocols` is \'https\'.
 *
 * @param string   $url       The URL to be cleaned.
 * @param string[] $protocols Optional. An array of acceptable protocols.
 *                            Defaults to return value of wp_allowed_protocols().
 * @param string   $_context  Private. Use sanitize_url() for database usage.
 * @return string The cleaned URL after the {@see \'clean_url\'} filter is applied.
 *                An empty string is returned if `$url` specifies a protocol other than
 *                those in `$protocols`, or if `$url` contains an empty string.
 */',
    'startLine' => 115161,
    'endLine' => 115163,
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
        'name' => 'esc_url',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));