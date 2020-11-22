<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="col-12 col-md-auto no-results not-found">
	<h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'hhc-theme' ); ?></h2>
	<div class="page-content mt-2">
		<?php if ( is_search() ) : ?>

			<p class="mb-4"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hhc-theme' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p class="mb-4"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hhc-theme' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div>
</div>
