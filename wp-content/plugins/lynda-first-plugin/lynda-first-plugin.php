<?php
/*
Plugin Name: Lynda First Plugin
Plugin URI:
Description: This plugin does awesome things
Author:
Version: 0.0.1
Author URI:
License:
*/

// check for version
global $wp_version;

if( !version_compare( $wp_version, '3.0', '>=') ) {
  die("You need at least version 3.0 of Wordpress to use the copyright plugin.");
}