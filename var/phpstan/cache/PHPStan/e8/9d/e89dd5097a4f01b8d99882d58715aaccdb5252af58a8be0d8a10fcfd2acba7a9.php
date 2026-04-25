<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-WpOrg\Requests\Utility\CaseInsensitiveDictionary
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => 'WpOrg\\Requests\\Utility',
    'name' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
    'shortName' => 'CaseInsensitiveDictionary',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Case-insensitive dictionary, suitable for HTTP headers
 *
 * @package Requests\\Utilities
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 20878,
    'endLine' => 20952,
    'startColumn' => 5,
    'endColumn' => 5,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'ArrayAccess',
      1 => 'IteratorAggregate',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'data' => 
      array (
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'name' => 'data',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 20885,
            'endLine' => 20885,
            'startTokenPos' => 36537,
            'startFilePos' => 638445,
            'endTokenPos' => 36538,
            'endFilePos' => 638446,
          ),
        ),
        'docComment' => '/**
 * Actual item data
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20885,
        'endLine' => 20885,
        'startColumn' => 9,
        'endColumn' => 29,
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
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 20891,
                'endLine' => 20891,
                'startTokenPos' => 36555,
                'startFilePos' => 638660,
                'endTokenPos' => 36556,
                'endFilePos' => 638661,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20891,
            'endLine' => 20891,
            'startColumn' => 37,
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
 * Creates a case insensitive dictionary.
 *
 * @param array $data Dictionary/map to convert to case-insensitive
 */',
        'startLine' => 20891,
        'endLine' => 20893,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'WpOrg\\Requests\\Utility',
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'currentClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'aliasName' => NULL,
      ),
      'offsetExists' => 
      array (
        'name' => 'offsetExists',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20901,
            'endLine' => 20901,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Check if the given item exists
 *
 * @param string $offset Item key
 * @return boolean Does the item exist?
 */',
        'startLine' => 20900,
        'endLine' => 20903,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'WpOrg\\Requests\\Utility',
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'currentClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'aliasName' => NULL,
      ),
      'offsetGet' => 
      array (
        'name' => 'offsetGet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20911,
            'endLine' => 20911,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Get the value for the item
 *
 * @param string $offset Item key
 * @return string|null Item value (null if the item key doesn\'t exist)
 */',
        'startLine' => 20910,
        'endLine' => 20913,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'WpOrg\\Requests\\Utility',
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'currentClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'aliasName' => NULL,
      ),
      'offsetSet' => 
      array (
        'name' => 'offsetSet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20923,
            'endLine' => 20923,
            'startColumn' => 35,
            'endColumn' => 41,
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
            'startLine' => 20923,
            'endLine' => 20923,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Set the given item
 *
 * @param string $offset Item name
 * @param string $value Item value
 *
 * @throws \\WpOrg\\Requests\\Exception On attempting to use dictionary as list (`invalidset`)
 */',
        'startLine' => 20922,
        'endLine' => 20925,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'WpOrg\\Requests\\Utility',
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'currentClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'aliasName' => NULL,
      ),
      'offsetUnset' => 
      array (
        'name' => 'offsetUnset',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20932,
            'endLine' => 20932,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Unset the given header
 *
 * @param string $offset The key for the item to unset.
 */',
        'startLine' => 20931,
        'endLine' => 20934,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'WpOrg\\Requests\\Utility',
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'currentClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'aliasName' => NULL,
      ),
      'getIterator' => 
      array (
        'name' => 'getIterator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'ReturnTypeWillChange',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Get an iterator for the data
 *
 * @return \\ArrayIterator
 */',
        'startLine' => 20940,
        'endLine' => 20943,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'WpOrg\\Requests\\Utility',
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'currentClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'aliasName' => NULL,
      ),
      'getAll' => 
      array (
        'name' => 'getAll',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the headers as an array
 *
 * @return array Header data
 */',
        'startLine' => 20949,
        'endLine' => 20951,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'WpOrg\\Requests\\Utility',
        'declaringClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'implementingClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
        'currentClassName' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
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