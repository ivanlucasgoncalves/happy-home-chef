<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="background--white pt-3 pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php //the_post_thumbnail(); ?>

					<div class="entry-content">
						<?php
						the_content();
						?>
					</div>
			</article>
			</div>
		</div>
	</div>
</div>
