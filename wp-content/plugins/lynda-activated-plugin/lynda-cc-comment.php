<?php
/*
Plugin Name: Lynda CC Comment Plugin
Description: This plugin sends an email when a comment is made
Version: 0.0.1
*/

function cc_comment() {
  global $_REQUEST;

  $to = 'chris.hattery@gmail.com';
  $subject = 'New comment posted @ your blog ' . $_REQUEST['subject'];
  $message = 'Message from: ' . $_REQUEST['name'] . ' at email ' . $_REQUEST['email'] .
    ": \n" . $_REQUEST['comments'];

  mail( $to, $subject, $message );
}

add_action( 'comment_post', 'cc_comment' );
//remove_action( 'comment_post', 'cc_comment' );