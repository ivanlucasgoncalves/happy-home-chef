<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HCC Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;800;900&display=swap" rel="stylesheet"> -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col">
					<nav class="main-navigation d-none d-md-block">
						<?php
						wp_nav_menu(
							[
								'theme_location' => 'menu-main',
								'container'      => false,
							]
						);
						?>
					</nav><!-- # -->
					<?php get_template_part( 'template-parts/header/mobile', 'header' ); ?>
				</div>
			</div>
		</div>
	</header>
	<?php get_template_part( 'template-parts/header/sticky', 'header' ); ?>
