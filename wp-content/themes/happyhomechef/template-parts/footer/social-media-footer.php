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
		<div class="row">
			<div class="col-md-6">
				<div class="facebook-app border-radius d-flex align-items-center justify-content-center"><?php echo file_get_contents( get_template_directory() . '/src/images/facebook-f.svg' ); //phpcs:ignore ?></div>
			</div>
			<div class="col-md-6">
                <div class="insta-app border-radius d-flex align-items-center justify-content-center"><?php echo file_get_contents( get_template_directory() . '/src/images/instagram.svg' ); //phpcs:ignore ?></div>
			</div>
		</div>
	</div>
</div>

