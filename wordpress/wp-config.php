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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'GLLOjna0flc-3@gJbl Oj9u-ew5>c-rgI+h~`A6k&Y.0:U3Lzt1/{1@4)8!hBTK0');
define('SECURE_AUTH_KEY',  '(Ur}<<@XFR wxy/O?h-ez5z3mG!R=v:;p8em8[.ZiKwNi.VHyMLen#m}r$?&`|c<');
define('LOGGED_IN_KEY',    '982arbh+xkQ`?|M!6ueAD?_uY-.)Mti)6f~RxQMxgb#hbEWXY->a=FdV<Iw*e@bw');
define('NONCE_KEY',        '/6FFQ|ppax(urIwV&#!1{=h1yaDZcN$0|utY/D>;p;h_d)a4>lj5:>o]3qtCT+8k');
define('AUTH_SALT',        'wd,NeUSGaHmicCZdp@yXONgPo;z:]2t=sJi3X~)f!AI/y8.lYvAdlq]Y2<+HMcaz');
define('SECURE_AUTH_SALT', ',xX(ZC$.:[_iH[+d:,T?=FsKmqrnBr,m)0d1@tR3]lP}+Hv$~uGU9M+?cF*#62kV');
define('LOGGED_IN_SALT',   'muK;[A#VXJ/b(Q!lp+Z~`64(ezjA! n>q`, j;EO6Y6SV3G$w}<%1:KWUL[`T<2.');
define('NONCE_SALT',       'YT)fb(sCoef^!t,/dzv17eDY9gQg!~=u(9O+!-pLxPxE{YZ}]G )8dY8#O&Yg6#v');

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
