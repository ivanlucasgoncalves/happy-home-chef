<?php
/**
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HCC Theme
 */

get_header();
?>

	<div class="container">
		<div class="row justify-content-center mt-5 mb-5">
			<div class="col-12 col-lg-5">
				<a class="d-inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo file_get_contents( get_template_directory() . '/src/images/logo.svg' ); //phpcs:ignore ?>
				</a>
				<h1 class="custom-heading mt-1 mb-2"><?php the_title(); ?></h1>
				<p class="text--sixteen-px">Feel free to reach out to us using any of the contact information provided on this page <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots-fill fill--primary-color ml-1" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
				</svg></p>
			</div>
			<div class="col-12 col-lg-6 offset-lg-1 mt-5 mt-lg-0">
				<?php echo do_shortcode( '[gravityform id="2" title="false" description="false" tabindex="49"]' ); ?> 
			</div>
		</div>
	</div>
	<?php get_template_part( 'template-parts/blocks/block-social', 'media' ); ?>

<?php
get_footer();
