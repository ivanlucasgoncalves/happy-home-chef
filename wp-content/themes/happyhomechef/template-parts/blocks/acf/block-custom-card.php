<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

$card_title   = get_sub_field( 'title' );
$card_content = get_sub_field( 'content' );
?>

<div class="acf-block background--white mb-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="custom-card w-100 p-4">
                    <h3 class="mt-0 mb-1"><?php echo $card_title; //phpcs:ignore ?></h3>
                    <p class="col-9 pl-0"><?php echo $card_content; //phpcs:ignore ?></p>
				</div>
			</div>
		</div>
	</div>
</div>




