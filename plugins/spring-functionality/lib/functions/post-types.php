<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function programs_post_type() {

	$labels = array(
		'name'                  => 'Programs', 'Post Type General Name',
		'singular_name'         => 'Program', 'Post Type Singular Name',
		'menu_name'             => 'Programs',
		'name_admin_bar'        => 'Program Type',
		'archives'              => 'Program Archives',
		'parent_item_colon'     => 'Program Item:',
		'all_items'             => 'All Programs',
		'add_new_item'          => 'Add New Program',
		'add_new'               => 'Add New',
		'new_item'              => 'New Program',
		'edit_item'             => 'Edit Program',
		'update_item'           => 'Update Program',
		'view_item'             => 'View Program',
		'search_items'          => 'Search Program',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Program',
		'uploaded_to_this_item' => 'Uploaded to this Program',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter Programs list',
	);
	$args = array(
		'label'                 => 'Program',
		'description'           => 'Spring Universities Programs Post-Type',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'programs',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'program', $args );

}
add_action( 'init', 'programs_post_type', 0 );


// Register Custom Post Type
function spring_instructors() {

	$labels = array(
		'name'                  => 'Instructors',
		'singular_name'         => 'Instructor',
		'menu_name'             => 'Program Instructors',
		'name_admin_bar'        => 'Program Instructors',
		'archives'              => 'Instructor Archives',
		'parent_item_colon'     => 'instructor Item:',
		'all_items'             => 'All Instructors',
		'add_new_item'          => 'Add New Instructor',
		'add_new'               => 'Add New',
		'new_item'              => 'New Instructor',
		'edit_item'             => 'Edit Instructor',
		'update_item'           => 'Update Instructor',
		'view_item'             => 'View Instructor',
		'search_items'          => 'Search Instructor',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => 'instructor',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Instructor',
		'description'           => 'Program Instructors',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'program_instructors', $args );

}
add_action( 'init', 'spring_instructors', 0 );

// Register Custom Post Type
function spring_events_post_type() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Event Types',
		'name_admin_bar'        => 'Event Type',
		'archives'              => 'Event Archives',
		'parent_item_colon'     => 'Parent Event:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add New Event',
		'add_new'               => 'Add Event',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Event',
		'uploaded_to_this_item' => 'Uploaded to this Event',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter Events list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'events post type',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'events',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'spring_events_post_type', 0 );

