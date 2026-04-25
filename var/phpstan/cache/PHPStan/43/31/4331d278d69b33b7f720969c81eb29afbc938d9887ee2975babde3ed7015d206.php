<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-check_ajax_referer
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'check_ajax_referer',
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
            'startLine' => 133878,
            'endLine' => 133878,
            'startTokenPos' => 184381,
            'startFilePos' => 4632003,
            'endTokenPos' => 184382,
            'endFilePos' => 4632004,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133878,
        'endLine' => 133878,
        'startColumn' => 33,
        'endColumn' => 44,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'query_arg' => 
      array (
        'name' => 'query_arg',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 133878,
            'endLine' => 133878,
            'startTokenPos' => 184389,
            'startFilePos' => 4632020,
            'endTokenPos' => 184389,
            'endFilePos' => 4632025,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133878,
        'endLine' => 133878,
        'startColumn' => 47,
        'endColumn' => 65,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'stop' => 
      array (
        'name' => 'stop',
        'default' => 
        array (
          'code' => '\\true',
          'attributes' => 
          array (
            'startLine' => 133878,
            'endLine' => 133878,
            'startTokenPos' => 184396,
            'startFilePos' => 4632036,
            'endTokenPos' => 184396,
            'endFilePos' => 4632040,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133878,
        'endLine' => 133878,
        'startColumn' => 68,
        'endColumn' => 80,
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
 * Verifies the Ajax request to prevent processing requests external of the blog.
 *
 * @since 2.0.3
 *
 * @param int|string   $action    Action nonce.
 * @param false|string $query_arg Optional. Key to check for the nonce in `$_REQUEST` (since 2.5). If false,
 *                                `$_REQUEST` values will be evaluated for \'_ajax_nonce\', and \'_wpnonce\'
 *                                (in that order). Default false.
 * @param bool         $stop      Optional. Whether to stop early when the nonce cannot be verified.
 *                                Default true.
 * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago,
 *                   2 if the nonce is valid and generated between 12-24 hours ago.
 *                   False if the nonce is invalid.
 * @phpstan-param string $action
 * @phpstan-return 1|2|false
 */',
    'startLine' => 133878,
    'endLine' => 133880,
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
        'name' => 'check_ajax_referer',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));