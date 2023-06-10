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
define( 'DB_NAME', 'dbkintern' );

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
define( 'AUTH_KEY',         '&=/(oU)!-$q!qOPz|cguN6FpxSIDJ9^inpmh;<LStYE)jOAz3cWE(N_2Bu[6Moc>' );
define( 'SECURE_AUTH_KEY',  'dvNb6_kOtW~X6**%UJS`wKoW{vo>Cn?7n^:P29XD<%U,]rs?5S_L-J4(T`|^gY)e' );
define( 'LOGGED_IN_KEY',    '6shs)#7m)MC|,|)jrX5$$ovkK1(HC?se8UM6uqrjwXBv11ktxl-$|zho4`@?RRXQ' );
define( 'NONCE_KEY',        'DDq6S$s}1fq|$otmrp_DT46OY#mc#hJ!Z|Q1SpUZ$VZ02$)(?Oh<[+<Q_F5];1o)' );
define( 'AUTH_SALT',        '&Pv()&,VEp%vU`It:)xYy)O!<7kcpUy-*:}pSvO[_i.I8}yiC,CbrRY>3GW!Gf`^' );
define( 'SECURE_AUTH_SALT', '8CR3}s]Q_n#6]x9NSyu KEm,HBC7^2MnpvZa*#[p}T+pRI6`Bki@HE#a l%>,-}^' );
define( 'LOGGED_IN_SALT',   'AD8LnY8=3+IMHseg:.vJZo!CoV_u![efMJWXw}qSMKmnRd>NY%c2[oxc{DmhvD|F' );
define( 'NONCE_SALT',       'w!-_dQ:Wo&$28GGW]Fs^s/a[-I@KgF ;YeYw&YgC60KD|b|.${n_:}4 CXHAx-+y' );

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
