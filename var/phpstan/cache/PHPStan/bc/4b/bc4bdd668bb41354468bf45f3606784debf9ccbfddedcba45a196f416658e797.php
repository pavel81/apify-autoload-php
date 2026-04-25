<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_check_filetype
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_check_filetype',
    'parameters' => 
    array (
      'filename' => 
      array (
        'name' => 'filename',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116991,
        'endLine' => 116991,
        'startColumn' => 32,
        'endColumn' => 40,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'mimes' => 
      array (
        'name' => 'mimes',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 116991,
            'endLine' => 116991,
            'startTokenPos' => 166355,
            'startFilePos' => 3979557,
            'endTokenPos' => 166355,
            'endFilePos' => 3979561,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116991,
        'endLine' => 116991,
        'startColumn' => 43,
        'endColumn' => 56,
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
 * Retrieves the file type from the file name.
 *
 * You can optionally define the mime array, if needed.
 *
 * @since 2.0.4
 *
 * @param string        $filename File name or path.
 * @param string[]|null $mimes    Optional. Array of allowed mime types keyed by their file extension regex.
 *                                Defaults to the result of get_allowed_mime_types().
 * @return array {
 *     Values for the extension and mime type.
 *
 *     @type string|false $ext  File extension, or false if the file doesn\'t match a mime type.
 *     @type string|false $type File mime type, or false if the file doesn\'t match a mime type.
 * }
 * @phpstan-return array{
 *   ext: string|false,
 *   type: string|false,
 * }
 */',
    'startLine' => 116991,
    'endLine' => 116993,
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
        'name' => 'wp_check_filetype',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));