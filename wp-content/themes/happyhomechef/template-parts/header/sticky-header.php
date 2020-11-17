<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="sticky-header d-none d-md-block">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<a class="col-auto d-inline-block custom-sticky-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo file_get_contents( get_template_directory() . '/src/images/sticky-logo.svg' ); //phpcs:ignore ?>
			</a>
			<div class="d-flex justify-content-end align-items-center">
				<nav class="col-auto main-navigation">
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'menu-main',
							'container'      => false,
						]
					);
					?>
				</nav><!-- # -->
				<a class="col-auto d-inline-block button-search" href="#">
					<?php echo file_get_contents( get_template_directory() . '/src/images/search.svg' ); //phpcs:ignore ?>
				</a>
			</div>
		</div>
	</div>
	<div class="sticky-search">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col d-flex align-items-center">
					<?php get_search_form(); ?>
					<a class="d-inline-block button-close-search" href="#">
						<?php echo file_get_contents( get_template_directory() . '/src/images/close.svg' ); //phpcs:ignore ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

