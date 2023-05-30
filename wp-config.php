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
define( 'DB_NAME', 'rpmers' );

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
define( 'AUTH_KEY',         'T>yPDq}v]n5rJxaU;]twVDi6u-l-7RP;?LOfpB~*U!`nRvy)2#Qc_l1Pr)i8,jc/' );
define( 'SECURE_AUTH_KEY',  'NNRiCK+eu1{s*-:>J1CoSp)-?$lu*/?9p5x007<H6%4[dk5~;X4<OuDtZ6(8MIM#' );
define( 'LOGGED_IN_KEY',    '(}l{*1$9D0J~09sr.O$DN$WEkI:O}_,3=VK%b^]Uj}nFq$tX|SgItJFdpB1 RG:F' );
define( 'NONCE_KEY',        ' ]A#ce88`y}3,ay,?#_XV+T5*%hl,Q|EX=S[O=bmEzc}*C^`c[A(HRvasa+rW[bh' );
define( 'AUTH_SALT',        '9b^T$xW6d~T3XDl^O+(YBfKMZpS;b ?szOdIA_JDl;gk$_N_}n75~mhoLXm}h0[k' );
define( 'SECURE_AUTH_SALT', 'f+`yx+(VRWl]#_Ns29|f<]2+YUymXhtJ|jGE!B {!/2hBUPWKwL.83{n~C!VFH54' );
define( 'LOGGED_IN_SALT',   'SwiA9pV7&BK]q:R$MzMXFisy5ay~0e}VFUAEVTzg@g[;h`Md4_gDF}`R~-/&wL+I' );
define( 'NONCE_SALT',       '}6Kh>B6AQFjy9VlGf8oCg+=zb:>5u2aDT*m/Rz8IoG:A4h1_<TCf-c-9:1dtQyhp' );

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
