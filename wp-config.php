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
define( 'DB_NAME', 'ahmedbin_wp598' );

/** Database username */
define( 'DB_USER', 'ahmedbin_wp598' );

/** Database password */
define( 'DB_PASSWORD', 'Z78]pS3um[' );

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
define( 'AUTH_KEY',         'pvfagerlljs2pg8zxgc3uohrummzmkiimpyb3myqt84cnqfrkxtcaw0x7ddjprbs' );
define( 'SECURE_AUTH_KEY',  'ctrdlabemvz0w9tskr7berjldeaynzeidpgcoiqss62mqdsc2syazkhqigaada1u' );
define( 'LOGGED_IN_KEY',    'xi5t6qawdlnnwu4medqn2dutasa63hyvomdwhw4diwjqd0prekdg2p4kxdca3dcg' );
define( 'NONCE_KEY',        'ugibdgjcd6q83l9phxrrnshekzhhhkm9klawna80yorwse16jvu9s3pcwdgboyfc' );
define( 'AUTH_SALT',        'u6t3tn5rzebqfxhi8stp1u8bt1wxfpjiywpk4lwkdougly9igamwf0s5el85vi5z' );
define( 'SECURE_AUTH_SALT', 'i25vefzz6wu5djrwbykh7aurcd0yc3dif8bv8slb8ek2bgtudgbdzm3keyz7he5z' );
define( 'LOGGED_IN_SALT',   'ykxju2s1x0fzx7goigzb428ycvemr0pyobcb1wqjmctxerswsepn6rrcexqjahjr' );
define( 'NONCE_SALT',       'pzl9sdtfppozers00jki8kk05oh9xprtgv1ymol3tmxexbqkyxbad5ra2vosibwt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpl3_';

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
