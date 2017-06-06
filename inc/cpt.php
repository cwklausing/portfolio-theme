<?php
/**
 * Part for custom post types
 *
 * Inspired by: http://web-profile.net/wordpress/docs/custom-post-types/
 */

if ( ! function_exists( 'sbconnor_cpt' ) ) {
	/**
	 * Portfolio Pieces CPT
	 */
	function sbconnor_cpt () {

		$labels = array(
			'name'                  => _x( 'Portfolio Pieces', 'Post Type General Name', 'sbconnor' ),
			'singular_name'         => _x( 'Portfolio Piece', 'Post Type Singular Name', 'sbconnor' ),
			'menu_name'             => __( 'Portfolio Pieces', 'sbconnor' ),
			'name_admin_bar'        => __( 'Portfolio Piece', 'sbconnor' ),
			'archives'              => __( 'Portfolio Piece Archives', 'sbconnor' ),
			'attributes'            => __( 'Portfolio Piece Attributes', 'sbconnor' ),
			'parent_item_colon'     => __( 'Parent Portfolio Piece:', 'sbconnor' ),
			'all_items'             => __( 'All Portfolio Pieces', 'sbconnor' ),
			'add_new_item'          => __( 'Add New Portfolio Piece', 'sbconnor' ),
			'add_new'               => __( 'Add New', 'sbconnor' ),
			'new_item'              => __( 'New Portfolio Piece', 'sbconnor' ),
			'edit_item'             => __( 'Edit Portfolio Piece', 'sbconnor' ),
			'update_item'           => __( 'Update Portfolio Piece', 'sbconnor' ),
			'view_item'             => __( 'View Portfolio Piece', 'sbconnor' ),
			'view_items'            => __( 'View Portfolio Pieces', 'sbconnor' ),
			'search_items'          => __( 'Search Portfolio Piece', 'sbconnor' ),
			'not_found'             => __( 'Not found', 'sbconnor' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sbconnor' ),
			'featured_image'        => __( 'Featured Image', 'sbconnor' ),
			'set_featured_image'    => __( 'Set featured image', 'sbconnor' ),
			'remove_featured_image' => __( 'Remove featured image', 'sbconnor' ),
			'use_featured_image'    => __( 'Use as featured image', 'sbconnor' ),
			'insert_into_item'      => __( 'Insert into item', 'sbconnor' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'sbconnor' ),
			'items_list'            => __( 'Portfolio Piece list', 'sbconnor' ),
			'items_list_navigation' => __( 'Portfolio Piece list navigation', 'sbconnor' ),
			'filter_items_list'     => __( 'Filter Portfolio Piece list', 'sbconnor' ),
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
			'menu_icon'             => 'dashicons-laptop',
			'rewrite'               => array( 
										'slug' => 'portfolio-piece', 
										'with_front' => false ),
			'supports'              => array( 
										'title',
										'editor' ),
		);
		register_post_type( 'portfolio-piece', $args );
	}

	add_action( 'init', 'sbconnor_cpt', 0 );
}