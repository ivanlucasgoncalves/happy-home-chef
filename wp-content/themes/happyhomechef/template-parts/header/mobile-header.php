<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="mobile-header d-flex d-md-none justify-content-between align-items-center">
	<a class="d-inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php echo file_get_contents( get_template_directory() . '/src/images/sticky-logo.svg' ); //phpcs:ignore ?>
	</a>
	<div class="d-flex align-items-center">
		<a href="#">
            <?php echo file_get_contents( get_template_directory() . '/src/images/search.svg' ); //phpcs:ignore ?>
		</a>
		<a href="#" class="hamburger-click d-flex align-items=center justify-content-center ml-4">
			<span class="hamb"><?php echo file_get_contents( get_template_directory() . '/src/images/hamburger.svg' ); //phpcs:ignore ?></span>
            <span class="close" style="display: none"><?php echo file_get_contents( get_template_directory() . '/src/images/close-menu.svg' ); //phpcs:ignore ?></span>
		</a>
	</div>
	<nav class="main-navigation d-none">
		<?php
		wp_nav_menu(
			[
				'theme_location' => 'menu-main',
				'container'      => false,
			]
		);
		?>
	</nav><!-- # -->
</div>
