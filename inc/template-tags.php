<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package rohas
 */

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
