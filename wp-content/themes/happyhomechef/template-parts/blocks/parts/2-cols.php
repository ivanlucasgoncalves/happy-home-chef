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

<div class="col-md col-lg-6">
	<div class="card border-radius h-100">
		<div class="row no-gutters h-100">
			<div class="col-lg-5 card__img" style="background-image: url(<?php echo esc_attr( $post_thumb ); ?>)"></div>
			<div class="col-lg-7">
				<div class="card__body background--white h-100">
					<h5 class="card__title"><?php echo esc_html( $post_title ); ?></h5>
					<p class="card__text"><?php echo $post_excerpt; //phpcs:ignore ?></p>
					<a class="button button--pink" href="<?php echo esc_attr( $post_permalink ); ?>">View more and book</a>
					<img class="d-block align-self-center mt-3" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-icon.png' ); ?>" />
				</div>
			</div>
		</div>
	</div>
</div>
