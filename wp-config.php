<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'instock');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'aDGm:g5mF.{O5sep-Ytd+e-H[V7kK(3DPxYR{{T-9Tm@E1)p:@S8|baRyZ-8O.K5');
define('SECURE_AUTH_KEY',  '}S_nivA%jFTPT<Arx^!$+~^A.D0+.&c|U+`JP)TCG+GePdd;NQ*j2oZY1?$jE-ay');
define('LOGGED_IN_KEY',    'SZMvVAK>VG0yebut+$L[bHMF9&4X$<t?V|?-P/B`.,LZbV(7lNbE|-bO*t?|E(S!');
define('NONCE_KEY',        '/i}eL$n+s>#[w-qV)a:[?+!,^&N~xtzT&&o_8k3)a2Umj C%ADz0XRePS-y%Uw:L');
define('AUTH_SALT',        'rT,96=URJ.&>}~B|:S5Z~iY|?)*+B!SBVT}&^nx{J{K3WjjpZ|3Yzg1${T>BGrvo');
define('SECURE_AUTH_SALT', '9ge,A)> |$.4]&C3lEFvCU|_%Sw}P*h7m:q`xv2~`Q?|?8f>-2+{owB4(g+qMjR>');
define('LOGGED_IN_SALT',   'FX>f`/z Qp_Xco@P?R9[J1,+6s7TDLX]]%h--+K/px@m1TYc``l2=btq/[52&}Pq');
define('NONCE_SALT',       '5uRB?h:kM@5p<p,_tz/u-n.9-nsW.xA@]Q$}KJ2R7bdwJf}UAvV<:1t _Xc|w98;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
