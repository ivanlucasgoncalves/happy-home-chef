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
		<div class="site-footer__bottom background--green">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-auto">
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
