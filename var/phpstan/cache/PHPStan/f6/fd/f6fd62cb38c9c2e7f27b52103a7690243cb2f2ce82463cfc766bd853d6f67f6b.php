<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-add_option
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'add_option',
    'parameters' => 
    array (
      'option' => 
      array (
        'name' => 'option',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 132902,
        'endLine' => 132902,
        'startColumn' => 25,
        'endColumn' => 31,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'value' => 
      array (
        'name' => 'value',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 132902,
            'endLine' => 132902,
            'startTokenPos' => 183338,
            'startFilePos' => 4595001,
            'endTokenPos' => 183338,
            'endFilePos' => 4595002,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 132902,
        'endLine' => 132902,
        'startColumn' => 34,
        'endColumn' => 44,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'deprecated' => 
      array (
        'name' => 'deprecated',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 132902,
            'endLine' => 132902,
            'startTokenPos' => 183345,
            'startFilePos' => 4595019,
            'endTokenPos' => 183345,
            'endFilePos' => 4595020,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 132902,
        'endLine' => 132902,
        'startColumn' => 47,
        'endColumn' => 62,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'autoload' => 
      array (
        'name' => 'autoload',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 132902,
            'endLine' => 132902,
            'startTokenPos' => 183352,
            'startFilePos' => 4595035,
            'endTokenPos' => 183352,
            'endFilePos' => 4595039,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 132902,
        'endLine' => 132902,
        'startColumn' => 65,
        'endColumn' => 81,
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
 * Adds a new option.
 *
 * You do not need to serialize values. If the value needs to be serialized,
 * then it will be serialized before it is inserted into the database.
 * Remember, resources cannot be serialized or added as an option.
 *
 * You can create options without values and then update the values later.
 * Existing options will not be updated and checks are performed to ensure that you
 * aren\'t adding a protected WordPress option. Care should be taken to not name
 * options the same as the ones which are protected.
 *
 * @since 1.0.0
 * @since 6.6.0 The $autoload parameter\'s default value was changed to null.
 * @since 6.7.0 The autoload values \'yes\' and \'no\' are deprecated.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string    $option     Name of the option to add. Expected to not be SQL-escaped.
 * @param mixed     $value      Optional. Option value. Must be serializable if non-scalar.
 *                              Expected to not be SQL-escaped.
 * @param string    $deprecated Optional. Description. Not used anymore.
 * @param bool|null $autoload   Optional. Whether to load the option when WordPress starts up.
 *                              Accepts a boolean, or `null` to leave the decision up to default heuristics in
 *                              WordPress. For backward compatibility \'yes\' and \'no\' are also accepted, though using
 *                              these values is deprecated.
 *                              Autoloading too many options can lead to performance problems, especially if the
 *                              options are not frequently used. For options which are accessed across several places
 *                              in the frontend, it is recommended to autoload them, by using true.
 *                              For options which are accessed only on few specific URLs, it is recommended
 *                              to not autoload them, by using false.
 *                              Default is null, which means WordPress will determine the autoload value.
 * @return bool True if the option was added, false otherwise.
 */',
    'startLine' => 132902,
    'endLine' => 132904,
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
        'name' => 'add_option',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));