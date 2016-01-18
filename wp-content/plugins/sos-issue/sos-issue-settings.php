<?php
/**
* Plugin Name: SOS Issue Plugin
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

require_once ( plugin_dir_path(__FILE__) . 'sos-issue-cpt.php' );
// require_once ( plugin_dir_path(__FILE__) . 'sos-candidate-fields.php' );
