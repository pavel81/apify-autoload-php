<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_schedule_event
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_schedule_event',
    'parameters' => 
    array (
      'timestamp' => 
      array (
        'name' => 'timestamp',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108490,
        'endLine' => 108490,
        'startColumn' => 32,
        'endColumn' => 41,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'recurrence' => 
      array (
        'name' => 'recurrence',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108490,
        'endLine' => 108490,
        'startColumn' => 44,
        'endColumn' => 54,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'hook' => 
      array (
        'name' => 'hook',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108490,
        'endLine' => 108490,
        'startColumn' => 57,
        'endColumn' => 61,
        'parameterIndex' => 2,
        'isOptional' => false,
      ),
      'args' => 
      array (
        'name' => 'args',
        'default' => 
        array (
          'code' => 'array()',
          'attributes' => 
          array (
            'startLine' => 108490,
            'endLine' => 108490,
            'startTokenPos' => 156961,
            'startFilePos' => 3675612,
            'endTokenPos' => 156963,
            'endFilePos' => 3675618,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108490,
        'endLine' => 108490,
        'startColumn' => 64,
        'endColumn' => 78,
        'parameterIndex' => 3,
        'isOptional' => true,
      ),
      'wp_error' => 
      array (
        'name' => 'wp_error',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 108490,
            'endLine' => 108490,
            'startTokenPos' => 156970,
            'startFilePos' => 3675633,
            'endTokenPos' => 156970,
            'endFilePos' => 3675638,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 108490,
        'endLine' => 108490,
        'startColumn' => 81,
        'endColumn' => 98,
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
 * Schedules a recurring event.
 *
 * Schedules a hook which will be triggered by WordPress at the specified interval.
 * The action will trigger when someone visits your WordPress site if the scheduled
 * time has passed.
 *
 * Valid values for the recurrence are \'hourly\', \'twicedaily\', \'daily\', and \'weekly\'.
 * These can be extended using the {@see \'cron_schedules\'} filter in wp_get_schedules().
 *
 * Use wp_next_scheduled() to prevent duplicate events.
 *
 * Use wp_schedule_single_event() to schedule a non-recurring event.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to boolean indicating success or failure,
 *              {@see \'pre_schedule_event\'} filter added to short-circuit the function.
 * @since 5.7.0 The `$wp_error` parameter was added.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_schedule_event/
 *
 * @param int    $timestamp  Unix timestamp (UTC) for when to next run the event.
 * @param string $recurrence How often the event should subsequently recur.
 *                           See wp_get_schedules() for accepted values.
 * @param string $hook       Action hook to execute when the event is run.
 * @param array  $args       Optional. Array containing arguments to pass to the
 *                           hook\'s callback function. Each value in the array
 *                           is passed to the callback as an individual parameter.
 *                           The array keys are ignored. Default empty array.
 * @param bool   $wp_error   Optional. Whether to return a WP_Error on failure. Default false.
 * @return bool|WP_Error True if event successfully scheduled. False or WP_Error on failure.
 * @phpstan-param list<mixed> $args
 * @phpstan-return ($wp_error is false ? bool : true|\\WP_Error)
 */',
    'startLine' => 108490,
    'endLine' => 108492,
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
        'name' => 'wp_schedule_event',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));