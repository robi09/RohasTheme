<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if(!function_exists('rohas_theme_setup')) {

	function rohas_theme_setup() {

		$custom_header_args = array(
			'height'        => 222,
			'default-image' => get_template_directory_uri() . '/assets/images/header_image.jpg',
			);
		
		$custom_logo_args = array(
			'flex-height' => true,
			'flex-width'  => true,
		);

			//Theme Support
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-header', $custom_header_args );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'custom-logo', $custom_logo_args );

			//Register navigation menu
		register_nav_menus( array(
			'header_menu' => esc_html__( 'Header Menu', 'rohas-lite' )
		) );

		if ( ! isset( $content_width ) ) {
			$content_width = 1366;
		}

			// Imge sizes
		add_image_size( 'rohas-post', 600, 600 );
		add_image_size( 'rohas-single-image', 1366, 300 );

			// Language
		load_theme_textdomain('rohas-lite', get_template_directory() . '/languages'); 

	}
	add_action( 'after_setup_theme', 'rohas_theme_setup' );
}

/**
 * Add theme stylesheets
 */
if(!function_exists('rohas_styles')) {

	function rohas_styles() {
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );

		if( is_singular() ) {
			wp_enqueue_script( "comment-reply" );
		}
	}
	add_action( 'wp_enqueue_scripts', 'rohas_styles' );
}

/**
 * Add theme scripts
 */
if(!function_exists('rohas_scripts')) {

	function rohas_scripts() {
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'rohas_scripts' );
}

/**
 * Register sidebars
 */

if(!function_exists('rohas_sidebars')) {

	function rohas_sidebars() {

		$footer_sidebar_one = array(
			'id'			=> 'footer_sidebar_one',
			'name'			=> __( 'Footer Sidebar One', 'rohas-lite' ),
			'before_widget' => '<div class="widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget_title">',
			'after_title'   => '</div>',
		);
		register_sidebar( $footer_sidebar_one );

		$footer_sidebar_two = array(
			'id'			=> 'footer_sidebar_two',
			'name'			=> __( 'Footer Sidebar Two', 'rohas-lite' ),
			'before_widget' => '<div class="widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget_title">',
			'after_title'   => '</div>',
		);
		register_sidebar( $footer_sidebar_two );

		$footer_sidebar_three = array(
			'id'			=> 'footer_sidebar_three',
			'name'			=> __( 'Footer Sidebar Three', 'rohas-lite' ),
			'before_widget' => '<div class="widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget_title">',
			'after_title'   => '</div>',
		);
		register_sidebar( $footer_sidebar_three );

	}
	add_action( 'widgets_init', 'rohas_sidebars' );
}

/**
 * Add right class to navigation
 */
if(!function_exists('rohas_next_nav_filter')) {

	function rohas_next_nav_filter(){
		return 'class="right"';
	}
	add_filter('next_posts_link_attributes', 'rohas_next_nav_filter', 10, 1);
}

/**
 * Add left class to navigation
 */
if(!function_exists('rohas_prev_nav_filter')) {

	function rohas_prev_nav_filter(){
		return 'class="left"';
	}
	add_filter('previous_posts_link_attributes', 'rohas_prev_nav_filter', 10, 1);
}

if(!function_exists('rohas_get_logo')) {

	/**
	 * Output the website logo in header
	 */
	function rohas_get_logo() {
		$default = '<a href="' . esc_url( get_home_url( '/' ) ) . '" title="' . get_bloginfo('name') . '" id="logo">
				<h1>' . get_bloginfo('name') . '</h1>
				<h2>' . get_bloginfo('description') . '</h2>
			</a><!-- /#logo  -->';

		if ( function_exists( 'the_custom_logo' ) ) {
			if(get_custom_logo()) {
				the_custom_logo();
			} else {
				echo $default;
			}
		} else {
			echo $default;
		}
	}
}


if(!function_exists('rohas_editor_styles')) {

	/**
	 * Registers an editor stylesheet for the theme.
	 */
	function rohas_editor_styles() {
	    add_editor_style( get_template_directory_uri() . '/assets/css/custom-editor-style.css' );
	}
	add_action( 'admin_init', 'rohas_editor_styles' );
}