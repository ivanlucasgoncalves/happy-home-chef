<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package HCC Theme
 */

?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" name="s" id="input-search" placeholder="Type to search" value="<?php echo get_search_query(); ?>" autocomplete="off" />
	<div class="submit-button">
		<img src="<?php bloginfo( 'template_url' ); ?>/src/images/search-submit.svg" />
		<input type="submit" alt="Search" />
	</div>
</form>
