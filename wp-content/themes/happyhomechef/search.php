<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				'title' => 'Search Results',
			)
		);
		?>
		<div class="background--light-grey pt-5 pb-5">
			<div class="container">
				<div class="row justify-content-center">
					<?php if ( have_posts() ) : ?>
						<div class="col-12">
							<h3>
								<?php
								/* translators: Search query. */
								printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h3>
						</div>
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();
						?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<?php get_template_part( 'template-parts/blocks/block', 'reviews' ); ?>
		<?php get_template_part( 'template-parts/blocks/block', 'hcc-live-on-sunrise' ); ?>
	</main>

<?php
get_footer();
