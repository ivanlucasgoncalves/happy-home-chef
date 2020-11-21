<?php
/**
 * Plugin Name: Custom Taxonomies
 * Description: Custom taxonomies in WordPress.
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
 * Load Taxonomies Files.
 *
 * @since 1.0.0
 *
 * @internal
 */
function ctax_load_files() {
	require_once plugin_dir_path( __FILE__ ) . 'taxonomies/tax-menu-categories.php';
}
add_action( 'plugins_loaded', 'ctax_load_files' );
