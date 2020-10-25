<?php
/**
 * Widgets.
 *
 * @package HCC Theme
 */

add_action(
	'widgets_init',
	function() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer', 'hcc-theme' ),
				'id'            => 'footer',
				'description'   => esc_html__( 'Add widgets here.', 'hcc-theme' ),
				'before_widget' => '<div id="%1$s" class="col-12 col-lg-auto widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
);
