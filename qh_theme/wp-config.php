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
define('DB_NAME', 'wp_theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'api5ct');

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
define('AUTH_KEY',         '1>s:K%Hc]jDi<X5wBiEDewF%EQi :f#.6tL)*VAH<Cg`{3`+04YhVH8({/2?P5Q|');
define('SECURE_AUTH_KEY',  '36u2D?Mbi7`zo&6Z$b6[>Pa*_p&8F4pyM,#m0@1JSP*$F^Vn{ {]s(>g;yL^Hp+>');
define('LOGGED_IN_KEY',    '!e5[E)7S!O3Wyp0!PG%`|(fy{LgZ)Q!j7oFF0Va;0)k3xn1:u-2%QUgJcG3n|:FZ');
define('NONCE_KEY',        'bb,Ss/~RDkyw/x.(BX;FCTifVzRoK@=2>,@JB1Lt4qHpfvWyufm@+vsZN-hxr:FN');
define('AUTH_SALT',        'egaS]fe;YH3 suIFufvL6, kPavv~*C_,G1@I%(X[9shT]/`%/`h3^i}:Oy$`#;E');
define('SECURE_AUTH_SALT', 'xT)52l.B-q3rq9Gm_&3*7esz ub4f`J(lwa66ze:<DK{6ju;?D%!2XGQFBma^t~P');
define('LOGGED_IN_SALT',   '/[DpN]Q-P|vOR+N}tm81]* I3G/|C6/myGY;69*{L.|2+RzRSF`lSw8S3J+;oitr');
define('NONCE_SALT',       'z_QSJ_U+_[4AAFbfA`~[E3lM0QpCAI(+Hun.TZXNF;$q&D75KMKRf!j_.~AyipTu');

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
