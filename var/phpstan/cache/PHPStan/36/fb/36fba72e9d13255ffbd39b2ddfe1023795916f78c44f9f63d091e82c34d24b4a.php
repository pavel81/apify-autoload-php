<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_nonce_field
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_nonce_field',
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
            'startLine' => 116600,
            'endLine' => 116600,
            'startTokenPos' => 165973,
            'startFilePos' => 3965431,
            'endTokenPos' => 165974,
            'endFilePos' => 3965432,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116600,
        'endLine' => 116600,
        'startColumn' => 29,
        'endColumn' => 40,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => 
        array (
          'code' => '\'_wpnonce\'',
          'attributes' => 
          array (
            'startLine' => 116600,
            'endLine' => 116600,
            'startTokenPos' => 165981,
            'startFilePos' => 3965443,
            'endTokenPos' => 165981,
            'endFilePos' => 3965452,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116600,
        'endLine' => 116600,
        'startColumn' => 43,
        'endColumn' => 60,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'referer' => 
      array (
        'name' => 'referer',
        'default' => 
        array (
          'code' => '\\true',
          'attributes' => 
          array (
            'startLine' => 116600,
            'endLine' => 116600,
            'startTokenPos' => 165988,
            'startFilePos' => 3965466,
            'endTokenPos' => 165988,
            'endFilePos' => 3965470,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116600,
        'endLine' => 116600,
        'startColumn' => 63,
        'endColumn' => 78,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'display' => 
      array (
        'name' => 'display',
        'default' => 
        array (
          'code' => '\\true',
          'attributes' => 
          array (
            'startLine' => 116600,
            'endLine' => 116600,
            'startTokenPos' => 165995,
            'startFilePos' => 3965484,
            'endTokenPos' => 165995,
            'endFilePos' => 3965488,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 116600,
        'endLine' => 116600,
        'startColumn' => 81,
        'endColumn' => 96,
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
 * Retrieves or display nonce hidden field for forms.
 *
 * The nonce field is used to validate that the contents of the form came from
 * the location on the current site and not somewhere else. The nonce does not
 * offer absolute protection, but should protect against most cases. It is very
 * important to use nonce field in forms.
 *
 * The $action and $name are optional, but if you want to have better security,
 * it is strongly suggested to set those two parameters. It is easier to just
 * call the function without any parameters, because validation of the nonce
 * doesn\'t require any parameters, but since crackers know what the default is
 * it won\'t be difficult for them to find a way around your nonce and cause
 * damage.
 *
 * The input name will be whatever $name value you gave. The input value will be
 * the nonce creation value.
 *
 * @since 2.0.4
 *
 * @param int|string $action  Optional. Action name. Default -1.
 * @param string     $name    Optional. Nonce name. Default \'_wpnonce\'.
 * @param bool       $referer Optional. Whether to set the referer field for validation. Default true.
 * @param bool       $display Optional. Whether to display or return hidden form field. Default true.
 * @return string Nonce field HTML markup.
 * @phpstan-param -1|string $action
 */',
    'startLine' => 116600,
    'endLine' => 116602,
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
        'name' => 'wp_nonce_field',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));