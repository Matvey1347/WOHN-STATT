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
define( 'DB_NAME', 'wohn-statt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Uju*bd}XRb{0Yq4[Z}oms_^[q_:uY^gPz*sz>?T!(ua+ 5?:dDY5EMRQV7yKO3G6' );
define( 'SECURE_AUTH_KEY',  'p}x2UMYlhj`R)f*;fC,*P@bKQ~{vmm}Y@U$kOw./KN}!_NXfA{#XcVL+TwFE[X:s' );
define( 'LOGGED_IN_KEY',    '-lKK!@mxZc)p+HS`omwO[Uj7/4lA.]hz*XQW5e|1z$E5FA n6,*8HIxl5TjbO3rJ' );
define( 'NONCE_KEY',        '9&i~Al.7z-BIb&VsN4-xyc$jIZ:R-i@4poTjb<d}^W/E!=8x|{ET9.Yq!)_lU2$k' );
define( 'AUTH_SALT',        'PRSRD>$>%;Y!M{jb}+oK-I4MlQq$LNXC9W`Al)63p/zw4nLt960Q,_8mNt/8bF<i' );
define( 'SECURE_AUTH_SALT', 'w:C-BSrh%<5^g+m/-H?_Os0IRaF:m%yAF?)KALHl+CisMb~x+!yxnKe7F$efwFbz' );
define( 'LOGGED_IN_SALT',   'dC<*<m>dQ1ib24fc9I-:@>f<R!s}sQO-yV *6 w@y4-,^RzPyE>J+=$X|*E`Wa,%' );
define( 'NONCE_SALT',       'M6M@!Y#h>MN;/7s&?9ETikLbK#y887c&8ZK?8rb;/?(SmgvtxW+X6INvuFGgn#fb' );

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
