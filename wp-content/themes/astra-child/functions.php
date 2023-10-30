<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', [ 'astra-theme-css' ], CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Register a custom post type called "property".
 *
 * @see get_post_type_labels() for label keys.
 */
function create_property_post_type() {
	$labels = [
		'name'                  => _x( 'Property', 'Post type general name', 'astra-child' ),
		'singular_name'         => _x( 'property', 'Post type singular name', 'astra-child' ),
		'menu_name'             => _x( 'Property', 'Admin Menu text', 'astra-child' ),
		'name_admin_bar'        => _x( 'property', 'Add New on Toolbar', 'astra-child' ),
		'add_new'               => __( 'Add New', 'astra-child' ),
		'add_new_item'          => __( 'Add New property', 'astra-child' ),
		'new_item'              => __( 'New property', 'astra-child' ),
		'edit_item'             => __( 'Edit property', 'astra-child' ),
		'view_item'             => __( 'View property', 'astra-child' ),
		'all_items'             => __( 'All Property', 'astra-child' ),
		'search_items'          => __( 'Search Property', 'astra-child' ),
		'parent_item_colon'     => __( 'Parent Property:', 'astra-child' ),
		'not_found'             => __( 'No Property found.', 'astra-child' ),
		'not_found_in_trash'    => __( 'No Property found in Trash.', 'astra-child' ),
		'featured_image'        => _x( 'property Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'archives'              => _x( 'property archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'astra-child' ),
		'insert_into_item'      => _x( 'Insert into property', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'astra-child' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this property', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'astra-child' ),
		'filter_items_list'     => _x( 'Filter Property list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'astra-child' ),
		'items_list_navigation' => _x( 'Property list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'astra-child' ),
		'items_list'            => _x( 'Property list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'astra-child' ),
	];

	$args = [
		'show_in_graphql'     => true,
		'graphql_single_name' => 'property',
		'graphql_plural_name' => 'properties',
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'rewrite'             => [ 'slug' => 'property' ],
		'capability_type'     => 'post',
		'has_archive'         => true,
		'hierarchical'        => true,
		'menu_position'       => null,
		'supports'            => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ],
	];

	register_post_type( 'property', $args );
}

add_action( 'graphql_init', 'create_property_post_type' );

/**
 * Register a custom post type called "property".
 *
 * @see get_post_type_labels() for label keys.
 */
function create_newproperty_post_type() {
	$labels = [
		'name'                  => _x( 'Newproperty', 'Post type general name', 'astra-child' ),
		'singular_name'         => _x( 'newproperty', 'Post type singular name', 'astra-child' ),
		'menu_name'             => _x( 'Newproperty', 'Admin Menu text', 'astra-child' ),
		'name_admin_bar'        => _x( 'newproperty', 'Add New on Toolbar', 'astra-child' ),
		'add_new'               => __( 'Add New', 'astra-child' ),
		'add_new_item'          => __( 'Add New newproperty', 'astra-child' ),
		'new_item'              => __( 'New newproperty', 'astra-child' ),
		'edit_item'             => __( 'Edit newproperty', 'astra-child' ),
		'view_item'             => __( 'View newproperty', 'astra-child' ),
		'all_items'             => __( 'All newProperty', 'astra-child' ),
		'search_items'          => __( 'Search newProperty', 'astra-child' ),
		'parent_item_colon'     => __( 'Parent newProperty:', 'astra-child' ),
		'not_found'             => __( 'No newProperty found.', 'astra-child' ),
		'not_found_in_trash'    => __( 'No newProperty found in Trash.', 'astra-child' ),
		'featured_image'        => _x( 'newproperty Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'astra-child' ),
		'archives'              => _x( 'newproperty archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'astra-child' ),
		'insert_into_item'      => _x( 'Insert into newproperty', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'astra-child' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this newproperty', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'astra-child' ),
		'filter_items_list'     => _x( 'Filter newProperty list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'astra-child' ),
		'items_list_navigation' => _x( 'newProperty list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'astra-child' ),
		'items_list'            => _x( 'newProperty list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'astra-child' ),
	];

	$args = [
		'show_in_graphql'     => true,
		'graphql_single_name' => 'newproperty',
		'graphql_plural_name' => 'newproperties',
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'rewrite'             => [ 'slug' => 'newproperty' ],
		'capability_type'     => 'post',
		'has_archive'         => true,
		'hierarchical'        => true,
		'menu_position'       => null,
		'supports'            => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ],
	];

	register_post_type( 'newproperty', $args );
}

add_action( 'graphql_init', 'create_newproperty_post_type' );
