<?php

echo '<div class="navigation">';

if ( get_previous_posts_link() ) {
	previous_posts_link( '<i class="fa fa-angle-double-left"></i>Previous' );
}

if ( get_next_posts_link() ) {
	next_posts_link( 'Next<i class="fa fa-angle-double-right"></i>' ); 
}
echo '</div>';

	