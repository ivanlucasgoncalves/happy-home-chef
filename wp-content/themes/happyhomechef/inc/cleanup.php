<?php
/**
 * Clean up.
 *
 * @package HCC Theme
 */

// Remove WordPress version.
remove_action( 'wp_head', 'rsd_link' );

// Remove WordPress version.
remove_action( 'wp_head', 'wp_generator' );

// Remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service).
remove_action( 'wp_head', 'feed_links', 2 );

// Removes all extra rss feed links.
remove_action( 'wp_head', 'feed_links_extra', 3 );

// Remove link to index page.
remove_action( 'wp_head', 'index_rel_link' );

// Remove wlwmanifest.xml (needed to support windows live writer).
remove_action( 'wp_head', 'wlwmanifest_link' );

// Turn off oEmbed auto discovery.
add_filter( 'embed_oembed_discover', '__return_false' );

// Don't filter oEmbed results.
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

// Remove oEmbed discovery links.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// Remove oEmbed-specific JavaScript from the front-end and back-end.
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

// Remove the REST API lines from the HTML Header.
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

// Remove Emoji.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove WP Block.
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_dequeue_style( 'wp-block-library' );
	}
);

// Remove Recent Comments wp_head CSS.
add_action(
	'widgets_init',
	function() {

		global $wp_widget_factory;

		remove_action(
			'wp_head',
			[ $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ]
		);

	}
);
