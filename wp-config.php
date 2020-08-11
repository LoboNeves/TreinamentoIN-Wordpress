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
define('AUTH_KEY',         '8rzKSxhQ+XkptGRWaGy//QF6sh5ymPTi3TeIGr02KQxRtygtd2rq6cc9ZU9PmDyfvl3b0ea34nqCPXcGeWQx+Q==');
define('SECURE_AUTH_KEY',  '1No884JfdR/XY+On/hCr8F7wF/TkRcV6uutkiUGDWLQycepniSID2GHTAeFgF3t+leAxgtCrtdwi12QjP9ufAA==');
define('LOGGED_IN_KEY',    'Qc8bVeApIsxR39u9uSrPTwBQbkuLP/ZUI/QczigEOPfMpJtxWTjyQUU3eQ0ryB4Z3cQONpyp5yNebqL6OIc1sw==');
define('NONCE_KEY',        'mFeWrCoBRui+nXsJJtEa4Tc6JJ4nYm42DytJRcrcTwpuiztrfhg+MGThb3QA1bDJzhAEgQRw1cA1CduZ9guuVQ==');
define('AUTH_SALT',        'U0I0eALqmsndN8W+wUfarDWkn8Vt12j60tyRD5psj2UdmeXVGFwZ8Nk234VAGA9QtxAbJOG0u2F90w6WdmlS1w==');
define('SECURE_AUTH_SALT', 'z8Q4E8o/ODfKBrsCmTB+B+8rK5nRcQjzC/QGteFJL5CCOjIcDWnU4Sm7NbL7/tE1YRhZUqdxvsFNCshgoJZ46g==');
define('LOGGED_IN_SALT',   '9tHbmgISntgclrNFoq7WeVgI2TYbKZMRyg9oerXKQaPia5Oijz9H8vxIYJGQpjYKjnUHRRgzRFTg+fmIRq6O/A==');
define('NONCE_SALT',       'rzjvy47JoKGVoCwobXqCuRdE4lVzsN4/Zs5aVKBkNS4GIovojEEjJu8iv1cfLuPXqm5jcmNKWN63Kuqdv1qnGA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
