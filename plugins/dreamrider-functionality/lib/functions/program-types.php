<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// Register Custom Post Type - program
function dreamrider_program_type() {

	$labels = array(
		'name'                  => 'programs',
		'singular_name'         => 'program',
		'menu_name'             => 'programs',
		'name_admin_bar'        => 'program',
		'archives'              => 'program Archives',
		'parent_item_colon'     => 'Parent program:',
		'all_items'             => 'All programs',
		'add_new_item'          => 'Add New program',
		'add_new'               => 'Add New program',
		'new_item'              => 'New program',
		'edit_item'             => 'Edit program',
		'update_item'           => 'Update program',
		'view_item'             => 'View program',
		'search_items'          => 'Search program',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into program',
		'uploaded_to_this_item' => 'Uploaded to this program',
		'items_list'            => 'programs list',
		'items_list_navigation' => 'programs list navigation',
		'filter_items_list'     => 'Filter programs list',
	);
	$args = array(
		'label'                 => 'program',
		'description'           => 'program Post Type',
		'labels'                => $labels,
		'supports'              => array( 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'program', $args );

}
add_action( 'init', 'dreamrider_program_type', 0 );
