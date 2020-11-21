<?php
/**
 * Remove Items from Admin.
 *
 * @package HCC Theme
 */

/**
 * Remove side menu.
 */
function remove_menu() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menu' );

/**
 * Remove +New post in top Admin Menu Bar
 */
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'new-post' );
}
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

/**
 * Remove Quick Draft Dashboard Widget
 */
function remove_draft_widget() {
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}
add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

