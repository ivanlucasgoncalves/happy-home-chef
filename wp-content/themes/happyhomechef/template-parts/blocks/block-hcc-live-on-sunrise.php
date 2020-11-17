<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

$hcc_live_on_sunrise = get_field( 'hcc_live_on_sunrise_group', 'option' );
?>

<div class="block-component block-component--hcc-live-on-sunrise background--green">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 video-content">
				<div class="embed-responsive embed-responsive-16by9 border-radius">
					<!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XF3tZW9isbM?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				</div>
			</div>
			<div class="col-lg-6 text-content mt-4 mt-lg-0">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tv-fill fill--white" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z"/>
				</svg>
				<?php
				if ( $hcc_live_on_sunrise['heading'] ) :
					?>
					<h3 class="color--white"><?php echo esc_html( $hcc_live_on_sunrise['heading'] ); ?></h3>
				<?php endif; ?>
				<?php
				if ( $hcc_live_on_sunrise['content'] ) :
					?>
					<div class="color--white"><?php echo $hcc_live_on_sunrise['content']; //phpcs:ignore ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
