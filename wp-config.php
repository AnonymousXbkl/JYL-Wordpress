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
define( 'DB_NAME', 'db_jyl' );

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
define( 'AUTH_KEY',         ':@jQ9j+_4k#+n)#o-Jwcb+Pt1st_-?Q[`V|2&O8iyve2};^d&T/q]bH29.-_J!_v' );
define( 'SECURE_AUTH_KEY',  '}U:wiB)yYiVf6S%*fYSGTp MHu=CI Kvw?u0jaUFMqp`:%~f[fJ~ Du;r1&~mMa5' );
define( 'LOGGED_IN_KEY',    ' V1^IE]}AS{g:=ds9}?An~i[j}T)k?uA]2uI<|$+W&>$iM{[nIP$+dp*JnK5DJ#P' );
define( 'NONCE_KEY',        '_0I_%c9P22W,4y*;#zsqN<gs`>1Dmg jpzcPG c]gLe|vH$8(`Hj<Xx,VK)0X4]V' );
define( 'AUTH_SALT',        'ci  >nU=~wt<I6wrp2G)m+f>+y`R*k-6o&?W4d({zE.9Z`O/V$~UpI<i+O<<AJ>N' );
define( 'SECURE_AUTH_SALT', 'z8<#JMXbq=xSp@]V;^Lns-p<l1b0MmKK3h75GsAFZ<M@Bo6@]p#.SJ.yDA`eZ)Wl' );
define( 'LOGGED_IN_SALT',   'c:=>i`ncEMYUT>qP~WrYXFr_0Pf5h`!$8S/~M..mG1-lB,7.f_;iVRLI|93zakz^' );
define( 'NONCE_SALT',       'E?:3*T[W).)k,2@smfl)]2sny2EHf8;G6a_>E#b<*EIQ96Rcx<rmdyk;hKx$ThB%' );

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
