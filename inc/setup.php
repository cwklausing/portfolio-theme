<?php
/**
 * Project setup
 * @package sbconnor
 */


if ( ! function_exists( 'sbconnor_setup' ) ) {

	function sbconnor_setup () {
		// Nav menus
		register_nav_menu( 'primary-navigation', __( 'Main Menu', 'sbconnor' ) );
		register_nav_menu( 'footer-navigation', __( 'Footer Menu', 'sbconnor' ) );

		// Add post thumbnail support.
		add_theme_support( 'post-thumbnails' );

		// Add bigger sizes
		add_image_size( 'xl', 1200, 9999, false );
		add_image_size( 'xxl', 2000, 9999, false );

		// HTML5 support
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		// Title tags
		add_theme_support( 'title-tag' );

	}
	add_action( 'after_setup_theme', 'sbconnor_setup' );
}