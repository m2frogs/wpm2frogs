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
define( 'DB_NAME', 'mfrogsco_wp339' );

/** MySQL database username */
define( 'DB_USER', 'mfrogsco_wp339' );

/** MySQL database password */
define( 'DB_PASSWORD', ')-D5SkD!2-pw)Y](Por6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wkmsbniitiucbaxld6dzcvwesg9a4ggrydycfbrokgooqn9mhcbvbylkysevq2ln' );
define( 'SECURE_AUTH_KEY',  'nz4xt8yncs8qadq40pupeyyayieras2yv2czdscwsjn5ikytvqqx9aepqmxutplg' );
define( 'LOGGED_IN_KEY',    'ksvhe5svx8nskthw3098twjpqr2orm5ewbtpmkma43dz0cqtp5hkozy5ftfvsxfm' );
define( 'NONCE_KEY',        'qhijk76weo3wjbmvoeeocdpybmsr0dpoxinpxmaslxvzqk7uwqintwgvfflplyvm' );
define( 'AUTH_SALT',        'aenxiqbrklt6tdpkepiigaoaotin5pk8fhegijo8adfgg76jzocgwmawfjmtc7pr' );
define( 'SECURE_AUTH_SALT', '4mkbqgxmg4t9o3isjqd7uc9nqnc2ukfefyvfxcnfbcsdkxscatscptoqx6cluo7z' );
define( 'LOGGED_IN_SALT',   'vgi1gcbcnfm6kmvrgs6c1kxsyk1wjix0db3drsgwl8t2h7i0esctxastngfe2u5t' );
define( 'NONCE_SALT',       'ytn3kdg2lwzz8ny9udobmdg8kq51brug3yynqleq1diiwitf6ltgqze6wwyk0pfc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
