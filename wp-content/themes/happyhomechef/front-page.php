<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

get_header();
?>

	<main id="main" class="site-main">
		<div class="block-component block-component--top-hero">
			<div class="container">
				<div class="row">
					<div class="col col-lg-5">
						<div class="d-flex flex-column justify-content-between h-100">
							<div class="top-hero--left-content">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
								</a>
								<h1>Nutritious and delicious food made with love <span>in your home</span>
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill fill--primary-color" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
								<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
								</svg></h1>

								<div class="d-flex">
									<a class="button button--green mr-2" href="#">NDIS</a>
									<a class="button button--green" href="#">Menus</a>
								</div>
							</div>
							<p class="d-flex">
								<img class="align-self-center mr-2" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-icon.png' ); ?>" />
								<span class="ndis-disclaimer">Our team is a proud provider of the NDIS (National Disability Insurance Scheme) for more than 10 years.</span>
							</p>
						</div>
					</div>
					<div class="col col-lg-7">
						<div class="top-hero--right-content d-flex justify-content-center align-items-center background--green h-100">
							<?php echo do_shortcode( '[tb-calendar booking="happy-home-cooking" slot_style="1" nofilter="yes" notimezone="yes"]' ); ?>   
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

<?php
get_footer();
