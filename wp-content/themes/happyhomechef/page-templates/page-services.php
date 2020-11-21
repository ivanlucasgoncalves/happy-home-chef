<?php
/**
 * Template Name: Services Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
		$args = array(
			'post_type' => 'services',
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) :
			?>
				<?php
				while ( $query->have_posts() ) :
						$query->the_post();

						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/blocks/block', 'reviews' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	</main>

<?php
get_footer();
