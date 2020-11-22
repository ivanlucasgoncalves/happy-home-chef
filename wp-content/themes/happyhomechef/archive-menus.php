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
		$custom_taxonomy = 'menu_categories';
		$terms           = get_terms( $custom_taxonomy ); // Get all terms of a custom_taxonomy.

		if ( $terms && ! is_wp_error( $terms ) ) :
			?>
			<div class="block-component block-component--our-services background--light-grey">
				<div class="container">
					<div class="row">
					<?php
					foreach ( $terms as $term ) {
						$term_id       = $term->term_id;
						$thumbnail_id  = get_field( 'image_thumb', 'term_' . $term_id );
						$thumbnail_url = wp_get_attachment_image_url( $thumbnail_id, 'thumbnail_post_cols' );
						?>
						<div class="col-md col-lg-6">
							<div class="card border-radius h-100">
								<div class="row no-gutters h-100">
									<div class="col-lg-5 card__img" style="background-image: url(<?php echo esc_attr( $thumbnail_url ); ?>)"></div>
									<div class="col-lg-7">
										<div class="card__body background--white h-100">
											<h5 class="card__title"><?php echo $term->name; ?></h5>
											<p class="card__text"><?php echo $term->description; ?></p>
											<a class="button button--pink" href="<?php echo esc_attr( get_term_link( $term->slug, $custom_taxonomy ) ); ?>">View more and book</a>
											<img class="d-block align-self-center mt-3" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-icon.png' ); ?>" />
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/blocks/block', 'ndis' ); ?>
	</main>

<?php
get_footer();
