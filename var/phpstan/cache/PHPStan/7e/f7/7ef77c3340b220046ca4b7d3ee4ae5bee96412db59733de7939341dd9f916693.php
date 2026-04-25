<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_upload_bits
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_upload_bits',
    'parameters' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116944,
        'endLine' => 116944,
        'startColumn' => 29,
        'endColumn' => 33,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'deprecated' => 
      array (
        'name' => 'deprecated',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116944,
        'endLine' => 116944,
        'startColumn' => 36,
        'endColumn' => 46,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'bits' => 
      array (
        'name' => 'bits',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116944,
        'endLine' => 116944,
        'startColumn' => 49,
        'endColumn' => 53,
        'parameterIndex' => 2,
        'isOptional' => false,
      ),
      'time' => 
      array (
        'name' => 'time',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 116944,
            'endLine' => 116944,
            'startTokenPos' => 166309,
            'startFilePos' => 3977943,
            'endTokenPos' => 166309,
            'endFilePos' => 3977947,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116944,
        'endLine' => 116944,
        'startColumn' => 56,
        'endColumn' => 68,
        'parameterIndex' => 3,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Creates a file in the upload folder with given content.
 *
 * If there is an error, then the key \'error\' will exist with the error message.
 * If success, then the key \'file\' will have the unique file path, the \'url\' key
 * will have the link to the new file. and the \'error\' key will be set to false.
 *
 * This function will not move an uploaded file to the upload folder. It will
 * create a new file with the content in $bits parameter. If you move the upload
 * file, read the content of the uploaded file, and then you can give the
 * filename and content to this function, which will add it to the upload
 * folder.
 *
 * The permissions will be set on the new file automatically by this function.
 *
 * @since 2.0.0
 *
 * @param string      $name       Filename.
 * @param null|string $deprecated Never used. Set to null.
 * @param string      $bits       File content
 * @param string|null $time       Optional. Time formatted in \'yyyy/mm\'. Default null.
 * @return array {
 *     Information about the newly-uploaded file.
 *
 *     @type string       $file  Filename of the newly-uploaded file.
 *     @type string       $url   URL of the uploaded file.
 *     @type string       $type  File type.
 *     @type string|false $error Error message, if there has been an error.
 * }
 * @phpstan-return array{
 *   file: string,
 *   url: string,
 *   type: string,
 *   error: string|false,
 * }
 */',
    'startLine' => 116944,
    'endLine' => 116946,
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
        'name' => 'wp_upload_bits',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));