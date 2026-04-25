<?php declare(strict_types = 1);

// odsl-C:\Users\ThinkPad\Local Sites\localwp1\app\public\wp-content\plugins\apify-autoload\vendor\php-stubs\wordpress-stubs\wordpress-stubs.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-wp_get_attachment_image
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.2.12-ca1cc54c7d57a7ebb52e232e5452e3c0ef2f8cc7431c63b9070489e10cf897ea',
   'data' => 
  array (
    'name' => 'wp_get_attachment_image',
    'parameters' => 
    array (
      'attachment_id' => 
      array (
        'name' => 'attachment_id',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 127593,
        'endLine' => 127593,
        'startColumn' => 38,
        'endColumn' => 51,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'size' => 
      array (
        'name' => 'size',
        'default' => 
        array (
          'code' => '\'thumbnail\'',
          'attributes' => 
          array (
            'startLine' => 127593,
            'endLine' => 127593,
            'startTokenPos' => 177867,
            'startFilePos' => 4389618,
            'endTokenPos' => 177867,
            'endFilePos' => 4389628,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 127593,
        'endLine' => 127593,
        'startColumn' => 54,
        'endColumn' => 72,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'icon' => 
      array (
        'name' => 'icon',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 127593,
            'endLine' => 127593,
            'startTokenPos' => 177874,
            'startFilePos' => 4389639,
            'endTokenPos' => 177874,
            'endFilePos' => 4389644,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 127593,
        'endLine' => 127593,
        'startColumn' => 75,
        'endColumn' => 88,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'attr' => 
      array (
        'name' => 'attr',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 127593,
            'endLine' => 127593,
            'startTokenPos' => 177881,
            'startFilePos' => 4389655,
            'endTokenPos' => 177881,
            'endFilePos' => 4389656,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 127593,
        'endLine' => 127593,
        'startColumn' => 91,
        'endColumn' => 100,
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
 * Gets an HTML img element representing an image attachment.
 *
 * While `$size` will accept an array, it is better to register a size with
 * add_image_size() so that a cropped version is generated. It\'s much more
 * efficient than having to find the closest-sized image and then having the
 * browser scale down the image.
 *
 * @since 2.5.0
 * @since 4.4.0 The `$srcset` and `$sizes` attributes were added.
 * @since 5.5.0 The `$loading` attribute was added.
 * @since 6.1.0 The `$decoding` attribute was added.
 *
 * @param int          $attachment_id Image attachment ID.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array
 *                                    of width and height values in pixels (in that order). Default \'thumbnail\'.
 * @param bool         $icon          Optional. Whether the image should be treated as an icon. Default false.
 * @param string|array $attr {
 *     Optional. Attributes for the image markup.
 *
 *     @type string       $src           Image attachment URL.
 *     @type string       $class         CSS class name or space-separated list of classes.
 *                                       Default `attachment-$size_class size-$size_class`,
 *                                       where `$size_class` is the image size being requested.
 *     @type string       $alt           Image description for the alt attribute.
 *     @type string       $srcset        The \'srcset\' attribute value.
 *     @type string       $sizes         The \'sizes\' attribute value.
 *     @type string|false $loading       The \'loading\' attribute value. Passing a value of false
 *                                       will result in the attribute being omitted for the image.
 *                                       Default determined by {@see wp_get_loading_optimization_attributes()}.
 *     @type string       $decoding      The \'decoding\' attribute value. Possible values are
 *                                       \'async\' (default), \'sync\', or \'auto\'. Passing false or an empty
 *                                       string will result in the attribute being omitted.
 *     @type string       $fetchpriority The \'fetchpriority\' attribute value, whether `high`, `low`, or `auto`.
 *                                       Default determined by {@see wp_get_loading_optimization_attributes()}.
 * }
 * @return string HTML img element or empty string on failure.
 * @phpstan-param array{
 *   src?: string,
 *   class?: string,
 *   alt?: string,
 *   srcset?: string,
 *   sizes?: string,
 *   loading?: string|false,
 *   decoding?: string,
 *   fetchpriority?: string,
 * } $attr
 */',
    'startLine' => 127593,
    'endLine' => 127595,
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
        'name' => 'wp_get_attachment_image',
        'filename' => 'C:/Users/ThinkPad/Local Sites/localwp1/app/public/wp-content/plugins/apify-autoload/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
      ),
    ),
  ),
));