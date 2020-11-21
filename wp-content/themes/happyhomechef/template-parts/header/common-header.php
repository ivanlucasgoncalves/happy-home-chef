<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="container">
	<div class="row justify-content-center mt-5 mb-5">
		<div class="col-12 col-lg-auto d-flex align-items-center">
			<a class="d-none d-md-inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
			</a>
			<div class="ml-md-4">
				<h1 class="custom-heading mb-2"><?php echo esc_html( $title ); ?></h1>
				<p class="text--sixteen-px"><?php echo esc_html( 'Made with love in your home' ); ?>
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill fill--primary-color ml-1" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
				</svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill fill--primary-color ml-1" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/><path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg></p>
			</div>
		</div>
	</div>
</div>
