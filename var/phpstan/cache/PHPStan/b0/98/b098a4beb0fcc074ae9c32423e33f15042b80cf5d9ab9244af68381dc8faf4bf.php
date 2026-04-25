<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-sanitize_title
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'sanitize_title',
    'parameters' => 
    array (
      'title' => 
      array (
        'name' => 'title',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 114362,
        'endLine' => 114362,
        'startColumn' => 29,
        'endColumn' => 34,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'fallback_title' => 
      array (
        'name' => 'fallback_title',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 114362,
            'endLine' => 114362,
            'startTokenPos' => 163649,
            'startFilePos' => 3890750,
            'endTokenPos' => 163649,
            'endFilePos' => 3890751,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 114362,
        'endLine' => 114362,
        'startColumn' => 37,
        'endColumn' => 56,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'context' => 
      array (
        'name' => 'context',
        'default' => 
        array (
          'code' => '\'save\'',
          'attributes' => 
          array (
            'startLine' => 114362,
            'endLine' => 114362,
            'startTokenPos' => 163656,
            'startFilePos' => 3890765,
            'endTokenPos' => 163656,
            'endFilePos' => 3890770,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 114362,
        'endLine' => 114362,
        'startColumn' => 59,
        'endColumn' => 75,
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
 * Sanitizes a string into a slug, which can be used in URLs or HTML attributes.
 *
 * By default, converts accent characters to ASCII characters and further
 * limits the output to alphanumeric characters, underscore (_) and dash (-)
 * through the {@see \'sanitize_title\'} filter.
 *
 * If `$title` is empty and `$fallback_title` is set, the latter will be used.
 *
 * @since 1.0.0
 *
 * @param string $title          The string to be sanitized.
 * @param string $fallback_title Optional. A title to use if $title is empty. Default empty.
 * @param string $context        Optional. The operation for which the string is sanitized.
 *                               When set to \'save\', the string runs through remove_accents().
 *                               Default \'save\'.
 * @return string The sanitized string.
 */',
    'startLine' => 114362,
    'endLine' => 114364,
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
        'name' => 'sanitize_title',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));