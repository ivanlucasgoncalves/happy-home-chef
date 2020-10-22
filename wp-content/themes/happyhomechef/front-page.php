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
		<div class="container">
			<div class="row">
				<div class="col col-lg-5">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
					</a>
					<h1>Nutritious and delicious food made with love <span>in your home</span></h1>

					<div class="d-flex">
						<a class="button button--green" href="#">NDIS</a>
						<a class="button button--green" href="#">Menus</a>
					</div>

					<p class="d-flex">
						<img class="align-self-center" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-icon.png' ); ?>" />
						<span class="ndis-disclaimer">Our team is a proud provider of the NDIS (National Disability Insurance Scheme) for more than 10 years.</span>
					</p>
				</div>
				<div class="col col-lg-7">
					<?php echo do_shortcode( '[tb-calendar booking="happy-home-cooking" slot_style="1" nofilter="yes" notimezone="yes"]' ); ?>   
				</div>
			</div>
		</div>

	</main>

<?php
get_footer();
