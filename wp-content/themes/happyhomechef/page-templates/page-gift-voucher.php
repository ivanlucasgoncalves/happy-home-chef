<?php
/**
 * Template Name: Gift Voucher Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HCC Theme
 */

get_header();
?>

	<div class="container">
		<div class="row justify-content-center mt-5 mb-5">
			<div class="col-12 col-lg-5">
				<a class="d-none d-md-inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
				</a>
				<h1 class="custom-heading mt-1 mb-2"><?php the_title(); ?></h1>
				<p class="text--sixteen-px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus et saepe reiciendis sed omnis laudantium exercitationem quidem error enim, fuga pariatur assumenda recusandae aliquam, adipisci inventore, facilis deserunt magni blanditiis?</p>
			</div>
			<div class="col-12 col-lg-6 offset-lg-1 mt-5 mt-lg-0">
				<?php echo do_shortcode( '[gravityform id="5" title="false" description="false" tabindex="49"]' ); ?> 
			</div>
		</div>
	</div>
	<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
