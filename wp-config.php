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
define( 'DB_NAME', 'wordpress-tuto' );

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
define( 'AUTH_KEY',         'TIntU;y^GO,``pgRgbE=ZOHD<mX=q#jsZqyBrU{aF^L[i`R]*?R_|/)_kOWfWd&;' );
define( 'SECURE_AUTH_KEY',  'ofR3?$ZmqY5E!/,PQRNf~A[-wYfg_bD#NY/<[$hn O`=bKZrWlF)GWN$M37-LdLZ' );
define( 'LOGGED_IN_KEY',    '=kTYj8myKO>KCD|Shr~y7q3<0GoTmCckg@0v#{*PLN?dFI@ALah0z9ZLh:%J7!N/' );
define( 'NONCE_KEY',        'R!30|hx-{SpD/1u{>hi=Q<]m=HkSa9I1RRgk%>M9kV*y.wT%P$~bP8v{UsqxVLOg' );
define( 'AUTH_SALT',        '+OniY05-WbflL.#2 3RKE~L}$~D_+;t>1&~GZh;r,*k|!`~lb:2vP/X:DPo#lJsH' );
define( 'SECURE_AUTH_SALT', '|_i3mW?l^q]gCBf+AJmYH{&T: p]i,pAtc4^v9gJZ.OloWya)o<jp$xFzR}@Pw*e' );
define( 'LOGGED_IN_SALT',   'PoG{19S`YRbz0bI-wM8xLp6,zFA%kRUaTmsmv9*!|wHZet5Bq9:`~qPT)n #y9E3' );
define( 'NONCE_SALT',       '+=pu6,{dxaZRj)~qHyxBJATyl6uyu3n1XKRLii$:]mc~XgNre8~VW7)tYalpiDHH' );

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
