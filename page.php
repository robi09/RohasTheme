<?php 

get_header(); 

while ( have_posts() ) : the_post();
	
	//Get page content
	get_template_part( 'parts/content-page' );

endwhile;
get_footer(); 

?>