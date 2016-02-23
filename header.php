<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>
<body>
	<header id="header" style="background-image: url(<?php header_image(); ?>);">
		<div class="overlay">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>" id="logo">
				<h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</a><!-- /#logo  -->
		</div><!-- / .overlay -->
	</header><!-- /#header  -->
	<nav id="main_navigation">
		<div class="wrapper">
			<?php 

				//Display left header menu
				$menu_location = 'header_menu';
				if(has_nav_menu($menu_location)) {
					wp_nav_menu( array('theme_location' => $menu_location, 'container' => '' ) );
				}

			?>
		</div><!-- / .wrapper -->
	</nav><!-- /#main_navigation  -->

	<main>
		<div class="wrapper">