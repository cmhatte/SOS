<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '0d3cb516f6');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '3d36c4b4eb75b76645956e31f0cfd153884b6dd4ec0e6959e5ef444949dd0faf');
define('SECURE_AUTH_KEY', 'f9ba3373206b200079024c9bf2edfe81d46359f722b733d05041c9ca6e0ee14f');
define('LOGGED_IN_KEY', '4b7052cb817cba854b1a08a3bda201b5607689897c53e3e5ec16b0a1caa797a1');
define('NONCE_KEY', '6faa5d029ae74f5ff999455e75d9ccc4861787d54fe4bd0be45daa1903764cc9');
define('AUTH_SALT', '7a1435d9f79cdbbc3254d24b10b56c17c85e04e538393c6ee74e356e71a4bc72');
define('SECURE_AUTH_SALT', '070446693704a98ab3cc5498c2c6b3c3b7f3e38d6b2535a88f5a34a833aff2f4');
define('LOGGED_IN_SALT', '4fae352364754a04a25c0a779c446344faa707b1a0e358cf559290874b379efa');
define('NONCE_SALT', 'c0c3f3e296556c4ac85c5eb80a17f75a4ec511182a58b9d3d5fedb6fdf1fe98e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/opt/bitnami/apps/wordpress/htdocs/');
define('FTP_USER', 'bitnamiftp');
define('FTP_PASS', 'yiN8YxFG8uRgiP4aw7Yfz8yDkrqXvGUwpRhejU7bUdS0iHxOFj');
define('FTP_HOST', '127.0.0.1');
define('FTP_SSL', false);

