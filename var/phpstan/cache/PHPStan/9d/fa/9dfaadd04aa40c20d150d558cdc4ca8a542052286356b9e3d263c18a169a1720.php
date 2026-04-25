<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_next_scheduled
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_next_scheduled',
    'parameters' => 
    array (
      'hook' => 
      array (
        'name' => 'hook',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108648,
        'endLine' => 108648,
        'startColumn' => 32,
        'endColumn' => 36,
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
            'startLine' => 108648,
            'endLine' => 108648,
            'startTokenPos' => 157135,
            'startFilePos' => 3684384,
            'endTokenPos' => 157137,
            'endFilePos' => 3684390,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108648,
        'endLine' => 108648,
        'startColumn' => 39,
        'endColumn' => 53,
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
 * Retrieves the timestamp of the next scheduled event for the given hook.
 *
 * @since 2.1.0
 *
 * @param string $hook Action hook of the event.
 * @param array  $args Optional. Array containing each separate argument to pass to the hook\'s callback function.
 *                     Although not passed to a callback, these arguments are used to uniquely identify the
 *                     event, so they should be the same as those used when originally scheduling the event.
 *                     Default empty array.
 * @return int|false The Unix timestamp (UTC) of the next time the event will occur. False if the event doesn\'t exist.
 * @phpstan-param list<mixed> $args
 */',
    'startLine' => 108648,
    'endLine' => 108650,
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
        'name' => 'wp_next_scheduled',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));