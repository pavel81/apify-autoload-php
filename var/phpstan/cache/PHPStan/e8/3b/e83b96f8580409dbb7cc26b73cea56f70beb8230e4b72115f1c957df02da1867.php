<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\includes\Core\Apify_Import_Validator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Panda\Apify\Core\Apify_Import_Validator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-861a71b63ade0b630184720b06c22f8468786ba179eb4a0040224b960695db03',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/includes/Core/Apify_Import_Validator.php',
      ),
    ),
    'namespace' => 'Panda\\Apify\\Core',
    'name' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
    'shortName' => 'Apify_Import_Validator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 119,
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
    ),
    'immediateMethods' => 
    array (
      'get_product_schema' => 
      array (
        'name' => 'get_product_schema',
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
 * @return array{
 *     schema: string,
 *     type: string,
 *     required: array<int, string>,
 *     properties: array<string, mixed>
 * }
 */',
        'startLine' => 21,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Core',
        'declaringClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'implementingClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'currentClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'aliasName' => NULL,
      ),
      'validate_items' => 
      array (
        'name' => 'validate_items',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
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
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 36,
            'endColumn' => 47,
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
 * @param array<int, array<string, mixed>> $items
 * @return array{
 *     valid: array<int, array<string, mixed>>,
 *     invalid: array<int, array{
 *         index: int,
 *         item: mixed,
 *         error: string
 *     }>
 * }
 */',
        'startLine' => 49,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Core',
        'declaringClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'implementingClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'currentClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'aliasName' => NULL,
      ),
      'validate_item' => 
      array (
        'name' => 'validate_item',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
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
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 35,
            'endColumn' => 45,
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
 * @param array<string, mixed> $item
 * @return array<string, mixed>
 */',
        'startLine' => 77,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Core',
        'declaringClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'implementingClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'currentClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'aliasName' => NULL,
      ),
      'decode_json' => 
      array (
        'name' => 'decode_json',
        'parameters' => 
        array (
          'input' => 
          array (
            'name' => 'input',
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
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 33,
            'endColumn' => 45,
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
 * @param string $input
 * @return array<int, array<string, mixed>>
 */',
        'startLine' => 108,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Core',
        'declaringClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'implementingClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        'currentClassName' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
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