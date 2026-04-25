<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-current_time
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'current_time',
    'parameters' => 
    array (
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
        'startLine' => 115867,
        'endLine' => 115867,
        'startColumn' => 27,
        'endColumn' => 31,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'gmt' => 
      array (
        'name' => 'gmt',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 115867,
            'endLine' => 115867,
            'startTokenPos' => 165247,
            'startFilePos' => 3940279,
            'endTokenPos' => 165247,
            'endFilePos' => 3940284,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 115867,
        'endLine' => 115867,
        'startColumn' => 34,
        'endColumn' => 46,
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
 * Retrieves the current time based on specified type.
 *
 *  - The \'mysql\' type will return the time in the format for MySQL DATETIME field.
 *  - The \'timestamp\' or \'U\' types will return the current timestamp or a sum of timestamp
 *    and timezone offset, depending on `$gmt`.
 *  - Other strings will be interpreted as PHP date formats (e.g. \'Y-m-d\').
 *
 * If `$gmt` is a truthy value then both types will use GMT time, otherwise the
 * output is adjusted with the GMT offset for the site.
 *
 * @since 1.0.0
 * @since 5.3.0 Now returns an integer if `$type` is \'U\'. Previously a string was returned.
 *
 * @param string $type Type of time to retrieve. Accepts \'mysql\', \'timestamp\', \'U\',
 *                     or PHP date format string (e.g. \'Y-m-d\').
 * @param bool   $gmt  Optional. Whether to use GMT timezone. Default false.
 * @return int|string Integer if `$type` is \'timestamp\' or \'U\', string otherwise.
 * @phpstan-return ($type is \'timestamp\'|\'U\' ? int : string)
 */',
    'startLine' => 115867,
    'endLine' => 115869,
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
        'name' => 'current_time',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));