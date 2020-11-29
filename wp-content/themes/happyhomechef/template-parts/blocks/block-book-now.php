<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="block-component block-component--book-now background--white">
	<div class="container background-image-book-now" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/src/images/sample3.png' ); ?>)">
		<div class="row justify-content-center">
			<div class="col-auto">
				<div class="calendar-container">
					<!-- <span class="book-now-heading">Book now</span> -->
					<?php // echo do_shortcode( '[tb-calendar booking="happy-home-cooking" slot_style="1" nofilter="yes" notimezone="yes"]' ); ?>   
				</div>
			</div>
		</div>
	</div>
</div>
