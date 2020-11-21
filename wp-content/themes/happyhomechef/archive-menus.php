<?php
/**
 * The template for displaying archive pages
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
				'title' => post_type_archive_title( '', false ),
			)
		);
		?>
		<?php

		$custom_taxonomy = 'menu_categories';
		$terms           = get_terms( $custom_taxonomy ); // Get all terms of a custom_taxonomy.

		if ( $terms && ! is_wp_error( $terms ) ) :
			?>
			<ul>
				<?php foreach ( $terms as $term ) { ?>
					<li><a href="<?php echo get_term_link( $term->slug, $custom_taxonomy ); ?>"><?php echo $term->name; ?></a></li>
				<?php } ?>
			</ul>
		<?php endif; ?>
	</main>

<?php
get_footer();
