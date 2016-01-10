<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://lostwebdesigns.com
 * @since             0.0.1
 * @package           Sos_Cleanup
 *
 * @wordpress-plugin
 * Plugin Name:       SOS Cleanup and Base Functions
 * Plugin URI:        https://github.com/g-kanoufi/wp-cleanup-and-base-functions
 * Description:       Head section cleanup and many usual custom settings used on every website setup as images settings, privacy and basic admin customization.
 * Version:           0.0.1
 * Author:            Guilaume Kanoufi
 * Author URI:        http://lostwebdesigns.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sos-cleanup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sos-cleanup-activator.php
 */
function activate_sos_cleanup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sos-cleanup-activator.php';
	Sos_Cleanup_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sos-cleanup-deactivator.php
 */
function deactivate_sos_cleanup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sos-cleanup-deactivator.php';
	Sos_Cleanup_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sos_cleanup' );
register_deactivation_hook( __FILE__, 'deactivate_sos_cleanup' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sos-cleanup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sos_cleanup() {

	$plugin = new Sos_Cleanup();
	$plugin->run();

}
run_sos_cleanup();
