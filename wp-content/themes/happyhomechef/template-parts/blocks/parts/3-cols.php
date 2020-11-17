<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

$sel_post_id    = get_sub_field( 'select_posts' );
$post_permalink = get_permalink( $sel_post_id );
$post_title     = get_the_title( $sel_post_id );
$post_thumb     = get_the_post_thumbnail_url( $sel_post_id, 'thumbnail_post_cols' );
$post_excerpt   = hcc_custom_excerpt( get_the_excerpt( $sel_post_id ), 10 );
$post_content   = hcc_custom_excerpt( get_the_content( $sel_post_id ), 10 ); ?>

<div class="col-md col-lg-4 mt-4 mt-md-5">
	<div class="card border-radius">
		<div class="card__img" style="background-image: url(<?php echo esc_attr( $post_thumb ); ?>)"></div>
		<div class="card__body background--white">
			<h5 class="card__title text-center"><?php echo esc_html( $post_title ); ?></h5>
			<p class="card__text text-center"><?php echo $post_excerpt; //phpcs:ignore ?></p>
		</div>
		<a class="button button--pink button--large d-flex justify-content-center no-border-radius" href="<?php echo esc_attr( $post_permalink ); ?>">View more</a>
	</div>
</div>
