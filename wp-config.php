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
define( 'DB_NAME', 'virtualops' );

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
define( 'AUTH_KEY',         ']QFK!(Qpb,]k:NfZ4Bo-_24Uu2P|-Jc`86e,1Yt)Fxxx)}N1IPg++Kw03gBr>m;a' );
define( 'SECURE_AUTH_KEY',  '95huSYlmYo5E)~1v!UDaB8y:?k2?.u*>ujwp&pALd|W!O{cT#l~@/s7jd%SRdZZ`' );
define( 'LOGGED_IN_KEY',    'irZXpowtcB`clEK7=|Yt#V60r{ ^3g! 0`t3.M.l(Zw,BT$#_w%XM. R2vG*#Gw+' );
define( 'NONCE_KEY',        'PC&Hvm[.RSW>,lW!D=QsxO;V{S,c|U0u[#F .OlIv&6;M`!r$lni=.dT` SiFYj.' );
define( 'AUTH_SALT',        'A3{xTGt=i+/q}#+k1rJ#c@u`k@Yp-{hAV1{BNC;4!HE%YxXE~Ub,~rSE+Op~Y/qD' );
define( 'SECURE_AUTH_SALT', 'd#s(U0JmTKaQ}sUUue+hs,wm.-tn$$})t!AXYQaosEH&#-,w)5$B^wjA-oX]*g3<' );
define( 'LOGGED_IN_SALT',   '#%im?ViNd_]66d2Xk65v*xB>n+w0W*u{iGhRtra>|61[wiiz:hVbmI:qJjYZ|?{^' );
define( 'NONCE_SALT',       ')QdF;]}_4cO&s^Gkl!llTw.e+m{#4j2[CzLY>s5C3$Mga[Me#/dRC<CK{)U*[}lM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vo_';

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
