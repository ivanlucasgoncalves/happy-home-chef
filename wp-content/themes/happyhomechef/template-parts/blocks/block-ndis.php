<?php
/**
 * Template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HCC Theme
 */

?>

<div class="block-component block-component--ndis background--white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-auto">
				<img class="d-block" src="<?php echo esc_attr( get_template_directory_uri() . '/src/images/ndis-logo.png' ); ?>" />
				<p class="mt-3 text-center">Our team is a proud provider of the NDIS (National Disability Insurance Scheme) for more than 10 years.</p>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-auto">
				<a href="<?php echo esc_url( home_url( '/ndis' ) ); ?>" class="button button--all-services button--large text--underline color--black d-flex align-items-center justify-content-center pt-0 pb-0">Learn more about NDIS</a>
			</div>
		</div>
	</div>
</div>
