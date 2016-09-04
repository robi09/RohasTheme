<?php

Kirki::add_config( 'rohas', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


/**
 * Customize panels
 */
Kirki::add_panel( 'rohas_design', array(
    'priority'    => 10,
    'title'       => __( 'Design', 'rohas-lite' ),
    'description' => __( 'Change and manage design settings.', 'rohas-lite' ),
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

require get_template_directory() . '/inc/customize/design_colors.php';
