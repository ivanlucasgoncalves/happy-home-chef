<?php
/**
 * CPT Templates.
 *
 * @package CPT
 * @since 0.1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * CPT .
 **/
function cpt_menus() {

	$labels = array(
		'name'                  => _x( 'Menus', 'Menu', 'hcc-theme' ),
		'singular_name'         => _x( 'Menu', 'Menu', 'hcc-theme' ),
		'menu_name'             => __( 'Menus', 'hcc-theme' ),
		'name_admin_bar'        => __( 'Menu', 'hcc-theme' ),
		'archives'              => __( 'Item Archives', 'hcc-theme' ),
		'attributes'            => __( 'Item Attributes', 'hcc-theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hcc-theme' ),
		'all_items'             => __( 'All Menus', 'hcc-theme' ),
		'add_new_item'          => __( 'Add New Item', 'hcc-theme' ),
		'add_new'               => __( 'Add New', 'hcc-theme' ),
		'new_item'              => __( 'New Item', 'hcc-theme' ),
		'edit_item'             => __( 'Edit Item', 'hcc-theme' ),
		'update_item'           => __( 'Update Item', 'hcc-theme' ),
		'view_item'             => __( 'View Item', 'hcc-theme' ),
		'view_items'            => __( 'View Items', 'hcc-theme' ),
		'search_items'          => __( 'Search Item', 'hcc-theme' ),
		'not_found'             => __( 'Not found', 'hcc-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'hcc-theme' ),
		'featured_image'        => __( 'Featured Image', 'hcc-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'hcc-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'hcc-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'hcc-theme' ),
		'insert_into_item'      => __( 'Insert into item', 'hcc-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'hcc-theme' ),
		'items_list'            => __( 'Items list', 'hcc-theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'hcc-theme' ),
		'filter_items_list'     => __( 'Filter items list', 'hcc-theme' ),
	);
	$args   = array(
		'label'               => __( 'Menu', 'hcc-theme' ),
		'description'         => __( 'Menus', 'hcc-theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'menu_position'       => 25,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'menus', $args );

}
add_action( 'init', 'cpt_menus', 0 );
