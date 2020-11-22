<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="card background--white border-radius">
	<div class="card-header d-flex align-items-center" id="heading-<?php echo esc_attr( $index ); ?>">
		<div class="d-none d-lg-block">
			<?php the_post_thumbnail( 'thumbnail_menus' ); ?>
		</div>
		<div class="p-3 p-md-4 d-flex align-items-center justify-content-between w-100">
			<div class="mr-2">
				<h4 class="mb-2"><?php the_title(); ?></h4>
				<?php the_content(); ?>
			</div>
			<button class="btn-collapse d-flex align-items-center justify-content-center" type="button" data-toggle="collapse" data-target="#collapse-<?php echo esc_attr( $index ); ?>" aria-expanded="true" aria-controls="collapse-<?php echo esc_attr( $index ); ?>">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
				</svg>
			</button>
		</div>
	</div>
	<div id="collapse-<?php echo esc_attr( $index ); ?>" class="collapse" aria-labelledby="heading-<?php echo esc_attr( $index ); ?>" data-parent="#accordion-menu">
		<div class="card-body p-3 p-md-4">
			<?php
			if ( have_rows( 'options' ) ) :
				?>
				<h4 class="mb-2"><?php echo esc_html( 'Options:' ); ?></h4>
				<ul class="menu-list">
					<?php
					while ( have_rows( 'options' ) ) :
						the_row();
						$options_list = get_sub_field( 'options_list' );
						?>

						<li><?php echo esc_html( $options_list ); ?></li>

						<?php
					endwhile;
					?>
				</ul>
				<?php
			endif;
			?>
		</div>
	</div>
</div>
