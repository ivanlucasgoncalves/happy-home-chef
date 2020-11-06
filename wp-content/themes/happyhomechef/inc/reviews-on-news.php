<?php
/**
 * Reviews
 *
 * @package HCC Theme
 */

/**
 * Custom Reviews - Big Star.
 *
 * @param int $post_id Post ID.
 */
function hcc_reviews( $post_id ) {
	$stars     = get_field( 'review_stars', $post_id );
	$star_html = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#F5D210" xmlns="http://www.w3.org/2000/svg">
	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
	</svg>'; ?>

	<?php if ( null !== $stars && '' !== $stars ) : ?>
		<div class="stars-on-review">
			<?php
			switch ( $stars ) {
				case 1:
					echo $star_html; // phpcs:ignore
					break;
				case 2:
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					break;
				case 3:
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					break;
				case 4:
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					break;
				case 5:
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					echo $star_html; // phpcs:ignore
					break;
			}
			?>
		</div>
	<?php endif; ?>
	<?php
}


