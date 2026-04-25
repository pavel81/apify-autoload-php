<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1776466589,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.44',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80212,
  'projectConfig' => '{parameters: {featureToggles: {bleedingEdge: true, checkNonStringableDynamicAccess: true, checkParameterCastableToNumberFunctions: true, skipCheckGenericClasses: {_prevent_merging: true}, stricterFunctionMap: true, reportPreciseLineForUnusedFunctionParameter: true, checkPrintfParameterTypes: true, internalTag: true, newStaticInAbstractClassStaticMethod: true, checkExtensionsForComparisonOperators: true, checkGenericIterableClasses: true, reportTooWideBool: true, rawMessageInBaseline: true, reportNestedTooWideType: false, assignToByRefForeachExpr: true, curlSetOptArrayTypes: true}, bootstrapFiles: [../../php-stubs/wordpress-stubs/wordpress-stubs.php, bootstrap.php, %currentWorkingDirectory%/src/phpstan-bootstrap.php], dynamicConstantNames: [WP_DEBUG, WP_DEBUG_LOG, WP_DEBUG_DISPLAY, ABSPATH, WP_PLUGIN_DIR, WP_LANG_DIR, WP_CONTENT_DIR, WPMU_PLUGIN_DIR, WP_DEFAULT_THEME, FS_CONNECT_TIMEOUT, FS_TIMEOUT, FS_CHMOD_DIR, FS_CHMOD_FILE, COOKIE_DOMAIN, EMPTY_TRASH_DAYS, SCRIPT_DEBUG], earlyTerminatingFunctionCalls: [wp_send_json, wp_nonce_ays], earlyTerminatingMethodCalls: {IXR_Server: [output], WP_Ajax_Response: [send]}, level: 8, paths: [C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\src, C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes], tmpDir: C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\var\\phpstan, scanDirectories: [vendor/php-stubs/wordpress-stubs], stubFiles: [tools/phpstan/stubs/wordpress.stub.php, tools/phpstan/stubs/wp-rest.stub.php], inferPrivatePropertyTypeFromConstructor: true, treatPhpDocTypesAsCertain: false}, rules: [SzepeViktor\\PHPStan\\WordPress\\HookCallbackRule, SzepeViktor\\PHPStan\\WordPress\\HookDocsRule, SzepeViktor\\PHPStan\\WordPress\\WpConstantFetchRule], services: [{class: SzepeViktor\\PHPStan\\WordPress\\HookDocBlock}, {class: SzepeViktor\\PHPStan\\WordPress\\ApplyFiltersDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\EscSqlDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\NormalizeWhitespaceDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\ShortcodeAttsDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\StripslashesFromStringsOnlyDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\SlashitFunctionsDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\WpParseUrlFunctionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\WpSlashDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\HookDocsVisitor, tags: [phpstan.parser.richParserNodeVisitor]}, {class: SzepeViktor\\PHPStan\\WordPress\\AssertWpErrorTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}]}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes',
  ),
  'scannedFiles' => 
  array (
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\src\\Bootstrap.php' => 'b1f19270f0dab1d218973d514c1a8ad8b8def022ffd5dc3d090b070f6971995b',
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\src\\phpstan-bootstrap.php' => '260f9c1a586aa778a6ab6227ae20b1540010492ffb54d325d4cb46a6ecc6f178',
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\php-stubs\\wordpress-stubs\\wordpress-stubs.php' => 'ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
  ),
  'composerLocks' => 
  array (
    'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/composer.lock' => 'e81a26358d51442231c4ca19efc818019dc6c370ebfb5592f52eebf10b529f41',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'antecedent/patchwork' => 
        array (
          'pretty_version' => '2.2.3',
          'version' => '2.2.3.0',
          'reference' => '8b6b235f405af175259c8f56aea5fc23ab9f03ce',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../antecedent/patchwork',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brain/monkey' => 
        array (
          'pretty_version' => '2.7.0',
          'version' => '2.7.0.0',
          'reference' => 'ea3aeb3d559ba3c0930b3f4d210b665a4c044d83',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../brain/monkey',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'doctrine/instantiator' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../doctrine/instantiator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'firebase/php-jwt' => 
        array (
          'pretty_version' => 'v7.0.3',
          'version' => '7.0.3.0',
          'reference' => '28aa0694bcfdfa5e2959c394d5a1ee7a5083629e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../firebase/php-jwt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.9.0',
          'version' => '2.9.0.0',
          'reference' => '7d0ed42f28e42d61352a7a79de682e5e67fec884',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'opis/json-schema' => 
        array (
          'pretty_version' => '2.6.0',
          'version' => '2.6.0.0',
          'reference' => '8458763e0dd0b6baa310e04f1829fc73da4e8c8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../opis/json-schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'opis/string' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '3e4d2aaff518ac518530b89bb26ed40f4503635e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../opis/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'opis/uri' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '0f3ca49ab1a5e4a6681c286e0b2cc081b93a7d5a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../opis/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-stubs/wordpress-stubs' => 
        array (
          'pretty_version' => 'v6.9.1',
          'version' => '6.9.1.0',
          'reference' => 'f12220f303e0d7c0844c0e5e957b0c3cee48d2f7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../php-stubs/wordpress-stubs',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-stubs/wp-cli-stubs' => 
        array (
          'pretty_version' => 'v2.12.0',
          'version' => '2.12.0.0',
          'reference' => 'af16401e299a3fd2229bd0fa9a037638a4174a9d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../php-stubs/wp-cli-stubs',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.44',
          'version' => '2.1.44.0',
          'reference' => '4a88c083c668b2c364a425c9b3171b2d9ea5d218',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '9.2.32',
          'version' => '9.2.32.0',
          'reference' => '85402a822d1ecf1db1096959413d35e1c37cf1a5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '9.6.0',
          'version' => '9.6.0.0',
          'reference' => '70fc8be1d0b9fad56a199a4df5f9cfabfc246f84',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '2b56bea83a09de3ac06bb18b92f068e60cc6f50b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '1.0.8',
          'version' => '1.0.8.0',
          'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '4.0.10',
          'version' => '4.0.10.0',
          'reference' => 'e4df00b9b3571187db2831ae9aada2c6efbd715d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '25f207c40d62b8b7aa32f5ab026c53561964053a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ba01945089c3a293b01ba9badc29ad55b106b0bc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '5.1.5',
          'version' => '5.1.5.0',
          'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '4.0.8',
          'version' => '4.0.8.0',
          'reference' => '14c6ba52f95a36c3d27c835d65efc7123c446e8c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '5.0.8',
          'version' => '5.0.8.0',
          'reference' => 'b6781316bdcd28260904e7cc18ec983d0d2ef4f6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '1.0.4',
          'version' => '1.0.4.0',
          'reference' => 'e1e4a170560925c26d424b6a03aed157e7dcc5c5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => '539c6691e0623af6dc6f9c20384c120f963465a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => 
        array (
          'pretty_version' => '3.0.4',
          'version' => '3.0.4.0',
          'reference' => '05d5692a7993ecccd56a03e40cd7e5b09b1d404e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/resource-operations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'szepeviktor/phpstan-wordpress' => 
        array (
          'pretty_version' => 'v2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'aa722f037b2d034828cd6c55ebe9e5c74961927e',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../szepeviktor/phpstan-wordpress',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload/src/phpstan-bootstrap.php' => '260f9c1a586aa778a6ab6227ae20b1540010492ffb54d325d4cb46a6ecc6f178',
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\php-stubs\\wordpress-stubs\\wordpress-stubs.php' => 'ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\szepeviktor\\phpstan-wordpress\\bootstrap.php' => '56b6150374cbc0eea8645bfdbcab7b59105c6d31815a87cbc8f3494968bd4f64',
    'phar://C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'bz2',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'ftp',
    17 => 'gd',
    18 => 'gettext',
    19 => 'gmp',
    20 => 'hash',
    21 => 'iconv',
    22 => 'json',
    23 => 'libxml',
    24 => 'mbstring',
    25 => 'mysqli',
    26 => 'mysqlnd',
    27 => 'openssl',
    28 => 'pcre',
    29 => 'pdo_mysql',
    30 => 'pdo_sqlite',
    31 => 'random',
    32 => 'readline',
    33 => 'session',
    34 => 'sqlite3',
    35 => 'standard',
    36 => 'tokenizer',
    37 => 'xml',
    38 => 'xmlreader',
    39 => 'xmlwriter',
    40 => 'zip',
    41 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\tools\\phpstan\\stubs\\wordpress.stub.php' => 'e493b47694dca510645a81cdeae85ade98d447c313e0a04477442407b8fb1917',
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\tools\\phpstan\\stubs\\wp-rest.stub.php' => '39af16c9cd1a1bb288f21b3115a0021924fd0d1c7f70b9040bfc4590d5c3c577',
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\AdminPage.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #5 $callback of function add_menu_page expects \'\'|(callable(): mixed), \'apify_render…\' given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\AdminPage.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\AdminPage.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\ApifyClient.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access offset \'data\' on array<string, mixed>|WP_Error.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\ApifyClient.php',
       'line' => 83,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\ApifyClient.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 83,
       'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
       'identifier' => 'offsetAccess.nonOffsetAccessible',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php',
       'line' => 114,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 113,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 66,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $verifier of class Panda\\Apify\\Security\\RequestGuard constructor expects Panda\\Apify\\Security\\RequestVerifier, object given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined static method Panda\\Apify\\Services\\ApifySyncService::sync_feed().',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
       'line' => 151,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 151,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'staticMethod.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\LogsController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::verify().',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\LogsController.php',
       'line' => 63,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\LogsController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 63,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $verifier of class Panda\\Apify\\Security\\RequestGuard constructor expects Panda\\Apify\\Security\\RequestVerifier, object given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 58,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class Panda\\Apify\\Api\\Controllers\\SecureTestController not found.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\ClassConstFetch',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of function array_map expects (callable(array<string, mixed>): mixed)|null, Closure(Panda\\Apify\\Queries\\ApifyProductDto): array{id: int, external_id: string, shop: string, sku: string, title: string, price: float, currency: string, category: string, manufacturer: string, image_url: string, image_id: int, updated_at: string, created_at: string} given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Panda\\Apify\\Cache\\Apify_Product_Search::search() should return array<int, Panda\\Apify\\Queries\\ApifyProductDto> but returns array<int, array<string, mixed>>.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get_error_message() on array<string, mixed>|WP_Error.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access offset \'data\' on array<string, mixed>|WP_Error.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 91,
       'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
       'identifier' => 'offsetAccess.nonOffsetAccessible',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get_error_message() on array<string, mixed>|WP_Error.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'line' => 101,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 101,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $items of static method Panda\\Apify\\Services\\Apify_Sync_Service::sync_feed() expects array<int, array<string, mixed>>, array<string, mixed>|WP_Error given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'line' => 106,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 106,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $headers of method Panda\\Apify\\Feeds\\FeedClient::postWithRetry() expects array<string, non-empty-string>, array<string, string> given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Panda\\Apify\\Feeds\\FeedClient::getDatasetItemsPage() should return array<int, array<string, mixed>>|WP_Error but returns array<string, mixed>|WP_Error.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'line' => 75,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 75,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Generator expects value type array<int, array<string, mixed>>, array<int, array<string, mixed>>|WP_Error given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'line' => 100,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 100,
       'nodeType' => 'PhpParser\\Node\\Expr\\Yield_',
       'identifier' => 'generator.valueType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $response of method Panda\\Apify\\Feeds\\FeedClient::decode() expects array<string, mixed>|string|WP_HTTP_Requests_Response|WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary|null, array<string, array<int|string, int|string|WP_Http_Cookie>|string|WP_HTTP_Requests_Response|WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary|null>|WP_Error given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'line' => 122,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 122,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $response of method Panda\\Apify\\Feeds\\FeedClient::decode() expects array<string, mixed>|string|WP_HTTP_Requests_Response|WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary|null, array<string, mixed>|WP_Error|false given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'line' => 144,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 144,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $response of function wp_remote_retrieve_body expects array<string, mixed>|WP_Error|false, array<string, mixed>|string|WP_HTTP_Requests_Response|WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary|null given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'line' => 167,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 167,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Migrations.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Migrations.php',
       'line' => 60,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Migrations.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 59,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Migrations.php',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Migrations.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 77,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 107,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'line' => 157,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 156,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 175,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'line' => 194,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 193,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'line' => 234,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 233,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\DebugE2EController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'File ends with a trailing whitespace. This may cause problems when running the code in the web browser. Remove the closing ?> mark or remove the whitespace.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\DebugE2EController.php',
       'line' => 1,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\DebugE2EController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1,
       'nodeType' => 'PHPStan\\Node\\FileNode',
       'identifier' => 'whitespace.fileEnd',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $signature of function sodium_crypto_sign_verify_detached expects non-empty-string, string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $public_key of function sodium_crypto_sign_verify_detached expects non-empty-string, string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\JsonCanonicalizer.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Panda\\Apify\\Security\\JsonCanonicalizer::isAssoc() has parameter $arr with no value type specified in iterable type array.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\JsonCanonicalizer.php',
       'line' => 77,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\JsonCanonicalizer.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 77,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property Panda\\Apify\\Security\\RequestVerifier::$algorithm (\'ed25519\'|\'hmac\') does not accept string.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Static method Panda\\Apify\\Security\\NonceStore::remember() invoked with 2 parameters, 1 required.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'line' => 69,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 69,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'arguments.count',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $reason of method Panda\\Apify\\Security\\RequestVerifier::logResult() expects string, int|string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 91,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Panda\\Apify\\Security\\RequestVerifier::verify() should return WP_Error|true but returns WP_Error|false.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'line' => 93,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 93,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to static method getById() on an unknown class Panda\\Apify\\Security\\KeyStore.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'line' => 143,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 143,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to static method getKeyMap() on an unknown class Panda\\Apify\\Security\\KeyStore.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'line' => 144,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 144,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $signature of function sodium_crypto_sign_verify_detached expects non-empty-string, string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'line' => 147,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 147,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get_error_message() on array<string, mixed>|WP_Error.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get_error_message() on array<string, mixed>|WP_Error.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
       'line' => 137,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 136,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined static method Panda\\Apify\\Services\\Apify_Sync_Service::import_all_feeds().',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php',
       'line' => 103,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 103,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'staticMethod.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php',
       'line' => 142,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 142,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php',
       'line' => 215,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 215,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 76,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php',
       'line' => 149,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 149,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'linesToIgnore' => array (
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php' => 
  array (
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php' => 
    array (
      142 => NULL,
      215 => NULL,
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php' => 
  array (
    'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php' => 
    array (
      44 => NULL,
      76 => NULL,
      149 => NULL,
    ),
  ),
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\AdminPage.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'add_menu_page',
        1 => 17,
      ),
      1 => 
      array (
        0 => 'add_submenu_page',
        1 => 18,
      ),
      2 => 
      array (
        0 => 'add_menu_page',
        1 => 20,
      ),
      3 => 
      array (
        0 => 'update_option',
        1 => 46,
      ),
      4 => 
      array (
        0 => 'update_option',
        1 => 47,
      ),
      5 => 
      array (
        0 => 'update_option',
        1 => 48,
      ),
      6 => 
      array (
        0 => 'wp_nonce_field',
        1 => 57,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\ApifySecurityPage.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'add_menu_page',
        1 => 22,
      ),
      1 => 
      array (
        0 => 'check_admin_referer',
        1 => 60,
      ),
      2 => 
      array (
        0 => 'add_settings_error',
        1 => 65,
      ),
      3 => 
      array (
        0 => 'update_option',
        1 => 75,
      ),
      4 => 
      array (
        0 => 'wp_nonce_field',
        1 => 106,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\FeedSettingsPage.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'add_menu_page',
        1 => 21,
      ),
      1 => 
      array (
        0 => 'register_setting',
        1 => 34,
      ),
      2 => 
      array (
        0 => 'register_setting',
        1 => 35,
      ),
      3 => 
      array (
        0 => 'add_settings_section',
        1 => 37,
      ),
      4 => 
      array (
        0 => 'add_settings_field',
        1 => 44,
      ),
      5 => 
      array (
        0 => 'add_settings_field',
        1 => 52,
      ),
      6 => 
      array (
        0 => 'settings_fields',
        1 => 83,
      ),
      7 => 
      array (
        0 => 'submit_button',
        1 => 85,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'add_submenu_page',
        1 => 27,
      ),
      1 => 
      array (
        0 => 'wp_enqueue_script',
        1 => 43,
      ),
      2 => 
      array (
        0 => 'wp_localize_script',
        1 => 51,
      ),
      3 => 
      array (
        0 => 'check_ajax_referer',
        1 => 103,
      ),
      4 => 
      array (
        0 => 'wp_send_json_error',
        1 => 144,
      ),
      5 => 
      array (
        0 => 'wp_send_json_success',
        1 => 164,
      ),
      6 => 
      array (
        0 => 'check_ajax_referer',
        1 => 169,
      ),
      7 => 
      array (
        0 => 'wp_send_json_success',
        1 => 177,
      ),
      8 => 
      array (
        0 => 'check_ajax_referer',
        1 => 182,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\class-apify-settings-page.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'add_settings_field',
        1 => 2,
      ),
      1 => 
      array (
        0 => 'selected',
        1 => 9,
      ),
      2 => 
      array (
        0 => 'selected',
        1 => 10,
      ),
      3 => 
      array (
        0 => 'selected',
        1 => 11,
      ),
      4 => 
      array (
        0 => 'selected',
        1 => 12,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\ApifyClient.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'sleep',
        1 => 89,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
        ),
        1 => 'insert',
        2 => 99,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FoodController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'set_transient',
        1 => 58,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\LogsController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_send_json_error',
        1 => 17,
      ),
      1 => 
      array (
        0 => 'wp_send_json_error',
        1 => 39,
      ),
      2 => 
      array (
        0 => 'wp_send_json_error',
        1 => 51,
      ),
      3 => 
      array (
        0 => 'wp_send_json_error',
        1 => 66,
      ),
      4 => 
      array (
        0 => 'wp_send_json_error',
        1 => 75,
      ),
      5 => 
      array (
        0 => 'wp_send_json_success',
        1 => 81,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\ProductController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'usort',
        1 => 129,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Panda\\Apify\\Security\\RequestGuard',
        ),
        1 => 'protect',
        2 => 69,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'register_rest_route',
        1 => 16,
      ),
      1 => 
      array (
        0 => 'register_rest_route',
        1 => 31,
      ),
      2 => 
      array (
        0 => 'register_rest_route',
        1 => 36,
      ),
      3 => 
      array (
        0 => 'register_rest_route',
        1 => 42,
      ),
      4 => 
      array (
        0 => 'register_rest_route',
        1 => 47,
      ),
      5 => 
      array (
        0 => 'register_rest_route',
        1 => 54,
      ),
      6 => 
      array (
        0 => 'register_rest_route',
        1 => 60,
      ),
      7 => 
      array (
        0 => 'register_rest_route',
        1 => 66,
      ),
      8 => 
      array (
        0 => 'register_rest_route',
        1 => 73,
      ),
      9 => 
      array (
        0 => 'register_rest_route',
        1 => 80,
      ),
      10 => 
      array (
        0 => 'register_rest_route',
        1 => 87,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ProductRoute.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'register_rest_route',
        1 => 17,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\ApifyProductDto.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\DTO\\ApifyProductDto',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\DTO\\ApifyProductDto',
        1 => 'toArray',
        2 => 'Panda\\Apify\\DTO\\ApifyProductDto',
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Cache.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'delete',
        2 => 33,
      ),
      1 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'delete',
        2 => 34,
      ),
      2 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'delete',
        2 => 35,
      ),
      3 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'delete',
        2 => 40,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Feed_Loader.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'libxml_use_internal_errors',
        1 => 123,
      ),
      1 => 
      array (
        0 => 'update_option',
        1 => 270,
      ),
      2 => 
      array (
        0 => 'update_option',
        1 => 271,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'set',
        2 => 93,
      ),
      1 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'delete',
        2 => 282,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Product_Renderer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ob_start',
        1 => 34,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'set',
        2 => 61,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Search_Renderer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ob_start',
        1 => 35,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\ProductCache.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'set_transient',
        1 => 20,
      ),
      1 => 
      array (
        0 => 'delete_transient',
        1 => 25,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\SecureFeedLoader.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'set_transient',
        1 => 137,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'set',
        2 => 40,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\render.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ob_start',
        1 => 34,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Cron.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_schedule_event',
        1 => 29,
      ),
      1 => 
      array (
        0 => 'wp_clear_scheduled_hook',
        1 => 32,
      ),
      2 => 
      array (
        0 => 'set_transient',
        1 => 42,
      ),
      3 => 
      array (
        0 => 'sleep',
        1 => 127,
      ),
      4 => 
      array (
        0 => 'update_option',
        1 => 131,
      ),
      5 => 
      array (
        0 => 'update_option',
        1 => 132,
      ),
      6 => 
      array (
        0 => 'delete_transient',
        1 => 142,
      ),
      7 => 
      array (
        0 => 'wp_clear_scheduled_hook',
        1 => 148,
      ),
      8 => 
      array (
        0 => 'delete_transient',
        1 => 149,
      ),
      9 => 
      array (
        0 => 'register_rest_route',
        1 => 154,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Import_Validator.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Core\\Apify_Import_Validator',
        1 => 'get_product_schema',
        2 => 'Panda\\Apify\\Core\\Apify_Import_Validator',
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Installer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'dbDelta',
        1 => 22,
      ),
      1 => 
      array (
        0 => 'dbDelta',
        1 => 42,
      ),
      2 => 
      array (
        0 => 'dbDelta',
        1 => 57,
      ),
      3 => 
      array (
        0 => 'dbDelta',
        1 => 67,
      ),
      4 => 
      array (
        0 => 'add_option',
        1 => 77,
      ),
      5 => 
      array (
        0 => 'add_option',
        1 => 78,
      ),
      6 => 
      array (
        0 => 'add_option',
        1 => 79,
      ),
      7 => 
      array (
        0 => 'add_option',
        1 => 80,
      ),
      8 => 
      array (
        0 => 'add_option',
        1 => 81,
      ),
      9 => 
      array (
        0 => 'add_option',
        1 => 82,
      ),
      10 => 
      array (
        0 => 'add_option',
        1 => 83,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\ApifySyncRunner.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_schedule_event',
        1 => 30,
      ),
      1 => 
      array (
        0 => 'update_option',
        1 => 38,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_schedule_event',
        1 => 29,
      ),
      1 => 
      array (
        0 => 'wp_unschedule_event',
        1 => 37,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\CronScheduler.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Cron\\CronScheduler',
        1 => 'getIntervalKey',
        2 => 'Panda\\Apify\\Cron\\CronScheduler',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_schedule_event',
        1 => 27,
      ),
      1 => 
      array (
        0 => 'wp_unschedule_event',
        1 => 37,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\DTO\\ApifyProductDto.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\DTO\\ApifyProductDto',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\DTO\\ApifyProductDto',
        1 => 'toArray',
        2 => 'Panda\\Apify\\DTO\\ApifyProductDto',
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Feeds\\FeedClient',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Client\\ClientContext.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Infrastructure\\Client\\ClientContext',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Schema.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'dbDelta',
        1 => 206,
      ),
      1 => 
      array (
        0 => 'dbDelta',
        1 => 207,
      ),
      2 => 
      array (
        0 => 'dbDelta',
        1 => 209,
      ),
      3 => 
      array (
        0 => 'dbDelta',
        1 => 210,
      ),
      4 => 
      array (
        0 => 'dbDelta',
        1 => 211,
      ),
      5 => 
      array (
        0 => 'dbDelta',
        1 => 212,
      ),
      6 => 
      array (
        0 => 'dbDelta',
        1 => 213,
      ),
      7 => 
      array (
        0 => 'dbDelta',
        1 => 214,
      ),
      8 => 
      array (
        0 => 'dbDelta',
        1 => 215,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Install.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'dbDelta',
        1 => 18,
      ),
      1 => 
      array (
        0 => 'add_option',
        1 => 31,
      ),
      2 => 
      array (
        0 => 'dbDelta',
        1 => 47,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Media\\ImageService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_update_attachment_metadata',
        1 => 103,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Media\\Images.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_update_attachment_metadata',
        1 => 105,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\ProductPage.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'get_header',
        1 => 65,
      ),
      1 => 
      array (
        0 => 'get_footer',
        1 => 74,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyPriceDto.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Queries\\ApifyPriceDto',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Queries\\ApifyPriceDto',
        1 => 'toArray',
        2 => 'Panda\\Apify\\Queries\\ApifyPriceDto',
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyProductDto.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Queries\\ApifyProductDto',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Queries\\ApifyProductDto',
        1 => 'toArray',
        2 => 'Panda\\Apify\\Queries\\ApifyProductDto',
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Queries\\ProductQuery',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Queries\\ProductRepository',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Security\\Ed25519Verifier',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\HmacVerifier.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Security\\HmacVerifier',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\JsonCanonicalizer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ksort',
        1 => 39,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\NonceStore.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'set_transient',
        1 => 21,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RateLimiter.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'set_transient',
        1 => 47,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestGuard.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Security\\RequestGuard',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Security\\RequestVerifier',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Panda\\Apify\\Services\\ApifySyncService',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Price_Service.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'set_transient',
        1 => 157,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Panda\\Apify\\Cache\\Apify_Cache',
        1 => 'set',
        2 => 62,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ProductService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'wp_cache_delete',
        1 => 176,
      ),
      1 => 
      array (
        0 => 'wp_cache_delete',
        1 => 177,
      ),
      2 => 
      array (
        0 => 'wp_cache_set',
        1 => 65,
      ),
      3 => 
      array (
        0 => 'wp_cache_set',
        1 => 169,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Panda\\Apify\\Services\\ProductService',
        ),
        1 => 'getProductWithOffers',
        2 => 196,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\Apify_Shortcodes.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ob_start',
        1 => 68,
      ),
      1 => 
      array (
        0 => 'ob_start',
        1 => 142,
      ),
      2 => 
      array (
        0 => 'ob_start',
        1 => 204,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\ProductShortcode.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ob_start',
        1 => 45,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'add_menu_page',
        1 => 23,
      ),
      1 => 
      array (
        0 => 'add_submenu_page',
        1 => 33,
      ),
      2 => 
      array (
        0 => 'add_submenu_page',
        1 => 42,
      ),
      3 => 
      array (
        0 => 'update_option',
        1 => 83,
      ),
      4 => 
      array (
        0 => 'update_option',
        1 => 84,
      ),
      5 => 
      array (
        0 => 'update_option',
        1 => 85,
      ),
      6 => 
      array (
        0 => 'update_option',
        1 => 86,
      ),
      7 => 
      array (
        0 => 'update_option',
        1 => 87,
      ),
      8 => 
      array (
        0 => 'update_option',
        1 => 88,
      ),
      9 => 
      array (
        0 => 'update_option',
        1 => 89,
      ),
      10 => 
      array (
        0 => 'update_option',
        1 => 90,
      ),
      11 => 
      array (
        0 => 'update_option',
        1 => 91,
      ),
      12 => 
      array (
        0 => 'update_option',
        1 => 92,
      ),
      13 => 
      array (
        0 => 'update_option',
        1 => 104,
      ),
      14 => 
      array (
        0 => 'wp_nonce_field',
        1 => 125,
      ),
      15 => 
      array (
        0 => 'submit_button',
        1 => 156,
      ),
      16 => 
      array (
        0 => 'wp_nonce_field',
        1 => 163,
      ),
      17 => 
      array (
        0 => 'submit_button',
        1 => 164,
      ),
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\uninstall.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'delete_option',
        1 => 10,
      ),
      1 => 
      array (
        0 => 'delete_option',
        1 => 11,
      ),
      2 => 
      array (
        0 => 'delete_option',
        1 => 12,
      ),
      3 => 
      array (
        0 => 'delete_option',
        1 => 13,
      ),
      4 => 
      array (
        0 => 'delete_option',
        1 => 14,
      ),
      5 => 
      array (
        0 => 'delete_option',
        1 => 15,
      ),
      6 => 
      array (
        0 => 'delete_option',
        1 => 16,
      ),
      7 => 
      array (
        0 => 'delete_option',
        1 => 17,
      ),
      8 => 
      array (
        0 => 'delete_option',
        1 => 18,
      ),
      9 => 
      array (
        0 => 'delete_option',
        1 => 19,
      ),
      10 => 
      array (
        0 => 'delete_option',
        1 => 20,
      ),
      11 => 
      array (
        0 => 'delete_option',
        1 => 21,
      ),
      12 => 
      array (
        0 => 'wp_clear_scheduled_hook',
        1 => 24,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Accounting\\Apify_Log_Service.php' => 
  array (
    'fileHash' => 'a568ecb35c5a425df3411f578ab5c3f051a6314310ae3a2f8f876e48773c4c50',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Accounting\\Ledger.php' => 
  array (
    'fileHash' => 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Accounting\\LedgerService.php' => 
  array (
    'fileHash' => 'b5c7854177c7a020fd4cbcc4eca319f53d1b50579b50f83183dd5643864dc5ae',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\AdminPage.php' => 
  array (
    'fileHash' => '3542d66b6a7fe87eada7bebbd920c55eee082c6c15c90e3cb4056ca30fc0748b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\Apify-duplicate-policy.php' => 
  array (
    'fileHash' => 'd42a468dfe26e5777719f27ff6df376f4fc84f1bb15f5e108a9e8c0d099cf6a5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\ApifySecurityPage.php' => 
  array (
    'fileHash' => '594c0ea418c008e8c069ad1dec311fc6c11c6b52e0237280f7348394600652f2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\FeedSettingsPage.php' => 
  array (
    'fileHash' => '08e9e2f4db2a6a070ee461fd1f1aa3dac5a47d9ef5484ad9cad6e29cfde7d630',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php' => 
  array (
    'fileHash' => '3c0128ff06bf3adde98be2c2af82df7de6ca384824cc841692294b34b00cf5ac',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\class-apify-settings-page.php' => 
  array (
    'fileHash' => '8674dacbae2825825c31142dc0ddc3d9b0babb9d3879420fe499f000c3d7a373',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\ApifyClient.php' => 
  array (
    'fileHash' => '9a7b872f1cafdeffec4fdeb0ecd0a70436a5dc5cf750c4b098ef9944fdb4b19b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php' => 
  array (
    'fileHash' => 'ff934b12992824a7c36c74ce9ae3aa036a8e98be4783be462e34ee1e63644050',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DebugCanonicalController.php' => 
  array (
    'fileHash' => '73e51aab1616500d8ca8e901d7c1a09538dd2930092ed05839fc09b45f8eb4d1',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php' => 
  array (
    'fileHash' => 'e2aeaa4c999732d70c628851ec80dc788cc370fbf391f96dd7e35a080737f066',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php' => 
  array (
    'fileHash' => 'aed093f91f579a074b1db16b3a28b3911a79872cb2a1c352e0569f73c940ea45',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FoodController.php' => 
  array (
    'fileHash' => 'bc7eeac5b5c8489e3a5be94f45d27f1978629afc60c8ce002d26f98491ad8a98',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\LogsController.php' => 
  array (
    'fileHash' => 'd08e380d1d55a53df98ab2a1bdcc477ada838b1ebc74599516c968427c402a95',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\MealController.php' => 
  array (
    'fileHash' => '5deffa1a559fe7f3a0a2da3f88b851b10bc7d423f74543aae852cde7d1b24bd0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\ProductController.php' => 
  array (
    'fileHash' => 'bae76ad74eb0f001b1045c85f394ad4f03bd21fc820cdaddc4abc9757acf7aa0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ProductRoute.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\SecureTestController.php' => 
  array (
    'fileHash' => '131d97bba551e2a88c4814446587ddc17ce5a2d9dcc6468532006b57a5197b30',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\PublicRateLimitMiddleware.php' => 
  array (
    'fileHash' => '18e6d865029bf260b36f99c4fe7313ee50bbed0bcb9165218daa76ea735b7093',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php' => 
  array (
    'fileHash' => '12bc79cfea5141697c892cdaabef677cca42dafcbc1ff75d4e61f89eeb2798ff',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php' => 
  array (
    'fileHash' => 'ca9ad5806315d9b5a2137add195abaf8651e386b848d9a69665b489bc5daa536',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ProductRoute.php' => 
  array (
    'fileHash' => 'e930a0bdb67b226857d5b9536fba9d4681aac2ddc3bb06700266769d36a6760f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\ApifyProductDto.php' => 
  array (
    'fileHash' => 'ebc5abd37ceda471f7337d1853b8e3cc60122f17a326183ccfbd7c6bdc298434',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Cache.php' => 
  array (
    'fileHash' => '02bb26f9d2ebeaaff4b32ec2811b7595d0301b844f77db9175f160c8eabff349',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Feed_Loader.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Product_Renderer.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php',
      3 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Price_Service.php',
      4 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Sync_Service.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Feed_Loader.php' => 
  array (
    'fileHash' => '2b8fdd99f0ccd52ef1b1c8203731188e5352b77642f556c2ac174f4c036b4ee2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Cron.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Product_Renderer.php' => 
  array (
    'fileHash' => '33255d30e8aa245a2d6366adf60dc382c06076b96d1257c336960003c3338cd4',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\Apify_Shortcodes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Search_Renderer.php' => 
  array (
    'fileHash' => 'd64bfee56e8d018de2b6bbb8c3cbfba98da1acea97fd93216d2893eb4d68b5df',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\Apify_Shortcodes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\ProductCache.php' => 
  array (
    'fileHash' => '1582fe81e4fe7144ee640bbb66691d0dc57cde6fcac1226f444b542771e72a37',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\render.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\SecureFeedLoader.php' => 
  array (
    'fileHash' => '0e37d2eb71cfe09a5b398d59b9ad645a4f667133dc6b225f75f2e36f3470af24',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php' => 
  array (
    'fileHash' => '52d0b7f697c854c078f3a5c0d6281736c2102bc25f257b9e7b75f62f354e0a22',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\render.php' => 
  array (
    'fileHash' => 'e4aae9d2d62b7ed4a202ab3432bef162758570997c3af8a5495c90ff8fff073b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\schemaJson.php' => 
  array (
    'fileHash' => 'ddc6041e992eba4fd47a88ecc72241f1697b42ee1842ebcf77d577aabbfb83d0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify-duplicate-policy.php' => 
  array (
    'fileHash' => 'd42a468dfe26e5777719f27ff6df376f4fc84f1bb15f5e108a9e8c0d099cf6a5',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\Apify-duplicate-policy.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Sync_Service.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Cron.php' => 
  array (
    'fileHash' => '629c260e3de1b48ca8b372b8af192d85a0a2a4fd6d8f07a6f5d672af152f7f61',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Installer.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Import_Sanitizer.php' => 
  array (
    'fileHash' => '270596e2ffe138104bf0a9993d7d29a599a5547e47e432ef51554c86cdf096b3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Import_Validator.php' => 
  array (
    'fileHash' => '861a71b63ade0b630184720b06c22f8468786ba179eb4a0040224b960695db03',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\FeedSyncService.php' => 
  array (
    'fileHash' => '625ee35a14872672345e3b9e5d96e7d7163ddc07de5e3646147fcdd083d0ead5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Helpers.php' => 
  array (
    'fileHash' => '03bba9a0fb8bdedbf19f2ca800351f42047b7ec442a9a542bd8865653195f2e6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Installer.php' => 
  array (
    'fileHash' => '37df3fd4e4d930c0f40ca3be38bbf934031e0d0357f7b67a49cec3997c00ee74',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\QueryService.php' => 
  array (
    'fileHash' => '213982d3188613400b24f4f5f0ddaf1f2c951ac35447df87c3f7244f8e731bb8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\PriceIntlShortcode.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\ApifySyncRunner.php' => 
  array (
    'fileHash' => '196d18b7db4450cf36f5294de160e88beab21f1678e1b9c61f454d6fbf02d5e2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php' => 
  array (
    'fileHash' => 'b40583d5d3bd5c9dbaf8d86696debd92240a23daf10eda662736917cfbe4a33e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\CronScheduler.php' => 
  array (
    'fileHash' => 'cc11253e0f6211cabc5982ced9bad64fcd3e81a0690faade2122b6399e4c2887',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\DTO\\ApifyProductDto.php' => 
  array (
    'fileHash' => 'ebc5abd37ceda471f7337d1853b8e3cc60122f17a326183ccfbd7c6bdc298434',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\ApifyProductDto.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\EndpointRegistry.php' => 
  array (
    'fileHash' => 'e7b32506586f486d5e1b64994c3430092af72bf00285ec3fb0c80a67e48ff0df',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php' => 
  array (
    'fileHash' => '2d2a7c202cf9124288f8d32c59d1de1c00d6223e240a4c5eef856af0ad811f1d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Http\\HttpClient.php' => 
  array (
    'fileHash' => '489266692ccc34e0b45fbb495705e2ad597cb40500bca78921cb46f385815a21',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FoodController.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\Client\\ClientContext.php' => 
  array (
    'fileHash' => '39adbb88d42a2dacf4743a7dab1960b4c7630d60b7840c464edf2d5f9d417e5d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\MembershipResolver.php' => 
  array (
    'fileHash' => '040aee00598fd855e742fe0e5d16a88cd809107fda3fbfe761dec51ffafe9b39',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\Client\\ClientContext.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\UserContext.php' => 
  array (
    'fileHash' => 'a7aac00a3093f529dab32b9d0154a53559e0233005da98c3a549e6e89575321f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\Client\\ClientContext.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Client\\ClientContext.php' => 
  array (
    'fileHash' => '97bd97a54a8c2d2d2994591971092ad239df79c40c5904135bcf3e199821ba11',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\ProductController.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Migrations.php' => 
  array (
    'fileHash' => '931ad0bdbaa7eb2e10d1d20a0b5f01f6b86dc851e1a8f180a12e9e126c5008b1',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Schema.php' => 
  array (
    'fileHash' => '8de6d64daf4cb6eb1618de9053d47b21e307ce2cb1d0b526c7ff866cb81ab1d2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceDetector.php' => 
  array (
    'fileHash' => 'ec5e418773969bf3c8d0ada7891de6034df4c1e7b28faa9fe464535186f815d1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Client\\ClientContext.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php' => 
  array (
    'fileHash' => '8b07e56139ce674773fcfae81673965541080fadab9de576fa0a3591f90630b7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Install.php' => 
  array (
    'fileHash' => 'e2c9ce6a0e6cfaebd9b15cfc4dc5f6757a4f7b048dd3cb3022fbe1a93e50db93',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Media\\ImageService.php' => 
  array (
    'fileHash' => 'bf0b394af16183440b3eac37ea052b1840ace4819e8a913177989e2bd6ee68dc',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Media\\Images.php' => 
  array (
    'fileHash' => 'd8fd9ef765f0a7e88108f922d097b49927cb91a59297aee49be9b99bc3b805da',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\ProductPage.php' => 
  array (
    'fileHash' => '3ce543c5c205e550865b1dc53c8c47dd149b9dffd06283f7e2863ff079b71d7d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\Renderer\\ProductRenderer.php' => 
  array (
    'fileHash' => '7cf8f49064d548b333d1c109277588465cc8bffbf392158aff24ada086e492f8',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\ProductPage.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\ProductShortcode.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\Templates\\product-detail.php' => 
  array (
    'fileHash' => 'fb80c164ef139afec810b9ca168eb0a45ee346ac983dabfa13b1de050ff1d1c1',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyPriceDto.php' => 
  array (
    'fileHash' => 'ee68c01a19e3a48dae4a4e7d70d105e2d244726cc21c57f96e31ab1e6fdd3c94',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyProductDto.php' => 
  array (
    'fileHash' => '8001eab332d2d1f4b07f9a6080647491192c34bb7d06a207eaafd5bd6feba1d1',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyProductQuery.php' => 
  array (
    'fileHash' => 'a11aa0985b2080b821bd741e2f98ece2d76a68d642607c82ff21a1e55fe7634c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Search_Renderer.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Price_Service.php',
      3 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\Apify_Shortcodes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php' => 
  array (
    'fileHash' => '1d95baf9a17d80c53769385a35518d632228b01537894cad6a8bd85dd81b5b1d',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ProductService.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php' => 
  array (
    'fileHash' => '933202e4fba82610f2d92c891d64b20f25119fb991a960c37750fca278fb1868',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Sync_Service.php',
      3 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ProductService.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\DebugE2EController.php' => 
  array (
    'fileHash' => '7eb70257593da06f682a3ddda54a9d260d4fc514f645237f5ca74b08f8da61a6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php' => 
  array (
    'fileHash' => 'f957ea2254664874d1c28d6f96844f67dc3eccd6aac1eab2296a297a35610b08',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\SignatureVerifierFactory.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\HmacVerifier.php' => 
  array (
    'fileHash' => '2c6e69b2c605bdfc02f65b169b0895a51204e6050531b25d1bb9831e4e94fafd',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\JsonCanonicalizer.php' => 
  array (
    'fileHash' => 'cdb2f5f00249c39264b4caa85f934c242772e83b99a2fba0a97816758cf816cb',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DebugCanonicalController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\NonceStore.php' => 
  array (
    'fileHash' => '735e7ff1d10e698610362fac4648adc8cf64298f54beb6d70b9cace5981b64cf',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RateLimiter.php' => 
  array (
    'fileHash' => '2d00c2e2825acd81b4afe7cabd50c477cc13892999423e0c5a7c464d24e33601',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\PublicRateLimitMiddleware.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestGuard.php' => 
  array (
    'fileHash' => '6e3f25e0b5b108a73bcc5d40ab04169d46871c218fcbd9135baded02b76e3d48',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestSigner.php' => 
  array (
    'fileHash' => 'ce872f736c2aa18635a9aa126ccb876ed0d347ea6e4ff2447b156db5d66d8ca3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php' => 
  array (
    'fileHash' => 'dcc3b72b0d8f927f6f8a9a6e0de346b26c401bcb84d3567520e43767494c4cc4',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestGuard.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\SignatureVerifierFactory.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\SignatureVerifierFactory.php' => 
  array (
    'fileHash' => 'f91ab8f14438b28f76ba394dc7851e1b6ae40513f1aa13265763fd25957df73c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\LogsController.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\SignatureVerifierInterface.php' => 
  array (
    'fileHash' => '3cd628bb3c9f48894a3e6cb9df9944773671e3622295b69a1352b96ecf9c73f7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\HmacVerifier.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php' => 
  array (
    'fileHash' => '1135c7e9c5e5a1953235bc4821fab68b8d98e456bb72735bd18d9deaf1dd8aa3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\ApifySyncRunner.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Price_Service.php' => 
  array (
    'fileHash' => 'f64061824880a4a55310460f68172905cd5f61249b47bef027c1d91fbc30b91e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Product_Renderer.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\render.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\Apify_Shortcodes.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Sync_Service.php' => 
  array (
    'fileHash' => '80cd8085f4bca0f49f475847b1fd391241e54914e54a629cb05b65638a577fb6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Cron.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ProductService.php' => 
  array (
    'fileHash' => '4d5f63e834bc2f7c01f504c13e7ffb1c71708e3226bba22fbe4458dab783f781',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\ProductController.php',
      1 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\ProductPage.php',
      2 => 'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\ProductShortcode.php',
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\Apify_Shortcodes.php' => 
  array (
    'fileHash' => '0d200b12ff2a6cf8ad1fa93d49a4d8601fbd04b0edbe9b2c942f19c8d16eca56',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\PriceIntlShortcode.php' => 
  array (
    'fileHash' => '1d7d85a766b54d3d527d53a10c31a9b2951c20f9aeb6d27eec5a718ea008e1c4',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\ProductShortcode.php' => 
  array (
    'fileHash' => '3718ffa97da9d25da1dc934a34632bd81bbb0c7e890aa91b50ac3100c51395dd',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Templates\\Partials\\best-offer.php' => 
  array (
    'fileHash' => '0592ccc858c0cd7c957f20f224d025c37b1541dfd0f447da3fb1fa3ee4df3612',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Templates\\Partials\\price-row.php' => 
  array (
    'fileHash' => '76274ff7116dc5713b5088e588d6bae501c121a197fda403ad15c530df6628a1',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Templates\\Partials\\product-row.php' => 
  array (
    'fileHash' => '3d696b78a2d674f6653218d5a9bb7180396e893effb293639fbbe0e57a9a6ef6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Templates\\Product-detail.php' => 
  array (
    'fileHash' => '066201104074b9b458d3e12c081f69487534fceb6a80f16d25d85adb7809dd40',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Templates\\Product\\product-detail.php' => 
  array (
    'fileHash' => '82e8c32f6020bc0f6c75f88e841ec707e584e7887044afe2044df8f4453c17c0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php' => 
  array (
    'fileHash' => 'daa16a57f536d76c1e4eaa279bd15d45eb4b48910062345dad6c0513740ecc7d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\uninstall.php' => 
  array (
    'fileHash' => '499b5e2c94b32222cbf8a55ee52512e39083aa71b8257ded4df92941625347c6',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Accounting\\Apify_Log_Service.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Accounting\\Apify_Log_Service',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'log',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @param array<string, mixed> $context
 */',
             'namespace' => 'Panda\\Apify\\Accounting',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Accounting\\LedgerService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Accounting\\LedgerService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recordDataCost',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mb',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\AdminPage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Admin\\AdminPage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dashboard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'settings',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\Apify-duplicate-policy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\Apify_Duplicate_Policy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_UPDATE',
               'value' => '\'update\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_SKIP',
               'value' => '\'skip\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_ERROR',
               'value' => '\'error\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_LOG',
               'value' => '\'log\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_mode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'should_throw',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'should_skip',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'should_log',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\ApifySecurityPage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Admin\\ApifySecurityPage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addMenu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\FeedSettingsPage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Admin\\FeedSettingsPage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerSettings',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'batchField',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cronField',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Admin\\LogsPage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Admin\\LogsPage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'assets',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hook',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ajaxLoad',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ajaxClear',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ajaxExport',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\ApifyClient.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\ApifyClient',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'token',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'baseUrl',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'runActor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $actorId
     * @param array<string, mixed> $input
     * @return array<string, mixed>|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Api',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'actorId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDatasetItems',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $datasetId
     * @param int $limit
     * @return array<string, mixed>|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Api',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'datasetId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRun',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $runId
     * @return array<string, mixed>|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Api',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'runId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'waitForRun',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $runId
     * @param int $timeoutSec
     * @return array<string, mixed>|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Api',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'runId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'timeoutSec',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\AnalyticsController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Controllers\\AnalyticsController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trackOfferClick',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * 🔹 Single event (fallback)
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_rest_response' => 'WP_REST_Response',
              'clientcontext' => 'Panda\\Apify\\Infrastructure\\Client\\ClientContext',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trackBatch',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * 🔥 Batch endpoint (main)
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_rest_response' => 'WP_REST_Response',
              'clientcontext' => 'Panda\\Apify\\Infrastructure\\Client\\ClientContext',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DebugCanonicalController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Controllers\\DebugCanonicalController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\DeviceController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Controllers\\DeviceController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'init',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * 🔐 INIT (vytvoření challenge)
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_rest_response' => 'WP_REST_Response',
              'devicerepository' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
              'devicedetector' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'complete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * 🔐 COMPLETE (ověření + registrace device)
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_rest_response' => 'WP_REST_Response',
              'devicerepository' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
              'devicedetector' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * 📋 LIST DEVICES
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_rest_response' => 'WP_REST_Response',
              'devicerepository' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
              'devicedetector' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'revoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ❌ REVOKE DEVICE
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_rest_response' => 'WP_REST_Response',
              'devicerepository' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
              'devicedetector' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rename',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ✏️ RENAME DEVICE (bonus – připraveno)
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_rest_response' => 'WP_REST_Response',
              'devicerepository' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
              'devicedetector' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FeedWebhookController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Controllers\\FeedWebhookController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return WP_Error|array{
     *     ok: bool,
     *     result: array<string, mixed>,
     *     next_offset: int|null,
     *     done: bool,
     *     total: int
     * }
     */',
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
              'wp_error' => 'WP_Error',
              'signatureverifierfactory' => 'Panda\\Apify\\Security\\SignatureVerifierFactory',
              'requestguard' => 'Panda\\Apify\\Security\\RequestGuard',
              'ratelimiter' => 'Panda\\Apify\\Security\\RateLimiter',
              'apify_log_service' => 'Panda\\Apify\\Accounting\\Apify_Log_Service',
              'apifysyncservice' => 'Panda\\Apify\\Services\\ApifySyncService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WP_Error|array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\FoodController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Controllers\\FoodController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\LogsController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Controllers\\LogsController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\MealController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Plugin\\Api\\Controllers\\MealController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\ProductController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Controllers\\ProductController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'detail',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Panda\\Apify\\Api\\Controllers',
             'uses' => 
            array (
              'productservice' => 'Panda\\Apify\\Services\\ProductService',
              'wp_rest_request' => 'WP_REST_Request',
              'wp_error' => 'WP_Error',
              'clientcontext' => 'Panda\\Apify\\Infrastructure\\Client\\ClientContext',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Controllers\\SecureTestController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Plugin\\Api\\Controllers\\SecureTestController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\PublicRateLimitMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Middleware\\PublicRateLimitMiddleware',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Middleware\\SecurityMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Middleware\\SecurityMiddleware',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ApiRoutes.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Routes\\ApiRoutes',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Api\\Routes\\ProductRoute.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Api\\Routes\\ProductRoute',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\ApifyProductDto.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\DTO\\ApifyProductDto',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'price',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'manufacturer',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'imageUrl',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'imageId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array{
     * id?:int,
     * external_id?:string,
     * shop?:string,
     * sku?:string,
     * title?:string,
     * price?:float|int|string,
     * currency?:string,
     * category?:string,
     * manufacturer?:string,
     * image_url?:string,
     * image_id?:int,
     * updated_at?:string,
     * created_at?:string
     * } $row
     */',
             'namespace' => 'Panda\\Apify\\DTO',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'row',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, scalar>
     */',
             'namespace' => 'Panda\\Apify\\DTO',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Cache.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\Apify_Cache',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'key',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'group',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'group',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'set',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'group',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ttl',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'group',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'flush_product',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'flush_feed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'feed_url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Feed_Loader.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\Apify_Feed_Loader',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'client',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'GuzzleHttp\\Client',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'load',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *  ok: bool,
     *  cached?: bool,
     *  shop: string,
     *  url: string,
     *  loaded_at?: string,
     *  error?: string,
     *  data: array<int, array<string, mixed>>
     * }
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ttl',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'parse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     * @param array<string, mixed> $schemaArray
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schemaArray',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normalize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_feeds',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_enabled_feeds',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_due_feeds',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mark_feed_run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $meta
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'errorformatter' => 'Opis\\JsonSchema\\Errors\\ErrorFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'meta',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clear_feed_cache',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Product_Renderer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\Apify_Product_Renderer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render_price_box',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'months',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'show_history',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\Apify_Search_Renderer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\Apify_Search_Renderer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render_search',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array{term:string, shop:string, limit:int} $params
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'apifyproductquery' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'params',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\ProductCache.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\ProductCache',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'set',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ttl',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\SecureFeedLoader.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\SecureFeedLoader',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'load',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *   ok: bool,
     *   data?: array<int, array<string, mixed>>,
     *   cached?: bool,
     *   error?: string
     * }
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ttl',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'force',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\class-apify-product-search.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\Apify_Product_Search',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, ApifyProductDto>
     */',
             'namespace' => 'Panda\\Apify\\Cache',
             'uses' => 
            array (
              'apifyproductquery' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
              'apifyproductdto' => 'Panda\\Apify\\Queries\\ApifyProductDto',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'term',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cache\\render.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cache\\Renderer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render_price_box',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'months',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'show_history',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify-duplicate-policy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\Apify_Duplicate_Policy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_UPDATE',
               'value' => '\'update\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_SKIP',
               'value' => '\'skip\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_ERROR',
               'value' => '\'error\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MODE_LOG',
               'value' => '\'log\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_mode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'should_throw',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'should_skip',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'should_log',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Cron.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\Apify_Cron',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register_hooks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deactivate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register_rest_route',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run_external',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'WP_REST_Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Import_Sanitizer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\Apify_Import_Sanitizer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sanitize_item',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @param array<string, mixed> $item
 * @return array<string, mixed>
 */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'item',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default_shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sanitize_items',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @param array<int, array<string, mixed>> $items
 * @return array<int, array<string, mixed>>
 */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'items',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default_shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sanitize_payload_recursive',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @param mixed $value
 * @return mixed
 */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Apify_Import_Validator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\Apify_Import_Validator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_product_schema',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *     schema: string,
     *     type: string,
     *     required: array<int, string>,
     *     properties: array<string, mixed>
     * }
     */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
              'runtimeexception' => 'RuntimeException',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'validationerror' => 'Opis\\JsonSchema\\Errors\\ValidationError',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate_items',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
              'runtimeexception' => 'RuntimeException',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'validationerror' => 'Opis\\JsonSchema\\Errors\\ValidationError',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'items',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate_item',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $item
     * @return array<string, mixed>
     */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
              'runtimeexception' => 'RuntimeException',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'validationerror' => 'Opis\\JsonSchema\\Errors\\ValidationError',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'item',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'decode_json',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $input
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
              'runtimeexception' => 'RuntimeException',
              'validator' => 'Opis\\JsonSchema\\Validator',
              'validationerror' => 'Opis\\JsonSchema\\Errors\\ValidationError',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\FeedSyncService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\FeedSyncService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'importFromFeed',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'feedUrl',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Helpers.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\Helpers',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normalize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hashProduct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'brand',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\Installer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\Installer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'activate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Core\\QueryService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Core\\QueryService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'priceStatsForSku',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @return array{
 * min: float,
 * max: float,
 * avg: float,
 * history: array<int, array<string, mixed>>
 *}|null
 */',
             'namespace' => 'Panda\\Apify\\Core',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'months',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateDailyStats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\ApifySyncRunner.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cron\\ApifySyncRunner',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'init',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'maybe_run_fallback',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\Apify_Feed_Runner.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cron\\Apify_Feed_Runner',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HOOK',
               'value' => '\'apify_run_feeds\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unschedule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Cron\\CronScheduler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Cron\\CronScheduler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HOOK',
               'value' => '\'apify_feed_cron\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'schedule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unschedule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reschedule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addInterval',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, array{interval:int, display:string}> $schedules
     * @return array<string, array{interval:int, display:string}>
     */',
             'namespace' => 'Panda\\Apify\\Cron',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schedules',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\DTO\\ApifyProductDto.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\DTO\\ApifyProductDto',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'price',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'manufacturer',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'imageUrl',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'imageId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array{
     * id?:int,
     * external_id?:string,
     * shop?:string,
     * sku?:string,
     * title?:string,
     * price?:float|int|string,
     * currency?:string,
     * category?:string,
     * manufacturer?:string,
     * image_url?:string,
     * image_id?:int,
     * updated_at?:string,
     * created_at?:string
     * } $row
     */',
             'namespace' => 'Panda\\Apify\\DTO',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'row',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, scalar>
     */',
             'namespace' => 'Panda\\Apify\\DTO',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\EndpointRegistry.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Feeds\\EndpointRegistry',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAllowed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Feeds\\FeedClient.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Feeds\\FeedClient',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'token',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'secret',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'runActor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $input
     * @return array<string, mixed>|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Feeds',
             'uses' => 
            array (
              'requestsigner' => 'Panda\\Apify\\Security\\RequestSigner',
              'wp_error' => 'WP_Error',
              'wp_http_cookie' => 'WP_Http_Cookie',
              'wp_http_requests_response' => 'WP_HTTP_Requests_Response',
              'caseinsensitivedictionary' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'actorId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDatasetItemsPage',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Feeds',
             'uses' => 
            array (
              'requestsigner' => 'Panda\\Apify\\Security\\RequestSigner',
              'wp_error' => 'WP_Error',
              'wp_http_cookie' => 'WP_Http_Cookie',
              'wp_http_requests_response' => 'WP_HTTP_Requests_Response',
              'caseinsensitivedictionary' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'datasetId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offset',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'iterateDataset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Generator<int, array<int, array<string, mixed>>>
     */',
             'namespace' => 'Panda\\Apify\\Feeds',
             'uses' => 
            array (
              'requestsigner' => 'Panda\\Apify\\Security\\RequestSigner',
              'wp_error' => 'WP_Error',
              'wp_http_cookie' => 'WP_Http_Cookie',
              'wp_http_requests_response' => 'WP_HTTP_Requests_Response',
              'caseinsensitivedictionary' => 'WpOrg\\Requests\\Utility\\CaseInsensitiveDictionary',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Generator',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'datasetId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Http\\HttpClient.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Http\\HttpClient',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'timeout',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getJson',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @param array<string, non-empty-string> $headers
 * @return array<string, mixed>
 */',
             'namespace' => 'Panda\\Apify\\Http',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'postJson',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @param array<string, mixed> $body
 * @param array<string, non-empty-string> $headers
 * @return array<string, mixed>
 */',
             'namespace' => 'Panda\\Apify\\Http',
             'uses' => 
            array (
              'client' => 'GuzzleHttp\\Client',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\Client\\ClientContext.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Plugin\\Infrastructure\\Client\\ClientContext',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolve',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *   user_id:int,
     *   plan:string
     * }
     */',
             'namespace' => 'Plugin\\Infrastructure\\Client',
             'uses' => 
            array (
              'usercontext' => 'Plugin\\Infrastructure\\Auth\\UserContext',
              'membershipresolver' => 'Plugin\\Infrastructure\\Auth\\MembershipResolver',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\MembershipResolver.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Plugin\\Infrastructure\\Auth\\MembershipResolver',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'FREE',
               'value' => '\'free\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'PREMIUM',
               'value' => '\'premium\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolve',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isPremium',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Auth\\UserContext.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Plugin\\Infrastructure\\Auth\\UserContext',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUserId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLogged',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Client\\ClientContext.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Infrastructure\\Client\\ClientContext',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromGlobals',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolve',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lightweight context pro API (user + plan)
     *
     * @return array{
     *     user_id: int|null,
     *     device_id: string|null,
     *     ip: string|null,
     *     ua: string|null,
     *     plan: string
     * }
     */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Client',
             'uses' => 
            array (
              'devicedetector' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Full context (device + prosted)
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Client',
             'uses' => 
            array (
              'devicedetector' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Migrations.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Infrastructure\\Database\\Migrations',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Database\\Schema.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Plugin\\Infrastructure\\Db\\Schema',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'install',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceDetector.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceDetector',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ua',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *     device_type: string|null,
     *     os: string|null,
     *     browser: string|null,
     *     ua: string,
     *     ip: string|null
     * }
     */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'WP_REST_Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromGlobals',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isMobile',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isTablet',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isDesktop',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isBot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'type',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \'mobile\'|\'tablet\'|\'desktop\'|\'bot\'
     */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isTouch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'context',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, bool|string>
     */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
             'uses' => 
            array (
              'wp_rest_request' => 'WP_REST_Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Infrastructure\\Device\\DeviceRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Infrastructure\\Device\\DeviceRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'db',
               'type' => 'wpdb',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByUser',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string,mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'insert',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @param array{
 *     id: string,
 *     user_id?: int|null,
 *     public_key: string,
 *     device_name?: string|null,
 *     platform?: string|null,
 *     device_type?: string|null,
 *     app_version?: string|null,
 *     locale?: string|null,
 *     last_seen_at?: string|null
 * } $data
 */',
             'namespace' => 'Panda\\Apify\\Infrastructure\\Device',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateLastSeen',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rename',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Install.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'apify_install',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @return void
 */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => 'void',
       'parameters' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Media\\ImageService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Media\\ImageService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'table',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'find_attachment_by_checksum',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checksum',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checksum',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'action_badge_html',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Media\\Images.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Media\\Images',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fetch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByChecksum',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checksum',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checksum',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\ProductPage.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Presentation\\ProductPage',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Presentation\\Renderer\\ProductRenderer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Presentation\\Renderer\\ProductRenderer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $product
     * @param array<int, array<string, mixed>> $offers
     * @param array<string, mixed>|null $bestOffer
     * @param array<string, mixed> $meta
     */',
             'namespace' => 'Panda\\Apify\\Presentation\\Renderer',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bestOffer',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'meta',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyPriceDto.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Queries\\ApifyPriceDto',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'productId',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shop',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sku',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'price',
          ),
           'phpDoc' => NULL,
           'type' => 'float',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'currency',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordedAt',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'price',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recordedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array{
     *     product_id?: int|string,
     *     shop?: string,
     *     sku?: string,
     *     price?: float|int|string,
     *     currency?: string,
     *     recorded_at?: string
     * } $row
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'row',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *     product_id: int,
     *     shop: string,
     *     sku: string,
     *     price: float,
     *     currency: string,
     *     recorded_at: string
     * }
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyProductDto.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Queries\\ApifyProductDto',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'id',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'externalId',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shop',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sku',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'price',
          ),
           'phpDoc' => NULL,
           'type' => 'float',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'currency',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'category',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'manufacturer',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'imageUrl',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'imageId',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'updatedAt',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'createdAt',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'price',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'manufacturer',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'imageUrl',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'imageId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'updatedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array{
     * id?:int,
     * external_id?:string,
     * shop?:string,
     * sku?:string,
     * title?:string,
     * price?:float|int|string,
     * currency?:string,
     * category?:string,
     * manufacturer?:string,
     * image_url?:string,
     * image_id?:int,
     * update_at?:string,
     * created_at?:string
     * }$row
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'row',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * @return array{
 * id:int,
 * external_id:string,
 * shop:string,
 * sku:string,
 * title:string,
 * price:float,
 * currency:string,
 * category:string,
 * manufacturer:string,
 * image_url:string,
 * image_id:int,
 * updated_at:string,
 * created_at:string
 * }
 */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ApifyProductQuery.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'productsTable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'historyTable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findIdByExternalId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'externalId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findIdBySku',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getById',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBySku',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_latest_products',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $filters
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPriceHistory',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'months',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getLastHistoryRow',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getLatestProducts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $args
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'args',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductQuery.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Queries\\ProductQuery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'db',
               'type' => 'wpdb',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findBestOffer',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int,int> $ids
     * @return array<string,mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ids',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findLatestPrices',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int,int> $ids
     * @return array<int,array<string,mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ids',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getLatestProducts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $args
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'args',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Queries\\ProductRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Queries\\ProductRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'db',
               'type' => 'wpdb',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'upsertProduct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $data
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'insertPrice',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'region',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'price',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapCanonical',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'canonicalHash',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'region',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findCanonical',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hash',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findCanonicalBySlug',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * 🔥 slug lookup
     * @return array<string, mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'slug',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAllByCanonical',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hash',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getOffers',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, int> $productIds
     * @return array<int, array<string, mixed>>
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productIds',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRatingStats',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * 🔥 reviews stats
     * @return array{avg:float|null,count:int}
     */',
             'namespace' => 'Panda\\Apify\\Queries',
             'uses' => 
            array (
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'canonicalHash',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\Ed25519Verifier.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\Ed25519Verifier',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'publicKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\HmacVerifier.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\HmacVerifier',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Panda\\Apify\\Security\\SignatureVerifierInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string[] $secrets
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'secrets',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\JsonCanonicalizer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\JsonCanonicalizer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'canonicalize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'json',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\NonceStore.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\NonceStore',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'remember',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'nonce',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RateLimiter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\RateLimiter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'check',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'allow',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'window',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestGuard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\RequestGuard',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'verifier',
               'type' => 'Panda\\Apify\\Security\\RequestVerifier',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'protect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'true|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestSigner.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\RequestSigner',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sign',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *   signature:string,
     *   nonce:string,
     *   timestamp:int
     * }
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'secret',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\RequestVerifier.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\RequestVerifier',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string[] $keys
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
              'apify_log_service' => 'Panda\\Apify\\Accounting\\Apify_Log_Service',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'keys',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ttl',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'algorithm',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
              'apify_log_service' => 'Panda\\Apify\\Accounting\\Apify_Log_Service',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\SignatureVerifierFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\SignatureVerifierFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $params
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'object',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'algorithm',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'params',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Security\\SignatureVerifierInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Panda\\Apify\\Security\\SignatureVerifierInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */',
             'namespace' => 'Panda\\Apify\\Security',
             'uses' => 
            array (
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool|WP_Error',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'body',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ApifySyncService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Services\\ApifySyncService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'db',
               'type' => 'wpdb',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'client',
               'type' => 'Panda\\Apify\\Api\\ApifyClient',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repo',
               'type' => 'Panda\\Apify\\Queries\\ProductRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'runFeed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'feedId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'import_all_feeds',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<int, int>
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'apifyclient' => 'Panda\\Apify\\Api\\ApifyClient',
              'productrepository' => 'Panda\\Apify\\Queries\\ProductRepository',
              'apifyproductdto' => 'Panda\\Apify\\DTO\\ApifyProductDto',
              'wpdb' => 'wpdb',
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Price_Service.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Services\\Apify_Price_Service',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_stats',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'apifyproductquery' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
              'apify_cache' => 'Panda\\Apify\\Cache\\Apify_Cache',
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'months',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get_last_price',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'is_price_dropping',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'load',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *   ok: bool,
     *   data?: array<int, array<string, mixed>>,
     *   cached?: bool,
     *   error?: string
     * }
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'apifyproductquery' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
              'apify_cache' => 'Panda\\Apify\\Cache\\Apify_Cache',
              'wp_error' => 'WP_Error',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ttl',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'force',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\Apify_Sync_Service.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Services\\Apify_Sync_Service',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sync_feed',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, array<string, mixed>> $items
     * @return array{
     *   inserted:int,
     *   updated:int,
     *   skipped:int,
     *   errors:array<int, string>
     * }
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'productrepository' => 'Panda\\Apify\\Queries\\ProductRepository',
              'apify_cache' => 'Panda\\Apify\\Cache\\Apify_Cache',
              'apify_duplicate_policy' => 'Panda\\Apify\\Core\\Apify_Duplicate_Policy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'items',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sync_product',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $item
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'productrepository' => 'Panda\\Apify\\Queries\\ProductRepository',
              'apify_cache' => 'Panda\\Apify\\Cache\\Apify_Cache',
              'apify_duplicate_policy' => 'Panda\\Apify\\Core\\Apify_Duplicate_Policy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'item',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'shop',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Services\\ProductService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Services\\ProductService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'db',
               'type' => 'wpdb',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProductBySlugOrHash',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string,mixed>|null
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'productrepository' => 'Panda\\Apify\\Queries\\ProductRepository',
              'productquery' => 'Panda\\Apify\\Queries\\ProductQuery',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getProductWithOffers',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{
     *   product: array<string,mixed>,
     *   best_offer: array<string,mixed>|null,
     *   offers: array<int, array{shop:string, price:float, currency:string}>,
     *   price_min: float,
     *   price_max: float,
     *   rating_value: float|null,
     *   review_count: int|null
     * }|null
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'productrepository' => 'Panda\\Apify\\Queries\\ProductRepository',
              'productquery' => 'Panda\\Apify\\Queries\\ProductQuery',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'canonicalHash',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invalidate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invalidateBatch',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int,string> $values
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'productrepository' => 'Panda\\Apify\\Queries\\ProductRepository',
              'productquery' => 'Panda\\Apify\\Queries\\ProductQuery',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'warmup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int,string> $canonicalHashes
     */',
             'namespace' => 'Panda\\Apify\\Services',
             'uses' => 
            array (
              'productrepository' => 'Panda\\Apify\\Queries\\ProductRepository',
              'productquery' => 'Panda\\Apify\\Queries\\ProductQuery',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'canonicalHashes',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\Apify_Shortcodes.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Shortcodes\\Apify_Shortcodes',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'price_intl',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $atts
     */',
             'namespace' => 'Panda\\Apify\\Shortcodes',
             'uses' => 
            array (
              'apify_product_renderer' => 'Panda\\Apify\\Cache\\Apify_Product_Renderer',
              'apify_search_renderer' => 'Panda\\Apify\\Cache\\Apify_Search_Renderer',
              'apifyproductquery' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
              'apify_price_service' => 'Panda\\Apify\\Services\\Apify_Price_Service',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'atts',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'price_list',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $atts
     */',
             'namespace' => 'Panda\\Apify\\Shortcodes',
             'uses' => 
            array (
              'apify_product_renderer' => 'Panda\\Apify\\Cache\\Apify_Product_Renderer',
              'apify_search_renderer' => 'Panda\\Apify\\Cache\\Apify_Search_Renderer',
              'apifyproductquery' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
              'apify_price_service' => 'Panda\\Apify\\Services\\Apify_Price_Service',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'atts',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $atts
     */',
             'namespace' => 'Panda\\Apify\\Shortcodes',
             'uses' => 
            array (
              'apify_product_renderer' => 'Panda\\Apify\\Cache\\Apify_Product_Renderer',
              'apify_search_renderer' => 'Panda\\Apify\\Cache\\Apify_Search_Renderer',
              'apifyproductquery' => 'Panda\\Apify\\Queries\\ApifyProductQuery',
              'apify_price_service' => 'Panda\\Apify\\Services\\Apify_Price_Service',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'atts',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\PriceIntlShortcode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Shortcodes\\PriceIntlShortcode',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $atts
     */',
             'namespace' => 'Panda\\Apify\\Shortcodes',
             'uses' => 
            array (
              'queryservice' => 'Panda\\Apify\\Core\\QueryService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'atts',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\Shortcodes\\ProductShortcode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Shortcodes\\ProductShortcode',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string,string> $atts
     */',
             'namespace' => 'Panda\\Apify\\Shortcodes',
             'uses' => 
            array (
              'productservice' => 'Panda\\Apify\\Services\\ProductService',
              'productrenderer' => 'Panda\\Apify\\Presentation\\Renderer\\ProductRenderer',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'atts',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\ThinkPad\\Local Sites\\localwp1\\app\\public\\wp-content\\plugins\\apify-autoload\\includes\\class-apify-admin.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Panda\\Apify\\Apify_Admin',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dashboard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'settings',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'shortcodes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
