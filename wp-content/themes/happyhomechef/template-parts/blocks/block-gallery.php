<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="block-component block-component--gallery background--light-grey">
	<div class="container">
		<div class="row mb-4 mb-md-5">
			<div class="col-12">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-images fill--primary-color mb-1" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
				<path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
				</svg>
				<h2>Gallery</h2>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-12">
				<?php echo do_shortcode( '[modula id="115"]' ); ?>   
			</div>
		</div>
	</div>
</div>
