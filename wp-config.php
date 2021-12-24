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
define( 'DB_NAME', 'xtremexterirs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|+ Oe@n=v+Tdv<T-qUu?6r_R]s)us_+mGi<J!mvMnLJKiBM_=mNKP oRl; 3p9D8' );
define( 'SECURE_AUTH_KEY',  'Ag!J%$lPLe{!{+P_C,z.6SBI%]&M$E pnc!*EE<<~-FerSF256phA8 JRmr@63Wd' );
define( 'LOGGED_IN_KEY',    '27RBb1cj+Z3(xk+O,]VoxN]_QY9.L&=8/wv&1fQjO&uEC4mxB3?iJ|Z)8aeN9iL#' );
define( 'NONCE_KEY',        'yrBbtUyY=k K`svX&s~gcdu_nSgTf7,Y|excWI0!Ff1;mJuW2tytguJ64)Y5b:`#' );
define( 'AUTH_SALT',        '_B;~?b`J=HmL5.Q%o5nfJI|y4kf0!Omefw]D:a3?,u&fMa.20xOeX]EkqH~?^N),' );
define( 'SECURE_AUTH_SALT', '}R4s6Vc@hPMLN6/Zd2hr9+Em(0wRTORmL[0Pk!@i{rI?k>)2rOQF$zj^Y[x`,]{g' );
define( 'LOGGED_IN_SALT',   'NqZ3]{_7}YIXd%MC7p_[%!F&x!>4jYr5MiyrQ{{j(1}.5Rf7l7u!g=,*zj!WE+`D' );
define( 'NONCE_SALT',       'D6OS,SDNcVkAKEb1FS2lm/S,)SXidg>H*$~-v&7%zP+a>qQ98z4sddBYk83p)k8T' );

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
