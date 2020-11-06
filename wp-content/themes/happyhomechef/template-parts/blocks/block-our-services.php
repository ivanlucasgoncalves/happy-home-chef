<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="block-component block-component--our-services background--light-grey">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="dots dots--top mb-2">Our services</h2>
				<p class="d-flex align-items-center">Made with love in your home<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill fill--primary-color ml-1" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
				</svg></p>
			</div>
		</div>
		<?php
		if ( have_rows( 'our_services_group' ) ) :
			while ( have_rows( 'our_services_group' ) ) :
				the_row();

				if ( have_rows( 'repeater_row' ) ) :
					while ( have_rows( 'repeater_row' ) ) :
						the_row();

						if ( get_row_layout() === '2_cols' ) :

							if ( have_rows( 'repeater_posts_2_cols' ) ) :
								?>
								<div class="row justify-content-between mt-5">
									<?php
									while ( have_rows( 'repeater_posts_2_cols' ) ) :
										the_row();
										get_template_part( 'template-parts/blocks/parts/2', 'cols' );
									endwhile;
									?>
								</div>
								<?php
							endif;

						elseif ( get_row_layout() === '3_cols' ) :

							if ( have_rows( 'repeater_posts_3_cols' ) ) :
								?>
								<div class="row justify-content-between mt-5">
									<?php
									while ( have_rows( 'repeater_posts_3_cols' ) ) :
										the_row();
										get_template_part( 'template-parts/blocks/parts/3', 'cols' );
									endwhile;
									?>
								</div>
								<?php
							endif;

						endif;

					endwhile;
				endif;

			endwhile;
		endif;
		?>
	</div>
</div>
