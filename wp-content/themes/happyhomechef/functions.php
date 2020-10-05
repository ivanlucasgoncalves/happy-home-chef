<?php
/**
 * TCC Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hhc-theme
 */

/**
 * Load all PHP files in inc/.
 */
$inc_patterns = [
	sprintf( '%s/inc/*.php', dirname( __FILE__ ) ),
];

foreach ( $inc_patterns as $inc_pattern ) {
	foreach ( glob( $inc_pattern ) as $filename ) {
		include $filename;
	}
}
