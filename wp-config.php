<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'abstraks_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zGO?D+sc|}hO8QMu[<gL`$U0?oRLP}8x JoSj0E7F&-c5l~DJn paKOr~/ISeZ<.');
define('SECURE_AUTH_KEY',  'odXay2t.(ed~34y2(E*4BuQQgUnN>=X2&)EVjUD2H`9)(x*q;L7,6,[-+5e.I.@D');
define('LOGGED_IN_KEY',    '.6S_9VV@]&CfO}m4hsvNjv$V{|vhFpFA@FFMamXrmO= @Fc0f*yyLg%Gn%hEC0Ar');
define('NONCE_KEY',        'AOA!0 v( /<qAf[8 dJG.nV<pxHc?i:s-)z.,&G4hkXir-<(G{JRdpSNd6HVpZ+S');
define('AUTH_SALT',        'rD3G*qjt]cnKiYCa]6Z,7D05rGJJn%TgpX}]Z>q#<PZxx,6g,TJD=45 g|nQ j,:');
define('SECURE_AUTH_SALT', '.)ka%/6jgU7I_{dgOWX99%]BTXU,Ez=72A?)7)fu7AQ+brC/[fs}pJYnZJz7782/');
define('LOGGED_IN_SALT',   'ap#)F#dm!%I0[S3*#>m<2`n~xG--Egcn(}jBogysY9!>7$cjD JRFvqs_wm{}IF|');
define('NONCE_SALT',       'S%   ]%GFUhmlvk?8#]bG&({kx~FtTsTb;7e*}&/`;$ eLeX)l];pV#ds#}F2m(u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
