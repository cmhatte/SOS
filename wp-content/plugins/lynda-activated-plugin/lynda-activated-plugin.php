<?php
/*
Plugin Name: Lynda Activated Plugin
Description: This plugin will get activated
Version: 0.0.1
*/

function my_plugin_activate() {
  // db create, create options, etc
  error_log("my plugin activated");
}

register_activation_hook( __FILE__, 'my_plugin_activate' );

function my_plugin_deactivate() {
  error_log( 'my plugin deactivated' );
}

register_deactivation_hook( __FILE__, 'my_plugin_deactivate' );

