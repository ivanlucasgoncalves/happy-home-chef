<?php
/**
 * Enqueue theme assets.
 *
 * @package HCC Theme
 */

/**
 * Returns the formatted path based on the environment.
 *
 * Prod/staging we use the minified bundle, local we use the unminified file if webpack is running,
 * else attempt to load the minified file.
 *
 * @param string $filename Filename e.g. 'main' for main.css.
 * @param string $asset_type The asset type, 'css' or 'js'.
 * @param string $path_type Path type e.g. 'path' for absolute path and empty for uri.
 *
 * @return string
 */
function get_path( $filename, $asset_type = 'css', $path_type = 'uri' ) {

	$local = ( defined( 'WP_ENV' ) && 'local' === WP_ENV );

	$min_value = $local ? '' : '.min';

	$file_path = get_template_directory() . sprintf( '/dist/%1$s/%2$s%3$s.%4$s', $asset_type, $filename, $min_value, $asset_type );

	// Local environment and the file doesnt exist, change the min value.
	if ( $local && ! file_exists( $file_path ) ) {
		$min_value = '.min';
	}

	if ( 'path' === $path_type ) {
		$path = get_template_directory() . sprintf( '/dist/%1$s/%2$s%3$s.%4$s', $asset_type, $filename, $min_value, $asset_type );
	} else {
		$path = get_template_directory_uri() . sprintf( '/dist/%1$s/%2$s%3$s.%4$s', $asset_type, $filename, $min_value, $asset_type );
	}

	return $path;
}

/**
 * Enqueue frontend scripts and styles.
 *
 * @return void
 */
add_action(
	'wp_enqueue_scripts',
	function() {

		global $wp_version, $wp_query;

		/**
		 * Register Styles.
		 */
		wp_register_style( 'main-css', get_path( 'main', 'css' ), 'all', filemtime( get_path( 'main', 'css', 'path' ) ), false );

		// Enqueue theme CSS bundle.
		wp_enqueue_style( 'main-css' );

		/**
		 * Register Scripts.
		 */
		wp_register_script( 'main-js', get_path( 'main', 'js' ), [ 'jquery' ], filemtime( get_path( 'main', 'js', 'path' ) ), true );

		// Enqueue theme Javascript bundle.
		wp_enqueue_script( 'main-js' );

		// Load jQuery in the footer for performance reasons.
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );
		wp_enqueue_script(
			'jquery',
			includes_url( '/js/jquery/jquery.js' ),
			false,
			$wp_version,
			true
		);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}
);


