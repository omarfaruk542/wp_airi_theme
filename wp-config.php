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
define( 'DB_NAME', 'wp_one' );

/** MySQL database username */
define( 'DB_USER', 'sa' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sa' );

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
define( 'AUTH_KEY',         '<U%_`p/tRf!s:ujg(^8/=/t54U`M5IsEy)djp>WXA`YwCblA_)jLf]^C42GC3w-D' );
define( 'SECURE_AUTH_KEY',  '<abOp+|)vSl^p}X19Nhvr|9#9RRUA;`@b@LYu}vh[}m_VWyt/bVKb(Y~Su{m)[el' );
define( 'LOGGED_IN_KEY',    '4%~t>@~#NS@dM-!s C)SE: Fe8g41?qTuQQZqA(K0@2#MaCEb!_A>K!@<V%%:-HU' );
define( 'NONCE_KEY',        'zPv^F@aw%a@w2%mj0R22 #E{IPwH7SQlE>pr4fMk[d<}fImxVvzmeK!}dQQK;_2*' );
define( 'AUTH_SALT',        'e|Ua%i7U.x]di3S{+hWh(*A?` bFM7Fk%gnYc3>C)8!VnF|ApZbb{F!-^QQ;ehfC' );
define( 'SECURE_AUTH_SALT', '#~`wfNnZwF%Bfz1SjMpC517)e[+UR)[7ysm)j.HX6]tE]_52_Xq/b]_,K$)@5:)a' );
define( 'LOGGED_IN_SALT',   'QdAAFDUw`]*;jY?oA;bV3D[L;M(+IrrDOrnG%AeBTGtFuM.lF1o :$Y ulFYxSaf' );
define( 'NONCE_SALT',       'x(7v0|Ha;jq7W~oFc@c;GTm0|*KO[vG~oY(#02zPSEQS|=r[V$87oL[dXC,``lK%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
