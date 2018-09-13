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
define('DB_NAME', 'myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D^uf3F&=WF!s@&G,%T.l8WXPZ,]|k,/?fSF.yuc)Qg?G21TM:iQ=]5lUfv-R4Qxa');
define('SECURE_AUTH_KEY',  '7y;}jae/mZke=r#l?4-5fJe*btu 25YSwE3fxj^@q^?LyPxg^w1YG*7Z_6MkY|<t');
define('LOGGED_IN_KEY',    'v%.gOKdT%qM/?)n6^5.$: YWgwfhTUZEXKiQ.c&2!>7hY&/Ki#Vo!!^OU$27Gd_D');
define('NONCE_KEY',        'fB0,a<?K`e%^3CpW-;pEQIS? hnRH}:_J$0+{@Yho6s+X-1F2ugzIbjcaQ8w&L<U');
define('AUTH_SALT',        'zt)v0!v.oF0H}^s~RS&hI7{aeNdo~^a~$:o;Og~cB96V)9%SP5rCjq)CCCS3% 9Q');
define('SECURE_AUTH_SALT', ';0snO(J#?fBhHl]Vza:})CS=EL*Q==O8[<0W5RKM_bvPvTi*=#8%X=8UQy=SM{]#');
define('LOGGED_IN_SALT',   'Z&!Fdb >NfC5{aruMjl:|ofR+x-Y:;=e%J m?1d8{R?,`4Fn[2C zLPXcUr5D5)!');
define('NONCE_SALT',       '-f8Y>#JhsD9Z?{2r$f@=Yns[bv./2csF5j,:xezb.qg.zO vk$vy~hB8o{Vd=kXY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
