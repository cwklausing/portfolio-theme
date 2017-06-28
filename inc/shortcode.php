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

if ( ! function_exists( 'sbcButton' ) ) {
	function sbcButton( $atts, $content = null ) {
		extract(shortcode_atts( array(
			"link" => 'http://sitesbyconnor.dev',
			"class" => '',
		), $atts));
		return '<a href="'.$link.'" class="button '.$class.'">'.$content.'</a>';
	}

	add_shortcode( 'sbcbutton', 'sbcButton' );
}