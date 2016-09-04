<?php 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

get_header(); 

echo '<div id="main_content" class="'.esc_attr(rohas_get_sidebar_position('content')).'">';

while ( have_posts() ) : the_post();
	
	//Get page content
	get_template_part( 'parts/content-page' );

endwhile;

echo '</div>';

get_sidebar();

get_footer(); 

?>