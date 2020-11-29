<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package HCC Theme
 */

get_header();
?>

	<main id="main" class="site-main">
		<?php
		hcc_template_part(
			'template-parts/header/common-header',
			array(
				'title' => 'Oops!!',
			)
		);
		?>
		<div class="background--light-grey pt-5 pb-5">
			<div class="container">
				<div class="row justify-content-center">
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
