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
			<?php do_action('rohas_social_icons_start'); ?>
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
			<li><a href=""><i class="fa fa-facebook"></i></a></li>
			<?php do_action('rohas_social_icons_end'); ?>
		</ul><!-- / .social_links -->

		<form action="<?php echo esc_url(home_url( '/' )); ?>" role="search" method="get" id="search_form_header">
			<?php do_action('rohas_header_searchform_before'); ?>
			<div class="search_button_wrapper">
				<i class="fa fa-search"></i>
				<input type="submit" value="" />
			</div><!-- / .search_button_wrapper -->
			<input type="text" value="<?php echo esc_html(get_search_query()); ?>" name="s" placeholder="<?php _e('Search...', 'rohas-lite'); ?>" />
			<?php do_action('rohas_header_searchform_after'); ?>
		</form>
	</div><!-- / .wrapper -->
</div><!-- /#header_top  -->