<?php 

get_header();

if ( have_posts() )  {

	//Display the search title
	echo '<h2 class="archive_title">' . sprintf( 'Search Results for: %s', get_search_query() ) . '</h2>';

	//Loop the query posts
	while ( have_posts() ) : the_post();

		get_template_part( 'parts/content-post' );

	endwhile;

	//Navigation
	echo '<div class="navigation">';

	if ( get_previous_posts_link() ) {
		previous_posts_link( '<i class="fa fa-angle-double-left"></i>Previous' );
	}

	if ( get_next_posts_link() ) {
		next_posts_link( 'Next<i class="fa fa-angle-double-right"></i>' ); 
	}
	echo '</div>';

} else {
	get_template_part( 'parts/content', 'none' );
}

get_footer(); 

?>