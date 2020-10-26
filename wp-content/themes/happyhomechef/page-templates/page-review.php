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
		<div class="row">
			<div class="col">
				<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]' ); ?> 
			</div>
		</div>
	</div>

<?php
get_footer( 'review' );
