<?php
/**
* Plugin Name: SOS Candidate Plugin
* Plugin URI: http://stateofstate.com
* Author: SOS
* Version: 0.0.1
* License: GPLv2
* Description: SOS
*/

//Exit if accessed Directly
if ( ! defined( 'ABSPATH') ){
	exit;
}

require_once ( plugin_dir_path(__FILE__) . 'sos-candidate-cpt.php' );
require_once ( plugin_dir_path(__FILE__) . 'sos-candidate-fields.php' );

function sos_admin_enqueue_scripts() {
	global $pagenow, $typenow;

	if ( ( $pagenow == 'post.php' || $pagenow == 'post-new.php' ) && $typenow == 'candidate' ) {
		wp_enqueue_style( 'sos-candidate-admin-css', plugins_url( 'css/admin-candidate.css', __FILE__ ) );
		wp_enqueue_script( 'sos-candidate-admin-js', plugins_url( 'js/admin-candidate.js', __FILE__ ), array( 'jquery', 'jquery-ui-datepicker'), '20160109', true );
		wp_enqueue_script( 'sos-custom-quicktags', plugins_url( 'js/sos-quicktags.js', __FILE__), array( 'quicktags' ), '20160109', true );
		wp_enqueue_style( 'jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
	}
}

add_action( 'admin_enqueue_scripts', 'sos_admin_enqueue_scripts');



// only thing for settings page...
function sos_add_submenu_page() {

	$parent_slug = 'edit.php?post_type=candidate';
	$page_title = 'Reorder Candidates';
	$menu_title = 'Reorder Candidates';
	$capability = 'manage_options';
	$menu_slug = 'reorder_candidates';
	$function = 'reorder_admin_candidates_callback';

	add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

}

add_action( 'admin_menu', 'sos_add_submenu_page' );

function reorder_admin_candidates_callback() {

	$args = array(
		'post_type'								=> 'candidate',
		'orderby'									=> 'menu_order',
		'order'										=> 'ASC',
		'no_found_rows'						=> true, // affects pagination
		'update_post_term_cache'	=> false,
		'post_per_page'						=> 50
	);

	$candidate_listing = new WP_Query( $args );
	echo '<pre>';
	var_dump( $candidate_listing );
	print_r($candidate_listing);
	echo '</pre>';
	// echo 'This is the candidates reorder admin page.';
}