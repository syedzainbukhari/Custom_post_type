<?php 

// Register Custom Post Type Job
function create_job_cpt() {

	$labels = array(
		'name' => _x( 'Jobs', 'Post Type General Name', 'astra' ),
		'singular_name' => _x( 'Job', 'Post Type Singular Name', 'astra' ),
		'menu_name' => _x( 'Jobs', 'Admin Menu text', 'astra' ),
		'name_admin_bar' => _x( 'Job', 'Add New on Toolbar', 'astra' ),
		'archives' => __( 'Job Archives', 'astra' ),
		'attributes' => __( 'Job Attributes', 'astra' ),
		'parent_item_colon' => __( 'Parent Job:', 'astra' ),
		'all_items' => __( 'All Jobs', 'astra' ),
		'add_new_item' => __( 'Add New Job', 'astra' ),
		'add_new' => __( 'Add New', 'astra' ),
		'new_item' => __( 'New Job', 'astra' ),
		'edit_item' => __( 'Edit Job', 'astra' ),
		'update_item' => __( 'Update Job', 'astra' ),
		'view_item' => __( 'View Job', 'astra' ),
		'view_items' => __( 'View Jobs', 'astra' ),
		'search_items' => __( 'Search Job', 'astra' ),
		'not_found' => __( 'Not found', 'astra' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'astra' ),
		'featured_image' => __( 'Featured Image', 'astra' ),
		'set_featured_image' => __( 'Set featured image', 'astra' ),
		'remove_featured_image' => __( 'Remove featured image', 'astra' ),
		'use_featured_image' => __( 'Use as featured image', 'astra' ),
		'insert_into_item' => __( 'Insert into Job', 'astra' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Job', 'astra' ),
		'items_list' => __( 'Jobs list', 'astra' ),
		'items_list_navigation' => __( 'Jobs list navigation', 'astra' ),
		'filter_items_list' => __( 'Filter Jobs list', 'astra' ),
	);
	$args = array(
		'label' => __( 'Job', 'astra' ),
		'description' => __( 'costom post type for jobs', 'astra' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-hammer',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'post-formats'),
		'taxonomies' => array('category','tags', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'job', $args );

}
add_action( 'init', 'create_job_cpt', 0 );

 ?>