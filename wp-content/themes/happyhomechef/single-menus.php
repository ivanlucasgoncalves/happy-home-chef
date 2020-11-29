<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				'title' => get_the_title(),
			)
		);
		?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<div class="background--white pt-3 pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-10">
							<div class="entry-content">
								<?php the_content(); ?>
								<?php
								if ( have_rows( 'options' ) ) :
									?>
									<h4 class="mb-2"><?php echo esc_html( 'Options:' ); ?></h4>
									<ul class="menu-list">
										<?php
										while ( have_rows( 'options' ) ) :
											the_row();
											$options_list = get_sub_field( 'options_list' );
											?>

											<li><?php echo esc_html( $options_list ); ?></li>

											<?php
										endwhile;
										?>
									</ul>
									<?php
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
		endwhile; // End of the loop.
		?>

	</main>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
