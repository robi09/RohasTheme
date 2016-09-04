<?php 
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rohas
 */

get_header(); 

echo '<div id="main_content" class="'.esc_attr(rohas_get_sidebar_position('content')).'">';

while ( have_posts() ) : the_post();
	
	//Get single content
	get_template_part( 'parts/content-single' );

	//Navigation

	echo '<div class="navigation">';

	do_action('rohas_posts_navigation_top');

	$previous_post = get_previous_post();
	if ( $previous_post ) {
		echo '<a class="left" href="'.get_permalink( $previous_post->ID ).'"><i class="fa fa-angle-double-left"></i>'.$previous_post->post_title.'</a>'; 
	}

	$next_post = get_next_post();
	if ( $next_post ) {
		echo '<a class="right" href="'.get_permalink( $next_post->ID ).'">'.$next_post->post_title.'<i class="fa fa-angle-double-right"></i></a>'; 
	}
	
	do_action('rohas_posts_navigation_bottom');

	echo '</div>';

	// Display comments
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile;

echo '</div>';

get_sidebar();

get_footer(); ?>