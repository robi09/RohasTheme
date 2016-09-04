<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php do_action('rohas_body_top'); ?>
	<header id="header" style="background-image: url(<?php esc_url(header_image()); ?>);">
		<div class="overlay">
			<?php 
			do_action('rohas_header_logo_before');

			// Display logo
			rohas_get_logo(); 

			do_action('rohas_header_logo_after');

			?>
		</div><!-- / .overlay -->
	</header><!-- /#header  -->
	
	<?php 

		//Display left header menu
		$menu_location = 'header_menu';
		if(has_nav_menu($menu_location)) {
			echo '<nav id="main_navigation"><div class="wrapper">';
				do_action('rohas_header_navigation_before');
					wp_nav_menu( array('theme_location' => $menu_location, 'container' => '' ) );
				do_action('rohas_header_navigation_after');
			echo '</div><!-- / .wrapper --></nav><!-- /#main_navigation  -->';
		}

	?>
		

	<main>
		<div class="wrapper">
		<?php do_action('rohas_wrapper_top'); ?>