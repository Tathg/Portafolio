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
define( 'DB_NAME', 'portafolio' );

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
define( 'AUTH_KEY',         '$XzCbV4{ 2Opr<2,N!6@)D7{ruB=^Uo-}T|K$sqcs!ZY=L%l,Z<7cP8,mdY7*FVp' );
define( 'SECURE_AUTH_KEY',  'e6Nu*-6xZNV}G|}iy<-5J$#ox*l(uFBNyofqj-zV-NPV6+?Q2^ZiuO*^=P8]Z;=%' );
define( 'LOGGED_IN_KEY',    ')Cj>uI/snP(jw[r!&_PxIL6<OCewe6gw8&xUjEp6*H+<-g%]0[0k8PqN-H Q#6sk' );
define( 'NONCE_KEY',        '[Jc~=@R9idOQ0I4Ny/efKBdDEAUwaHp_epm*.V7ooa<8K;>O_3=/GN%0Z]h$S[Tn' );
define( 'AUTH_SALT',        '2;hAyF .u0_U7brA&<k&Ie1_&9enHuM{U49+YW=tfjBCJ-?oNZVNNu%eXF~hf$vQ' );
define( 'SECURE_AUTH_SALT', '7+b0%}OyY3p$+XHpn[)Bt_3C3OnrmtY>jc#/pg]>eA1;_Eqd<BbxW8%+VLxA>fv7' );
define( 'LOGGED_IN_SALT',   '?Tx-`FA~5V[x[}Q%-;djFpmy@4v?Y~Q[Kbd]LYxGyg.F^J1(~vnRtj7K!9J9/!&M' );
define( 'NONCE_SALT',       '`+S!1Vayf142_3or=$U.a@of)]6NZXN_Tb~&17t7*rM8e+)XOM!B1SbGB3Z`Lb(W' );

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
