<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function rohas_theme_setup() {

	$custom_header_args = array(
		'height'        => 222,
		'default-image' => get_template_directory_uri() . '/assets/images/header_image.jpg',
		);

		//Theme Support
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header', $custom_header_args );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

		//Register navigation menu
	register_nav_menus( array(
		'header_menu' => esc_html__( 'Header Menu', 'rohas' )
	) );
}

add_action( 'after_setup_theme', 'rohas_theme_setup' );

function rohas_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0');
}

add_action( 'wp_enqueue_scripts', 'rohas_styles' );

function rohas_scripts() {
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'rohas_scripts' );