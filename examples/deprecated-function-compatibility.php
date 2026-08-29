<?php
/**
 * WordPress PHP Compatibility Example
 *
 * Demonstrates how to replace deprecated PHP functions
 * with modern alternatives.
 */

/**
 * Legacy approach.
 *
 * Example of code that may exist in older projects:
 */
// $value = create_function( '$name', 'return strtoupper( $name );' );

/**
 * Modern PHP approach.
 *
 * Anonymous functions / closures are supported in modern PHP.
 */
$format_name = static function ( string $name ): string {
    return strtoupper( $name );
};

$name = 'WordPress Developer';

echo $format_name( $name );
