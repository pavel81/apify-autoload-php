<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-get_option
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'get_option',
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
        'startLine' => 132639,
        'endLine' => 132639,
        'startColumn' => 25,
        'endColumn' => 31,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'default_value' => 
      array (
        'name' => 'default_value',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 132639,
            'endLine' => 132639,
            'startTokenPos' => 183114,
            'startFilePos' => 4583007,
            'endTokenPos' => 183114,
            'endFilePos' => 4583012,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 132639,
        'endLine' => 132639,
        'startColumn' => 34,
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
 * Retrieves an option value based on an option name.
 *
 * If the option does not exist, and a default value is not provided,
 * boolean false is returned. This could be used to check whether you need
 * to initialize an option during installation of a plugin, however that
 * can be done better by using add_option() which will not overwrite
 * existing options.
 *
 * Not initializing an option and using boolean `false` as a return value
 * is a bad practice as it triggers an additional database query.
 *
 * The type of the returned value can be different from the type that was passed
 * when saving or updating the option. If the option value was serialized,
 * then it will be unserialized when it is returned. In this case the type will
 * be the same. For example, storing a non-scalar value like an array will
 * return the same array.
 *
 * In most cases non-string scalar and null values will be converted and returned
 * as string equivalents.
 *
 * Exceptions:
 *
 * 1. When the option has not been saved in the database, the `$default_value` value
 *    is returned if provided. If not, boolean `false` is returned.
 * 2. When one of the Options API filters is used: {@see \'pre_option_$option\'},
 *    {@see \'default_option_$option\'}, or {@see \'option_$option\'}, the returned
 *    value may not match the expected type.
 * 3. When the option has just been saved in the database, and get_option()
 *    is used right after, non-string scalar and null values are not converted to
 *    string equivalents and the original type is returned.
 *
 * Examples:
 *
 * When adding options like this: `add_option( \'my_option_name\', \'value\' )`
 * and then retrieving them with `get_option( \'my_option_name\' )`, the returned
 * values will be:
 *
 *   - `false` returns `string(0) ""`
 *   - `true`  returns `string(1) "1"`
 *   - `0`     returns `string(1) "0"`
 *   - `1`     returns `string(1) "1"`
 *   - `\'0\'`   returns `string(1) "0"`
 *   - `\'1\'`   returns `string(1) "1"`
 *   - `null`  returns `string(0) ""`
 *
 * When adding options with non-scalar values like
 * `add_option( \'my_array\', array( false, \'str\', null ) )`, the returned value
 * will be identical to the original as it is serialized before saving
 * it in the database:
 *
 *     array(3) {
 *         [0] => bool(false)
 *         [1] => string(3) "str"
 *         [2] => NULL
 *     }
 *
 * @since 1.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $option        Name of the option to retrieve. Expected to not be SQL-escaped.
 * @param mixed  $default_value Optional. Default value to return if the option does not exist.
 * @return mixed Value of the option. A value of any type may be returned, including
 *               scalar (string, boolean, float, integer), null, array, object.
 *               Scalar and null values will be returned as strings as long as they originate
 *               from a database stored option value. If there is no option in the database,
 *               boolean `false` is returned.
 */',
    'startLine' => 132639,
    'endLine' => 132641,
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
        'name' => 'get_option',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));