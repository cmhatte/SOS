<?php

function sos_register_post_type() {

	$singuar = 'Candidate';
	$plural = 'Candidates';

	$labels = array(
		'name'					=> $plural,
		'singular_name'	=> $singuar,
		'add_name'			=> 'Add New',
		'add_new_item'	=> 'Add New ' . $singuar,
		'edit'					=> 'Edit',
		'edit_item'			=> 'Edit ' . $singular,
		'new_item'			=> 'New ' . $singuar,
		'view'					=> 'View ' . $singular,
		'view_item'			=> 'View ' . $singuar,
		'search_term'		=> 'Search ' . $plural,
		'parent'				=> 'Parent ' . $singuar,
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
		'menu_icon'						=> 'dashicons-businessman',
		'can_export'					=> true,
		'delete_with_user'		=> false,
		'hierarchical'				=> false,
		'has_archive'					=> true,
		'query_var'						=> true,
		'capability_type'			=> 'page',
		'map_meta_cap'				=> true,
		// 'capabilities'				=> array(),
		'rewrite'							=> array(
			'slug'				=> 'candidates',
			'with_front'	=> true,
			'pages'				=> true,
			'feeds'				=> true,
		),
		'supports'						=> array(
			'title',
			//'editor',
			//'author',
			//'thumbnail',
			//'excerpt',
			// 'custom-fields',
			// 'comments',
			// 'revisions'
		)
	);

	register_post_type( 'candidate', $args );
}

$hook = 'init'; $function_to_add = 'sos_register_post_type';
add_action( $hook, $function_to_add); //, $priority, $accepted_args);


function sos_reg_tx_party(){

	$singular = 'Party';
	$plural = 'Parties';

	$labels = array(
		'name'									=> $plural,
		'singular_name'					=> $singular,
		'search_items'					=> 'Search ' . $plural,
		'popular_items'					=> 'Popular ' . $plural,
		'all_items'							=> 'All ' . $plural,
		'parent_item'						=> null,
		'parent_item_colon'			=> null,
		'edit_item'							=> 'Edit ' . $singular,
		'update_item'						=> 'Edit ' . $singular,
		'add_new_item'					=> 'Add New ' . $singular,
		'new_item_name'					=> 'New ' . $singular . ' Name',
		'separate_items_with_commas'	=> 'Separate ' . $plural . ' with commas',
		'add_or_remove_items'		=> 'Add or remove ' . $plural,
		'choose_from_most_used'	=> 'Choose from the most used ' . $plural,
		'not_found'							=> 'No ' . $plural . ' found.',
		'menu_name'							=> $plural
	);

	$args = array(
		'hierarchical'			=> false,
		'labels'						=> $labels,
		'show_ui'						=> true,
		'show_admin_column'	=> true,
		'update_count_callback'	=> '_update_post_term_count',
		'query_var'					=> true,
		'rewrite'						=> array( 'slug' => 'party')

	);

	$taxonomy = 'party'; $object_type = 'candidate';
	register_taxonomy( $taxonomy, $object_type, $args);
}

add_action( 'init', 'sos_reg_tx_party' );

function sos_reg_tx_state(){

	$singular = 'State';
	$plural = 'States';

	$labels = array(
		'name'									=> $plural,
		'singular_name'					=> $singular,
		'search_items'					=> 'Search ' . $plural,
		'popular_items'					=> 'Popular ' . $plural,
		'all_items'							=> 'All ' . $plural,
		'parent_item'						=> null,
		'parent_item_colon'			=> null,
		'edit_item'							=> 'Edit ' . $singular,
		'update_item'						=> 'Edit ' . $singular,
		'add_new_item'					=> 'Add New ' . $singular,
		'new_item_name'					=> 'New ' . $singular . ' Name',
		'separate_items_with_commas'	=> 'Separate ' . $plural . ' with commas',
		'add_or_remove_items'		=> 'Add or remove ' . $plural,
		'choose_from_most_used'	=> 'Choose from the most used ' . $plural,
		'not_found'							=> 'No ' . $plural . ' found.',
		'menu_name'							=> $plural
	);

	$args = array(
		'hierarchical'			=> false,
		'labels'						=> $labels,
		'show_ui'						=> true,
		'show_admin_column'	=> true,
		'update_count_callback'	=> '_update_post_term_count',
		'query_var'					=> true,
		'rewrite'						=> array( 'slug' => 'state')

	);

	$taxonomy = 'state'; $object_type = 'candidate';
	register_taxonomy( $taxonomy, $object_type, $args);
}

add_action( 'init', 'sos_reg_tx_state' );