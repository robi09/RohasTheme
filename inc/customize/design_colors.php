<?php

// Default colors
$text = '#30343D';
$headline = '#050507';
$hover = '#E65E24';
$cta = '#4FCCFC';
$border = '#eee';
$white = '#fff';

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_text_color',
	'label'       => __( 'Main text color', 'rohas-lite' ),
	'description'       => __( 'Change main text color', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $text,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => 'body',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => 'body',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_link_hover',
	'label'       => __( 'Links hover', 'rohas-lite' ),
	'description'       => __( 'Change all links hover color ( Sorry, no live preview available for this setting )', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'transport'   => 'postMessage',
	'output' => array(
		array(
			'element'  => 'a:hover, #footer .widget a:hover, #sidebar .widget a:hover,#search_form_header .search_button_wrapper:hover i, .post h3 a:hover',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_social_icons_color',
	'label'       => __( 'Social icons.', 'rohas-lite' ),
	'description'       => __( 'Change social icons colors.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $white,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#header_top .social_links li a',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '#header_top .social_links li a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_top_bar_bg_color',
	'label'       => __( 'Top bar background.', 'rohas-lite' ),
	'description'       => __( 'Change top bar background color.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'transport'   => 'postMessage',
	'alpha'       => true,
	'js_vars'   => array(
		array(
			'element'  => '#header_top',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
	'output' => array(
		array(
			'element'  => '#header_top',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_site_title_color',
	'label'       => __( 'Site title', 'rohas-lite' ),
	'description'       => __( 'Change site title color, if logo is not used.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $white,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.custom-logo-link h1',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '.custom-logo-link h1',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_site_description_color',
	'label'       => __( 'Site description', 'rohas-lite' ),
	'description'       => __( 'Change site description color, if logo is not used.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $white,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.custom-logo-link h2',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '.custom-logo-link h2',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_header_overlay',
	'label'       => __( 'Header overlay', 'rohas-lite' ),
	'description'       => __( 'Change header overlay color, if you use a opaque color option, make sure to remove the background image.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'transport'   => 'postMessage',
	'alpha'       => true,
	'js_vars'   => array(
		array(
			'element'  => '#header .overlay',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
	'output' => array(
		array(
			'element'  => '#header .overlay',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_post_link_color',
	'label'       => __( 'Posts title link.', 'rohas-lite' ),
	'description'       => __( 'Change posts title color in loops.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $headline,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.post h3 a',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '.post h3 a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_sidebar_link_color',
	'label'       => __( 'Sidebar links.', 'rohas-lite' ),
	'description'       => __( 'Change sidebar links color.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $cta,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#sidebar .widget a',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '#sidebar .widget a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_footer_sidebars_link_color',
	'label'       => __( 'Footer sidebars links.', 'rohas-lite' ),
	'description'       => __( 'Change footer sidebars links color.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $cta,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#footer .widget a',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '#footer .widget a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_footer_text_color',
	'label'       => __( 'Footer text.', 'rohas-lite' ),
	'description'       => __( 'Change footer text color.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $border,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#footer',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '#footer',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_button_background_color',
	'label'       => __( 'Buttons background.', 'rohas-lite' ),
	'description'       => __( 'Change buttons background color.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $cta,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#comments input[type=submit],.widget.widget_search input[type=submit]',
			'function' => 'css',
			'property' => 'background',
		),
	),
	'output' => array(
		array(
			'element'  => '#comments input[type=submit],.widget.widget_search input[type=submit]',
			'property' => 'background',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_button_background_hover_color',
	'label'       => __( 'Buttons hover background.', 'rohas-lite' ),
	'description'       => __( 'Change buttons hover background color. ( Sorry, no live preview available for this setting )', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $cta,
	'transport'   => 'postMessage',
	'output' => array(
		array(
			'element'  => '#comments input[type=submit]:hover,.widget.widget_search input[type=submit]:hover',
			'property' => 'background',
		),
	),
) );

Kirki::add_field( 'rohas', array(
	'type'        => 'color',
	'settings'    => 'rohas_button_label_color',
	'label'       => __( 'Buttons label.', 'rohas-lite' ),
	'description'       => __( 'Change buttons label color.', 'rohas-lite' ),
	'section'     => 'rohas_design_colors',
	'default'	  => $white,
	'transport'   => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#comments input[type=submit],.widget.widget_search input[type=submit]',
			'function' => 'css',
			'property' => 'color',
		),
	),
	'output' => array(
		array(
			'element'  => '#comments input[type=submit],.widget.widget_search input[type=submit]',
			'property' => 'color',
		),
	),
) );