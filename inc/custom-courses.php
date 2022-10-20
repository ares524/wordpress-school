<?php

// Register Custom Post Type Custom Course
function create_customcourse_cpt() {

	$labels = array(
		'name' => _x( 'Custom Courses', 'Post Type General Name', 'classicschool' ),
		'singular_name' => _x( 'Custom Course', 'Post Type Singular Name', 'classicschool' ),
		'menu_name' => _x( 'Custom Courses', 'Admin Menu text', 'classicschool' ),
		'name_admin_bar' => _x( 'Custom Course', 'Add New on Toolbar', 'classicschool' ),
		'archives' => __( 'Custom Course Archives', 'classicschool' ),
		'attributes' => __( 'Custom Course Attributes', 'classicschool' ),
		'parent_item_colon' => __( 'Parent Custom Course:', 'classicschool' ),
		'all_items' => __( 'All Custom Courses', 'classicschool' ),
		'add_new_item' => __( 'Add New Custom Course', 'classicschool' ),
		'add_new' => __( 'Add New', 'classicschool' ),
		'new_item' => __( 'New Custom Course', 'classicschool' ),
		'edit_item' => __( 'Edit Custom Course', 'classicschool' ),
		'update_item' => __( 'Update Custom Course', 'classicschool' ),
		'view_item' => __( 'View Custom Course', 'classicschool' ),
		'view_items' => __( 'View Custom Courses', 'classicschool' ),
		'search_items' => __( 'Search Custom Course', 'classicschool' ),
		'not_found' => __( 'Not found', 'classicschool' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicschool' ),
		'featured_image' => __( 'Featured Image', 'classicschool' ),
		'set_featured_image' => __( 'Set featured image', 'classicschool' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicschool' ),
		'use_featured_image' => __( 'Use as featured image', 'classicschool' ),
		'insert_into_item' => __( 'Insert into Custom Course', 'classicschool' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom Course', 'classicschool' ),
		'items_list' => __( 'Custom Courses list', 'classicschool' ),
		'items_list_navigation' => __( 'Custom Courses list navigation', 'classicschool' ),
		'filter_items_list' => __( 'Filter Custom Courses list', 'classicschool' ),
	);
	$args = array(
		'label' => __( 'Custom Course', 'classicschool' ),
		'description' => __( '', 'classicschool' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-page',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'customcourse', $args );

}
add_action( 'init', 'create_customcourse_cpt', 0 );

?>