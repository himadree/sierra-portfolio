<?php
if( !defined( 'ABSPATH' ) ) exit();

/*
 * Plugin Name: Sierra Portfolio
 * Plugin URL: http://codepassenger.com/sierra
 * Description: This is sierra portfolio plugin for sierra theme only.
 * Author: CodePassenger Team
 * Version: 1.0
 * Author URI: http://codepassenger.com/
 * */

// Register custom post for portfolio

add_action( 'init', 'sierra_portfolio_custom_post_init', 0 );
function sierra_portfolio_custom_post_init() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'sierra' ),
		'singular_name'      => _x( 'Portfolio', 'sierra' ),
		'menu_name'          => _x( 'Portfolio', 'sierra' ),
		'name_admin_bar'     => _x( 'Portfolio', 'sierra' ),
		'add_new'            => _x( 'Add New', 'sierra' ),
		'add_new_item'       => __( 'Add New Portfolio', 'sierra' ),
		'new_item'           => __( 'New Portfolio', 'sierra' ),
		'edit_item'          => __( 'Edit Portfolio', 'sierra' ),
		'view_item'          => __( 'View Portfolio', 'sierra' ),
		'all_items'          => __( 'All Portfolios', 'sierra' ),
		'search_items'       => __( 'Search Portfolios', 'sierra' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'sierra' ),
		'not_found'          => __( 'No Portfolio found.', 'sierra' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'sierra' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon'   => 'dashicons-format-gallery',
	);

	register_post_type( 'portfolio', $args );

	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'sierra' ),
		'singular_name'     => _x( 'Portfolio Categories', 'sierra' ),
		'search_items'      => __( 'Search Categories', 'sierra' ),
		'all_items'         => __( 'All Categories', 'sierra' ),
		'parent_item'       => __( 'Parent Categories', 'sierra' ),
		'parent_item_colon' => __( 'Parent Categories:', 'sierra' ),
		'edit_item'         => __( 'Edit Categories', 'sierra' ),
		'update_item'       => __( 'Update Categories', 'sierra' ),
		'add_new_item'      => __( 'Add New Categories', 'sierra' ),
		'new_item_name'     => __( 'New Categories', 'sierra' ),
		'menu_name'         => __( 'Categories', 'sierra' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio_category' ),
	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}