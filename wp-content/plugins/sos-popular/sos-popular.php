<?php
/**
 * Plugin Name: SOS Popular
 * Plugin URI:
 * Description: a plugin that records post views and contains functions to easily list posts by popularity
 * Version 0.0.1
 * Author:
 * Author URI:
 * License: GPL2
 * Tutorial URL: https://www.smashingmagazine.com/2011/09/how-to-create-a-wordpress-plugin/
 */

/**
 * Adds a view to the post being viewed
 *
 * Finds the current views of a post and adds one to it by updating
 * the postmeta. The meta key used is "awepop_views" / sos_popular_views
 * @global object $post The post object
 * @return integer $new_views The number of views the post has
 *
 */

function sos_popular_add_view() {
	if(is_single()){
		global $post;
		$current_views = get_post_meta($post->ID, 'sos_popular_views', true);
		if(!isset($current_views) OR empty($current_views) OR !is_numeric($current_views) ){
			$current_views = 0;
		}
		$new_views = $current_views + 1;
		update_post_meta($post->ID, 'sos_popular_views', $new_views);
		return $new_views;
	}
}

add_action('wp_head', 'sos_popular_add_view');

/**
 * Retrieve the number of views for a post
 *
 * Finds the current views for a post, returning 0 if there are none
 *
 * @global object $post The post object
 * @return integer $current_views The number of views the post has
 *
 */

function sos_popular_get_view_count() {
	global $post;
	$current_views = get_post_meta($post->ID, 'sos_popular_views', true);
	if( !isset($current_views) OR empty($current_views) OR !is_numeric($current_views) ) {
		$current_views = 0;
	}

	return $current_views;

}

// does it need an action?


/**
 * Shows the number of views for a post
 *
 * Finds the current views of a post and displays it together with some optional text
 *
 * @global object $post The post object
 * @uses sos_popular_get_view_count()
 *
 * @param string $singular The singular term for the text
 * @param string $plural The plural term for the text
 * @param string $before Text to place before the counter
 *
 * @return string $views_text The views display
 *
 */

function sos_popular_show_views( $singular='view', $plural='views', $before='This post has: '){
	global $post;
	$current_views = sos_popular_get_view_count();

	$views_text = $before . $current_views . " ";

	if ( $current_views == 1 ) {
		$views_text .= $singular;
	} else {
		$views_text .= $plural;
	}

	echo $views_text;
}

// hook? does it need an action?

/**
 * Display a list of posts ordered by popularity
 *
 * Shows a simple list of post titles ordered by their view count
 *
 * @param integer $post_count The number of posts to show
 *
 */
function sos_popular_popularity_list($post_count=10){
	$args = array(
		'posts_per_page'	=> 	10,
		'post_type'				=> 	'post',
		'post_status'			=> 	'publish',
		'meta_key'				=>	'sos_popular_views',
		'orderby'					=>	'meta_value_num',
		'order'						=>	'DESC'
	);

	$sos_popular_list = new WP_Query($args);

	if( $sos_popular_list->have_posts()) { echo '<ul>'; }

	while ( $sos_popular_list->have_posts() ) : $sos_popular_list->the_post();
		echo '<li><a href="' . get_permalink($post->ID) . '">' . the_title('', '', false) . '</a></li>';
	endwhile;

	if( $sos_popular_list->have_posts() ) {echo '</ul>'; }
}


/**
 * to use..
 *
 * if( function_exists('sos_popular_popularity_list')) {
 * 	sos_popular_popularity_list();
 * }
 *
 */