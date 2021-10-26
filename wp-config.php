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
define( 'DB_NAME', 'asscodemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'H^o.(3R=+ToTRP1B6tEmC{Lh/-Wn:DO{Z2uGH`}cv|]RGwwPeVQ?{xm^l4 ;n5(.' );
define( 'SECURE_AUTH_KEY',  '*N:raf9$$H8$1cZ]NMH#[k33+~@6ygTiK}n;; 3{,]n28/@,)Y9Y<EM=0PL@Tc9P' );
define( 'LOGGED_IN_KEY',    'Nh {[dM!({~OnmGd8m&zrR;q/S1,t!Xtp?8|f`x#mX# pR7X#8d)CRVY%}Dab-&&' );
define( 'NONCE_KEY',        'AyOn]l*@8D;rmnI9vff)^YwdkA`|WWQR8zo]>lYv[YZCJ8ITY/z4FxI+e%7Huzu~' );
define( 'AUTH_SALT',        '7)@4>1b[eJ]XE$hIbR2bbw?=;/8EKH|23xNIX.h}@#[>Nlwx}>;n85iY5>k  K}~' );
define( 'SECURE_AUTH_SALT', ';C22+` m-I]Ru3Z2ZCZuQM5G]}9 UQL$0ASHlJk9x7|Y/iz}aXj<|UxQ0ldb!zx5' );
define( 'LOGGED_IN_SALT',   'Wgw&B,&wehK`XspTmQp m:}d-1DXb;fFH9~ N(iTuxFt}TpfKn_080S|C%QP,s. ' );
define( 'NONCE_SALT',       '6qM9rNks!f!qt[h-smG<?`R-9Hkq:uj8Nn#QtqSP-IAW3b6r`m+jmONWS2}qXiM~' );

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
