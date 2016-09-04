<?php
/**
 * The template for displaying the header top bar
 *
 * Displays the social links and search bar
 *
 * @package rohas
 */

?>
<div id="header_top">
	<div class="wrapper">
		<ul class="social_links">
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
		</ul><!-- / .social_links -->

		<form action="<?php echo esc_url(home_url( '/' )); ?>" role="search" method="get" id="search_form_header">
			<div class="search_button_wrapper">
				<i class="fa fa-search"></i>
				<input type="submit" value="" />
			</div><!-- / .search_button_wrapper -->
			<input type="text" value="<?php echo esc_html(get_search_query()); ?>" name="s" placeholder="<?php _e('Search...', 'rohas-lite'); ?>" />
		</form>
	</div><!-- / .wrapper -->
</div><!-- /#header_top  -->