<?php
/**
 * Remove Items from Admin.
 *
 * @package HCC Theme
 */

/**
 * Add prev and next links to a numbered page link list
 */
function wp_numeric_posts_nav() {

	if ( is_singular() ) {
		return;
	}

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/** Add current page to the array */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation col-12 mt-5 d-flex justify-content-center"><ul>' . "\n";

	/** Previous Post Link */
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() ); // phpcs:ignore
	}

	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) { // phpcs:ignore
		$class = 1 == $paged ? ' class="active"' : ''; // phpcs:ignore

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' ); // phpcs:ignore

		if ( ! in_array( 2, $links ) ) { // phpcs:ignore
			echo '<li>…</li>';
		}
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : ''; // phpcs:ignore
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link ); // phpcs:ignore
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) { // phpcs:ignore
		if ( ! in_array( $max - 1, $links ) ) { // phpcs:ignore
			echo '<li>…</li>' . "\n";
		}

		$class = $paged == $max ? ' class="active"' : ''; // phpcs:ignore
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max ); // phpcs:ignore
	}

	/** Next Post Link */
	if ( get_next_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_next_posts_link() ); // phpcs:ignore
	}

	echo '</ul></div>' . "\n";

}
