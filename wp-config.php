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
define( 'DB_NAME', 'gatsbydemo' );

/** Database username */
define( 'DB_USER', 'sammy' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
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
define( 'AUTH_KEY', 'unTZeF7q]9uho](`f?@~N}df^h$auxH|d`mTF]CF $@U3w77lu2QUhFFpSc+b|lq' );
define( 'SECURE_AUTH_KEY', 'A~9k/3|1~(!1Ak5I$=NFj2/pbTZ.&PY.:8 ?5z_MA/ d-q[T{Z>:Ri2fX -kwwr]' );
define( 'LOGGED_IN_KEY', 'fD.6c6On/$S+wJ>6@P]&&w9$+P..of(ZbMlKmNP^&FKiz*muOcGIj0gaLrxJnO5`' );
define( 'NONCE_KEY', '$OAEr1v57Bd3ckL_6=usx!_IUJ5E:__#$llg_RPAr[B;Zi%N[3}F2NC^&AabC`kG' );
define( 'AUTH_SALT', '(CP1Bqwi91[o?h?k[:h$/!)Y*z6su9X8$?aU(<|t^P0.CyHqF?x; 0cP<w~,g[;=' );
define( 'SECURE_AUTH_SALT', 'Rt[|~v]8~4>$ZqQqQDnb;Jj6Pk)Lj{ZDL)Bq_WSDzo3?v8{&Z~@W2OHdoO(QO.Y]' );
define( 'LOGGED_IN_SALT', '<Om|}7BmV>4 |Ib|BCpv$Y4mlaPu<]Js8L5K]>DW,a]WtkAlwT  x;],6o?eRT0#' );
define( 'NONCE_SALT', '1vO_NH@nOIf!KT=,W7I~:v878J+)$)!3MX_l}%x+lVG14ki=g.Xl.zb23kYKxGq4' );

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
