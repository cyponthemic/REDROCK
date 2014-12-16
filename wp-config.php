<?php
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
define('DB_NAME', 'drinkeat_redrock');

/** MySQL database username */
define('DB_USER', 'drinkeat_redrock');

/** MySQL database password */
define('DB_PASSWORD', '5Vo&xnUA@AwS');

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
define('AUTH_KEY',         'r(jv[ZPd/&OQp,ex${pj0K1+.Yd>hM1AQ 8O)JD^4so+ip)cj+KDLh}D.I{*7l0E');
define('SECURE_AUTH_KEY',  '-d`|6N<ar8#]9s{mpcLW0WO54|AA/@yCd/-)S[)FAD4T!=S5el_O%7kS!L4s>%rl');
define('LOGGED_IN_KEY',    '2A${n~3o+*Ozgkdqd6(34+b%A]4j#B~Ha^WhXA0j%)$ R}^RK#2J7HwtDu0+F^-b');
define('NONCE_KEY',        '$UohM#95!pP#z:usYPGC&gaK;c;;+/@e/-8n8C0mHg(uO9&K^JF:QUZX4p#<= xQ');
define('AUTH_SALT',        '}Uf))-E d{S{YR1;^aocrrGjlVOo2uAj=k~f-e`sVT9[9i {~*Pc<{ds&aO,&q.Z');
define('SECURE_AUTH_SALT', 'br+xZPSMb=#v)ac+|X-b=zg~wCvR-A}0.hAPAq9E)~|cR=#>vzu]$Lh;_kpnL[oH');
define('LOGGED_IN_SALT',   'v8$o8/ui$NgBG(|zxZ6FpUhJ<[I-;_Xf[e=Y@tOb=YcT]M-xh_,pyI-*^{{wWH }');
define('NONCE_SALT',       'tfjBy1#+ [t2hd)`+j}M(z+TO+-N[u,ikYSM)+HlEq}7drml35dbp+8ox&Y5<W$+');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
