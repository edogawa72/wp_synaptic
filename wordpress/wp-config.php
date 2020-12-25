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
define( 'DB_NAME', 'wp_syn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^@eWd,1Fes@6(ya<Nc+2/-^xy-!KDc/=+Z~f_pVD4CB S+%8IOFw7+.( ol*{%R^' );
define( 'SECURE_AUTH_KEY',  'M_AP5%415X%!Q+{l;i_$r>(9,O$+sSz|~2dY4Z#*(_>pC,QmtUF1)M2A)FG#FJ*o' );
define( 'LOGGED_IN_KEY',    'v;g-vBh9w2cnDYvPkucz=&:1$MIRQYeY;ed`uY=*Es}_}_35R:vz;:s2ZLmnD->9' );
define( 'NONCE_KEY',        '8,Lif3Xx2x?x~#X:wEK ,S[z10#4b1 Qo8vn4/l0Zq4?=Au?<ND+-Csby6oMF)&o' );
define( 'AUTH_SALT',        '.:Qkc4OORi3`rE$8X%)5>mzIBnD*mVI,CSu$jalCaw,i[hwp{5>%(0c==ie1W~qF' );
define( 'SECURE_AUTH_SALT', 'a6PT.J{D$[:]LP3l_}%`_Y~K1(>@gQ_Mi,.Ax_6XY7/V!u5:}O+w}8c[.Z41P}<N' );
define( 'LOGGED_IN_SALT',   'B}JRonE+0Taa. BBk8XWyYpJ/M^_G89W EyO}^>XN7FSm<$FH{lF{]>,x?<%{Hob' );
define( 'NONCE_SALT',       'ef]*;o0&a?u%1*]f=:4o7}3qkWbd_*cR.ZX`YH![dZUr@JBXb*`@/PWo/0m#t?Sd' );

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
