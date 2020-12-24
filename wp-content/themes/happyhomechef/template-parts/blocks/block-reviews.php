<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

$args  = [
	'post_type'      => 'reviews',
	'posts_per_page' => 3,
];
$query = new WP_Query( $args );
?>

<?php
if ( $query->have_posts() ) :
	?>
<div class="block-component block-component--reviews">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="d-flex align-items-center"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill fill--primary-color" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
				<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg><span class="ml-2">What our clients say</span></h2>
			</div>
		</div>
		<div class="row mt-4 mt-md-5">
			<div class="col-12 col-md-5 col-lg-4">
				<?php
				$count_btn = 0;
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
						<button class="button-review border-radius d-flex align-items-center w-100 mb-3 <?php echo 0 === $count_btn ? 'current-btn-review' : ''; ?>" data-id="<?php echo get_the_ID(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
								<span class="button-img border-radius">
									<?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail_review' ); ?>
								</span>
							<?php else : ?>
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-bounding-box placeholder--btn-review" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
								<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
								</svg>
							<?php endif; ?>
							<span class="ml-3">
								<span class="button-title d-block"><?php echo esc_html( get_the_title() ); ?></span>
								<span class="button-date d-block"><?php echo get_the_date( 'F j, Y' ); ?></span>
							</span>
						</button>
						<?php
						$count_btn++;
					endwhile;
				?>
				<a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>" class="button button--all-reviews button--large border-radius text--underline color--black d-flex align-items-center justify-content-center w-100">View all reviews</a>
			</div>
			<div class="col-12 col-md-7 col-lg-8 mt-5 mt-md-0">
				<?php
				$count_review = 0;
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
						<div class="review-blk <?php echo 0 === $count_review ? 'current-review' : ''; ?>" data-id="<?php echo get_the_ID(); ?>">
							<div class="review-stars mb-2 pl-0 pl-lg-5">
							<?php hcc_reviews( get_the_ID() ); ?>
							</div>
							<h3 class="mb-3 pl-0 pl-lg-5"><?php echo esc_html( get_field( 'review_title', get_the_ID() ) ); ?></h3>
							<p class="review-content pl-0 pl-lg-5"><?php echo hcc_custom_excerpt( get_the_content(), 65 ); //phpcs:ignore ?></p>
						</div>
						<?php
						$count_review++;
					endwhile;
				?>
			</div>
		</div>
	</div>
</div>
<?php endif;
/* Restore original Post Data */
wp_reset_postdata();
?>
