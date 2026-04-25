<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_insert_attachment
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_insert_attachment',
    'parameters' => 
    array (
      'args' => 
      array (
        'name' => 'args',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 138556,
        'endLine' => 138556,
        'startColumn' => 35,
        'endColumn' => 39,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'file' => 
      array (
        'name' => 'file',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 138556,
            'endLine' => 138556,
            'startTokenPos' => 188419,
            'startFilePos' => 4840970,
            'endTokenPos' => 188419,
            'endFilePos' => 4840975,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 138556,
        'endLine' => 138556,
        'startColumn' => 42,
        'endColumn' => 55,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'parent_post_id' => 
      array (
        'name' => 'parent_post_id',
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 138556,
            'endLine' => 138556,
            'startTokenPos' => 188426,
            'startFilePos' => 4840996,
            'endTokenPos' => 188426,
            'endFilePos' => 4840996,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 138556,
        'endLine' => 138556,
        'startColumn' => 58,
        'endColumn' => 76,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'wp_error' => 
      array (
        'name' => 'wp_error',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 138556,
            'endLine' => 138556,
            'startTokenPos' => 188433,
            'startFilePos' => 4841011,
            'endTokenPos' => 188433,
            'endFilePos' => 4841016,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 138556,
        'endLine' => 138556,
        'startColumn' => 79,
        'endColumn' => 96,
        'parameterIndex' => 3,
        'isOptional' => true,
      ),
      'fire_after_hooks' => 
      array (
        'name' => 'fire_after_hooks',
        'default' => 
        array (
          'code' => '\\true',
          'attributes' => 
          array (
            'startLine' => 138556,
            'endLine' => 138556,
            'startTokenPos' => 188440,
            'startFilePos' => 4841039,
            'endTokenPos' => 188440,
            'endFilePos' => 4841043,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 138556,
        'endLine' => 138556,
        'startColumn' => 99,
        'endColumn' => 123,
        'parameterIndex' => 4,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Inserts an attachment.
 *
 * If you set the \'ID\' in the $args parameter, it will mean that you are
 * updating and attempt to update the attachment. You can also set the
 * attachment name or title by setting the key \'post_name\' or \'post_title\'.
 *
 * You can set the dates for the attachment manually by setting the \'post_date\'
 * and \'post_date_gmt\' keys\' values.
 *
 * By default, the comments will use the default settings for whether the
 * comments are allowed. You can close them manually or keep them open by
 * setting the value for the \'comment_status\' key.
 *
 * @since 2.0.0
 * @since 4.7.0 Added the `$wp_error` parameter to allow a WP_Error to be returned on failure.
 * @since 5.6.0 Added the `$fire_after_hooks` parameter.
 *
 * @see wp_insert_post()
 *
 * @param string|array $args             Arguments for inserting an attachment.
 * @param string|false $file             Optional. Filename. Default false.
 * @param int          $parent_post_id   Optional. Parent post ID or 0 for no parent. Default 0.
 * @param bool         $wp_error         Optional. Whether to return a WP_Error on failure. Default false.
 * @param bool         $fire_after_hooks Optional. Whether to fire the after insert hooks. Default true.
 * @return int|WP_Error The attachment ID on success. The value 0 or WP_Error on failure.
 * @phpstan-return ($wp_error is false ? int<0, max> : int<1, max>|\\WP_Error)
 */',
    'startLine' => 138556,
    'endLine' => 138558,
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
        'name' => 'wp_insert_attachment',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));