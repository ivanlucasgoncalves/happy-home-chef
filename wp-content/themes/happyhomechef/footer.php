<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HCC Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/social-media', 'footer' ); ?>
		<div class="site-footer__top">
			<div class="container">
				<div class="row justify-content-between">
					<?php
					if ( is_active_sidebar( 'footer' ) ) {
						dynamic_sidebar( 'footer' );
					}
					?>
				</div>
			</div>
		</div>
		<div class="site-footer__bottom background--green">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="color--white"><?php echo esc_html( 'Copyright' ); ?> <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( 'Happy Home Chef. All rights reserved.' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
