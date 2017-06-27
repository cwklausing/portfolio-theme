<?php
/**
 * Shortcodes
 */


// Custom graphics shortcode
if ( ! function_exists( 'customGraphic') ) {
	function customGraphic( $atts ) {
		extract(shortcode_atts( array(
				"name" => 'test',
			), $atts));
		return '<div class="graphic graphic-'.$name.'"></div>';
	}

	add_shortcode( 'graphic', 'customGraphic' );
}