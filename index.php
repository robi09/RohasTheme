<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

get_header();

if ( have_posts() )  {
	while ( have_posts() ) : the_post();

		get_template_part( 'parts/content-post' );

	endwhile;

	//Navigation
	get_template_part( 'parts/navigation' );

} else {
	get_template_part( 'parts/content', 'none' );
}

get_footer(); 

?>