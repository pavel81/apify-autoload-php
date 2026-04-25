<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_enqueue_script
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_enqueue_script',
    'parameters' => 
    array (
      'handle' => 
      array (
        'name' => 'handle',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 119620,
        'endLine' => 119620,
        'startColumn' => 32,
        'endColumn' => 38,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'src' => 
      array (
        'name' => 'src',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 119620,
            'endLine' => 119620,
            'startTokenPos' => 169126,
            'startFilePos' => 4079393,
            'endTokenPos' => 169126,
            'endFilePos' => 4079394,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 119620,
        'endLine' => 119620,
        'startColumn' => 41,
        'endColumn' => 49,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'deps' => 
      array (
        'name' => 'deps',
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 119620,
            'endLine' => 119620,
            'startTokenPos' => 169133,
            'startFilePos' => 4079405,
            'endTokenPos' => 169135,
            'endFilePos' => 4079411,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 119620,
        'endLine' => 119620,
        'startColumn' => 52,
        'endColumn' => 66,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'ver' => 
      array (
        'name' => 'ver',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 119620,
            'endLine' => 119620,
            'startTokenPos' => 169142,
            'startFilePos' => 4079421,
            'endTokenPos' => 169142,
            'endFilePos' => 4079426,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 119620,
        'endLine' => 119620,
        'startColumn' => 69,
        'endColumn' => 81,
        'parameterIndex' => 3,
        'isOptional' => true,
      ),
      'args' => 
      array (
        'name' => 'args',
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 119620,
            'endLine' => 119620,
            'startTokenPos' => 169149,
            'startFilePos' => 4079437,
            'endTokenPos' => 169151,
            'endFilePos' => 4079443,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 119620,
        'endLine' => 119620,
        'startColumn' => 84,
        'endColumn' => 98,
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
 * Enqueues a script.
 *
 * Registers the script if `$src` provided (does NOT overwrite), and enqueues it.
 *
 * @see WP_Dependencies::add()
 * @see WP_Dependencies::add_data()
 * @see WP_Dependencies::enqueue()
 *
 * @since 2.1.0
 * @since 6.3.0 The $in_footer parameter of type boolean was overloaded to be an $args parameter of type array.
 * @since 6.9.0 The $fetchpriority parameter of type string was added to the $args parameter of type array.
 *
 * @param string           $handle    Name of the script. Should be unique.
 * @param string           $src       Full URL of the script, or path of the script relative to the WordPress root directory.
 *                                    Default empty.
 * @param string[]         $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param string|bool|null $ver       Optional. String specifying script version number, if it has one, which is added to the URL
 *                                    as a query string for cache busting purposes. If version is set to false, a version
 *                                    number is automatically added equal to current installed WordPress version.
 *                                    If set to null, no version is added.
 * @param array|bool       $args     {
 *     Optional. An array of additional script loading strategies. Default empty array.
 *     Otherwise, it may be a boolean in which case it determines whether the script is printed in the footer. Default false.
 *
 *     @type string    $strategy      Optional. If provided, may be either \'defer\' or \'async\'.
 *     @type bool      $in_footer     Optional. Whether to print the script in the footer. Default \'false\'.
 *     @type string    $fetchpriority Optional. The fetch priority for the script. Default \'auto\'.
 * }
 * @phpstan-param bool|array{
 *   strategy?: string,
 *   in_footer?: bool,
 *   fetchpriority?: string,
 * } $args
 */',
    'startLine' => 119620,
    'endLine' => 119622,
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
        'name' => 'wp_enqueue_script',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));