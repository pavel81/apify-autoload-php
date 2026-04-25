<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-wpdb
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'wpdb',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
    'namespace' => NULL,
    'name' => 'wpdb',
    'shortName' => 'wpdb',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * WordPress database access abstraction class.
 *
 * This class is used to interact with a database without needing to use raw SQL statements.
 * By default, WordPress uses this class to instantiate the global $wpdb object, providing
 * access to the WordPress database.
 *
 * It is possible to replace the global instance with your own by setting the $wpdb global variable
 * in wp-content/db.php file to your class. The wpdb class will still be included, so you can
 * extend it or simply use your own.
 *
 * @link https://developer.wordpress.org/reference/classes/wpdb/
 *
 * @since 0.71
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
    'startLine' => 61583,
    'endLine' => 63426,
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
      'show_errors' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'show_errors',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 61595,
            'endLine' => 61595,
            'startTokenPos' => 99461,
            'startFilePos' => 2067080,
            'endTokenPos' => 99461,
            'endFilePos' => 2067085,
          ),
        ),
        'docComment' => '/**
 * Whether to show SQL/DB errors.
 *
 * Default is to show errors if both WP_DEBUG and WP_DEBUG_DISPLAY evaluate to true.
 *
 * @since 0.71
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61595,
        'endLine' => 61595,
        'startColumn' => 9,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'suppress_errors' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'suppress_errors',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 61603,
            'endLine' => 61603,
            'startTokenPos' => 99472,
            'startFilePos' => 2067295,
            'endTokenPos' => 99472,
            'endFilePos' => 2067300,
          ),
        ),
        'docComment' => '/**
 * Whether to suppress errors during the DB bootstrapping. Default false.
 *
 * @since 2.5.0
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61603,
        'endLine' => 61603,
        'startColumn' => 9,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'last_error' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'last_error',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 61611,
            'endLine' => 61611,
            'startTokenPos' => 99483,
            'startFilePos' => 2067481,
            'endTokenPos' => 99483,
            'endFilePos' => 2067482,
          ),
        ),
        'docComment' => '/**
 * The error encountered during the last query.
 *
 * @since 2.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61611,
        'endLine' => 61611,
        'startColumn' => 9,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'num_queries' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'num_queries',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 61619,
            'endLine' => 61619,
            'startTokenPos' => 99494,
            'startFilePos' => 2067644,
            'endTokenPos' => 99494,
            'endFilePos' => 2067644,
          ),
        ),
        'docComment' => '/**
 * The number of queries made.
 *
 * @since 1.2.0
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61619,
        'endLine' => 61619,
        'startColumn' => 9,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'num_rows' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'num_rows',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 61627,
            'endLine' => 61627,
            'startTokenPos' => 99505,
            'startFilePos' => 2067816,
            'endTokenPos' => 99505,
            'endFilePos' => 2067816,
          ),
        ),
        'docComment' => '/**
 * Count of rows returned by the last query.
 *
 * @since 0.71
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61627,
        'endLine' => 61627,
        'startColumn' => 9,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rows_affected' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'rows_affected',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 61635,
            'endLine' => 61635,
            'startTokenPos' => 99516,
            'startFilePos' => 2067993,
            'endTokenPos' => 99516,
            'endFilePos' => 2067993,
          ),
        ),
        'docComment' => '/**
 * Count of rows affected by the last query.
 *
 * @since 0.71
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61635,
        'endLine' => 61635,
        'startColumn' => 9,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'insert_id' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'insert_id',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 61643,
            'endLine' => 61643,
            'startTokenPos' => 99527,
            'startFilePos' => 2068206,
            'endTokenPos' => 99527,
            'endFilePos' => 2068206,
          ),
        ),
        'docComment' => '/**
 * The ID generated for an AUTO_INCREMENT column by the last query (usually INSERT).
 *
 * @since 0.71
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61643,
        'endLine' => 61643,
        'startColumn' => 9,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'last_query' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'last_query',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The last query made.
 *
 * @since 0.71
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61651,
        'endLine' => 61651,
        'startColumn' => 9,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'last_result' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'last_result',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Results of the last query.
 *
 * @since 0.71
 *
 * @var stdClass[]|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61659,
        'endLine' => 61659,
        'startColumn' => 9,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'result' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'result',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database query result.
 *
 * Possible values:
 *
 * - `mysqli_result` instance for successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries
 * - `true` for other query types that were successful
 * - `null` if a query is yet to be made or if the result has since been flushed
 * - `false` if the query returned an error
 *
 * @since 0.71
 *
 * @var mysqli_result|bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61674,
        'endLine' => 61674,
        'startColumn' => 9,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'col_meta' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'col_meta',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 61682,
            'endLine' => 61682,
            'startTokenPos' => 99559,
            'startFilePos' => 2069249,
            'endTokenPos' => 99561,
            'endFilePos' => 2069255,
          ),
        ),
        'docComment' => '/**
 * Cached column info, for confidence checking data before inserting.
 *
 * @since 4.2.0
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61682,
        'endLine' => 61682,
        'startColumn' => 9,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'table_charset' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'table_charset',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 61690,
            'endLine' => 61690,
            'startTokenPos' => 99572,
            'startFilePos' => 2069446,
            'endTokenPos' => 99574,
            'endFilePos' => 2069452,
          ),
        ),
        'docComment' => '/**
 * Calculated character sets keyed by table name.
 *
 * @since 4.2.0
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61690,
        'endLine' => 61690,
        'startColumn' => 9,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'check_current_query' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'check_current_query',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\true',
          'attributes' => 
          array (
            'startLine' => 61698,
            'endLine' => 61698,
            'startTokenPos' => 99585,
            'startFilePos' => 2069670,
            'endTokenPos' => 99585,
            'endFilePos' => 2069674,
          ),
        ),
        'docComment' => '/**
 * Whether text fields in the current query need to be confidence checked.
 *
 * @since 4.2.0
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61698,
        'endLine' => 61698,
        'startColumn' => 9,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'col_info' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'col_info',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Saved info on the table column.
 *
 * @since 0.71
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61706,
        'endLine' => 61706,
        'startColumn' => 9,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queries' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'queries',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Log of queries that were executed, for debugging purposes.
 *
 * @since 1.5.0
 * @since 2.5.0 The third element in each query log was added to record the calling functions.
 * @since 5.1.0 The fourth element in each query log was added to record the start time.
 * @since 5.3.0 The fifth element in each query log was added to record custom data.
 *
 * @var array[] {
 *     Array of arrays containing information about queries that were executed.
 *
 *     @type array ...$0 {
 *         Data for each query.
 *
 *         @type string $0 The query\'s SQL.
 *         @type float  $1 Total time spent on the query, in seconds.
 *         @type string $2 Comma-separated list of the calling functions.
 *         @type float  $3 Unix timestamp of the time at the start of the query.
 *         @type array  $4 Custom query data.
 *     }
 * }
 * @phpstan-var array<int|string, array{
 *   0: string,
 *   1: float,
 *   2: string,
 *   3: float,
 *   4: array,
 * }>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61736,
        'endLine' => 61736,
        'startColumn' => 9,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reconnect_retries' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'reconnect_retries',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '5',
          'attributes' => 
          array (
            'startLine' => 61745,
            'endLine' => 61745,
            'startTokenPos' => 99610,
            'startFilePos' => 2071322,
            'endTokenPos' => 99610,
            'endFilePos' => 2071322,
          ),
        ),
        'docComment' => '/**
 * The number of times to retry reconnecting before dying. Default 5.
 *
 * @since 3.9.0
 *
 * @see wpdb::check_connection()
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61745,
        'endLine' => 61745,
        'startColumn' => 9,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'prefix' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'prefix',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 61755,
            'endLine' => 61755,
            'startTokenPos' => 99621,
            'startFilePos' => 2071580,
            'endTokenPos' => 99621,
            'endFilePos' => 2071581,
          ),
        ),
        'docComment' => '/**
 * WordPress table prefix.
 *
 * You can set this to have multiple WordPress installations in a single database.
 *
 * @since 2.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61755,
        'endLine' => 61755,
        'startColumn' => 9,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'base_prefix' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'base_prefix',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress base table prefix.
 *
 * @since 3.0.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61763,
        'endLine' => 61763,
        'startColumn' => 9,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ready' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'ready',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 61771,
            'endLine' => 61771,
            'startTokenPos' => 99639,
            'startFilePos' => 2071931,
            'endTokenPos' => 99639,
            'endFilePos' => 2071936,
          ),
        ),
        'docComment' => '/**
 * Whether the database queries are ready to start executing.
 *
 * @since 2.3.2
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61771,
        'endLine' => 61771,
        'startColumn' => 9,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'blogid' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'blogid',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 61779,
            'endLine' => 61779,
            'startTokenPos' => 99650,
            'startFilePos' => 2072074,
            'endTokenPos' => 99650,
            'endFilePos' => 2072074,
          ),
        ),
        'docComment' => '/**
 * Blog ID.
 *
 * @since 3.0.0
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61779,
        'endLine' => 61779,
        'startColumn' => 9,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'siteid' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'siteid',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 61787,
            'endLine' => 61787,
            'startTokenPos' => 99661,
            'startFilePos' => 2072212,
            'endTokenPos' => 99661,
            'endFilePos' => 2072212,
          ),
        ),
        'docComment' => '/**
 * Site ID.
 *
 * @since 3.0.0
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61787,
        'endLine' => 61787,
        'startColumn' => 9,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tables' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'tables',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array(\'posts\', \'comments\', \'links\', \'options\', \'postmeta\', \'terms\', \'term_taxonomy\', \'term_relationships\', \'termmeta\', \'commentmeta\')',
          'attributes' => 
          array (
            'startLine' => 61796,
            'endLine' => 61796,
            'startTokenPos' => 99672,
            'startFilePos' => 2072412,
            'endTokenPos' => 99702,
            'endFilePos' => 2072544,
          ),
        ),
        'docComment' => '/**
 * List of WordPress per-site tables.
 *
 * @since 2.5.0
 *
 * @see wpdb::tables()
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61796,
        'endLine' => 61796,
        'startColumn' => 9,
        'endColumn' => 159,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'old_tables' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'old_tables',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array(\'categories\', \'post2cat\', \'link2cat\')',
          'attributes' => 
          array (
            'startLine' => 61807,
            'endLine' => 61807,
            'startTokenPos' => 99713,
            'startFilePos' => 2072856,
            'endTokenPos' => 99722,
            'endFilePos' => 2072898,
          ),
        ),
        'docComment' => '/**
 * List of deprecated WordPress tables.
 *
 * \'categories\', \'post2cat\', and \'link2cat\' were deprecated in 2.3.0, db version 5539.
 *
 * @since 2.9.0
 *
 * @see wpdb::tables()
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61807,
        'endLine' => 61807,
        'startColumn' => 9,
        'endColumn' => 73,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'global_tables' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'global_tables',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array(\'users\', \'usermeta\')',
          'attributes' => 
          array (
            'startLine' => 61816,
            'endLine' => 61816,
            'startTokenPos' => 99733,
            'startFilePos' => 2073103,
            'endTokenPos' => 99739,
            'endFilePos' => 2073128,
          ),
        ),
        'docComment' => '/**
 * List of WordPress global tables.
 *
 * @since 3.0.0
 *
 * @see wpdb::tables()
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61816,
        'endLine' => 61816,
        'startColumn' => 9,
        'endColumn' => 59,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ms_global_tables' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'ms_global_tables',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array(\'blogs\', \'blogmeta\', \'signups\', \'site\', \'sitemeta\', \'registration_log\')',
          'attributes' => 
          array (
            'startLine' => 61825,
            'endLine' => 61825,
            'startTokenPos' => 99750,
            'startFilePos' => 2073336,
            'endTokenPos' => 99768,
            'endFilePos' => 2073412,
          ),
        ),
        'docComment' => '/**
 * List of Multisite global tables.
 *
 * @since 3.0.0
 *
 * @see wpdb::tables()
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61825,
        'endLine' => 61825,
        'startColumn' => 9,
        'endColumn' => 113,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'old_ms_global_tables' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'old_ms_global_tables',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array(\'sitecategories\')',
          'attributes' => 
          array (
            'startLine' => 61834,
            'endLine' => 61834,
            'startTokenPos' => 99779,
            'startFilePos' => 2073645,
            'endTokenPos' => 99782,
            'endFilePos' => 2073667,
          ),
        ),
        'docComment' => '/**
 * List of deprecated WordPress Multisite global tables.
 *
 * @since 6.1.0
 *
 * @see wpdb::tables()
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61834,
        'endLine' => 61834,
        'startColumn' => 9,
        'endColumn' => 63,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'comments' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'comments',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Comments table.
 *
 * @since 1.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61842,
        'endLine' => 61842,
        'startColumn' => 9,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commentmeta' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'commentmeta',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Comment Metadata table.
 *
 * @since 2.9.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61850,
        'endLine' => 61850,
        'startColumn' => 9,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'links' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'links',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Links table.
 *
 * @since 1.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61858,
        'endLine' => 61858,
        'startColumn' => 9,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'options',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Options table.
 *
 * @since 1.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61866,
        'endLine' => 61866,
        'startColumn' => 9,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'postmeta' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'postmeta',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Post Metadata table.
 *
 * @since 1.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61874,
        'endLine' => 61874,
        'startColumn' => 9,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'posts' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'posts',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Posts table.
 *
 * @since 1.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61882,
        'endLine' => 61882,
        'startColumn' => 9,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'terms' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'terms',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Terms table.
 *
 * @since 2.3.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61890,
        'endLine' => 61890,
        'startColumn' => 9,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'term_relationships' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'term_relationships',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Term Relationships table.
 *
 * @since 2.3.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61898,
        'endLine' => 61898,
        'startColumn' => 9,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'term_taxonomy' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'term_taxonomy',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Term Taxonomy table.
 *
 * @since 2.3.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61906,
        'endLine' => 61906,
        'startColumn' => 9,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'termmeta' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'termmeta',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Term Meta table.
 *
 * @since 4.4.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61914,
        'endLine' => 61914,
        'startColumn' => 9,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'usermeta' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'usermeta',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress User Metadata table.
 *
 * @since 2.3.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61922,
        'endLine' => 61922,
        'startColumn' => 9,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'users' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'users',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * WordPress Users table.
 *
 * @since 1.5.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61930,
        'endLine' => 61930,
        'startColumn' => 9,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'blogs' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'blogs',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Multisite Blogs table.
 *
 * @since 3.0.0
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61938,
        'endLine' => 61938,
        'startColumn' => 9,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'blogmeta' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'blogmeta',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Multisite Blog Metadata table.
 *
 * @since 5.1.0
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61946,
        'endLine' => 61946,
        'startColumn' => 9,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'registration_log' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'registration_log',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Multisite Registration Log table.
 *
 * @since 3.0.0
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61954,
        'endLine' => 61954,
        'startColumn' => 9,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'signups' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'signups',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Multisite Signups table.
 *
 * @since 3.0.0
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61962,
        'endLine' => 61962,
        'startColumn' => 9,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'site' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'site',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Multisite Sites table.
 *
 * @since 3.0.0
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61970,
        'endLine' => 61970,
        'startColumn' => 9,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sitecategories' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'sitecategories',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Multisite Sitewide Terms table.
 *
 * @since 3.0.0
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61978,
        'endLine' => 61978,
        'startColumn' => 9,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sitemeta' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'sitemeta',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Multisite Site Metadata table.
 *
 * @since 3.0.0
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61986,
        'endLine' => 61986,
        'startColumn' => 9,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'field_types' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'field_types',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 62002,
            'endLine' => 62002,
            'startTokenPos' => 99926,
            'startFilePos' => 2077207,
            'endTokenPos' => 99928,
            'endFilePos' => 2077213,
          ),
        ),
        'docComment' => '/**
 * Format specifiers for DB columns.
 *
 * Columns not listed here default to %s. Initialized during WP load.
 * Keys are column names, values are format types: \'ID\' => \'%d\'.
 *
 * @since 2.8.0
 *
 * @see wpdb::prepare()
 * @see wpdb::insert()
 * @see wpdb::update()
 * @see wpdb::delete()
 * @see wp_set_wpdb_vars()
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62002,
        'endLine' => 62002,
        'startColumn' => 9,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'charset' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'charset',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database table columns charset.
 *
 * @since 2.2.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62010,
        'endLine' => 62010,
        'startColumn' => 9,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'collate' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'collate',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database table columns collate.
 *
 * @since 2.2.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62018,
        'endLine' => 62018,
        'startColumn' => 9,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dbuser' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'dbuser',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database Username.
 *
 * @since 2.9.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62026,
        'endLine' => 62026,
        'startColumn' => 9,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dbpassword' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'dbpassword',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database Password.
 *
 * @since 3.1.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62034,
        'endLine' => 62034,
        'startColumn' => 9,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dbname' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'dbname',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database Name.
 *
 * @since 3.1.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62042,
        'endLine' => 62042,
        'startColumn' => 9,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dbhost' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'dbhost',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database Host.
 *
 * @since 3.1.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62050,
        'endLine' => 62050,
        'startColumn' => 9,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dbh' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'dbh',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database handle.
 *
 * Possible values:
 *
 * - `mysqli` instance during normal operation
 * - `null` if the connection is yet to be made or has been closed
 * - `false` if the connection has failed
 *
 * @since 0.71
 *
 * @var mysqli|false|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62064,
        'endLine' => 62064,
        'startColumn' => 9,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'func_call' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'func_call',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A textual description of the last query/get_row/get_var call.
 *
 * @since 3.0.0
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62072,
        'endLine' => 62072,
        'startColumn' => 9,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'is_mysql' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'is_mysql',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 62085,
            'endLine' => 62085,
            'startTokenPos' => 99995,
            'startFilePos' => 2079197,
            'endTokenPos' => 99995,
            'endFilePos' => 2079201,
          ),
        ),
        'docComment' => '/**
 * Whether MySQL is used as the database engine.
 *
 * Set in wpdb::db_connect() to true, by default. This is used when checking
 * against the required MySQL version for WordPress. Normally, a replacement
 * database drop-in (db.php) will skip these checks, but setting this to true
 * will force the checks to occur.
 *
 * @since 3.3.0
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62085,
        'endLine' => 62085,
        'startColumn' => 9,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'incompatible_modes' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'incompatible_modes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'array(\'NO_ZERO_DATE\', \'ONLY_FULL_GROUP_BY\', \'STRICT_TRANS_TABLES\', \'STRICT_ALL_TABLES\', \'TRADITIONAL\', \'ANSI\')',
          'attributes' => 
          array (
            'startLine' => 62093,
            'endLine' => 62093,
            'startTokenPos' => 100006,
            'startFilePos' => 2079384,
            'endTokenPos' => 100024,
            'endFilePos' => 2079493,
          ),
        ),
        'docComment' => '/**
 * A list of incompatible SQL modes.
 *
 * @since 3.9.0
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62093,
        'endLine' => 62093,
        'startColumn' => 9,
        'endColumn' => 151,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'time_start' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'time_start',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 62103,
            'endLine' => 62103,
            'startTokenPos' => 100035,
            'startFilePos' => 2079741,
            'endTokenPos' => 100035,
            'endFilePos' => 2079745,
          ),
        ),
        'docComment' => '/**
 * Time when the last query was performed.
 *
 * Only set when `SAVEQUERIES` is defined and truthy.
 *
 * @since 1.5.0
 *
 * @var float
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62103,
        'endLine' => 62103,
        'startColumn' => 9,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'error' => 
      array (
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'name' => 'error',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 62111,
            'endLine' => 62111,
            'startTokenPos' => 100046,
            'startFilePos' => 2079926,
            'endTokenPos' => 100046,
            'endFilePos' => 2079930,
          ),
        ),
        'docComment' => '/**
 * The last SQL error that was encountered.
 *
 * @since 2.5.0
 *
 * @var WP_Error|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62111,
        'endLine' => 62111,
        'startColumn' => 9,
        'endColumn' => 30,
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
          'dbuser' => 
          array (
            'name' => 'dbuser',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62129,
            'endLine' => 62129,
            'startColumn' => 13,
            'endColumn' => 19,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dbpassword' => 
          array (
            'name' => 'dbpassword',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
              0 => 
              array (
                'name' => 'SensitiveParameter',
                'isRepeated' => false,
                'arguments' => 
                array (
                ),
              ),
            ),
            'startLine' => 62130,
            'endLine' => 62131,
            'startColumn' => 13,
            'endColumn' => 23,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'dbname' => 
          array (
            'name' => 'dbname',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62132,
            'endLine' => 62132,
            'startColumn' => 13,
            'endColumn' => 19,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'dbhost' => 
          array (
            'name' => 'dbhost',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62133,
            'endLine' => 62133,
            'startColumn' => 13,
            'endColumn' => 19,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Connects to the database server and selects a database.
 *
 * Does the actual setting up
 * of the class properties and connection to the database.
 *
 * @since 2.0.8
 *
 * @link https://core.trac.wordpress.org/ticket/3354
 *
 * @param string $dbuser     Database user.
 * @param string $dbpassword Database password.
 * @param string $dbname     Database name.
 * @param string $dbhost     Database host.
 * @phpstan-return void
 */',
        'startLine' => 62128,
        'endLine' => 62136,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62145,
            'endLine' => 62145,
            'startColumn' => 31,
            'endColumn' => 35,
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
 * Makes private properties readable for backward compatibility.
 *
 * @since 3.5.0
 *
 * @param string $name The private member to get, and optionally process.
 * @return mixed The private member.
 */',
        'startLine' => 62145,
        'endLine' => 62147,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '__set' => 
      array (
        'name' => '__set',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62157,
            'endLine' => 62157,
            'startColumn' => 31,
            'endColumn' => 35,
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
            'startLine' => 62157,
            'endLine' => 62157,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Makes private properties settable for backward compatibility.
 *
 * @since 3.5.0
 *
 * @param string $name  The private member to set.
 * @param mixed  $value The value to set.
 * @phpstan-return void
 */',
        'startLine' => 62157,
        'endLine' => 62159,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62168,
            'endLine' => 62168,
            'startColumn' => 33,
            'endColumn' => 37,
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
 * Makes private properties check-able for backward compatibility.
 *
 * @since 3.5.0
 *
 * @param string $name The private member to check.
 * @return bool If the member is set or not.
 */',
        'startLine' => 62168,
        'endLine' => 62170,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '__unset' => 
      array (
        'name' => '__unset',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62178,
            'endLine' => 62178,
            'startColumn' => 33,
            'endColumn' => 37,
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
 * Makes private properties un-settable for backward compatibility.
 *
 * @since 3.5.0
 *
 * @param string $name The private member to unset.
 */',
        'startLine' => 62178,
        'endLine' => 62180,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'init_charset' => 
      array (
        'name' => 'init_charset',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets $this->charset and $this->collate.
 *
 * @since 3.1.0
 */',
        'startLine' => 62186,
        'endLine' => 62188,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'determine_charset' => 
      array (
        'name' => 'determine_charset',
        'parameters' => 
        array (
          'charset' => 
          array (
            'name' => 'charset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62209,
            'endLine' => 62209,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'collate' => 
          array (
            'name' => 'collate',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62209,
            'endLine' => 62209,
            'startColumn' => 53,
            'endColumn' => 60,
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
 * Determines the best charset and collation to use given a charset and collation.
 *
 * For example, when able, utf8mb4 should be used instead of utf8.
 *
 * @since 4.6.0
 *
 * @param string $charset The character set to check.
 * @param string $collate The collation to check.
 * @return array {
 *     The most appropriate character set and collation to use.
 *
 *     @type string $charset Character set.
 *     @type string $collate Collation.
 * }
 * @phpstan-return array{
 *   charset: string,
 *   collate: string,
 * }
 */',
        'startLine' => 62209,
        'endLine' => 62211,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'set_charset' => 
      array (
        'name' => 'set_charset',
        'parameters' => 
        array (
          'dbh' => 
          array (
            'name' => 'dbh',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62221,
            'endLine' => 62221,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'charset' => 
          array (
            'name' => 'charset',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62221,
                'endLine' => 62221,
                'startTokenPos' => 100189,
                'startFilePos' => 2083299,
                'endTokenPos' => 100189,
                'endFilePos' => 2083303,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62221,
            'endLine' => 62221,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'collate' => 
          array (
            'name' => 'collate',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62221,
                'endLine' => 62221,
                'startTokenPos' => 100196,
                'startFilePos' => 2083317,
                'endTokenPos' => 100196,
                'endFilePos' => 2083321,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62221,
            'endLine' => 62221,
            'startColumn' => 61,
            'endColumn' => 76,
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
 * Sets the connection\'s character set.
 *
 * @since 3.1.0
 *
 * @param mysqli $dbh     The connection returned by `mysqli_connect()`.
 * @param string $charset Optional. The character set. Default null.
 * @param string $collate Optional. The collation. Default null.
 */',
        'startLine' => 62221,
        'endLine' => 62223,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'set_sql_mode' => 
      array (
        'name' => 'set_sql_mode',
        'parameters' => 
        array (
          'modes' => 
          array (
            'name' => 'modes',
            'default' => 
            array (
              'code' => 'array()',
              'attributes' => 
              array (
                'startLine' => 62234,
                'endLine' => 62234,
                'startTokenPos' => 100215,
                'startFilePos' => 2083770,
                'endTokenPos' => 100217,
                'endFilePos' => 2083776,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62234,
            'endLine' => 62234,
            'startColumn' => 38,
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
 * Changes the current SQL mode, and ensures its WordPress compatibility.
 *
 * If no modes are passed, it will ensure the current SQL server modes are compatible.
 *
 * @since 3.9.0
 *
 * @param array $modes Optional. A list of SQL modes to set. Default empty array.
 * @phpstan-return void
 */',
        'startLine' => 62234,
        'endLine' => 62236,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'set_prefix' => 
      array (
        'name' => 'set_prefix',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62247,
            'endLine' => 62247,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'set_table_names' => 
          array (
            'name' => 'set_table_names',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 62247,
                'endLine' => 62247,
                'startTokenPos' => 100239,
                'startFilePos' => 2084317,
                'endTokenPos' => 100239,
                'endFilePos' => 2084321,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62247,
            'endLine' => 62247,
            'startColumn' => 45,
            'endColumn' => 68,
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
 * Sets the table prefix for the WordPress tables.
 *
 * @since 2.5.0
 *
 * @param string $prefix          Alphanumeric name for the new prefix.
 * @param bool   $set_table_names Optional. Whether the table names, e.g. wpdb::$posts,
 *                                should be updated or not. Default true.
 * @return string|WP_Error Old prefix or WP_Error on error.
 */',
        'startLine' => 62247,
        'endLine' => 62249,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'set_blog_id' => 
      array (
        'name' => 'set_blog_id',
        'parameters' => 
        array (
          'blog_id' => 
          array (
            'name' => 'blog_id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62259,
            'endLine' => 62259,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'network_id' => 
          array (
            'name' => 'network_id',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 62259,
                'endLine' => 62259,
                'startTokenPos' => 100261,
                'startFilePos' => 2084638,
                'endTokenPos' => 100261,
                'endFilePos' => 2084638,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62259,
            'endLine' => 62259,
            'startColumn' => 47,
            'endColumn' => 61,
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
 * Sets blog ID.
 *
 * @since 3.0.0
 *
 * @param int $blog_id
 * @param int $network_id Optional. Network ID. Default 0.
 * @return int Previous blog ID.
 */',
        'startLine' => 62259,
        'endLine' => 62261,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_blog_prefix' => 
      array (
        'name' => 'get_blog_prefix',
        'parameters' => 
        array (
          'blog_id' => 
          array (
            'name' => 'blog_id',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62271,
                'endLine' => 62271,
                'startTokenPos' => 100280,
                'startFilePos' => 2084997,
                'endTokenPos' => 100280,
                'endFilePos' => 2085001,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62271,
            'endLine' => 62271,
            'startColumn' => 41,
            'endColumn' => 56,
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
 * Gets blog prefix.
 *
 * @since 3.0.0
 *
 * @param int $blog_id Optional. Blog ID to retrieve the table prefix for.
 *                     Defaults to the current blog ID.
 * @return string Blog prefix.
 */',
        'startLine' => 62271,
        'endLine' => 62273,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'tables' => 
      array (
        'name' => 'tables',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
            'default' => 
            array (
              'code' => '\'all\'',
              'attributes' => 
              array (
                'startLine' => 62305,
                'endLine' => 62305,
                'startTokenPos' => 100299,
                'startFilePos' => 2086877,
                'endTokenPos' => 100299,
                'endFilePos' => 2086881,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62305,
            'endLine' => 62305,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 62305,
                'endLine' => 62305,
                'startTokenPos' => 100306,
                'startFilePos' => 2086894,
                'endTokenPos' => 100306,
                'endFilePos' => 2086898,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62305,
            'endLine' => 62305,
            'startColumn' => 48,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'blog_id' => 
          array (
            'name' => 'blog_id',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 62305,
                'endLine' => 62305,
                'startTokenPos' => 100313,
                'startFilePos' => 2086912,
                'endTokenPos' => 100313,
                'endFilePos' => 2086912,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62305,
            'endLine' => 62305,
            'startColumn' => 65,
            'endColumn' => 76,
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
 * Returns an array of WordPress tables.
 *
 * Also allows for the `CUSTOM_USER_TABLE` and `CUSTOM_USER_META_TABLE` to override the WordPress users
 * and usermeta tables that would otherwise be determined by the prefix.
 *
 * The `$scope` argument can take one of the following:
 *
 * - \'all\' - returns \'all\' and \'global\' tables. No old tables are returned.
 * - \'blog\' - returns the blog-level tables for the queried blog.
 * - \'global\' - returns the global tables for the installation, returning multisite tables only on multisite.
 * - \'ms_global\' - returns the multisite global tables, regardless if current installation is multisite.
 * - \'old\' - returns tables which are deprecated.
 *
 * @since 3.0.0
 * @since 6.1.0 `old` now includes deprecated multisite global tables only on multisite.
 *
 * @uses wpdb::$tables
 * @uses wpdb::$old_tables
 * @uses wpdb::$global_tables
 * @uses wpdb::$ms_global_tables
 * @uses wpdb::$old_ms_global_tables
 *
 * @param string $scope   Optional. Possible values include \'all\', \'global\', \'ms_global\', \'blog\',
 *                        or \'old\' tables. Default \'all\'.
 * @param bool   $prefix  Optional. Whether to include table prefixes. If blog prefix is requested,
 *                        then the custom users and usermeta tables will be mapped. Default true.
 * @param int    $blog_id Optional. The blog_id to prefix. Used only when prefix is requested.
 *                        Defaults to `wpdb::$blogid`.
 * @return string[] Table names. When a prefix is requested, the key is the unprefixed table name.
 */',
        'startLine' => 62305,
        'endLine' => 62307,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'select' => 
      array (
        'name' => 'select',
        'parameters' => 
        array (
          'db' => 
          array (
            'name' => 'db',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62320,
            'endLine' => 62320,
            'startColumn' => 32,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dbh' => 
          array (
            'name' => 'dbh',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62320,
                'endLine' => 62320,
                'startTokenPos' => 100335,
                'startFilePos' => 2087474,
                'endTokenPos' => 100335,
                'endFilePos' => 2087478,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62320,
            'endLine' => 62320,
            'startColumn' => 37,
            'endColumn' => 48,
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
 * Selects a database using the current or provided database connection.
 *
 * The database name will be changed based on the current database connection.
 * On failure, the execution will bail and display a DB error.
 *
 * @since 0.71
 *
 * @param string $db  Database name.
 * @param mysqli $dbh Optional. Database connection.
 *                    Defaults to the current database handle.
 */',
        'startLine' => 62320,
        'endLine' => 62322,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '_weak_escape' => 
      array (
        'name' => '_weak_escape',
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
            'startLine' => 62336,
            'endLine' => 62336,
            'startColumn' => 38,
            'endColumn' => 42,
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
 * Do not use, deprecated.
 *
 * Use esc_sql() or wpdb::prepare() instead.
 *
 * @since 2.8.0
 * @deprecated 3.6.0 Use wpdb::prepare()
 * @see wpdb::prepare()
 * @see esc_sql()
 *
 * @param string $data
 * @return string
 */',
        'startLine' => 62336,
        'endLine' => 62338,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '_real_escape' => 
      array (
        'name' => '_real_escape',
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
            'startLine' => 62349,
            'endLine' => 62349,
            'startColumn' => 38,
            'endColumn' => 42,
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
 * Real escape using mysqli_real_escape_string().
 *
 * @since 2.8.0
 *
 * @see mysqli_real_escape_string()
 *
 * @param string $data String to escape.
 * @return string Escaped string.
 */',
        'startLine' => 62349,
        'endLine' => 62351,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '_escape' => 
      array (
        'name' => '_escape',
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
            'startLine' => 62362,
            'endLine' => 62362,
            'startColumn' => 33,
            'endColumn' => 37,
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
 * Escapes data. Works on arrays.
 *
 * @since 2.8.0
 *
 * @uses wpdb::_real_escape()
 *
 * @param string|array $data Data to escape.
 * @return string|array Escaped data, in the same type as supplied.
 */',
        'startLine' => 62362,
        'endLine' => 62364,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'escape' => 
      array (
        'name' => 'escape',
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
            'startLine' => 62378,
            'endLine' => 62378,
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
 * Do not use, deprecated.
 *
 * Use esc_sql() or wpdb::prepare() instead.
 *
 * @since 0.71
 * @deprecated 3.6.0 Use wpdb::prepare()
 * @see wpdb::prepare()
 * @see esc_sql()
 *
 * @param string|array $data Data to escape.
 * @return string|array Escaped data, in the same type as supplied.
 */',
        'startLine' => 62378,
        'endLine' => 62380,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'escape_by_ref' => 
      array (
        'name' => 'escape_by_ref',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62390,
            'endLine' => 62390,
            'startColumn' => 39,
            'endColumn' => 44,
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
 * Escapes content by reference for insertion into the database, for security.
 *
 * @uses wpdb::_real_escape()
 *
 * @since 2.3.0
 *
 * @param string $data String to escape.
 */',
        'startLine' => 62390,
        'endLine' => 62392,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'quote_identifier' => 
      array (
        'name' => 'quote_identifier',
        'parameters' => 
        array (
          'identifier' => 
          array (
            'name' => 'identifier',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62401,
            'endLine' => 62401,
            'startColumn' => 42,
            'endColumn' => 52,
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
 * Quotes an identifier such as a table or field name.
 *
 * @since 6.2.0
 *
 * @param string $identifier Identifier to escape.
 * @return string Escaped identifier.
 */',
        'startLine' => 62401,
        'endLine' => 62403,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'prepare' => 
      array (
        'name' => 'prepare',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62469,
            'endLine' => 62469,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62469,
            'endLine' => 62469,
            'startColumn' => 41,
            'endColumn' => 48,
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
 * Prepares a SQL query for safe execution.
 *
 * Uses `sprintf()`-like syntax. The following placeholders can be used in the query string:
 *
 * - `%d` (integer)
 * - `%f` (float)
 * - `%s` (string)
 * - `%i` (identifier, e.g. table/field names)
 *
 * All placeholders MUST be left unquoted in the query string. A corresponding argument
 * MUST be passed for each placeholder.
 *
 * Note: There is one exception to the above: for compatibility with old behavior,
 * numbered or formatted string placeholders (eg, `%1$s`, `%5s`) will not have quotes
 * added by this function, so should be passed with appropriate quotes around them.
 *
 * Literal percentage signs (`%`) in the query string must be written as `%%`. Percentage wildcards
 * (for example, to use in LIKE syntax) must be passed via a substitution argument containing
 * the complete LIKE string, these cannot be inserted directly in the query string.
 * Also see wpdb::esc_like().
 *
 * Arguments may be passed as individual arguments to the method, or as a single array
 * containing all arguments. A combination of the two is not supported.
 *
 * Examples:
 *
 *     $wpdb->prepare(
 *         "SELECT * FROM `table` WHERE `column` = %s AND `field` = %d OR `other_field` LIKE %s",
 *         array( \'foo\', 1337, \'%bar\' )
 *     );
 *
 *     $wpdb->prepare(
 *         "SELECT DATE_FORMAT(`field`, \'%%c\') FROM `table` WHERE `column` = %s",
 *         \'foo\'
 *     );
 *
 *     $wpdb->prepare(
 *         "SELECT * FROM %i WHERE %i = %s",
 *         $table,
 *         $field,
 *         $value
 *     );
 *
 * @since 2.3.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by updating the function signature. The second parameter was changed
 *              from `$args` to `...$args`.
 * @since 6.2.0 Added `%i` for identifiers, e.g. table or field names.
 *              Check support via `wpdb::has_cap( \'identifier_placeholders\' )`.
 *              This preserves compatibility with `sprintf()`, as the C version uses
 *              `%d` and `$i` as a signed integer, whereas PHP only supports `%d`.
 *
 * @link https://www.php.net/sprintf Description of syntax.
 *
 * @param string      $query   Query statement with `sprintf()`-like placeholders.
 * @param array|mixed $args    The array of variables to substitute into the query\'s placeholders
 *                             if being called with an array of arguments, or the first variable
 *                             to substitute into the query\'s placeholders if being called with
 *                             individual arguments.
 * @param mixed       ...$args Further variables to substitute into the query\'s placeholders
 *                             if being called with individual arguments.
 * @return string|void Sanitized query string, if there is a query to prepare.
 * @phpstan-param literal-string $query
 */',
        'startLine' => 62469,
        'endLine' => 62471,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'esc_like' => 
      array (
        'name' => 'esc_like',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62495,
            'endLine' => 62495,
            'startColumn' => 34,
            'endColumn' => 38,
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
 * First half of escaping for `LIKE` special characters `%` and `_` before preparing for SQL.
 *
 * Use this only before wpdb::prepare() or esc_sql(). Reversing the order is very bad for security.
 *
 * Example Prepared Statement:
 *
 *     $wild = \'%\';
 *     $find = \'only 43% of planets\';
 *     $like = $wild . $wpdb->esc_like( $find ) . $wild;
 *     $sql  = $wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE post_content LIKE %s", $like );
 *
 * Example Escape Chain:
 *
 *     $sql  = esc_sql( $wpdb->esc_like( $input ) );
 *
 * @since 4.0.0
 *
 * @param string $text The raw text to be escaped. The input typed by the user
 *                     should have no extra or deleted slashes.
 * @return string Text in the form of a LIKE phrase. The output is not SQL safe.
 *                Call wpdb::prepare() or wpdb::_real_escape() next.
 */',
        'startLine' => 62495,
        'endLine' => 62497,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'print_error' => 
      array (
        'name' => 'print_error',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 62508,
                'endLine' => 62508,
                'startTokenPos' => 100479,
                'startFilePos' => 2094662,
                'endTokenPos' => 100479,
                'endFilePos' => 2094663,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62508,
            'endLine' => 62508,
            'startColumn' => 37,
            'endColumn' => 45,
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
 * Prints SQL/DB error.
 *
 * @since 0.71
 *
 * @global array $EZSQL_ERROR Stores error information of query and error string.
 *
 * @param string $str The error to display.
 * @return void|false Void if the showing of errors is enabled, false if disabled.
 */',
        'startLine' => 62508,
        'endLine' => 62510,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'show_errors' => 
      array (
        'name' => 'show_errors',
        'parameters' => 
        array (
          'show' => 
          array (
            'name' => 'show',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 62524,
                'endLine' => 62524,
                'startTokenPos' => 100498,
                'startFilePos' => 2095201,
                'endTokenPos' => 100498,
                'endFilePos' => 2095205,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62524,
            'endLine' => 62524,
            'startColumn' => 37,
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
 * Enables showing of database errors.
 *
 * This function should be used only to enable showing of errors.
 * wpdb::hide_errors() should be used instead for hiding errors.
 *
 * @since 0.71
 *
 * @see wpdb::hide_errors()
 *
 * @param bool $show Optional. Whether to show errors. Default true.
 * @return bool Whether showing of errors was previously active.
 */',
        'startLine' => 62524,
        'endLine' => 62526,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'hide_errors' => 
      array (
        'name' => 'hide_errors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disables showing of database errors.
 *
 * By default database errors are not shown.
 *
 * @since 0.71
 *
 * @see wpdb::show_errors()
 *
 * @return bool Whether showing of errors was previously active.
 */',
        'startLine' => 62538,
        'endLine' => 62540,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'suppress_errors' => 
      array (
        'name' => 'suppress_errors',
        'parameters' => 
        array (
          'suppress' => 
          array (
            'name' => 'suppress',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 62553,
                'endLine' => 62553,
                'startTokenPos' => 100531,
                'startFilePos' => 2096046,
                'endTokenPos' => 100531,
                'endFilePos' => 2096050,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62553,
            'endLine' => 62553,
            'startColumn' => 41,
            'endColumn' => 57,
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
 * Enables or disables suppressing of database errors.
 *
 * By default database errors are suppressed.
 *
 * @since 2.5.0
 *
 * @see wpdb::hide_errors()
 *
 * @param bool $suppress Optional. Whether to suppress errors. Default true.
 * @return bool Whether suppressing of errors was previously active.
 */',
        'startLine' => 62553,
        'endLine' => 62555,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'flush' => 
      array (
        'name' => 'flush',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Kills cached query results.
 *
 * @since 0.71
 * @phpstan-return void
 */',
        'startLine' => 62562,
        'endLine' => 62564,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'db_connect' => 
      array (
        'name' => 'db_connect',
        'parameters' => 
        array (
          'allow_bail' => 
          array (
            'name' => 'allow_bail',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 62576,
                'endLine' => 62576,
                'startTokenPos' => 100564,
                'startFilePos' => 2096751,
                'endTokenPos' => 100564,
                'endFilePos' => 2096755,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62576,
            'endLine' => 62576,
            'startColumn' => 36,
            'endColumn' => 54,
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
 * Connects to and selects database.
 *
 * If `$allow_bail` is false, the lack of database connection will need to be handled manually.
 *
 * @since 3.0.0
 * @since 3.9.0 $allow_bail parameter added.
 *
 * @param bool $allow_bail Optional. Allows the function to bail. Default true.
 * @return bool True with a successful connection, false on failure.
 */',
        'startLine' => 62576,
        'endLine' => 62578,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'parse_db_host' => 
      array (
        'name' => 'parse_db_host',
        'parameters' => 
        array (
          'host' => 
          array (
            'name' => 'host',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62606,
            'endLine' => 62606,
            'startColumn' => 39,
            'endColumn' => 43,
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
 * Parses the DB_HOST setting to interpret it for mysqli_real_connect().
 *
 * mysqli_real_connect() doesn\'t support the host param including a port or socket
 * like mysql_connect() does. This duplicates how mysql_connect() detects a port
 * and/or socket file.
 *
 * @since 4.9.0
 *
 * @param string $host The DB_HOST setting to parse.
 * @return array|false {
 *     Array containing the host, the port, the socket and
 *     whether it is an IPv6 address, in that order.
 *     False if the host couldn\'t be parsed.
 *
 *     @type string      $0 Host name.
 *     @type string|null $1 Port.
 *     @type string|null $2 Socket.
 *     @type bool        $3 Whether it is an IPv6 address.
 * }
 * @phpstan-return false|array{
 *   0: string,
 *   1: string|null,
 *   2: string|null,
 *   3: bool,
 * }
 */',
        'startLine' => 62606,
        'endLine' => 62608,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'check_connection' => 
      array (
        'name' => 'check_connection',
        'parameters' => 
        array (
          'allow_bail' => 
          array (
            'name' => 'allow_bail',
            'default' => 
            array (
              'code' => '\\true',
              'attributes' => 
              array (
                'startLine' => 62622,
                'endLine' => 62622,
                'startTokenPos' => 100598,
                'startFilePos' => 2098541,
                'endTokenPos' => 100598,
                'endFilePos' => 2098545,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62622,
            'endLine' => 62622,
            'startColumn' => 42,
            'endColumn' => 60,
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
 * Checks that the connection to the database is still up. If not, try to reconnect.
 *
 * If this function is unable to reconnect, it will forcibly die, or if called
 * after the {@see \'template_redirect\'} hook has been fired, return false instead.
 *
 * If `$allow_bail` is false, the lack of database connection will need to be handled manually.
 *
 * @since 3.9.0
 *
 * @param bool $allow_bail Optional. Allows the function to bail. Default true.
 * @return bool|void True if the connection is up.
 */',
        'startLine' => 62622,
        'endLine' => 62624,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'query' => 
      array (
        'name' => 'query',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62638,
            'endLine' => 62638,
            'startColumn' => 31,
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
 * Performs a database query, using current database connection.
 *
 * More information can be found on the documentation page.
 *
 * @since 0.71
 *
 * @link https://developer.wordpress.org/reference/classes/wpdb/
 *
 * @param string $query Database query.
 * @return int|bool Boolean true for CREATE, ALTER, TRUNCATE and DROP queries. Number of rows
 *                  affected/selected for all other queries. Boolean false on error.
 */',
        'startLine' => 62638,
        'endLine' => 62640,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'log_query' => 
      array (
        'name' => 'log_query',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62652,
            'endLine' => 62652,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query_time' => 
          array (
            'name' => 'query_time',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62652,
            'endLine' => 62652,
            'startColumn' => 43,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'query_callstack' => 
          array (
            'name' => 'query_callstack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62652,
            'endLine' => 62652,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'query_start' => 
          array (
            'name' => 'query_start',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62652,
            'endLine' => 62652,
            'startColumn' => 74,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'query_data' => 
          array (
            'name' => 'query_data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62652,
            'endLine' => 62652,
            'startColumn' => 88,
            'endColumn' => 98,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Logs query data.
 *
 * @since 5.3.0
 *
 * @param string $query           The query\'s SQL.
 * @param float  $query_time      Total time spent on the query, in seconds.
 * @param string $query_callstack Comma-separated list of the calling functions.
 * @param float  $query_start     Unix timestamp of the time at the start of the query.
 * @param array  $query_data      Custom query data.
 */',
        'startLine' => 62652,
        'endLine' => 62654,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'placeholder_escape' => 
      array (
        'name' => 'placeholder_escape',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates and returns a placeholder escape string for use in queries returned by ::prepare().
 *
 * @since 4.8.3
 *
 * @return string String to escape placeholders.
 */',
        'startLine' => 62662,
        'endLine' => 62664,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'add_placeholder_escape' => 
      array (
        'name' => 'add_placeholder_escape',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62673,
            'endLine' => 62673,
            'startColumn' => 48,
            'endColumn' => 53,
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
 * Adds a placeholder escape string, to escape anything that resembles a printf() placeholder.
 *
 * @since 4.8.3
 *
 * @param string $query The query to escape.
 * @return string The query with the placeholder escape string inserted where necessary.
 */',
        'startLine' => 62673,
        'endLine' => 62675,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'remove_placeholder_escape' => 
      array (
        'name' => 'remove_placeholder_escape',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62684,
            'endLine' => 62684,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Removes the placeholder escape strings from a query.
 *
 * @since 4.8.3
 *
 * @param string $query The query from which the placeholder will be removed.
 * @return string The query with the placeholder removed.
 */',
        'startLine' => 62684,
        'endLine' => 62686,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62729,
            'endLine' => 62729,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 62729,
            'endLine' => 62729,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62729,
                'endLine' => 62729,
                'startTokenPos' => 100709,
                'startFilePos' => 2102774,
                'endTokenPos' => 100709,
                'endFilePos' => 2102778,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62729,
            'endLine' => 62729,
            'startColumn' => 47,
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
 * Inserts a row into the table.
 *
 * Examples:
 *
 *     $wpdb->insert(
 *         \'table\',
 *         array(
 *             \'column1\' => \'foo\',
 *             \'column2\' => \'bar\',
 *         )
 *     );
 *     $wpdb->insert(
 *         \'table\',
 *         array(
 *             \'column1\' => \'foo\',
 *             \'column2\' => 1337,
 *         ),
 *         array(
 *             \'%s\',
 *             \'%d\',
 *         )
 *     );
 *
 * @since 2.5.0
 *
 * @see wpdb::prepare()
 * @see wpdb::$field_types
 * @see wp_set_wpdb_vars()
 *
 * @param string          $table  Table name.
 * @param array           $data   Data to insert (in column => value pairs).
 *                                Both `$data` columns and `$data` values should be "raw" (neither should be SQL escaped).
 *                                Sending a null value will cause the column to be set to NULL - the corresponding
 *                                format is ignored in this case.
 * @param string[]|string $format Optional. An array of formats to be mapped to each of the value in `$data`.
 *                                If string, that format will be used for all of the values in `$data`.
 *                                A format is one of \'%d\', \'%f\', \'%s\' (integer, float, string).
 *                                If omitted, all values in `$data` will be treated as strings unless otherwise
 *                                specified in wpdb::$field_types. Default null.
 * @return int|false The number of rows inserted, or false on error.
 */',
        'startLine' => 62729,
        'endLine' => 62731,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'replace' => 
      array (
        'name' => 'replace',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62781,
            'endLine' => 62781,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 62781,
            'endLine' => 62781,
            'startColumn' => 41,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62781,
                'endLine' => 62781,
                'startTokenPos' => 100734,
                'startFilePos' => 2105276,
                'endTokenPos' => 100734,
                'endFilePos' => 2105280,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62781,
            'endLine' => 62781,
            'startColumn' => 48,
            'endColumn' => 62,
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
 * Replaces a row in the table or inserts it if it does not exist, based on a PRIMARY KEY or a UNIQUE index.
 *
 * A REPLACE works exactly like an INSERT, except that if an old row in the table has the same value as a new row
 * for a PRIMARY KEY or a UNIQUE index, the old row is deleted before the new row is inserted.
 *
 * Examples:
 *
 *     $wpdb->replace(
 *         \'table\',
 *         array(
 *             \'ID\'      => 123,
 *             \'column1\' => \'foo\',
 *             \'column2\' => \'bar\',
 *         )
 *     );
 *     $wpdb->replace(
 *         \'table\',
 *         array(
 *             \'ID\'      => 456,
 *             \'column1\' => \'foo\',
 *             \'column2\' => 1337,
 *         ),
 *         array(
 *             \'%d\',
 *             \'%s\',
 *             \'%d\',
 *         )
 *     );
 *
 * @since 3.0.0
 *
 * @see wpdb::prepare()
 * @see wpdb::$field_types
 * @see wp_set_wpdb_vars()
 *
 * @param string          $table  Table name.
 * @param array           $data   Data to insert (in column => value pairs).
 *                                Both `$data` columns and `$data` values should be "raw" (neither should be SQL escaped).
 *                                A primary key or unique index is required to perform a replace operation.
 *                                Sending a null value will cause the column to be set to NULL - the corresponding
 *                                format is ignored in this case.
 * @param string[]|string $format Optional. An array of formats to be mapped to each of the value in `$data`.
 *                                If string, that format will be used for all of the values in `$data`.
 *                                A format is one of \'%d\', \'%f\', \'%s\' (integer, float, string).
 *                                If omitted, all values in `$data` will be treated as strings unless otherwise
 *                                specified in wpdb::$field_types. Default null.
 * @return int|false The number of rows affected, or false on error.
 */',
        'startLine' => 62781,
        'endLine' => 62783,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      '_insert_replace_helper' => 
      array (
        'name' => '_insert_replace_helper',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62810,
            'endLine' => 62810,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 62810,
            'endLine' => 62810,
            'startColumn' => 56,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62810,
                'endLine' => 62810,
                'startTokenPos' => 100759,
                'startFilePos' => 2106989,
                'endTokenPos' => 100759,
                'endFilePos' => 2106993,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62810,
            'endLine' => 62810,
            'startColumn' => 63,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'INSERT\'',
              'attributes' => 
              array (
                'startLine' => 62810,
                'endLine' => 62810,
                'startTokenPos' => 100766,
                'startFilePos' => 2107004,
                'endTokenPos' => 100766,
                'endFilePos' => 2107011,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62810,
            'endLine' => 62810,
            'startColumn' => 80,
            'endColumn' => 95,
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
 * Helper function for insert and replace.
 *
 * Runs an insert or replace query based on `$type` argument.
 *
 * @since 3.0.0
 *
 * @see wpdb::prepare()
 * @see wpdb::$field_types
 * @see wp_set_wpdb_vars()
 *
 * @param string          $table  Table name.
 * @param array           $data   Data to insert (in column => value pairs).
 *                                Both `$data` columns and `$data` values should be "raw" (neither should be SQL escaped).
 *                                Sending a null value will cause the column to be set to NULL - the corresponding
 *                                format is ignored in this case.
 * @param string[]|string $format Optional. An array of formats to be mapped to each of the value in `$data`.
 *                                If string, that format will be used for all of the values in `$data`.
 *                                A format is one of \'%d\', \'%f\', \'%s\' (integer, float, string).
 *                                If omitted, all values in `$data` will be treated as strings unless otherwise
 *                                specified in wpdb::$field_types. Default null.
 * @param string          $type   Optional. Type of operation. Either \'INSERT\' or \'REPLACE\'.
 *                                Default \'INSERT\'.
 * @return int|false The number of rows affected, or false on error.
 * @phpstan-param \'INSERT\'|\'REPLACE\' $type
 */',
        'startLine' => 62810,
        'endLine' => 62812,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62874,
            'endLine' => 62874,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 62874,
            'endLine' => 62874,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62874,
            'endLine' => 62874,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62874,
                'endLine' => 62874,
                'startTokenPos' => 100794,
                'startFilePos' => 2110343,
                'endTokenPos' => 100794,
                'endFilePos' => 2110347,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62874,
            'endLine' => 62874,
            'startColumn' => 55,
            'endColumn' => 69,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'where_format' => 
          array (
            'name' => 'where_format',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62874,
                'endLine' => 62874,
                'startTokenPos' => 100801,
                'startFilePos' => 2110366,
                'endTokenPos' => 100801,
                'endFilePos' => 2110370,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62874,
            'endLine' => 62874,
            'startColumn' => 72,
            'endColumn' => 92,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Updates a row in the table.
 *
 * Examples:
 *
 *     $wpdb->update(
 *         \'table\',
 *         array(
 *             \'column1\' => \'foo\',
 *             \'column2\' => \'bar\',
 *         ),
 *         array(
 *             \'ID\' => 1,
 *         )
 *     );
 *     $wpdb->update(
 *         \'table\',
 *         array(
 *             \'column1\' => \'foo\',
 *             \'column2\' => 1337,
 *         ),
 *         array(
 *             \'ID\' => 1,
 *         ),
 *         array(
 *             \'%s\',
 *             \'%d\',
 *         ),
 *         array(
 *             \'%d\',
 *         )
 *     );
 *
 * @since 2.5.0
 *
 * @see wpdb::prepare()
 * @see wpdb::$field_types
 * @see wp_set_wpdb_vars()
 *
 * @param string          $table        Table name.
 * @param array           $data         Data to update (in column => value pairs).
 *                                      Both $data columns and $data values should be "raw" (neither should be SQL escaped).
 *                                      Sending a null value will cause the column to be set to NULL - the corresponding
 *                                      format is ignored in this case.
 * @param array           $where        A named array of WHERE clauses (in column => value pairs).
 *                                      Multiple clauses will be joined with ANDs.
 *                                      Both $where columns and $where values should be "raw".
 *                                      Sending a null value will create an IS NULL comparison - the corresponding
 *                                      format will be ignored in this case.
 * @param string[]|string $format       Optional. An array of formats to be mapped to each of the values in $data.
 *                                      If string, that format will be used for all of the values in $data.
 *                                      A format is one of \'%d\', \'%f\', \'%s\' (integer, float, string).
 *                                      If omitted, all values in $data will be treated as strings unless otherwise
 *                                      specified in wpdb::$field_types. Default null.
 * @param string[]|string $where_format Optional. An array of formats to be mapped to each of the values in $where.
 *                                      If string, that format will be used for all of the items in $where.
 *                                      A format is one of \'%d\', \'%f\', \'%s\' (integer, float, string).
 *                                      If omitted, all values in $where will be treated as strings unless otherwise
 *                                      specified in wpdb::$field_types. Default null.
 * @return int|false The number of rows updated, or false on error.
 */',
        'startLine' => 62874,
        'endLine' => 62876,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62917,
            'endLine' => 62917,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62917,
            'endLine' => 62917,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where_format' => 
          array (
            'name' => 'where_format',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 62917,
                'endLine' => 62917,
                'startTokenPos' => 100826,
                'startFilePos' => 2112326,
                'endTokenPos' => 100826,
                'endFilePos' => 2112330,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62917,
            'endLine' => 62917,
            'startColumn' => 48,
            'endColumn' => 68,
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
 * Deletes a row in the table.
 *
 * Examples:
 *
 *     $wpdb->delete(
 *         \'table\',
 *         array(
 *             \'ID\' => 1,
 *         )
 *     );
 *     $wpdb->delete(
 *         \'table\',
 *         array(
 *             \'ID\' => 1,
 *         ),
 *         array(
 *             \'%d\',
 *         )
 *     );
 *
 * @since 3.4.0
 *
 * @see wpdb::prepare()
 * @see wpdb::$field_types
 * @see wp_set_wpdb_vars()
 *
 * @param string          $table        Table name.
 * @param array           $where        A named array of WHERE clauses (in column => value pairs).
 *                                      Multiple clauses will be joined with ANDs.
 *                                      Both $where columns and $where values should be "raw".
 *                                      Sending a null value will create an IS NULL comparison - the corresponding
 *                                      format will be ignored in this case.
 * @param string[]|string $where_format Optional. An array of formats to be mapped to each of the values in $where.
 *                                      If string, that format will be used for all of the items in $where.
 *                                      A format is one of \'%d\', \'%f\', \'%s\' (integer, float, string).
 *                                      If omitted, all values in $data will be treated as strings unless otherwise
 *                                      specified in wpdb::$field_types. Default null.
 * @return int|false The number of rows deleted, or false on error.
 */',
        'startLine' => 62917,
        'endLine' => 62919,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'process_fields' => 
      array (
        'name' => 'process_fields',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62937,
            'endLine' => 62937,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 62937,
            'endLine' => 62937,
            'startColumn' => 51,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62937,
            'endLine' => 62937,
            'startColumn' => 58,
            'endColumn' => 64,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Processes arrays of field/value pairs and field formats.
 *
 * This is a helper method for wpdb\'s CRUD methods, which take field/value pairs
 * for inserts, updates, and where clauses. This method first pairs each value
 * with a format. Then it determines the charset of that field, using that
 * to determine if any invalid text would be stripped. If text is stripped,
 * then field processing is rejected and the query fails.
 *
 * @since 4.2.0
 *
 * @param string          $table  Table name.
 * @param array           $data   Array of values keyed by their field names.
 * @param string[]|string $format Formats or format to be mapped to the values in the data.
 * @return array|false An array of fields that contain paired value and formats.
 *                     False for invalid values.
 */',
        'startLine' => 62937,
        'endLine' => 62939,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'process_field_formats' => 
      array (
        'name' => 'process_field_formats',
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
            'startLine' => 62962,
            'endLine' => 62962,
            'startColumn' => 50,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62962,
            'endLine' => 62962,
            'startColumn' => 57,
            'endColumn' => 63,
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
 * Prepares arrays of value/format pairs as passed to wpdb CRUD methods.
 *
 * @since 4.2.0
 *
 * @param array           $data   Array of values keyed by their field names.
 * @param string[]|string $format Formats or format to be mapped to the values in the data.
 * @return array {
 *     Array of values and formats keyed by their field names.
 *
 *     @type array ...$0 {
 *         Value and format for this field.
 *
 *         @type mixed  $value  The value to be formatted.
 *         @type string $format The format to be mapped to the value.
 *     }
 * }
 * @phpstan-return array<int|string, array{
 *   value: mixed,
 *   format: string,
 * }>
 */',
        'startLine' => 62962,
        'endLine' => 62964,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'process_field_charsets' => 
      array (
        'name' => 'process_field_charsets',
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
            'startLine' => 63004,
            'endLine' => 63004,
            'startColumn' => 51,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63004,
            'endLine' => 63004,
            'startColumn' => 58,
            'endColumn' => 63,
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
 * Adds field charsets to field/value/format arrays generated by wpdb::process_field_formats().
 *
 * @since 4.2.0
 *
 * @param array  $data {
 *     Array of values and formats keyed by their field names,
 *     as it comes from the wpdb::process_field_formats() method.
 *
 *     @type array ...$0 {
 *         Value and format for this field.
 *
 *         @type mixed  $value  The value to be formatted.
 *         @type string $format The format to be mapped to the value.
 *     }
 * }
 * @param string $table Table name.
 * @return array|false {
 *     The same array of data with additional \'charset\' keys, or false if
 *     the charset for the table cannot be found.
 *
 *     @type array ...$0 {
 *         Value, format, and charset for this field.
 *
 *         @type mixed        $value   The value to be formatted.
 *         @type string       $format  The format to be mapped to the value.
 *         @type string|false $charset The charset to be used for the value.
 *     }
 * }
 * @phpstan-param array<int|string, array{
 *   value: mixed,
 *   format: string,
 * }> $data
 * @phpstan-return false|array<int|string, array{
 *   value: mixed,
 *   format: string,
 *   charset: string|false,
 * }>
 */',
        'startLine' => 63004,
        'endLine' => 63006,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'process_field_lengths' => 
      array (
        'name' => 'process_field_lengths',
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
            'startLine' => 63059,
            'endLine' => 63059,
            'startColumn' => 50,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63059,
            'endLine' => 63059,
            'startColumn' => 57,
            'endColumn' => 62,
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
 * For string fields, records the maximum string length that field can safely save.
 *
 * @since 4.2.1
 *
 * @param array  $data {
 *     Array of values, formats, and charsets keyed by their field names,
 *     as it comes from the wpdb::process_field_charsets() method.
 *
 *     @type array ...$0 {
 *         Value, format, and charset for this field.
 *
 *         @type mixed        $value   The value to be formatted.
 *         @type string       $format  The format to be mapped to the value.
 *         @type string|false $charset The charset to be used for the value.
 *     }
 * }
 * @param string $table Table name.
 * @return array|false {
 *     The same array of data with additional \'length\' keys, or false if
 *     information for the table cannot be found.
 *
 *     @type array ...$0 {
 *         Value, format, charset, and length for this field.
 *
 *         @type mixed        $value   The value to be formatted.
 *         @type string       $format  The format to be mapped to the value.
 *         @type string|false $charset The charset to be used for the value.
 *         @type array|false  $length  {
 *             Information about the maximum length of the value.
 *             False if the column has no length.
 *
 *             @type string $type   One of \'byte\' or \'char\'.
 *             @type int    $length The column length.
 *         }
 *     }
 * }
 * @phpstan-param array<int|string, array{
 *   value: mixed,
 *   format: string,
 *   charset: string|false,
 * }> $data
 * @phpstan-return false|array<int|string, array{
 *   value: mixed,
 *   format: string,
 *   charset: string|false,
 *   length: false|array{
 *     type: string,
 *     length: int,
 *   },
 * }>
 */',
        'startLine' => 63059,
        'endLine' => 63061,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_var' => 
      array (
        'name' => 'get_var',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 63077,
                'endLine' => 63077,
                'startTokenPos' => 100920,
                'startFilePos' => 2119068,
                'endTokenPos' => 100920,
                'endFilePos' => 2119072,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63077,
            'endLine' => 63077,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'x' => 
          array (
            'name' => 'x',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 63077,
                'endLine' => 63077,
                'startTokenPos' => 100927,
                'startFilePos' => 2119080,
                'endTokenPos' => 100927,
                'endFilePos' => 2119080,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63077,
            'endLine' => 63077,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'y' => 
          array (
            'name' => 'y',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 63077,
                'endLine' => 63077,
                'startTokenPos' => 100934,
                'startFilePos' => 2119088,
                'endTokenPos' => 100934,
                'endFilePos' => 2119088,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63077,
            'endLine' => 63077,
            'startColumn' => 57,
            'endColumn' => 62,
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
 * Retrieves one value from the database.
 *
 * Executes a SQL query and returns the value from the SQL result.
 * If the SQL result contains more than one column and/or more than one row,
 * the value in the column and row specified is returned. If $query is null,
 * the value in the specified column and row from the previous SQL result is returned.
 *
 * @since 0.71
 *
 * @param string|null $query Optional. SQL query. Defaults to null, use the result from the previous query.
 * @param int         $x     Optional. Column of value to return. Indexed from 0. Default 0.
 * @param int         $y     Optional. Row of value to return. Indexed from 0. Default 0.
 * @return string|null Database query result (as string), or null on failure.
 */',
        'startLine' => 63077,
        'endLine' => 63079,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_row' => 
      array (
        'name' => 'get_row',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 63097,
                'endLine' => 63097,
                'startTokenPos' => 100953,
                'startFilePos' => 2120146,
                'endTokenPos' => 100953,
                'endFilePos' => 2120150,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63097,
            'endLine' => 63097,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'output' => 
          array (
            'name' => 'output',
            'default' => 
            array (
              'code' => '\\OBJECT',
              'attributes' => 
              array (
                'startLine' => 63097,
                'endLine' => 63097,
                'startTokenPos' => 100960,
                'startFilePos' => 2120163,
                'endTokenPos' => 100960,
                'endFilePos' => 2120169,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63097,
            'endLine' => 63097,
            'startColumn' => 49,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'y' => 
          array (
            'name' => 'y',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 63097,
                'endLine' => 63097,
                'startTokenPos' => 100967,
                'startFilePos' => 2120177,
                'endTokenPos' => 100967,
                'endFilePos' => 2120177,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63097,
            'endLine' => 63097,
            'startColumn' => 68,
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
 * Retrieves one row from the database.
 *
 * Executes a SQL query and returns the row from the SQL result.
 *
 * @since 0.71
 *
 * @param string|null $query  SQL query.
 * @param string      $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                            correspond to an stdClass object, an associative array, or a numeric array,
 *                            respectively. Default OBJECT.
 * @param int         $y      Optional. Row to return. Indexed from 0. Default 0.
 * @return array|object|null|void Database query result in format specified by $output or null on failure.
 * @phpstan-param \'OBJECT\'|\'ARRAY_A\'|\'ARRAY_N\' $output
 * @phpstan-param int<0, max> $y
 * @phpstan-return null|void|($output is \'ARRAY_A\' ? array<array-key, mixed> : ($output is \'ARRAY_N\' ? list<mixed> : \\stdClass))
 */',
        'startLine' => 63097,
        'endLine' => 63099,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_col' => 
      array (
        'name' => 'get_col',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 63113,
                'endLine' => 63113,
                'startTokenPos' => 100986,
                'startFilePos' => 2120908,
                'endTokenPos' => 100986,
                'endFilePos' => 2120912,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63113,
            'endLine' => 63113,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'x' => 
          array (
            'name' => 'x',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 63113,
                'endLine' => 63113,
                'startTokenPos' => 100993,
                'startFilePos' => 2120920,
                'endTokenPos' => 100993,
                'endFilePos' => 2120920,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63113,
            'endLine' => 63113,
            'startColumn' => 49,
            'endColumn' => 54,
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
 * Retrieves one column from the database.
 *
 * Executes a SQL query and returns the column from the SQL result.
 * If the SQL result contains more than one column, the column specified is returned.
 * If $query is null, the specified column from the previous SQL result is returned.
 *
 * @since 0.71
 *
 * @param string|null $query Optional. SQL query. Defaults to previous query.
 * @param int         $x     Optional. Column to return. Indexed from 0. Default 0.
 * @return array Database query result. Array indexed from 0 by SQL result row number.
 */',
        'startLine' => 63113,
        'endLine' => 63115,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_results' => 
      array (
        'name' => 'get_results',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '\\null',
              'attributes' => 
              array (
                'startLine' => 63136,
                'endLine' => 63136,
                'startTokenPos' => 101012,
                'startFilePos' => 2122345,
                'endTokenPos' => 101012,
                'endFilePos' => 2122349,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63136,
            'endLine' => 63136,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'output' => 
          array (
            'name' => 'output',
            'default' => 
            array (
              'code' => '\\OBJECT',
              'attributes' => 
              array (
                'startLine' => 63136,
                'endLine' => 63136,
                'startTokenPos' => 101019,
                'startFilePos' => 2122362,
                'endTokenPos' => 101019,
                'endFilePos' => 2122368,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63136,
            'endLine' => 63136,
            'startColumn' => 53,
            'endColumn' => 69,
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
 * Retrieves an entire SQL result set from the database (i.e., many rows).
 *
 * Executes a SQL query and returns the entire SQL result.
 *
 * @since 0.71
 *
 * @param string $query  SQL query.
 * @param string $output Optional. Any of ARRAY_A | ARRAY_N | OBJECT | OBJECT_K constants.
 *                       With one of the first three, return an array of rows indexed
 *                       from 0 by SQL result row number. Each row is an associative array
 *                       (column => value, ...), a numerically indexed array (0 => value, ...),
 *                       or an object ( ->column = value ), respectively. With OBJECT_K,
 *                       return an associative array of row objects keyed by the value
 *                       of each row\'s first column\'s value. Duplicate keys are discarded.
 *                       Default OBJECT.
 * @return array|object|null Database query results.
 * @phpstan-param \'OBJECT\'|\'OBJECT_K\'|\'ARRAY_A\'|\'ARRAY_N\' $output
 * @phpstan-return null|($output is \'ARRAY_A\' ? list<array<array-key, mixed>> : ($output is \'ARRAY_N\' ? list<array<int, mixed>> : ($output is \'OBJECT_K\' ? array<array-key, \\stdClass> : list<\\stdClass>)))
 */',
        'startLine' => 63136,
        'endLine' => 63138,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_table_charset' => 
      array (
        'name' => 'get_table_charset',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63147,
            'endLine' => 63147,
            'startColumn' => 46,
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
 * Retrieves the character set for the given table.
 *
 * @since 4.2.0
 *
 * @param string $table Table name.
 * @return string|WP_Error Table character set, WP_Error object if it couldn\'t be found.
 */',
        'startLine' => 63147,
        'endLine' => 63149,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_col_charset' => 
      array (
        'name' => 'get_col_charset',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63160,
            'endLine' => 63160,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63160,
            'endLine' => 63160,
            'startColumn' => 49,
            'endColumn' => 55,
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
 * Retrieves the character set for the given column.
 *
 * @since 4.2.0
 *
 * @param string $table  Table name.
 * @param string $column Column name.
 * @return string|false|WP_Error Column character set as a string. False if the column has
 *                               no character set. WP_Error object if there was an error.
 */',
        'startLine' => 63160,
        'endLine' => 63162,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_col_length' => 
      array (
        'name' => 'get_col_length',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63184,
            'endLine' => 63184,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63184,
            'endLine' => 63184,
            'startColumn' => 48,
            'endColumn' => 54,
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
 * Retrieves the maximum string length allowed in a given column.
 *
 * The length may either be specified as a byte length or a character length.
 *
 * @since 4.2.1
 *
 * @param string $table  Table name.
 * @param string $column Column name.
 * @return array|false|WP_Error {
 *     Array of column length information, false if the column has no length (for
 *     example, numeric column), WP_Error object if there was an error.
 *
 *     @type string $type   One of \'byte\' or \'char\'.
 *     @type int    $length The column length.
 * }
 * @phpstan-return false|\\WP_Error|array{
 *   type: string,
 *   length: int,
 * }
 */',
        'startLine' => 63184,
        'endLine' => 63186,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'check_ascii' => 
      array (
        'name' => 'check_ascii',
        'parameters' => 
        array (
          'input_string' => 
          array (
            'name' => 'input_string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63198,
            'endLine' => 63198,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Checks if a string is ASCII.
 *
 * The negative regex is faster for non-ASCII strings, as it allows
 * the search to finish as soon as it encounters a non-ASCII character.
 *
 * @since 4.2.0
 *
 * @param string $input_string String to check.
 * @return bool True if ASCII, false if not.
 */',
        'startLine' => 63198,
        'endLine' => 63200,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'check_safe_collation' => 
      array (
        'name' => 'check_safe_collation',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63209,
            'endLine' => 63209,
            'startColumn' => 49,
            'endColumn' => 54,
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
 * Checks if the query is accessing a collation considered safe.
 *
 * @since 4.2.0
 *
 * @param string $query The query to check.
 * @return bool True if the collation is safe, false if it isn\'t.
 */',
        'startLine' => 63209,
        'endLine' => 63211,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'strip_invalid_text' => 
      array (
        'name' => 'strip_invalid_text',
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
            'startLine' => 63224,
            'endLine' => 63224,
            'startColumn' => 47,
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
 * Strips any invalid characters based on value/charset pairs.
 *
 * @since 4.2.0
 *
 * @param array $data Array of value arrays. Each value array has the keys \'value\', \'charset\', and \'length\'.
 *                    An optional \'ascii\' key can be set to false to avoid redundant ASCII checks.
 * @return array|WP_Error The $data parameter, with invalid characters removed from each value.
 *                        This works as a passthrough: any additional keys such as \'field\' are
 *                        retained in each value array. If we cannot remove invalid characters,
 *                        a WP_Error object is returned.
 */',
        'startLine' => 63224,
        'endLine' => 63226,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'strip_invalid_text_from_query' => 
      array (
        'name' => 'strip_invalid_text_from_query',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63235,
            'endLine' => 63235,
            'startColumn' => 58,
            'endColumn' => 63,
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
 * Strips any invalid characters from the query.
 *
 * @since 4.2.0
 *
 * @param string $query Query to convert.
 * @return string|WP_Error The converted query, or a WP_Error object if the conversion fails.
 */',
        'startLine' => 63235,
        'endLine' => 63237,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'strip_invalid_text_for_column' => 
      array (
        'name' => 'strip_invalid_text_for_column',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63248,
            'endLine' => 63248,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63248,
            'endLine' => 63248,
            'startColumn' => 63,
            'endColumn' => 69,
            'parameterIndex' => 1,
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
            'startLine' => 63248,
            'endLine' => 63248,
            'startColumn' => 72,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Strips any invalid characters from the string for a given table and column.
 *
 * @since 4.2.0
 *
 * @param string $table  Table name.
 * @param string $column Column name.
 * @param string $value  The text to check.
 * @return string|WP_Error The converted string, or a WP_Error object if the conversion fails.
 */',
        'startLine' => 63248,
        'endLine' => 63250,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_table_from_query' => 
      array (
        'name' => 'get_table_from_query',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63259,
            'endLine' => 63259,
            'startColumn' => 49,
            'endColumn' => 54,
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
 * Finds the first table name referenced in a query.
 *
 * @since 4.2.0
 *
 * @param string $query The query to search.
 * @return string|false The table name found, or false if a table couldn\'t be found.
 */',
        'startLine' => 63259,
        'endLine' => 63261,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'load_col_info' => 
      array (
        'name' => 'load_col_info',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Loads the column metadata from the last query.
 *
 * @since 3.5.0
 * @phpstan-return void
 */',
        'startLine' => 63268,
        'endLine' => 63270,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_col_info' => 
      array (
        'name' => 'get_col_info',
        'parameters' => 
        array (
          'info_type' => 
          array (
            'name' => 'info_type',
            'default' => 
            array (
              'code' => '\'name\'',
              'attributes' => 
              array (
                'startLine' => 63283,
                'endLine' => 63283,
                'startTokenPos' => 101199,
                'startFilePos' => 2127882,
                'endTokenPos' => 101199,
                'endFilePos' => 2127887,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63283,
            'endLine' => 63283,
            'startColumn' => 38,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'col_offset' => 
          array (
            'name' => 'col_offset',
            'default' => 
            array (
              'code' => '-1',
              'attributes' => 
              array (
                'startLine' => 63283,
                'endLine' => 63283,
                'startTokenPos' => 101206,
                'startFilePos' => 2127904,
                'endTokenPos' => 101207,
                'endFilePos' => 2127905,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63283,
            'endLine' => 63283,
            'startColumn' => 59,
            'endColumn' => 74,
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
 * Retrieves column metadata from the last query.
 *
 * @since 0.71
 *
 * @param string $info_type  Optional. Possible values include \'name\', \'table\', \'def\', \'max_length\',
 *                           \'not_null\', \'primary_key\', \'multiple_key\', \'unique_key\', \'numeric\',
 *                           \'blob\', \'type\', \'unsigned\', \'zerofill\'. Default \'name\'.
 * @param int    $col_offset Optional. 0: col name. 1: which table the col\'s in. 2: col\'s max length.
 *                           3: if the col is numeric. 4: col\'s type. Default -1.
 * @return mixed Column results.
 */',
        'startLine' => 63283,
        'endLine' => 63285,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'timer_start' => 
      array (
        'name' => 'timer_start',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Starts the timer, for debugging purposes.
 *
 * @since 1.5.0
 *
 * @return true
 */',
        'startLine' => 63293,
        'endLine' => 63295,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'timer_stop' => 
      array (
        'name' => 'timer_stop',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Stops the debugging timer.
 *
 * @since 1.5.0
 *
 * @return float Total time spent on the query, in seconds.
 */',
        'startLine' => 63303,
        'endLine' => 63305,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'bail' => 
      array (
        'name' => 'bail',
        'parameters' => 
        array (
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
            'startLine' => 63318,
            'endLine' => 63318,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'error_code' => 
          array (
            'name' => 'error_code',
            'default' => 
            array (
              'code' => '\'500\'',
              'attributes' => 
              array (
                'startLine' => 63318,
                'endLine' => 63318,
                'startTokenPos' => 101257,
                'startFilePos' => 2128914,
                'endTokenPos' => 101257,
                'endFilePos' => 2128918,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63318,
            'endLine' => 63318,
            'startColumn' => 40,
            'endColumn' => 58,
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
 * Wraps errors in a nice header and footer and dies.
 *
 * Will not die if wpdb::$show_errors is false.
 *
 * @since 1.5.0
 *
 * @param string $message    The error message.
 * @param string $error_code Optional. A computer-readable string to identify the error.
 *                           Default \'500\'.
 * @return void|false Void if the showing of errors is enabled, false if disabled.
 */',
        'startLine' => 63318,
        'endLine' => 63320,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'close' => 
      array (
        'name' => 'close',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Closes the current database connection.
 *
 * @since 4.5.0
 *
 * @return bool True if the connection was successfully closed,
 *              false if it wasn\'t, or if the connection doesn\'t exist.
 */',
        'startLine' => 63329,
        'endLine' => 63331,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'check_database_version' => 
      array (
        'name' => 'check_database_version',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines whether the database server is at least the required minimum version.
 *
 * @since 2.5.0
 *
 * @global string $required_mysql_version The minimum required MySQL version string.
 * @return void|WP_Error
 */',
        'startLine' => 63340,
        'endLine' => 63342,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'supports_collation' => 
      array (
        'name' => 'supports_collation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines whether the database supports collation.
 *
 * Called when WordPress is generating the table scheme.
 *
 * Use `wpdb::has_cap( \'collation\' )`.
 *
 * @since 2.5.0
 * @deprecated 3.5.0 Use wpdb::has_cap()
 *
 * @return bool True if collation is supported, false if not.
 */',
        'startLine' => 63355,
        'endLine' => 63357,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_charset_collate' => 
      array (
        'name' => 'get_charset_collate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the database character collate.
 *
 * @since 3.5.0
 *
 * @return string The database character collate.
 */',
        'startLine' => 63365,
        'endLine' => 63367,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'has_cap' => 
      array (
        'name' => 'has_cap',
        'parameters' => 
        array (
          'db_cap' => 
          array (
            'name' => 'db_cap',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63393,
            'endLine' => 63393,
            'startColumn' => 33,
            'endColumn' => 39,
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
 * Determines whether the database or WPDB supports a particular feature.
 *
 * Capability sniffs for the database server and current version of WPDB.
 *
 * Database sniffs are based on the version of the database server in use.
 *
 * WPDB sniffs are added as new features are introduced to allow theme and plugin
 * developers to determine feature support. This is to account for drop-ins which may
 * introduce feature support at a different time to WordPress.
 *
 * @since 2.7.0
 * @since 4.1.0 Added support for the \'utf8mb4\' feature.
 * @since 4.6.0 Added support for the \'utf8mb4_520\' feature.
 * @since 6.2.0 Added support for the \'identifier_placeholders\' feature.
 * @since 6.6.0 The `utf8mb4` feature now always returns true.
 *
 * @see wpdb::db_version()
 *
 * @param string $db_cap The feature to check for. Accepts \'collation\', \'group_concat\',
 *                       \'subqueries\', \'set_charset\', \'utf8mb4\', \'utf8mb4_520\',
 *                       or \'identifier_placeholders\'.
 * @return bool True when the database feature is supported, false otherwise.
 * @phpstan-param \'collation\'|\'group_concat\'|\'subqueries\'|\'set_charset\'|\'utf8mb4\'|\'utf8mb4_520\'|\'identifier_placeholders\' $db_cap
 */',
        'startLine' => 63393,
        'endLine' => 63395,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'get_caller' => 
      array (
        'name' => 'get_caller',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves a comma-separated list of the names of the functions that called wpdb.
 *
 * @since 2.5.0
 *
 * @return string Comma-separated list of the calling functions.
 */',
        'startLine' => 63403,
        'endLine' => 63405,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'db_version' => 
      array (
        'name' => 'db_version',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the database server version number.
 *
 * @since 2.7.0
 *
 * @return string|null Version number on success, null on failure.
 */',
        'startLine' => 63413,
        'endLine' => 63415,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
        'aliasName' => NULL,
      ),
      'db_server_info' => 
      array (
        'name' => 'db_server_info',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the raw version string of the database server.
 *
 * @since 5.5.0
 *
 * @return string Database server version as a string.
 */',
        'startLine' => 63423,
        'endLine' => 63425,
        'startColumn' => 9,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => NULL,
        'declaringClassName' => 'wpdb',
        'implementingClassName' => 'wpdb',
        'currentClassName' => 'wpdb',
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