<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-check_admin_referer
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'check_admin_referer',
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
            'startLine' => 133858,
            'endLine' => 133858,
            'startTokenPos' => 184356,
            'startFilePos' => 4630982,
            'endTokenPos' => 184357,
            'endFilePos' => 4630983,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133858,
        'endLine' => 133858,
        'startColumn' => 34,
        'endColumn' => 45,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'query_arg' => 
      array (
        'name' => 'query_arg',
        'default' => 
        array (
          'code' => '\'_wpnonce\'',
          'attributes' => 
          array (
            'startLine' => 133858,
            'endLine' => 133858,
            'startTokenPos' => 184364,
            'startFilePos' => 4630999,
            'endTokenPos' => 184364,
            'endFilePos' => 4631008,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 133858,
        'endLine' => 133858,
        'startColumn' => 48,
        'endColumn' => 70,
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
 * Ensures intent by verifying that a user was referred from another admin page with the correct security nonce.
 *
 * This function ensures the user intends to perform a given action, which helps protect against clickjacking style
 * attacks. It verifies intent, not authorization, therefore it does not verify the user\'s capabilities. This should
 * be performed with `current_user_can()` or similar.
 *
 * If the nonce value is invalid, the function will exit with an "Are You Sure?" style message.
 *
 * @since 1.2.0
 * @since 2.5.0 The `$query_arg` parameter was added.
 *
 * @param int|string $action    The nonce action.
 * @param string     $query_arg Optional. Key to check for nonce in `$_REQUEST`. Default \'_wpnonce\'.
 * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago,
 *                   2 if the nonce is valid and generated between 12-24 hours ago.
 *                   False if the nonce is invalid.
 * @phpstan-param string $action
 * @phpstan-return 1|2|false
 */',
    'startLine' => 133858,
    'endLine' => 133860,
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
        'name' => 'check_admin_referer',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));