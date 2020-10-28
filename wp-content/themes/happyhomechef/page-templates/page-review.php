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
		<div class="row justify-content-center mt-4 mb-5">
			<div class="col-auto">
				<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" tabindex="49"]' ); ?> 
			</div>
		</div>
	</div>

<?php
get_footer( 'review' );
