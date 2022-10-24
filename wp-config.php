<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_api' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#8]&SfxVk=5$GdjC|0o[#i6{sjrL=3,6+zLrNyT[H4-:ZE9LjQ!.P?l;k#;[%`*g' );
define( 'SECURE_AUTH_KEY',  '!zuN0-@_?(pK*Jn#UhS:$O~3ja(P|1<1)D_#vY^iE%]>%84F+.w]zEA19|O@uEQE' );
define( 'LOGGED_IN_KEY',    'jd23 cA#0-eH}Z88_.!uDZiCg^hauUOJ=9! zAo4|Q/xer2foI0k*R{,!zIffz&i' );
define( 'NONCE_KEY',        'ei~ImtT#U+5)-0RyNMLXj|6szD;BU,Y)![+1;15Hw2%&F5dr>J8IMR8#OdQHc:O}' );
define( 'AUTH_SALT',        '=mrPz/%!@@Li-G+U:l3%9!tC?v=klsCU;(!M+#DuM}Swq25WsU+e8vWXU$G5qC;i' );
define( 'SECURE_AUTH_SALT', 'bJ>t5eL{2(j:,rTOT^&b^@T.kg2*bb?L!#)MWPCZ)nEpc}SqHmMGU72Q**w+Z%W~' );
define( 'LOGGED_IN_SALT',   'd?%ync_@B5rb^!2=x$m$LbEPU_A2=Yk>WG;Y,PPK<=q|~`L1pR2?H l3&k3Uo5IR' );
define( 'NONCE_SALT',       'uXvVo@9;U>NQgX1QZlJ2G2I@-mh?M,6-%Ryx)<``q+HSghnOcnSdlHy#*j_eC!ba' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
