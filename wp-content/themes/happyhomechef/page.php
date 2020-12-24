<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
		<div class="acf-blocks mt-3">
			<?php
			if ( have_rows( 'flexible_content' ) ) :
				while ( have_rows( 'flexible_content' ) ) :
					the_row();

					if ( get_row_layout() === 'content' ) :
						get_template_part( 'template-parts/blocks/acf/block-text', 'content' );
					elseif ( get_row_layout() === 'custom_card' ) :
						get_template_part( 'template-parts/blocks/acf/block-custom', 'card' );
					elseif ( get_row_layout() === 'choose_a_package' ) :
						get_template_part( 'template-parts/blocks/acf/block-choose-a', 'package' );
					endif;

				endwhile;
			endif;
			?>
		</div>
		<?php get_template_part( 'template-parts/blocks/block-book', 'now' ); ?>
	</main>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
