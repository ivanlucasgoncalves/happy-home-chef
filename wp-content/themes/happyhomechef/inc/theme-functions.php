<?php
/**
 * Functions.
 *
 * @package HCC Theme
 */

/**
 * Set the length in words of the standard generated excerpt.
 *
 * @param int $length The maximum number of words.
 */
function artshub_set_excerpt_length( $length ) {
	return 10;
}
// Make sure to set the priority correctly, such as 999, otherwise the default WordPress filter on this function will run last and override what you set here.
add_filter( 'excerpt_length', 'artshub_set_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function hcc_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'hcc_excerpt_more' );

/**
 * Filter the excerpt limit.
 *
 * @param string $excerpt Excerpt.
 * @param string $limit Add a limit of words.
 */
function hcc_custom_excerpt( $excerpt, $limit ) {
	return wp_trim_words( $excerpt, $limit );
}