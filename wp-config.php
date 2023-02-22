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
define( 'DB_NAME', 'orchard' );

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
define( 'AUTH_KEY',         '6:>DLFw5Nr*O)034]{}TR*Qx8?4DJmE+j*dOn^~v7`%aIn|?J/[=jPx*NuT#Ls[Z' );
define( 'SECURE_AUTH_KEY',  'ViX<s1/vBS;H270B9<kUV6N`9[MvVQqiA/8sgFtRQ{cOU2iZ{}9y4*h.F=qpT]Wo' );
define( 'LOGGED_IN_KEY',    '%Etqe&;9g?F*h)hdu] uXF<X-)V*r0h_N&-]ke1{J7KE,IjM>c*0Lzi(3wL hkCi' );
define( 'NONCE_KEY',        'GJ.QOy0UGyfY;p)| 50G%KF?|j>xk[<K1)e]f0K9bV!cvHN!RQio^SB!ZE$SHw.Y' );
define( 'AUTH_SALT',        '$O]tKD*WHVv7_,@$%Wzy<)//tE;EzD-.(R:n^Lp$dQ7`=TqJT5Fg-F2N_/-.niO:' );
define( 'SECURE_AUTH_SALT', '}C6%ACH=T/:n:o|Kp.gsr%v$<XpYA ^Y_:;mF+;;Rqy<J^rAVQnxN+C?lxQ~L[U]' );
define( 'LOGGED_IN_SALT',   'K`lyV$0. =]#[J5NZZWZ-k_+RQQ!*4Wo&l1c8(CKxIQ)@oF=s-!PN,:2B;LEnh4<' );
define( 'NONCE_SALT',       '42Qj6YyuF~}s%Kk`ff[0>9BG]8Sm5r^=kAJWt;u*j=]eO 7>qPY,f[cN7l%&G&k)' );

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
