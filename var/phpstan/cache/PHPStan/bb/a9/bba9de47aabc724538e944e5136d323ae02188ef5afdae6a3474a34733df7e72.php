<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\includes\Api\Controllers\ProductController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Panda\Apify\Api\Controllers\ProductController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-bae76ad74eb0f001b1045c85f394ad4f03bd21fc820cdaddc4abc9757acf7aa0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/includes/Api/Controllers/ProductController.php',
      ),
    ),
    'namespace' => 'Panda\\Apify\\Api\\Controllers',
    'name' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
    'shortName' => 'ProductController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 153,
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
      'detail' => 
      array (
        'name' => 'detail',
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 28,
            'endColumn' => 51,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'WP_Error',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array{
 *     ok: bool,
 *     plan: string,
 *     product: mixed,
 *     offers: array<int, array<string, mixed>>,
 *     meta: array{
 *         total_offers: int,
 *         visible_offers: int
 *     },
 *     upsell: array<string, mixed>|null
 * }|WP_Error
 */',
        'startLine' => 32,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Panda\\Apify\\Api\\Controllers',
        'declaringClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'implementingClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'currentClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'aliasName' => NULL,
      ),
      'normalizeOffers' => 
      array (
        'name' => 'normalizeOffers',
        'parameters' => 
        array (
          'offers' => 
          array (
            'name' => 'offers',
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 38,
            'endColumn' => 50,
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
 * @param array<int, array<string, mixed>> $offers
 * @return array<int, array<string, mixed>>
 */',
        'startLine' => 110,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Panda\\Apify\\Api\\Controllers',
        'declaringClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'implementingClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'currentClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'aliasName' => NULL,
      ),
      'addScoring' => 
      array (
        'name' => 'addScoring',
        'parameters' => 
        array (
          'offers' => 
          array (
            'name' => 'offers',
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
            'startLine' => 127,
            'endLine' => 127,
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
 * @param array<int, array<string, mixed>> $offers
 * @return array<int, array<string, mixed>>
 */',
        'startLine' => 127,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Panda\\Apify\\Api\\Controllers',
        'declaringClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'implementingClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
        'currentClassName' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
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