<?php 
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rohas
 */

get_header();

echo '<div id="main_content" class="'.esc_attr(rohas_get_sidebar_position('content')).'">';

if ( have_posts() )  {

	//Display the search title
	echo '<h2 class="archive_title">' . sprintf( __('Search results for', 'rohas-lite') . ': %s', get_search_query() ) . '</h2>';

	//Loop the query posts
	while ( have_posts() ) : the_post();

		get_template_part( 'parts/content-post' );

	endwhile;

	//Navigation
	get_template_part( 'parts/navigation' );

} else {
	get_template_part( 'parts/content', 'none' );
}

echo '</div>';

get_sidebar();

get_footer(); 

?>