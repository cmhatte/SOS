<?php

	function sos_reg_stance_post_type() {

	$singular = 'Stance';
	$plural = 'Stances';

	$labels = array(
		'name'					=> $plural,
		'singular_name'	=> $singular,
		'add_name'			=> 'Add New',
		'add_new_item'	=> 'Add New ' . $singular,
		'edit'					=> 'Edit',
		'edit_item'			=> 'Edit ' . $singular,
		'new_item'			=> 'New ' . $singular,
		'view'					=> 'View ' . $singular,
		'view_item'			=> 'View ' . $singular,
		'search_term'		=> 'Search ' . $plural,
		'parent'				=> 'Parent ' . $singular,
		'not_found'			=> 'No ' . $plural . ' found',
		'not_found_in_trash'	=> 'No ' . $plural . ' in Trash'
	);
	$args = array(
		'labels' 							=> $labels,
		'public'							=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> false,
		'show_in_nav_menus'		=> true,
		'show_ui'							=> true,
		'show_in_menu'				=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'				=> 6,
		'menu_icon'						=> 'dashicons-visibility',
		'can_export'					=> true,
		'delete_with_user'		=> false,
		'hierarchical'				=> false,
		'has_archive'					=> true,
		'query_var'						=> true,
		'capability_type'			=> 'page',
		'map_meta_cap'				=> true,
		// 'capabilities'				=> array(),
		'rewrite'							=> array(
			'slug'				=> 'stances',
			'with_front'	=> true,
			'pages'				=> true,
			'feeds'				=> true,
		),
		'supports'						=> array(
			'title',
			'editor',
			//'author',
			'thumbnail',
			'excerpt',
			// 'custom-fields',
			'comments',
			'revisions'
		)
	);

	register_post_type( 'stance', $args );
}

$hook = 'init'; $function_to_add = 'sos_reg_stance_post_type';
add_action( $hook, $function_to_add); //, $priority, $accepted_args);
