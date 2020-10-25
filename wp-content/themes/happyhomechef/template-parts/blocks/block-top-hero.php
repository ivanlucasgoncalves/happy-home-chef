<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

$top_hero = get_field( 'top_hero_group' );
?>

<div class="block-component block-component--top-hero">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5">
				<div class="d-flex flex-column justify-content-between h-100">
					<div class="top-hero--left-content">
						<a class="d-none d-sm-inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
						</a>
						<?php
						if ( $top_hero['title'] ) :
							?>
							<h1 class="custom-heading"><?php echo $top_hero['title']; //phpcs:ignore ?>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill fill--primary-color" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
								<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
							</svg></h1>
						<?php endif; ?>
						<div class="d-flex">
							<?php
							if ( $top_hero['first_button'] ) :
								?>
								<a class="button button--green mr-2" href="<?php echo esc_attr( $top_hero['first_button']['link_button'] ); ?>"><?php echo esc_html( $top_hero['first_button']['text_button'] ); ?></a>
							<?php endif; ?>
							<?php
							if ( $top_hero['second_button'] ) :
								?>
								<a class="button button--green" href="<?php echo esc_attr( $top_hero['second_button']['link_button'] ); ?>"><?php echo esc_html( $top_hero['second_button']['text_button'] ); ?></a>
							<?php endif; ?>
						</div>
					</div>
					<?php
					if ( $top_hero['ndis_disclaimer'] ) :
						?>
						<p class="d-flex align-items-center">
							<img class="align-self-center mr-2" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-icon.png' ); ?>" />
							<span class="ndis-disclaimer"><?php echo esc_html( $top_hero['ndis_disclaimer'] ); ?></span>
						</p>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-lg-7 mt-5 mt-lg-0">
				<div class="top-hero--right-content d-flex justify-content-center align-items-center background--green h-100">
					<?php echo do_shortcode( '[tb-calendar booking="happy-home-cooking" slot_style="1" nofilter="yes" notimezone="yes"]' ); ?>   
				</div>
			</div>
		</div>
	</div>
</div>
