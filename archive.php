<?php 
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

get_header();

echo '<div id="main_content" class="'.esc_attr(rohas_get_sidebar_position('content')).'">';

if ( have_posts() )  {

	//Display the arhive title
	the_archive_title('<h2 class="archive_title">', '</h2>');

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
