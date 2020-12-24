<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="acf-block background--white mb-4">
	<div class="container">
		<div class="row justify-content-center">
			<?php
			if ( have_rows( 'repeater' ) ) :
				while ( have_rows( 'repeater' ) ) :
					the_row();

					$choose_meal  = get_sub_field( 'quantity_meal' );
					$choose_price = get_sub_field( 'price' );
					$choose_menu  = get_sub_field( 'menu_choices' );
					?>
						<div class="col-12 col-md-6 col-lg-3 package-block mb-4 mb-lg-0">
							<div>
								<div class="package-block__inner d-flex flex-column justify-content-between align-items-center">
									<h3 class="mb-4 text-center"><span><?php echo $choose_meal; //phpcs:ignore ?></span><span class="subheading d-block">meals</span></h3>
									<h5 class="mb-4"><?php echo $choose_price; //phpcs:ignore ?></h5>
									<p><?php echo $choose_menu; //phpcs:ignore ?></p>
								</div>
							</div>
						</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>
