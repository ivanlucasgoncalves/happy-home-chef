<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="block-component block-component--top-hero">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<a class="d-none d-md-inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
				</a>
				<h1 class="custom-heading__about-us mt-1 mb-2"><?php the_title(); ?></h1>
				<p class="text--sixteen-px"><?php echo esc_html( 'Made with love in your home' ); ?>
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill fill--primary-color ml-1" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
				</svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill fill--primary-color ml-1" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/><path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg></p>
			</div>
			<div class="col-12 col-lg-6 mt-5 mt-lg-0 top-hero--right-content d-none d-lg-block">
				<div class="d-flex justify-content-center align-items-end h-100">
					<div class="background-image-top-hero d-none d-sm-block" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/src/images/sample3.png' ); ?>)"></div>
				</div>
			</div>
		</div>
	</div>
</div>
