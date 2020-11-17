<?php
/**
 * Template Name: Our Services Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HCC Theme
 */

get_header();
?>

	<main id="main" class="site-main">
		<?php get_template_part( 'template-parts/header/common', 'header' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'reviews' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	</main>

<?php
get_footer();
