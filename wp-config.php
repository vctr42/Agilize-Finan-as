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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'YxrY>w%B8G)VP.q@)Vq;x lF%.O}nK4A<Z`j=o8tUIC1~::G0xv:+3^=4Lr=MRA~' );
define( 'SECURE_AUTH_KEY',   'I;xy{7{(K24 iG5.tHr+{(o.4DsBS  J*;+YO<%n$n&USIe:8XSqMEsy{av|Kt$)' );
define( 'LOGGED_IN_KEY',     '+X]<}w8v$N3#c@Gw>]c6S@1~]fKne$/Bm0#l(_;LdM,!iIU)`NN(Q>xRPFkd?uPJ' );
define( 'NONCE_KEY',         '<b5k }^d-@<r$7,Mhd&o8 &lnfGiGu6J3f8r#&)Z#@IHW#[+}{q8Df4x?&oQb3vn' );
define( 'AUTH_SALT',         'jKI6n7C:((u:RSXp<bJ+C^-q%!cp6!3Stdp9bY3#tQl7p(~k[XN6bi/S{?Iy8Mkn' );
define( 'SECURE_AUTH_SALT',  '0r{f9aEUu|s*Sw`@6$QQu=x;F@[f5H}]CMJU&L,#{S}a++k(sT6atI,E6~R!On+h' );
define( 'LOGGED_IN_SALT',    'V8EGXY[E/^[1v@O.?L[xf^io&397lP>eE<b@/%j[dU^qJ|P0w;(=j^}d-LSnl.%F' );
define( 'NONCE_SALT',        '_3Th,E!z4@)+ByumZ*(D]E82xjVr)/28{U4Nvk#>*h*Qicw3t{EK5W~ j]zeg=i}' );
define( 'WP_CACHE_KEY_SALT', '6k,lKJ$O0cC(|,fhv=_Tp_RHoQft[C]AZ2u-%f9&V%2g:T&Q>v%jrK(*>0)gpn?R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
