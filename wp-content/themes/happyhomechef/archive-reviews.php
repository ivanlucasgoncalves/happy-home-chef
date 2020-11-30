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
		<?php if ( have_posts() ) : ?>

			<?php
			hcc_template_part(
				'template-parts/header/common-header',
				array(
					'title' => post_type_archive_title( '', false ),
				)
			);
			?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			wp_numeric_posts_nav();

			else :

				get_template_part( 'template-parts/content', 'none' );

		endif;
			?>
	</main>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
