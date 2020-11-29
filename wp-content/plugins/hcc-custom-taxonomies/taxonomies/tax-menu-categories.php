<?php
/**
 * Custom Taxonomy.
 *
 * @package Taxonomy
 * @since 0.1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Tax .
 **/
function tax_menu_categories() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Category', 'hcc-theme' ),
		'singular_name'              => _x( 'Category', 'Category', 'hcc-theme' ),
		'menu_name'                  => __( 'Categories', 'hcc-theme' ),
		'all_items'                  => __( 'All Items', 'hcc-theme' ),
		'parent_item'                => __( 'Parent Item', 'hcc-theme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'hcc-theme' ),
		'new_item_name'              => __( 'New Item Name', 'hcc-theme' ),
		'add_new_item'               => __( 'Add New Item', 'hcc-theme' ),
		'edit_item'                  => __( 'Edit Item', 'hcc-theme' ),
		'update_item'                => __( 'Update Item', 'hcc-theme' ),
		'view_item'                  => __( 'View Item', 'hcc-theme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'hcc-theme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'hcc-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'hcc-theme' ),
		'popular_items'              => __( 'Popular Items', 'hcc-theme' ),
		'search_items'               => __( 'Search Items', 'hcc-theme' ),
		'not_found'                  => __( 'Not Found', 'hcc-theme' ),
		'no_terms'                   => __( 'No items', 'hcc-theme' ),
		'items_list'                 => __( 'Items list', 'hcc-theme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'hcc-theme' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud'     => true,
		'rewrite'           => array(
			'slug'       => 'menus',
			'with_front' => true,
		),
	);
	register_taxonomy( 'menu_categories', array( 'menus' ), $args );

}
add_action( 'init', 'tax_menu_categories', 0 );
