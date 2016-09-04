<?php 

Kirki::add_field( 'rohas', array(
	'type'        => 'select',
	'settings'    => 'rohas_sidebar_position',
	'label'       => __( 'Sidebar position', 'rohas-lite' ),
	'description'       => __( 'Change sidebar position', 'rohas-lite' ),
	'section'     => 'rohas_sidebar',
	'default'     => 'right',
	'choices'     => array(
		'left' => esc_attr__( 'Left', 'rohas-lite' ),
		'right' => esc_attr__( 'Right', 'rohas-lite' ),
	),
) );