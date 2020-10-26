<?php
/**
 * Plugin Name: Custom Post Types
 * Description: Custom post types and custom taxonomies in WordPress.
 * Version: 1.0
 * Author: The Good Fellas
 *
 * @package CPT
 * @since 0.1.0.0
 **/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load Post Types Files.
 *
 * @since 1.0.0
 *
 * @internal
 */
function cpt_load_files() {
	require_once plugin_dir_path( __FILE__ ) . 'post-types/cpt-reviews.php';
}
add_action( 'plugins_loaded', 'cpt_load_files' );
