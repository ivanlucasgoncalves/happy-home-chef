<?php
/**
 * Template specific helper functions.
 *
 * @package HCC Theme
 */

/**
 * Output the given template part.
 * This work similar to `get_template_part()` except is also allows you to pass some parameters to the template.
 *
 * @param string $template The template path, relative to the theme directory.
 * @param array  $params Any parameters to pass to the template.
 */
function hcc_template_part( $template, $params = array() ) {

	$template_relative_path = sprintf(
		'%s.php',
		$template
	);

	$template_path = sprintf(
		'%s/%s',
		get_template_directory(),
		$template_relative_path
	);

	if ( file_exists( $template_path ) ) {

		// phpcs:disable

		extract( $params );

		echo sprintf(
			"\n<!-- template - %s -->\n",
			$template_relative_path
		);

		include $template_path;

		echo sprintf(
			"\n<!-- /template - %s -->\n",
			$template_relative_path
		);

		// phpcs:enable

	} else {

		// phpcs:disable

		echo sprintf(
			"\n<!-- template not found - %s -->\n",
			$template_relative_path
		);

		// phpcs:enable

	}

}
