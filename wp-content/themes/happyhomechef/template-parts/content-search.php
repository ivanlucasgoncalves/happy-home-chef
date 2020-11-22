<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="col-12 mt-4 mt-md-5">
	<div class="card border-radius h-100">
		<div class="row no-gutters h-100">
			<div class="col-lg-5 card__img" style="background-image: url(<?php echo esc_attr( the_post_thumbnail_url() ); ?>)"></div>
			<div class="col-lg-7">
				<div class="card__body background--white h-100">
					<h4 class="card__title"><?php the_title(); ?></h4>
					<p class="card__text"><?php the_excerpt(); ?></p>
					<a class="button button--pink" href="<?php echo esc_attr( get_the_permalink() ); ?>">View more</a>
				</div>
			</div>
		</div>
	</div>
</div>
