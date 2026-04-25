<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\includes\Infrastructure\Device\DeviceDetector.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Panda\Apify\Infrastructure\Device\DeviceDetector
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ec5e418773969bf3c8d0ada7891de6034df4c1e7b28faa9fe464535186f815d1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/includes/Infrastructure/Device/DeviceDetector.php',
      ),
    ),
    'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
    'name' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
    'shortName' => 'DeviceDetector',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 160,
    'startColumn' => 1,
    'endColumn' => 1,
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
      'ua' => 
      array (
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'name' => 'ua',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 11,
        'endLine' => 11,
        'startColumn' => 5,
        'endColumn' => 23,
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
          'ua' => 
          array (
            'name' => 'ua',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 13,
                'endLine' => 13,
                'startTokenPos' => 48,
                'startFilePos' => 201,
                'endTokenPos' => 48,
                'endFilePos' => 204,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 13,
            'endLine' => 13,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 13,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'fromRequest' => 
      array (
        'name' => 'fromRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'WP_REST_Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 40,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array{
 *     device_type: string|null,
 *     os: string|null,
 *     browser: string|null,
 *     ua: string,
 *     ip: string|null
 * }
 */',
        'startLine' => 27,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'fromGlobals' => 
      array (
        'name' => 'fromGlobals',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 41,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'isMobile' => 
      array (
        'name' => 'isMobile',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'isTablet' => 
      array (
        'name' => 'isTablet',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 51,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'isDesktop' => 
      array (
        'name' => 'isDesktop',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 56,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'isBot' => 
      array (
        'name' => 'isBot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 61,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'type' => 
      array (
        'name' => 'type',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return \'mobile\'|\'tablet\'|\'desktop\'|\'bot\'
 */',
        'startLine' => 69,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'isTouch' => 
      array (
        'name' => 'isTouch',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 86,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'context' => 
      array (
        'name' => 'context',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<string, bool|string>
 */',
        'startLine' => 94,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'match' => 
      array (
        'name' => 'match',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 28,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 107,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'detectDeviceType' => 
      array (
        'name' => 'detectDeviceType',
        'parameters' => 
        array (
          'ua' => 
          array (
            'name' => 'ua',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return \'mobile\'|\'tablet\'|\'desktop\'|\'bot\'
 */',
        'startLine' => 115,
        'endLine' => 132,
        'startColumn' => 1,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'detectOs' => 
      array (
        'name' => 'detectOs',
        'parameters' => 
        array (
          'ua' => 
          array (
            'name' => 'ua',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 134,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'aliasName' => NULL,
      ),
      'detectBrowser' => 
      array (
        'name' => 'detectBrowser',
        'parameters' => 
        array (
          'ua' => 
          array (
            'name' => 'ua',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 148,
            'endLine' => 148,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 148,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
        'declaringClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'implementingClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
        'currentClassName' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
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