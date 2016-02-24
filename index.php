<?php 

get_header();

if ( have_posts() ) : 

	while ( have_posts() ) : the_post();

		get_template_part( 'parts/content-post' );

	endwhile;

	// Previous/next page navigation.
	the_posts_pagination( array(
		'prev_text'          => __( 'Previous page', 'rohas' ),
		'next_text'          => __( 'Next page', 'rohas' ),
	) );

else :
	get_template_part( 'parts/content', 'none' );
endif;

get_footer(); 

?>