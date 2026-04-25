<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\includes\Api\Controllers\AnalyticsController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Panda\Apify\Api\Controllers\AnalyticsController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ff934b12992824a7c36c74ce9ae3aa036a8e98be4783be462e34ee1e63644050',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/includes/Api/Controllers/AnalyticsController.php',
      ),
    ),
    'namespace' => 'Panda\\Apify\\Api\\Controllers',
    'name' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
    'shortName' => 'AnalyticsController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 141,
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
      'DEDUPE_WINDOW_SECONDS' => 
      array (
        'declaringClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'implementingClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'name' => 'DEDUPE_WINDOW_SECONDS',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '5',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 63,
            'startFilePos' => 286,
            'endTokenPos' => 63,
            'endFilePos' => 286,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 44,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'trackOfferClick' => 
      array (
        'name' => 'trackOfferClick',
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
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 44,
            'endColumn' => 67,
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
            'name' => 'WP_REST_Response',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * 🔹 Single event (fallback)
 */',
        'startLine' => 22,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Panda\\Apify\\Api\\Controllers',
        'declaringClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'implementingClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'currentClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'aliasName' => NULL,
      ),
      'trackBatch' => 
      array (
        'name' => 'trackBatch',
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
            'startLine' => 75,
            'endLine' => 75,
            'startColumn' => 39,
            'endColumn' => 62,
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
            'name' => 'WP_REST_Response',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * 🔥 Batch endpoint (main)
 */',
        'startLine' => 75,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Panda\\Apify\\Api\\Controllers',
        'declaringClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'implementingClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
        'currentClassName' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
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