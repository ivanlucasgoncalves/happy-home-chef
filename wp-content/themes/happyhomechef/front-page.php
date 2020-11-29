<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

get_header();
?>

	<main id="main" class="site-main">
		<?php get_template_part( 'template-parts/blocks/block', 'top-hero' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'our-services' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'reviews' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	</main>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
