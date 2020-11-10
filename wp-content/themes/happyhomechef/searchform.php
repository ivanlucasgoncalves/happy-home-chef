<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package HCC Theme
 */

?>

<form action="/" method="get">
	<input type="text" name="s" id="input-search" placeholder="Type to search" value="<?php the_search_query(); ?>" autocomplete="off" />
	<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/src/images/search-submit.svg" />
</form>
