<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'abstraks2');

/** MySQL database username */
define('DB_USER', 'abstraks2');

/** MySQL database password */
define('DB_PASSWORD', 'March2011!');

/** MySQL hostname */
define('DB_HOST', 'abstraks2.db.7212449.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{#5IYk6Nmz|*G|61z`I*Z7or0s@s`$;^!:y3zOm/Had+wC#>k=][~m6lQcM_,G9M');
define('SECURE_AUTH_KEY',  'Roqg)|zU;<8+CvHV9b2,]xl+-|WnLv#J|7PB$gkVGjh_SIJY4u}7E+UR|$?b-4/>');
define('LOGGED_IN_KEY',    '6Z`sTIXoyFY?idrjsJ@UI0hFBvs[9aL! !5J_[N{-_RKJdH#uF||Ehd0tL|7tyFc');
define('NONCE_KEY',        '=gt|kO-g!X&yu{5ZLu_S:->c*y0QJ1I8JIJu}!:PjR-f(z6A>|a+issW,|0~f6sE');
define('AUTH_SALT',        'j6qrqAd*k%7Q!)E[F=wq50;>j@j^P~m#je+L*j0Fy-;N*c=,KHwhZZ81=+oS+0]s');
define('SECURE_AUTH_SALT', '2kO$q30]!W[%l:}XgLM1{tC1JZ.?7yKR[?6][nz=A,XZ#Va/OjW*Db]3@|$Y=::[');
define('LOGGED_IN_SALT',   'l(R-y2lV$ZnG)*-y*MVFWQUqjl~C|GKZcL7HC*-fdX Lu^MB.D7}a()I;tr9B[z_');
define('NONCE_SALT',       '0$8thYtK/dto5J!- RX|-OMo:_,wJE2b*(<7kr#g,vu@apv@F&VtC}95se`;L@ds');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
