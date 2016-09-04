<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rohas
 */
if ( ! is_active_sidebar( 'main_sidebar' ) )
	return;
?>

<aside id="sidebar" class="<?php echo esc_attr(rohas_get_sidebar_position('sidebar')); ?>">
	<?php 
	
	$banner_one = get_theme_mod('rohas_banner_squere_one');
	$banner_two = get_theme_mod('rohas_banner_squere_two');
	$banner_three = get_theme_mod('rohas_banner_squere_three');
	$banner_four = get_theme_mod('rohas_banner_squere_four');

	if($banner_one or $banner_two or $banner_three or $banner_four) {
		echo '<div class="widget squere_banners">';
			if($banner_one) {
				echo '<div class="banner">'.$banner_one.'</div><!-- / .banner -->';
			}
			if($banner_two) {
				echo '<div class="banner">'.$banner_two.'</div><!-- / .banner -->';
			}
			if($banner_three) {
				echo '<div class="banner">'.$banner_three.'</div><!-- / .banner -->';
			}
			if($banner_four) {
				echo '<div class="banner">'.$banner_four.'</div><!-- / .banner -->';
			}
		echo '</div><!-- / .widget -->';
	}

	?>
	
	<?php dynamic_sidebar( 'main_sidebar' ); ?>
</aside><!-- /#sidebar  -->
<div class="cf"></div><!-- / .cf -->