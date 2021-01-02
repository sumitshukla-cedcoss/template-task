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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0yRGQO079FEZlQb+6gQiCkaswmmhkl7Eifd3gVhhvgP4WEJQ9B4ydDkCkufPxLX9EwJmkwwM7f795iNbwucBdg==');
define('SECURE_AUTH_KEY',  'nDfOumaOMt/KVdu45JxaJq9mLMDH0wvfuP96JlwhuZKiyMJ1+/xCmXAMqPlYXbQVZcTSPUgbRyujN5jWuHjicg==');
define('LOGGED_IN_KEY',    'bFR4DuutK2//8OGY5CJ2bC35nNNNxqurS1zdM+ojv3fvbxpBw0v6PHmr/1SHwEui+htmu4C1Bwe1TQxvCy3lrQ==');
define('NONCE_KEY',        '9wQDMZE5LjTIvR/bjOTNX1b8+2tKS2Ti76ijy5N2SYW339pYPlhnffsc43jrkViUKcil/91g4ytpaxMBf4XKMw==');
define('AUTH_SALT',        'hsR1f4XQ9twipzT8AKC0tOzZsEmJbXhOlVIvfrNR85aBBCGOp62GO/LRHBCTgPhQmHdWvbBHAO1Jx1GJpwIApA==');
define('SECURE_AUTH_SALT', 'UdV7n7BwTeQy8AsTrBKnRrC7xzKn7VkIabqo9e7+NqkFGHspQxktjKEtYozQuy+zUIMskMIL15WswLp6Xx0iDA==');
define('LOGGED_IN_SALT',   'dERHKwDoBWCJjKMILoWJyIxGqIlWv7SZK9abcPM0Am4CQgU0nEFu+BE0qNYgeP8A4pB3JIJlsuRda8d77Pd6aQ==');
define('NONCE_SALT',       '4YcpgKTDaebopSlWup/Gowl1JGukRdBqAyhu3piDyqKSn6QxKvDOLInqJCRPJPvqjTKM76VZ1C/HArudKydxtw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
if ( WP_DEBUG ) {
@error_reporting( E_ALL );
@ini_set( 'log_errors', true );
@ini_set( 'log_errors_max_len', '0' );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'SAVEQUERIES', true );
ini_set( 'error_reporting', E_ALL );
}

error_reporting(E_ALL);
ini_set('display_errors', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
