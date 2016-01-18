<?php

	/**
	 * 	Plugin Name: Official Treehouse Badges Plugin
	 * 	Plugin URI:
	 * 	Description: Badges
	 * 	License: GPL2
	 */

	/**
	 * Add a link to our plugin in the admin menu
	 * under 'Settings > Treehouse Badges'
	 *
	 */

	function wptreehouse_badges_menu() {

		/**
		 * Use the add_options_page function
		 * add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function )
		 */

		add_options_page(
			'Official Treehouse Badges Plugin',
			'Treehouse Badges',
			'manage_options',
			'wptreehouse-badges',
			'wptreehouse_badges_options_page'
		);

	}

	add_action( 'admin_menu', 'wptreehouse_badges_menu' );



	function wptreehouse_badges_options_page() {

		if( !current_user_can( 'manage_options') ) {
			wp_die( 'You do not have permission to access this page.' );
		}

		echo '<p>Welcome to our plugin page!</p>';

	}


