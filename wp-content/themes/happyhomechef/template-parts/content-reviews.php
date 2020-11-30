<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="background--white pt-3 pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-3 d-flex align-items-center justify-content-center flex-column mb-3 mb-lg-0">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php else : ?>
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-bounding-box placeholder--review" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
					<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
				<?php endif; ?>
				<h4 class="mt-3 d-inline-block"><?php echo esc_html( get_the_title() ); ?></h4>
			</div>
			<div class="col-12 col-lg-9">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="review-stars mb-2">
						<?php hcc_reviews( get_the_ID() ); ?>
					</div>
					<h3 class="mb-3"><?php echo esc_html( get_field( 'review_title', get_the_ID() ) ); ?></h3>
					<div class="entry-content">
						<?php
						the_content();
						?>
					</div>
			</article>
			</div>
		</div>
	</div>
</div>
