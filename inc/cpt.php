<?php
/**
 * Part for custom post types
 *
 * Inspired by: http://web-profile.net/wordpress/docs/custom-post-types/
 */

if ( ! function_exists( 'sbconnor_cpt' ) ) {
	/**
	 * Portfolios CPT
	 */
	function sbconnor_cpt () {

		$labels = array(
			'name'                  => _x( 'Portfolios', 'Post Type General Name', 'sbconnor' ),
			'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'sbconnor' ),
			'menu_name'             => __( 'Portfolios', 'sbconnor' ),
			'name_admin_bar'        => __( 'Portfolio', 'sbconnor' ),
			'archives'              => __( 'Portfolio Archives', 'sbconnor' ),
			'attributes'            => __( 'Portfolio Attributes', 'sbconnor' ),
			'parent_item_colon'     => __( 'Parent Portfolio:', 'sbconnor' ),
			'all_items'             => __( 'All Portfolios', 'sbconnor' ),
			'add_new_item'          => __( 'Add New Portfolio', 'sbconnor' ),
			'add_new'               => __( 'Add New', 'sbconnor' ),
			'new_item'              => __( 'New Portfolio', 'sbconnor' ),
			'edit_item'             => __( 'Edit Portfolio', 'sbconnor' ),
			'update_item'           => __( 'Update Portfolio', 'sbconnor' ),
			'view_item'             => __( 'View Portfolio', 'sbconnor' ),
			'view_items'            => __( 'View Portfolios', 'sbconnor' ),
			'search_items'          => __( 'Search Portfolio', 'sbconnor' ),
			'not_found'             => __( 'Not found', 'sbconnor' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sbconnor' ),
			'featured_image'        => __( 'Featured Image', 'sbconnor' ),
			'set_featured_image'    => __( 'Set featured image', 'sbconnor' ),
			'remove_featured_image' => __( 'Remove featured image', 'sbconnor' ),
			'use_featured_image'    => __( 'Use as featured image', 'sbconnor' ),
			'insert_into_item'      => __( 'Insert into item', 'sbconnor' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'sbconnor' ),
			'items_list'            => __( 'Portfolio list', 'sbconnor' ),
			'items_list_navigation' => __( 'Portfolio list navigation', 'sbconnor' ),
			'filter_items_list'     => __( 'Filter Portfolio list', 'sbconnor' ),
		);
		$args = array(
			'labels'                => $labels,
			'taxonomies'            => array(),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
			'menu_icon'             => 'dashicons-store',
			'rewrite'               => array( 
										'slug' => 'portfolio', 
										'with_front' => false ),
			'supports'              => array( 'title' ),
		);
		register_post_type( 'portfolio', $args );

	add_action( 'init', 'sbconnor_cpt', 0 );
}