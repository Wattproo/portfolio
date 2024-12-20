<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'concession' );

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
define( 'AUTH_KEY',         'MT/X:%WlS}O`&tyX 6aZw`lnqF+Z[0}@^=>^F;!l?[0q.~jMxzj7Cbt.+);J<_OA' );
define( 'SECURE_AUTH_KEY',  'eW4aa&o($_%9T`&UF-vEjSD$=1-(qwKS7ZWGp;L[!B%x9X-]o_I/)9y&0#WU<wD%' );
define( 'LOGGED_IN_KEY',    'nc;,@X`_kOzd[c:W`Rb6g!J7BuK;lF8=N!CWeB}g}:/5.w=DxU68SiwAX/o]$!q{' );
define( 'NONCE_KEY',        '?PuF:,keu*zSeo-2TicVp=alRo*/6L85|3nQ/a_1nyr#2qHCtfh=@&P0cOo&{>c|' );
define( 'AUTH_SALT',        'aPtLH[lbW2|_R~/7uq^p J9X?V]=GN*k,f|,5vN7-rSNI`|W7KW%wfa_UwU6Kpmt' );
define( 'SECURE_AUTH_SALT', '0s{bB$ty}6:*K[mOV3tQu f1O?Lx+3ABzz$Dku$3wqL]xSXvJIs!t0)[TIklu}:C' );
define( 'LOGGED_IN_SALT',   'pg+DKQvaU`?RkWN~?wx>eREF)Ren2v]i$hfR8z+<eCcQP*@:x)=q77I&$Cw-S_Ao' );
define( 'NONCE_SALT',       '4_zsT$^E{#XSmJpzAqZr4$N_UnNBty$JR.]B^:s{6tIA[LfP47GRcP`T(QU@U9dS' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
