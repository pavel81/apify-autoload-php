<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-WP_Error
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'WP_Error',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'WP_Error',
    'shortName' => 'WP_Error',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * WordPress Error class.
 *
 * Container for checking for WordPress errors and error messages. Return
 * WP_Error and use is_wp_error() to check if this class is returned. Many
 * core WordPress functions pass this class in the event of an error and
 * if not handled properly will result in code errors.
 *
 * @since 2.1.0
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'AllowDynamicProperties',
        'isRepeated' => false,
        'arguments' => 
        array (
        ),
      ),
    ),
    'startLine' => 41720,
    'endLine' => 41912,
    'startColumn' => 5,
    'endColumn' => 5,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'errors' => 
      array (
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'name' => 'errors',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 41729,
            'endLine' => 41729,
            'startTokenPos' => 72718,
            'startFilePos' => 1349943,
            'endTokenPos' => 72720,
            'endFilePos' => 1349949,
          ),
        ),
        'docComment' => '/**
 * Stores the list of errors.
 *
 * @since 2.1.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41729,
        'endLine' => 41729,
        'startColumn' => 9,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'error_data' => 
      array (
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'name' => 'error_data',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 41736,
            'endLine' => 41736,
            'startTokenPos' => 72731,
            'startFilePos' => 1350130,
            'endTokenPos' => 72733,
            'endFilePos' => 1350136,
          ),
        ),
        'docComment' => '/**
 * Stores the most recently added data for each error code.
 *
 * @since 2.1.0
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41736,
        'endLine' => 41736,
        'startColumn' => 9,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'additional_data' => 
      array (
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'name' => 'additional_data',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 41743,
            'endLine' => 41743,
            'startTokenPos' => 72744,
            'startFilePos' => 1350348,
            'endTokenPos' => 72746,
            'endFilePos' => 1350354,
          ),
        ),
        'docComment' => '/**
 * Stores previously added data added for error codes, oldest-to-newest by code.
 *
 * @since 5.6.0
 * @var array[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41743,
        'endLine' => 41743,
        'startColumn' => 9,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41762,
                'endLine' => 41762,
                'startTokenPos' => 72761,
                'startFilePos' => 1351125,
                'endTokenPos' => 72761,
                'endFilePos' => 1351126,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41762,
            'endLine' => 41762,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41762,
                'endLine' => 41762,
                'startTokenPos' => 72768,
                'startFilePos' => 1351140,
                'endTokenPos' => 72768,
                'endFilePos' => 1351141,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41762,
            'endLine' => 41762,
            'startColumn' => 49,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41762,
                'endLine' => 41762,
                'startTokenPos' => 72775,
                'startFilePos' => 1351152,
                'endTokenPos' => 72775,
                'endFilePos' => 1351153,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41762,
            'endLine' => 41762,
            'startColumn' => 64,
            'endColumn' => 73,
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
 * Initializes the error.
 *
 * If `$code` is empty, the other parameters will be ignored.
 * When `$code` is not empty, `$message` will be used even if
 * it is empty. The `$data` parameter will be used only if it
 * is not empty.
 *
 * Though the class is constructed with a single error code and
 * message, multiple codes can be added using the `add()` method.
 *
 * @since 2.1.0
 *
 * @param string|int $code    Error code.
 * @param string     $message Error message.
 * @param mixed      $data    Optional. Error data. Default empty string.
 * @phpstan-return void
 */',
        'startLine' => 41762,
        'endLine' => 41764,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'get_error_codes' => 
      array (
        'name' => 'get_error_codes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves all error codes.
 *
 * @since 2.1.0
 *
 * @return array List of error codes, if available.
 */',
        'startLine' => 41772,
        'endLine' => 41774,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'get_error_code' => 
      array (
        'name' => 'get_error_code',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the first error code available.
 *
 * @since 2.1.0
 *
 * @return string|int Empty string, if no error codes.
 */',
        'startLine' => 41782,
        'endLine' => 41784,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'get_error_messages' => 
      array (
        'name' => 'get_error_messages',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41794,
                'endLine' => 41794,
                'startTokenPos' => 72822,
                'startFilePos' => 1352094,
                'endTokenPos' => 72822,
                'endFilePos' => 1352095,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41794,
            'endLine' => 41794,
            'startColumn' => 44,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves all error messages, or the error messages for the given error code.
 *
 * @since 2.1.0
 *
 * @param string|int $code Optional. Error code to retrieve the messages for.
 *                         Default empty string.
 * @return string[] Error strings on success, or empty array if there are none.
 */',
        'startLine' => 41794,
        'endLine' => 41796,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'get_error_message' => 
      array (
        'name' => 'get_error_message',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41809,
                'endLine' => 41809,
                'startTokenPos' => 72841,
                'startFilePos' => 1352618,
                'endTokenPos' => 72841,
                'endFilePos' => 1352619,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41809,
            'endLine' => 41809,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets a single error message.
 *
 * This will get the first message available for the code. If no code is
 * given then the first code available will be used.
 *
 * @since 2.1.0
 *
 * @param string|int $code Optional. Error code to retrieve the message for.
 *                         Default empty string.
 * @return string The error message.
 */',
        'startLine' => 41809,
        'endLine' => 41811,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'get_error_data' => 
      array (
        'name' => 'get_error_data',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41820,
                'endLine' => 41820,
                'startTokenPos' => 72860,
                'startFilePos' => 1352964,
                'endTokenPos' => 72860,
                'endFilePos' => 1352965,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41820,
            'endLine' => 41820,
            'startColumn' => 40,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the most recently added error data for an error code.
 *
 * @since 2.1.0
 *
 * @param string|int $code Optional. Error code. Default empty string.
 * @return mixed Error data, if it exists.
 */',
        'startLine' => 41820,
        'endLine' => 41822,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'has_errors' => 
      array (
        'name' => 'has_errors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Verifies if the instance contains errors.
 *
 * @since 5.1.0
 *
 * @return bool If the instance contains errors.
 */',
        'startLine' => 41830,
        'endLine' => 41832,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'add' => 
      array (
        'name' => 'add',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41842,
            'endLine' => 41842,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41842,
            'endLine' => 41842,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41842,
                'endLine' => 41842,
                'startTokenPos' => 72899,
                'startFilePos' => 1353613,
                'endTokenPos' => 72899,
                'endFilePos' => 1353614,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41842,
            'endLine' => 41842,
            'startColumn' => 46,
            'endColumn' => 55,
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
 * Adds an error or appends an additional message to an existing error.
 *
 * @since 2.1.0
 *
 * @param string|int $code    Error code.
 * @param string     $message Error message.
 * @param mixed      $data    Optional. Error data. Default empty string.
 */',
        'startLine' => 41842,
        'endLine' => 41844,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'add_data' => 
      array (
        'name' => 'add_data',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41854,
            'endLine' => 41854,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41854,
                'endLine' => 41854,
                'startTokenPos' => 72921,
                'startFilePos' => 1354019,
                'endTokenPos' => 72921,
                'endFilePos' => 1354020,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41854,
            'endLine' => 41854,
            'startColumn' => 41,
            'endColumn' => 50,
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
 * Adds data to an error with the given code.
 *
 * @since 2.1.0
 * @since 5.6.0 Errors can now contain more than one item of error data. {@see WP_Error::$additional_data}.
 *
 * @param mixed      $data Error data.
 * @param string|int $code Error code.
 */',
        'startLine' => 41854,
        'endLine' => 41856,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'get_all_error_data' => 
      array (
        'name' => 'get_all_error_data',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 41865,
                'endLine' => 41865,
                'startTokenPos' => 72940,
                'startFilePos' => 1354369,
                'endTokenPos' => 72940,
                'endFilePos' => 1354370,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41865,
            'endLine' => 41865,
            'startColumn' => 44,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves all error data for an error code in the order in which the data was added.
 *
 * @since 5.6.0
 *
 * @param string|int $code Error code.
 * @return mixed[] Array of error data, if it exists.
 */',
        'startLine' => 41865,
        'endLine' => 41867,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'remove' => 
      array (
        'name' => 'remove',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41878,
            'endLine' => 41878,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Removes the specified error.
 *
 * This function removes all error messages associated with the specified
 * error code, along with any error data for that code.
 *
 * @since 4.1.0
 *
 * @param string|int $code Error code.
 */',
        'startLine' => 41878,
        'endLine' => 41880,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'merge_from' => 
      array (
        'name' => 'merge_from',
        'parameters' => 
        array (
          'error' => 
          array (
            'name' => 'error',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WP_Error',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41888,
            'endLine' => 41888,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merges the errors in the given error object into this one.
 *
 * @since 5.6.0
 *
 * @param WP_Error $error Error object to merge.
 */',
        'startLine' => 41888,
        'endLine' => 41890,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'export_to' => 
      array (
        'name' => 'export_to',
        'parameters' => 
        array (
          'error' => 
          array (
            'name' => 'error',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WP_Error',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41898,
            'endLine' => 41898,
            'startColumn' => 35,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Exports the errors in this object into the given one.
 *
 * @since 5.6.0
 *
 * @param WP_Error $error Error object to export into.
 */',
        'startLine' => 41898,
        'endLine' => 41900,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
      'copy_errors' => 
      array (
        'name' => 'copy_errors',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WP_Error',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41909,
            'endLine' => 41909,
            'startColumn' => 47,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WP_Error',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41909,
            'endLine' => 41909,
            'startColumn' => 64,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Copies errors from one WP_Error instance to another.
 *
 * @since 5.6.0
 *
 * @param WP_Error $from The WP_Error to copy from.
 * @param WP_Error $to   The WP_Error to copy to.
 */',
        'startLine' => 41909,
        'endLine' => 41911,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => NULL,
        'declaringClassName' => 'WP_Error',
        'implementingClassName' => 'WP_Error',
        'currentClassName' => 'WP_Error',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));