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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         'Qz!7 a;^Cqrc&2:lr*Vu?]aB[~i}Rkl=d27zDK|@Uza_!cZQvvITMXA2I[qg|?J~' );
define( 'SECURE_AUTH_KEY',  'tarb|&S8^#]H84>`O&nLzN!Z{5fj37rQI`g4o4$s)GmU0.tQo~]w_6OhCWc4m^[k' );
define( 'LOGGED_IN_KEY',    '_,=4td:671n%+G9xr23&!~[VELmU_we`uTGXLd=3}(AfF&KjKtxUejO:O{fXw=Rt' );
define( 'NONCE_KEY',        'f&y]HREa<Ks0*#A[CvU];Sy Lj*.xH@D{K(FpCh)8]X]O}F!{}w?Xn>i;%,_g03&' );
define( 'AUTH_SALT',        '{i}Wr:SS8u)IC].M.;KYGN8t@v/QNj.@br0E}9rd@([ARiW9ZGjDopa8>0)@M|jl' );
define( 'SECURE_AUTH_SALT', '7FLOAdEeSz(#}aD4(2p;7YZ5H/ 7H~)d |qwb^R3R]i$.72}g92,@FfS~yr>h)!x' );
define( 'LOGGED_IN_SALT',   '0q@q/tkX5k=z:~Nn0j7j>&c5B5V[%yI WOa,NREe>Fy$P$|qN)R*&}IShp{$g)&W' );
define( 'NONCE_SALT',       'EpDgV3HPt+rA$^Jfb6#:St~zBK2F`ba.5qJDmbr:bEq0QuGJz>{!,oB+F )SWdvI' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
