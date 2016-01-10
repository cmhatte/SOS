<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://lostwebdesigns.com
 * @since      1.0.0
 *
 * @package    Sos_Cleanup
 * @subpackage Sos_Cleanup/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sos_Cleanup
 * @subpackage Sos_Cleanup/includes
 * @author     Guilaume Kanoufi <guilaume@lostwebdesigns.com>
 */
class Sos_Cleanup_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sos-cleanup',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
