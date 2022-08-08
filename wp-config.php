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
define( 'DB_NAME', 'wpmultisite_db' );

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
define( 'AUTH_KEY',         'LDD 5TU55w?rk?Ta1j+Ag{ FknnSnYqnHFR^Xy,3,Qn`)oMaVV#@)V-y@x>Il^gX' );
define( 'SECURE_AUTH_KEY',  'w4+TD, skh4n.I )vy>?`h}LbY*xH t&H$-[ 7n=#9Pp256*k:KV-PlPDMA8fc;S' );
define( 'LOGGED_IN_KEY',    'OYC[i 52euIrW/~i-1DVy_nwk]4csAEs@i.clw3M@TJ1p3/`8 9WNu7/t775.Uf^' );
define( 'NONCE_KEY',        'Q|itfP4=G$jm4C.X/br8+A/eJ(*V160rA0HsNV|ohx]helgWSM2F2y*c1bIk)J<D' );
define( 'AUTH_SALT',        ':s`1HU&)!c1v6AtABPkzl6vG<D#N7IbVUxZ=1jLK:mb>04JOK)R;qzG<.z3Oe~LY' );
define( 'SECURE_AUTH_SALT', 'APal,{{3 OT.}8>Z-$/71 U3GvmE8U7A`hXw;p_+7Cvuv<U;Z;T!@9 3O}i3#K7}' );
define( 'LOGGED_IN_SALT',   ',Qdk>qRZnXiI!Mp:#eXZ&uF:-&D0<I4Ux*PyQz8B{o=|sR$@!!]X Kr76-jC%A]_' );
define( 'NONCE_SALT',       'zmJ;l<!-X{(=#=GUmn z{c*F+ruU{/RM2qQodmyRF3JS)_L.VkIVZlq:dM9_s.X$' );

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
