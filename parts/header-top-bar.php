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
		
		<?php 
		$social_links = get_theme_mod('rohas_social_links');

		if($social_links) {
			echo '<ul class="social_links">';

			do_action('rohas_social_icons_start'); 

			foreach($social_links as $icon) {
				if( !empty($icon['icon']) and !empty($icon['url']) ) {
					echo '<li><a href="'.esc_url($icon['url']).'"><i class="fa fa-'.esc_attr($icon['icon']).'"></i></a></li>';
				}
			}

			do_action('rohas_social_icons_end');

			echo '</ul><!-- / .social_links -->';
		}

		?>

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