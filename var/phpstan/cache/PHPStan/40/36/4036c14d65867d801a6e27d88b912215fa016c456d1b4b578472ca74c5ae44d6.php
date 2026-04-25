<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_create_nonce
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_create_nonce',
    'parameters' => 
    array (
      'action' => 
      array (
        'name' => 'action',
        'default' => 
        array (
          'code' => '-1',
          'attributes' => 
          array (
            'startLine' => 134095,
            'endLine' => 134095,
            'startTokenPos' => 184625,
            'startFilePos' => 4640068,
            'endTokenPos' => 184626,
            'endFilePos' => 4640069,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 134095,
        'endLine' => 134095,
        'startColumn' => 30,
        'endColumn' => 41,
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
 * Creates a cryptographic token tied to a specific action, user, user session,
 * and window of time.
 *
 * @since 2.0.3
 * @since 4.0.0 Session tokens were integrated with nonce creation.
 *
 * @param string|int $action Scalar value to add context to the nonce.
 * @return string The token.
 * @phpstan-param -1|string $action
 * @phpstan-return lowercase-string&non-falsy-string
 */',
    'startLine' => 134095,
    'endLine' => 134097,
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
        'name' => 'wp_create_nonce',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));