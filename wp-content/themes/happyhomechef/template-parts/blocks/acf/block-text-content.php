<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

$text_content = get_sub_field( 'text_content' );
?>

<div class="acf-block background--white mb-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php
						echo $text_content; //phpcs:ignore
						?>
					</div>
			</article>
			</div>
		</div>
	</div>
</div>
