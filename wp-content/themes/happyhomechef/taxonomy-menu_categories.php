<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

get_header();

$custom_term_id   = get_queried_object()->term_id;
$custom_term_name = get_queried_object()->name;
?>

	<main id="main" class="site-main">
		<?php
		hcc_template_part(
			'template-parts/header/common-header',
			array(
				'title' => 'Menus',
			)
		);
		?>
		<div class="background--light-grey pt-5 pb-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-auto">
						<h2 class="mb-5"><?php echo esc_html( $custom_term_name ); ?></h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-lg-10">
						<?php
						$args = array(
							'post_type' => 'menus',
							'tax_query' => array( //phpcs:ignore
								array(
									'taxonomy' => 'menu_categories',
									'field'    => 'term_id',
									'terms'    => $custom_term_id,
								),
							),
						);

						$query = new WP_Query( $args );

						if ( $query->have_posts() ) :
							?>
								<div class="accordion" id="accordion-menu">
									<?php
									while ( $query->have_posts() ) :
											$query->the_post();

											hcc_template_part(
												'template-parts/content-menus',
												array(
													'index' => $query->current_post + 1,
												)
											);
										?>
									<?php endwhile; ?>
								</div>
								<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="background--white pt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-auto">
						<h2 class="mb-5">Other Menus</h2>
					</div>
				</div>
				<div class="row relatedposts">
					<?php
					$related_taxonomy = 'menu_categories';
					$related_terms    = get_terms( $related_taxonomy ); // Get all terms of a related_taxonomy.
					foreach ( $related_terms as $related_term ) {
						$related_term_id = $related_term->term_id;
						if ( $custom_term_id !== $related_term_id ) :

							$thumbnail_id  = get_field( 'image_thumb', 'term_' . $related_term_id );
							$thumbnail_url = wp_get_attachment_image_url( $thumbnail_id, 'thumbnail_post_cols' );
							?>

							<div class="col-12 col-md-6 mb-4 mb-md-5">
								<div class="card border-radius h-100">
									<div class="row no-gutters h-100">
										<div class="col-lg-5 card__img" style="background-image: url(<?php echo esc_attr( $thumbnail_url ); ?>)"></div>
										<div class="col-lg-7">
											<div class="card__body background--white h-100">
												<h5 class="card__title"><?php echo esc_html( $related_term->name ); ?></h5>
												<p class="card__text"><?php echo esc_html( $related_term->description ); ?></p>
												<a class="button button--pink" href="<?php echo esc_attr( get_term_link( $related_term->slug, $related_taxonomy ) ); ?>">View more and book</a>
												<img class="d-block align-self-center mt-3" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-icon.png' ); ?>" />
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php
						endif;
					}
					?>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/blocks/block-book', 'now' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	</main>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
