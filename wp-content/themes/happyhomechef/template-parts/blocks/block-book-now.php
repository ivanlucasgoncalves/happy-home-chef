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
	<div class="container background-image-book-now" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/src/images/happy-home-chef-banner.jpg' ); ?>)">
		<div class="row justify-content-center align-items-center">
			<div class="col-auto">
				<div class="calendar-container">
					<a class="book-now-heading" href="<?php echo esc_url( home_url( '/book-now' ) ); ?>">Book now</a>
					<?php echo do_shortcode( '[tb-calendar booking="hcc-booking" slot_style="1" nofilter="yes" notimezone="yes"]' ); ?>
					<div class="clickable-div"></div>  
				</div>
			</div>
		</div>
	</div>
</div>
