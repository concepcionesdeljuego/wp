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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'plHe.ev_ag;:N;dyB`?Y>8Nt&(7m+XWzZf^[9I6G^iBx&td)amoa=&L];gV{Xf@M' );
define( 'SECURE_AUTH_KEY',  '_|i^fe6~?;mkl)<Kp=h_i$V)/:+}Z=vF-q5_I8A}|v:g8GOh+>d6CsBq~3aM()xX' );
define( 'LOGGED_IN_KEY',    ':Oqmk9e3?vpzQx-L}/$mcE:N2[|q-*A?k1!wvc/X9>5!|s:cX9FckcCE@m]]rX<B' );
define( 'NONCE_KEY',        'l]{:Sfpc_KlSa?o|P^% nT8XA05|KmVZfymFH:NCUx?n7~KOs3@z_]I/2 vU34,q' );
define( 'AUTH_SALT',        '6E6;6k??FT4XS23su ov C) 7IL;qg$BkOXIdtkCtRPSQ</A|(dbAqm@%_@j{Cr&' );
define( 'SECURE_AUTH_SALT', '*eEE%B?&kwFVs?9]ojg<Cgx$ Da+<b xO[5gG%a>*G=)jiMxX}gF(&6z55Djb~[F' );
define( 'LOGGED_IN_SALT',   'EWi<D*/{`a&Y![iwLrHgi$}~n]EUHcD1pO9xe`4K}JUI;OpYaJk@aJfuxNrn5pQo' );
define( 'NONCE_SALT',       'TDJ-*$ kPj7^eEeQmu!D%R8udYm./~$+)^*Wu8L]3t7rfYrbuMpLlfPKU3u$6)>j' );

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
