<?php
/**
 * Functions.
 *
 * @package HCC Theme
 */

/**
 * Rewrite URLs - Having taxonomy the same slug as custom post type.
 *
 * @param int $wp_rewrite .
 */
function taxonomy_slug_rewrite( $wp_rewrite ) {
	$rules = array();

	$taxonomies = get_taxonomies(
		array( '_builtin' => false ),
		'objects'
	);

	$post_types = get_post_types(
		array(
			'public'   => true,
			'_builtin' => false,
		),
		'names'
	);

	foreach ( $post_types as $post_type ) {
		foreach ( $taxonomies as $taxonomy ) {

			if ( $taxonomy->object_type[0] !== $post_type ) {
				continue;
			}

			$categories = get_categories(
				array(
					'type'       => $post_type,
					'taxonomy'   => $taxonomy->name,
					'hide_empty' => 0,
				)
			);

			foreach ( $categories as $category ) {
				$rules[ $post_type . '/' . $category->slug . '/?$' ] =
				'index.php?' . $category->taxonomy . '=' . $category->slug;
			}
		} // taxonomies
	} // post_types
	$wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter( 'generate_rewrite_rules', 'taxonomy_slug_rewrite' );
