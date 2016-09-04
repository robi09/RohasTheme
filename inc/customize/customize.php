<?php

Kirki::add_config( 'rohas', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


/**
 * Customize panels
 */
Kirki::add_panel( 'rohas_design', array(
    'title'       => __( 'Design', 'rohas-lite' ),
    'description' => __( 'Change and manage design settings.', 'rohas-lite' ),
) );


Kirki::add_panel( 'rohas_ads', array(
    'title'       => __( 'Banner locations', 'rohas-lite' ),
    'description' => __( 'Add banners in your theme.', 'rohas-lite' ),
) );

/**
 * Customize sections
 */
Kirki::add_section( 'rohas_design_colors', array(
    'title'          => __( 'Colors', 'rohas-lite' ),
    'description'    => __( 'Change Rohas theme colors.', 'rohas-lite' ),
    'panel'          => 'rohas_design',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'rohas_sidebar', array(
    'title'          => __( 'Sidebar', 'rohas-lite' ),
    'description'    => __( 'Sidebar settings.', 'rohas-lite' ),
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'rohas_ads_sidebar', array(
    'title'          => __( 'Sidebar banners', 'rohas-lite' ),
    'description'    => __( 'Add four squere banners in your sidebar.', 'rohas-lite' ),
    'panel'			 => 'rohas_ads',
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'rohas_ads_others', array(
    'title'          => __( 'Other banners', 'rohas-lite' ),
    'description'    => __( 'Add banners in other locations from Rohas theme.', 'rohas-lite' ),
    'panel'			 => 'rohas_ads',
    'capability'     => 'edit_theme_options',
) );

require get_template_directory() . '/inc/customize/design_colors.php';
require get_template_directory() . '/inc/customize/sidebar.php';
require get_template_directory() . '/inc/customize/ads.php';
