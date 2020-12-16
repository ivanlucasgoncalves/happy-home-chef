<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="background--light-grey pt-5 pb-5">
	<div class="container">
		<div class="row mb-4 mb-md-5">
			<div class="col-12">
				<h2 class="mb-0">Follow us on Social Media</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="facebook-app">
					<a href="<?php echo esc_url( 'https://www.facebook.com/THEHAPPYHOMECHEF/' ); ?>" target="_blank" class="follow-link d-inline-flex align-items-center mb-3"><?php echo file_get_contents( get_template_directory() . '/src/images/facebook-f.svg' ); //phpcs:ignore ?><span class="ml-2"><?php echo esc_html( 'HappyHomeChef' ); ?><span></a>
					<?php echo do_shortcode( '[custom-facebook-feed]' ); ?> 
				</div>
			</div>
			<div class="col-md-6">
				<div class="insta-app">
					<a href="<?php echo esc_url( 'https://www.instagram.com/happyhomechefbrisbane/' ); ?>" target="_blank" class="follow-link d-inline-flex align-items-center mb-3"><?php echo file_get_contents( get_template_directory() . '/src/images/instagram.svg' ); //phpcs:ignore ?><span class="ml-2"><?php echo esc_html( '@happyhomechefbrisbane' ); ?><span></a>
					<?php echo do_shortcode( '[instagram-feed]' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

