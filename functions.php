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
	add_theme_support( 'automatic-feed-links' );

		//Register navigation menu
	register_nav_menus( array(
		'header_menu' => esc_html__( 'Header Menu', 'rohas-lite' )
	) );

	if ( ! isset( $content_width ) ) {
		$content_width = 1366;
	}

		// Imge sizes
	add_image_size( 'rohas-post', 600, 600 );

}
add_action( 'after_setup_theme', 'rohas_theme_setup' );

/**
 * Add theme stylesheets
 */
function rohas_styles() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	if( is_singular() ) {
		wp_enqueue_script( "comment-reply" );
	}
}
add_action( 'wp_enqueue_scripts', 'rohas_styles' );

/**
 * Add theme scripts
 */
function rohas_scripts() {
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'rohas_scripts' );

/**
 * Add HTML5shiv
 */
function rohas_hmtl5shiv () {
    echo '
    	<!--[if lt IE 9]>
    		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
    	';
}
add_action( 'wp_head', 'rohas_hmtl5shiv' );

/**
 * Register sidebars
 */
function revive_sidebars() {

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
add_action( 'widgets_init', 'revive_sidebars' );

/**
 * Add right class to navigation
 */
function rohas_next_nav_filter(){
	return 'class="right"';
}
add_filter('next_posts_link_attributes','rohas_next_nav_filter',10,1);

/**
 * Add left class to navigation
 */
function rohas_prev_nav_filter(){
	return 'class="left"';
}
add_filter('previous_posts_link_attributes','rohas_prev_nav_filter',10,1);
