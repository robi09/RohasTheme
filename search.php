<?php 

get_header();

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

get_footer(); 

?>