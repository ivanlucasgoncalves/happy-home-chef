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
	</main>

<?php
get_footer();
