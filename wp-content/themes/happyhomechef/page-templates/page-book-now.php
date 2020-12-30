<?php
/**
 * Template Name: Book Now Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
				'title' => get_the_title(),
			)
		);
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center mb-5">
					<div class="calendar-container-page">
						<?php echo do_shortcode( '[tb-calendar booking="happy-home-booking" slot_style="1" nofilter="yes" notimezone="yes"]' ); ?>   
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	</main>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
