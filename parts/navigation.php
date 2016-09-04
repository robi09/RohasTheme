<?php
/**
 * Template part for displaying main navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rohas
 */

echo '<div class="navigation">';

do_action('rohas_navigation_top');

if ( get_previous_posts_link() ) {
	previous_posts_link( '<i class="fa fa-angle-double-left"></i>' . __('Previous', 'rohas-lite') );
}

if ( get_next_posts_link() ) {
	next_posts_link( __('Next', 'rohas-lite') . '<i class="fa fa-angle-double-right"></i>' ); 
}

do_action('rohas_navigation_bottom');

echo '</div>';

	