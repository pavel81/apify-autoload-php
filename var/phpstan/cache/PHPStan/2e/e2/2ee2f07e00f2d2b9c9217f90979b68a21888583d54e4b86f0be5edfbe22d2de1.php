<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-update_option
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'update_option',
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
        'startLine' => 132865,
        'endLine' => 132865,
        'startColumn' => 28,
        'endColumn' => 34,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'value' => 
      array (
        'name' => 'value',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 132865,
        'endLine' => 132865,
        'startColumn' => 37,
        'endColumn' => 42,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'autoload' => 
      array (
        'name' => 'autoload',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 132865,
            'endLine' => 132865,
            'startTokenPos' => 183318,
            'startFilePos' => 4592650,
            'endTokenPos' => 183318,
            'endFilePos' => 4592654,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 132865,
        'endLine' => 132865,
        'startColumn' => 45,
        'endColumn' => 61,
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
 * Updates the value of an option that was already added.
 *
 * You do not need to serialize values. If the value needs to be serialized,
 * then it will be serialized before it is inserted into the database.
 * Remember, resources cannot be serialized or added as an option.
 *
 * If the option does not exist, it will be created.
 * This function is designed to work with or without a logged-in user. In terms of security,
 * plugin developers should check the current user\'s capabilities before updating any options.
 *
 * @since 1.0.0
 * @since 4.2.0 The `$autoload` parameter was added.
 * @since 6.7.0 The autoload values \'yes\' and \'no\' are deprecated.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string    $option   Name of the option to update. Expected to not be SQL-escaped.
 * @param mixed     $value    Option value. Must be serializable if non-scalar. Expected to not be SQL-escaped.
 * @param bool|null $autoload Optional. Whether to load the option when WordPress starts up.
 *                            Accepts a boolean, or `null` to stick with the initial value or, if no initial value is
 *                            set, to leave the decision up to default heuristics in WordPress.
 *                            For existing options, `$autoload` can only be updated using `update_option()` if `$value`
 *                            is also changed.
 *                            For backward compatibility \'yes\' and \'no\' are also accepted, though using these values is
 *                            deprecated.
 *                            Autoloading too many options can lead to performance problems, especially if the
 *                            options are not frequently used. For options which are accessed across several places
 *                            in the frontend, it is recommended to autoload them, by using true.
 *                            For options which are accessed only on few specific URLs, it is recommended
 *                            to not autoload them, by using false.
 *                            For non-existent options, the default is null, which means WordPress will determine
 *                            the autoload value.
 * @return bool True if the value was updated, false otherwise.
 */',
    'startLine' => 132865,
    'endLine' => 132867,
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
        'name' => 'update_option',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));