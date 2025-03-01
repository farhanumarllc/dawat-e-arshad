<?php
/**
 * Functions for custom post types
 *
 * @link https://developer.wordpress.org/themes/basics/post-types/
 *
 * @package Dtearsd Package
 * @since 1.0.0
 */

function register_cpt_testimonials() {
	// CPT Labels
	$cpt_singular_capital   = 'Testimonial'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Testimonials';
	$cpt_singular_lowercase = 'testimonial';
	$cpt_plural_lowercase   = 'testimonials';

	// CPT Slug & Name
	$cpt_register_key = 'testimonial';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'testimonial';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type( $cpt_register_key, $args );
}

function register_cpt_events() {
	// CPT Labels
	$cpt_singular_capital   = 'Event'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Events';
	$cpt_singular_lowercase = 'Event';
	$cpt_plural_lowercase   = 'Events';

	// CPT Slug & Name
	$cpt_register_key = 'event';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'event';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/event/single-event-name

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-calendar-alt', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type( $cpt_register_key, $args );
}
function register_cpt_resources() {
	// CPT Labels
	$cpt_singular_capital   = 'Resource'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Resources';
	$cpt_singular_lowercase = 'resource';
	$cpt_plural_lowercase   = 'resources';

	// CPT Slug & Name
	$cpt_register_key = 'resource';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'resource';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'editor', 'title', 'thumbnail' ),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),

	);
	register_post_type( $cpt_register_key, $args );
}
function register_cpt_team() {
	// CPT Labels
	$cpt_singular_capital   = 'Team Member'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Team Members';
	$cpt_singular_lowercase = 'team member';
	$cpt_plural_lowercase   = 'team members';

	// CPT Slug & Name
	$cpt_register_key = 'team';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'team';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'              => $labels,
		'public'              => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'menu_position'       => null,
		'map_meta_cap'        => true,
		'show_in_rest'        => true,
		'supports'            => array( 'title', 'thumbnail' ),
		'capability_type'     => 'page', // Set this value for each CPT.
		'has_archive'         => false, // Set this value for each CPT.
		'hierarchical'        => true, // Set this value for each CPT.
		'menu_icon'           => 'dashicons-groups', // Set this value for each CPT.
		'rewrite'             => array(
			'slug'       => $cpt_slug,
			'with_front' => false, // If required only then set this value for each CPT.
		),

	);
	register_post_type( $cpt_register_key, $args );
}
function register_cpt_courses() {
	// CPT Labels
	$cpt_singular_capital   = 'Course'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Courses';
	$cpt_singular_lowercase = 'course';
	$cpt_plural_lowercase   = 'courses';

	// CPT Slug & Name
	$cpt_register_key = 'course';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'course';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-welcome-learn-more', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type( $cpt_register_key, $args );
}
function register_cpt_projects() {
	// CPT Labels
	$cpt_singular_capital   = 'Project'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Projects';
	$cpt_singular_lowercase = 'Project';
	$cpt_plural_lowercase   = 'Projects';

	// CPT Slug & Name
	$cpt_register_key = 'project';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'project';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-list-view', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type( $cpt_register_key, $args );
}

function course_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'course'; // This is registering name of respective CPT.
	$tax_register_key = 'courses';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'courses'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'dtearsd_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'dtearsd_td' ),
		'menu_name'                  => __( 'Categories', 'dtearsd_td' ),
		'all_items'                  => __( 'All Items', 'dtearsd_td' ),
		'parent_item'                => __( 'Parent Item', 'dtearsd_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'dtearsd_td' ),
		'new_item_name'              => __( 'New Item Name', 'dtearsd_td' ),
		'add_new_item'               => __( 'Add New Item', 'dtearsd_td' ),
		'edit_item'                  => __( 'Edit Item', 'dtearsd_td' ),
		'update_item'                => __( 'Update Item', 'dtearsd_td' ),
		'view_item'                  => __( 'View Item', 'dtearsd_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'dtearsd_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'dtearsd_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dtearsd_td' ),
		'popular_items'              => __( 'Popular Items', 'dtearsd_td' ),
		'search_items'               => __( 'Search Items', 'dtearsd_td' ),
		'not_found'                  => __( 'Not Found', 'dtearsd_td' ),
		'no_terms'                   => __( 'No items', 'dtearsd_td' ),
		'items_list'                 => __( 'Items list', 'dtearsd_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'course_taxonomy', 0 );






function register_cpt_teacher() {
	// CPT Labels
	$cpt_singular_capital   = 'Teacher'; // Name of the post type shown in the menu
	$cpt_plural_capital     = 'Teachers';
	$cpt_singular_lowercase = 'teacher';
	$cpt_plural_lowercase   = 'teachers';

	// CPT Slug & Name
	$cpt_register_key = 'teacher';  // This is the registering name of the single CPT post. (Try to keep it singular).
	$cpt_slug         = 'teacher';  // This is the permalink slug of single CPT post. (Try to keep it singular).
	// The slug will become - www.website.com/testimonial/single-testimonial-name

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Set this value for each CPT.
		'has_archive'        => false, // Set this value for each CPT.
		'hierarchical'       => true, // Set this value for each CPT.
		'menu_icon'          => 'dashicons-businessman', // Set this value for each CPT.
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // If required only then set this value for each CPT.
		),
	);
	register_post_type( $cpt_register_key, $args );
}



function teacher_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'teacher'; // This is registering name of respective CPT.
	$tax_register_key = 'teachers';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'teachers'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'dtearsd_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'dtearsd_td' ),
		'menu_name'                  => __( 'Categories', 'dtearsd_td' ),
		'all_items'                  => __( 'All Items', 'dtearsd_td' ),
		'parent_item'                => __( 'Parent Item', 'dtearsd_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'dtearsd_td' ),
		'new_item_name'              => __( 'New Item Name', 'dtearsd_td' ),
		'add_new_item'               => __( 'Add New Item', 'dtearsd_td' ),
		'edit_item'                  => __( 'Edit Item', 'dtearsd_td' ),
		'update_item'                => __( 'Update Item', 'dtearsd_td' ),
		'view_item'                  => __( 'View Item', 'dtearsd_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'dtearsd_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'dtearsd_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dtearsd_td' ),
		'popular_items'              => __( 'Popular Items', 'dtearsd_td' ),
		'search_items'               => __( 'Search Items', 'dtearsd_td' ),
		'not_found'                  => __( 'Not Found', 'dtearsd_td' ),
		'no_terms'                   => __( 'No items', 'dtearsd_td' ),
		'items_list'                 => __( 'Items list', 'dtearsd_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

function event_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'event'; // This is registering name of respective CPT.
	$tax_register_key = 'events';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'events'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'dtearsd_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'dtearsd_td' ),
		'menu_name'                  => __( 'Categories', 'dtearsd_td' ),
		'all_items'                  => __( 'All Items', 'dtearsd_td' ),
		'parent_item'                => __( 'Parent Item', 'dtearsd_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'dtearsd_td' ),
		'new_item_name'              => __( 'New Item Name', 'dtearsd_td' ),
		'add_new_item'               => __( 'Add New Item', 'dtearsd_td' ),
		'edit_item'                  => __( 'Edit Item', 'dtearsd_td' ),
		'update_item'                => __( 'Update Item', 'dtearsd_td' ),
		'view_item'                  => __( 'View Item', 'dtearsd_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'dtearsd_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'dtearsd_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dtearsd_td' ),
		'popular_items'              => __( 'Popular Items', 'dtearsd_td' ),
		'search_items'               => __( 'Search Items', 'dtearsd_td' ),
		'not_found'                  => __( 'Not Found', 'dtearsd_td' ),
		'no_terms'                   => __( 'No items', 'dtearsd_td' ),
		'items_list'                 => __( 'Items list', 'dtearsd_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'event_taxonomy', 0 );
add_action( 'init', 'teacher_taxonomy', 0 );






function register_cpt_brand() {
	// CPT Labels
	$cpt_singular_capital   = 'Brand'; 
	$cpt_plural_capital     = 'Brands';
	$cpt_singular_lowercase = 'brand';
	$cpt_plural_lowercase   = 'brands';

	// CPT Slug & Name
	$cpt_register_key = 'brand';  // Unique registering name
	$cpt_slug         = 'brand';  // Unique permalink slug

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Capability type for this CPT
		'has_archive'        => false, // Disable archive
		'hierarchical'       => true, // Enable hierarchical structure
		'menu_icon'          => 'dashicons-products', // Custom menu icon
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // Prepend the site's base URL to this slug
		),
	);
	register_post_type( $cpt_register_key, $args );
}


function brand_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'brand'; // This is registering name of respective CPT.
	$tax_register_key = 'brands';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'brands'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'dtearsd_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'dtearsd_td' ),
		'menu_name'                  => __( 'Categories', 'dtearsd_td' ),
		'all_items'                  => __( 'All Items', 'dtearsd_td' ),
		'parent_item'                => __( 'Parent Item', 'dtearsd_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'dtearsd_td' ),
		'new_item_name'              => __( 'New Item Name', 'dtearsd_td' ),
		'add_new_item'               => __( 'Add New Item', 'dtearsd_td' ),
		'edit_item'                  => __( 'Edit Item', 'dtearsd_td' ),
		'update_item'                => __( 'Update Item', 'dtearsd_td' ),
		'view_item'                  => __( 'View Item', 'dtearsd_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'dtearsd_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'dtearsd_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dtearsd_td' ),
		'popular_items'              => __( 'Popular Items', 'dtearsd_td' ),
		'search_items'               => __( 'Search Items', 'dtearsd_td' ),
		'not_found'                  => __( 'Not Found', 'dtearsd_td' ),
		'no_terms'                   => __( 'No items', 'dtearsd_td' ),
		'items_list'                 => __( 'Items list', 'dtearsd_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'brand_taxonomy', 0 );


function register_cpt_book() {
	// CPT Labels
	$cpt_singular_capital   = 'Book'; 
	$cpt_plural_capital     = 'Books';
	$cpt_singular_lowercase = 'book';
	$cpt_plural_lowercase   = 'books';

	// CPT Slug & Name
	$cpt_register_key = 'book';  // Unique registering name
	$cpt_slug         = 'book';  // Unique permalink slug

	$labels = array(
		'name'                  => _x( $cpt_plural_capital, 'Post type general name', 'dtearsd_td' ),
		'singular_name'         => _x( $cpt_singular_capital, 'Post type singular name', 'dtearsd_td' ),
		'menu_name'             => _x( $cpt_plural_capital, 'Admin Menu text', 'dtearsd_td' ),
		'name_admin_bar'        => _x( $cpt_singular_capital, 'Add New on Toolbar', 'dtearsd_td' ),
		'add_new'               => __( 'Add New ', 'dtearsd_td' ),
		'add_new_item'          => __( 'Add New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'new_item'              => __( 'New ' . $cpt_singular_capital, 'dtearsd_td' ),
		'edit_item'             => __( 'Edit ' . $cpt_singular_capital, 'dtearsd_td' ),
		'update_item'           => __( 'Update ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_item'             => __( 'View  ' . $cpt_singular_capital, 'dtearsd_td' ),
		'view_items'            => __( 'View  ' . $cpt_plural_capital, 'dtearsd_td' ),
		'all_items'             => __( 'All ' . $cpt_plural_capital, 'dtearsd_td' ),
		'search_items'          => __( 'Search ' . $cpt_plural_capital, 'dtearsd_td' ),
		'parent_item_colon'     => __( 'Parent: ' . $cpt_singular_capital, 'dtearsd_td' ),
		'not_found'             => __( 'No ' . $cpt_plural_lowercase . ' found.', 'dtearsd_td' ),
		'not_found_in_trash'    => __( 'No ' . $cpt_plural_lowercase . ' found in Trash.', 'dtearsd_td' ),
		'featured_image'        => _x( $cpt_singular_capital . ' Featured Image', 'Overrides the “Featured Image” phrase.', 'dtearsd_td' ),
		'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase.', 'dtearsd_td' ),
		'remove_featured_image' => _x( 'Remove ' . $cpt_singular_lowercase . ' image', 'Overrides the “Remove featured image” phrase.', 'dtearsd_td' ),
		'use_featured_image'    => _x( 'Use as ' . $cpt_singular_lowercase . ' image', 'Overrides the “Use as featured image” phrase.', 'dtearsd_td' ),
		'archives'              => _x( $cpt_singular_capital . ' archives', 'The post type archive label used in nav menus.', 'dtearsd_td' ),
		'attributes'            => _x( $cpt_singular_capital . ' attributes', 'The post type attributes label.', 'dtearsd_td' ),
		'insert_into_item'      => _x( 'Insert into ' . $cpt_singular_lowercase, 'Overrides the “Insert into post” phrase.', 'dtearsd_td' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this ' . $cpt_singular_lowercase, 'Overrides the “Uploaded to this post” phrase.', 'dtearsd_td' ),
		'filter_items_list'     => _x( 'Filter ' . $cpt_plural_lowercase . ' list', 'Screen reader text for the filter links.', 'dtearsd_td' ),
		'items_list_navigation' => _x( $cpt_plural_capital . ' list navigation', 'Screen reader text for the pagination.', 'dtearsd_td' ),
		'items_list'            => _x( $cpt_plural_capital . ' list', 'Screen reader text for the items list.', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'      => null,
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'capability_type'    => 'page', // Capability type for this CPT
		'has_archive'        => false, // Disable archive
		'hierarchical'       => true, // Enable hierarchical structure
		'menu_icon'          => 'dashicons-book-alt', // Custom menu icon
		'rewrite'            => array(
			'slug'       => $cpt_slug,
			'with_front' => true, // Prepend the site's base URL to this slug
		),
	);
	register_post_type( $cpt_register_key, $args );
}




function book_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'book'; // This is registering name of respective CPT.
	$tax_register_key = 'books';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'books'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'dtearsd_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'dtearsd_td' ),
		'menu_name'                  => __( 'Categories', 'dtearsd_td' ),
		'all_items'                  => __( 'All Items', 'dtearsd_td' ),
		'parent_item'                => __( 'Parent Item', 'dtearsd_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'dtearsd_td' ),
		'new_item_name'              => __( 'New Item Name', 'dtearsd_td' ),
		'add_new_item'               => __( 'Add New Item', 'dtearsd_td' ),
		'edit_item'                  => __( 'Edit Item', 'dtearsd_td' ),
		'update_item'                => __( 'Update Item', 'dtearsd_td' ),
		'view_item'                  => __( 'View Item', 'dtearsd_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'dtearsd_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'dtearsd_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dtearsd_td' ),
		'popular_items'              => __( 'Popular Items', 'dtearsd_td' ),
		'search_items'               => __( 'Search Items', 'dtearsd_td' ),
		'not_found'                  => __( 'Not Found', 'dtearsd_td' ),
		'no_terms'                   => __( 'No items', 'dtearsd_td' ),
		'items_list'                 => __( 'Items list', 'dtearsd_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'book_taxonomy', 0 );



add_action( 'init', 'register_cpt_team' );
add_action( 'init', 'register_cpt_projects' );
add_action( 'init', 'register_cpt_events' );
add_action( 'init', 'register_cpt_resources' );
add_action( 'init', 'register_cpt_courses' );
add_action( 'init', 'register_cpt_teacher' );
add_action( 'init', 'register_cpt_brand' );
add_action( 'init', 'register_cpt_book' );

/**
 * Register custom tags for Experiments cpt
 */
function testimonials_taxonomy() {

	// CPT Slug & Name
	$tax_parent       = 'testimonial'; // This is registering name of respective CPT.
	$tax_register_key = 'testimonials';  // This is the registering name of the taxonomy (Try to keep it plural).
	$tax_slug         = 'testimonials'; // This is the permalink slug of taxonomy archive (Try to keep it plural).
	// The slug will become - www.website.com/testimonials/single-testimonial-category

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'dtearsd_td' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'dtearsd_td' ),
		'menu_name'                  => __( 'Categories', 'dtearsd_td' ),
		'all_items'                  => __( 'All Items', 'dtearsd_td' ),
		'parent_item'                => __( 'Parent Item', 'dtearsd_td' ),
		'parent_item_colon'          => __( 'Parent Item:', 'dtearsd_td' ),
		'new_item_name'              => __( 'New Item Name', 'dtearsd_td' ),
		'add_new_item'               => __( 'Add New Item', 'dtearsd_td' ),
		'edit_item'                  => __( 'Edit Item', 'dtearsd_td' ),
		'update_item'                => __( 'Update Item', 'dtearsd_td' ),
		'view_item'                  => __( 'View Item', 'dtearsd_td' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'dtearsd_td' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'dtearsd_td' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dtearsd_td' ),
		'popular_items'              => __( 'Popular Items', 'dtearsd_td' ),
		'search_items'               => __( 'Search Items', 'dtearsd_td' ),
		'not_found'                  => __( 'Not Found', 'dtearsd_td' ),
		'no_terms'                   => __( 'No items', 'dtearsd_td' ),
		'items_list'                 => __( 'Items list', 'dtearsd_td' ),
		'items_list_navigation'      => __( 'Items list navigation', 'dtearsd_td' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => $tax_slug,
			'with_front' => false, // If required only then set this for each taxonomy.
		),
	);
	register_taxonomy( $tax_register_key, array( $tax_parent ), $args );

}

add_action( 'init', 'testimonials_taxonomy', 0 );
