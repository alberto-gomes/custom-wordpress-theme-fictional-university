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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'otBAdwCq4M5XTEP7t1KNkeg1p67/CllVxYYrbiiNGH6GN6w0jLi8tRsw6Z5bhVnWLA0SGIgQF1SsX/iUXD1afA==');
define('SECURE_AUTH_KEY',  'gfwsnt7G8zTPf+W49CPVCbAdFff6RyditcuHwNKSxQ79Li5+AxLVGyNDf92qK+H//dLM3dDkGyo2txMWImLVSQ==');
define('LOGGED_IN_KEY',    '0R/8ISvXx2vc9nIjIn5wZkkgvMjKKvpANRRh3nD0K+UWhY62EqgoH6FX26MYYcz86US/i3nStmsaOQWTDxzEEA==');
define('NONCE_KEY',        'oV5kb/v2M4MXSB9e1dyqdwa4u/lsfTVHuY4DuNi76xQgqxY7Iouj96BUKUf6nxKG+3w1sbmhqwq6NjQnk3A/aw==');
define('AUTH_SALT',        '/6RDecdlxt30PzHZieoqXrLWUxJmIcxeyb54cjndWcOmBJcjeeopIzwfrg2BKNOtiME7NfvdbBcee+hGFgWU9Q==');
define('SECURE_AUTH_SALT', 'ZANenhXPtB5vm3qlRvQl4rvJIDBhFhDLgjdcd6eSVjX2zzG0+rnLUzsmP5ClIeRr3ZeKbMLpr1xPUZd67jMf0g==');
define('LOGGED_IN_SALT',   'paXd/s29qUTXj4qvBNMMyi4PX3sK7k1jl9wYk/7teI3AZGeNl59SEcXxHHEvXVcUByQbwJMeC8ESv1fYMfAu7w==');
define('NONCE_SALT',       '8DR9T8+8P9xcGGKoRfg1haemv6sqKIMbF/DicqXmKl5TlyvGnm5kscHDJ5Xk1G1to+1j90I2slQrbIirzZXAQQ==');

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
