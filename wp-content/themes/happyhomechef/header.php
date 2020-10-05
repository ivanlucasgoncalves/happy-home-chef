<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hhc-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php

if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
}

?>
<div id="page" class="site container">

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="site-branding col-md-auto">
			<a href="<?php echo esc_attr( home_url( '/' ) ); ?>" rel="home" class="custom-logo">
				<img src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/tcc-logo.svg' ); ?>" alt="Logo">
			</a>
			</div>

			<nav id="site-navigation" class="main-navigation col">
				<button class="menu-toggle d-none" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hhc-theme' ); ?></button>
				<?php

				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);

				?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
		<div class="row">
