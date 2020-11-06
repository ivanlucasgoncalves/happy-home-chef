<?php
/**
 * Functions.
 *
 * @package HCC Theme
 */

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