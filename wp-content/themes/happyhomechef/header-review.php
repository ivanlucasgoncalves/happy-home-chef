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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;800;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-auto mt-4 mb-4">
                    <?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
				</div>
			</div>
		</div>
	</header>

