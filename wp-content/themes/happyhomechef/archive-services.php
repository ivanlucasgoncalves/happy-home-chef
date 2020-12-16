<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

get_header();

?>

	<main id="main" class="site-main">
		<?php
		hcc_template_part(
			'template-parts/header/common-header',
			array(
				'title' => post_type_archive_title( '', false ),
			)
		);
		?>
		<?php
		if ( have_posts() ) :
			?>
			<div class="block-component background--light-grey pb-0">
				<div class="container">
					<div class="row">
						<?php
						while ( have_posts() ) :
								the_post();
							?>
							<div class="col-12 col-md-6 mb-4 mb-md-5">
								<div class="card border-radius h-100">
									<div class="row no-gutters h-100">
										<div class="col-lg-5 card__img" style="background-image: url(<?php echo esc_attr( get_the_post_thumbnail_url( get_the_ID(), 'thumbnail_post_cols' ) ); ?>)"></div>
										<div class="col-lg-7">
											<div class="card__body background--white h-100">
												<h5 class="card__title"><?php the_title(); ?></h5>
												<div class="card__text"><?php the_excerpt(); ?></div>
												<a class="button button--pink" href="<?php echo esc_url( get_permalink() ); ?>">View more and book</a>
												<img class="d-block align-self-center mt-3" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-icon.png' ); ?>" />
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/blocks/block-book', 'now' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'reviews' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	</main>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
