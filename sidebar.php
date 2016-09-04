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
	<?php dynamic_sidebar( 'main_sidebar' ); ?>
</aside><!-- /#sidebar  -->
<div class="cf"></div><!-- / .cf -->