<?php
/**
 * Template Name: Review Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HCC Theme
 */

get_header( 'review' );
?>

	<div class="container">
		<div class="row justify-content-center mt-5 mb-5">
			<div class="col-12 col-lg-5">
				<?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
				<h1 class="custom-heading mt-1 mb-2"><?php the_title(); ?></h1>
				<p class="text--sixteen-px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis animi eius eligendi exercitationem quidem asperiores iusto error sint assumenda, sapiente molestiae quibusdam consequatur. Ipsam consequatur exercitationem impedit voluptates omnis.</p>
			</div>
			<div class="col-12 col-lg-6 offset-lg-1 mt-5 mt-lg-0">
				<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" tabindex="49"]' ); ?> 
			</div>
		</div>
	</div>

<?php
get_footer( 'review' );
