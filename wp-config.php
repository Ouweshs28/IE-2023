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
define( 'DB_NAME', 'wpment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Qk*t:t:Z!s;s97fjjPo~8Gpn<(/4y6q_?,PVTCxyJY+w=K0P,pr 6a,.=r+!KsaQ' );
define( 'SECURE_AUTH_KEY',  'a{6HR(vx4Kz Kn)yhBTy{O/I}pF?SFri_%<05^`7j~h7iZ3^z@q}m,+:~e.~QAL+' );
define( 'LOGGED_IN_KEY',    '.=N0-K,r`W=+voG~Gjp!&sW4B&Jl3v[},BuiR$_d.Chjv&!EH&83D$YJDpFj7#H_' );
define( 'NONCE_KEY',        'q0 q&~$++*2`b{7=oCl0!67IQcckOzY0il{j:vfN0y_4E8}3Q nBH<~}=BH]L)L-' );
define( 'AUTH_SALT',        'VeNup0!OLt;v~wxZ*Lxafz`4o|IOB`rk@M#zm6/Oo4hETKI:UhbS:VPRJUldNne1' );
define( 'SECURE_AUTH_SALT', '_oON*:HSoWvC/^wA`jRf_3VxM/ecvP+f&)pYwKBbK=|,LHK4r(`|EGn.#:d@HE>1' );
define( 'LOGGED_IN_SALT',   'HG3@2dfM9zp2(9U.j)dYJ{;e3i/unG,u+JfUs}6F+hY^`CTU,+a(MnA7{mkF7q}u' );
define( 'NONCE_SALT',       '8&skdwaSZ>m*<T_w;nyPa{617kS6fJb1`IOBl.U jqOO9`plkx@g;mg`J[:Av*v1' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
