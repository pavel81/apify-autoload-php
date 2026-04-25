<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-home_url
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'home_url',
    'parameters' => 
    array (
      'path' => 
      array (
        'name' => 'path',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 125718,
            'endLine' => 125718,
            'startTokenPos' => 175961,
            'startFilePos' => 4320049,
            'endTokenPos' => 175961,
            'endFilePos' => 4320050,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 125718,
        'endLine' => 125718,
        'startColumn' => 23,
        'endColumn' => 32,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'scheme' => 
      array (
        'name' => 'scheme',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 125718,
            'endLine' => 125718,
            'startTokenPos' => 175968,
            'startFilePos' => 4320063,
            'endTokenPos' => 175968,
            'endFilePos' => 4320067,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 125718,
        'endLine' => 125718,
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
 * Retrieves the URL for the current site where the front end is accessible.
 *
 * Returns the \'home\' option with the appropriate protocol. The protocol will be \'https\'
 * if is_ssl() evaluates to true; otherwise, it will be the same as the \'home\' option.
 * If `$scheme` is \'http\' or \'https\', is_ssl() is overridden.
 *
 * @since 3.0.0
 *
 * @param string      $path   Optional. Path relative to the home URL. Default empty.
 * @param string|null $scheme Optional. Scheme to give the home URL context. Accepts
 *                            \'http\', \'https\', \'relative\', \'rest\', or null. Default null.
 * @return string Home URL link with optional path appended.
 */',
    'startLine' => 125718,
    'endLine' => 125720,
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
        'name' => 'home_url',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));