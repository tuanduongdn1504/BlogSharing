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
define('DB_NAME', 'kira');

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
define('AUTH_KEY',         'xOQd[3-uISp9a*f9G(209oD,F(JjtmkrM.4Uy=AHg-<T9r~S@wpRMktoWHZ5UTn/');
define('SECURE_AUTH_KEY',  'KW>_1=3zH-2kx}SKd?]%0q9@e{R1JN3zGh@W.Q4J.Dd]K5aMP=&obsbGDg0!|N{1');
define('LOGGED_IN_KEY',    '?k3cnedjX#A`8l>?Ccr{e8rl3Q.D8a_/h9+KBQ-C.=;Si@OoMPi]Bwo#(@Iz_a;4');
define('NONCE_KEY',        'cx{cW]Am7M-Ed;fnHlaN96]}D|#32]B/q]-0u6=:1Gpbe+a]^rzR3O[gb$(7N 3P');
define('AUTH_SALT',        'HY~ ;jpO[|IJQOp]`2q+2b4q9Ep)QcFE{W<5GT$/1Ujl{Cu6ge-[l^Y6rsEP_0=V');
define('SECURE_AUTH_SALT', 'X pR39rBcz2z6?EIZ=r~nu18U-MaA^82r*LC~}cc/U2B#|2z3 1s-a^B {/]SV@O');
define('LOGGED_IN_SALT',   '#/Ph>596;KK5A&(?QsMmESK&:kt1at2gpBF=,~ ;!*,5`II!7N^o,)`J@s`D`ogp');
define('NONCE_SALT',       '!)M<QmsRowSq{D>`4{yiaW87m1W. ?:5/C@o|VHR=8x`Ow$=u4}asc,!MRpt?`@`');

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
