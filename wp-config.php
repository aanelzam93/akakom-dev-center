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
define('DB_NAME', 'adcwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' nNP3QuOX=l^+^y/LQYT ddH-pF2RY+~!AoDbgxV@7}B&5a0ovLyf`N0`^=X?Vm%');
define('SECURE_AUTH_KEY',  'Tl43 EWGO]&h.*/$9I8jY|z6G++&+dAVlGJnRI rOx|vC(p3%{[Kiz^$%C:t>w_O');
define('LOGGED_IN_KEY',    'm!^(y^?9l)o-{+nM<}-4cyL}ye_R|ZcK,^E|X7oh}#n(cC,i;dPY&Y@Rc#xOU>:H');
define('NONCE_KEY',        'pFF7xk#P;nQ0BDG_,-[PT*csprbm?u!/OT~K,CO9&n6qYYuDw!5hjznDVsR+FuK<');
define('AUTH_SALT',        '}=u&uS3,?nn6$_l ?a;MXpsH,+@]dY-k/[+[O |mOPvq: 2l]<^_H|SZ](euFjhO');
define('SECURE_AUTH_SALT', '?|*c+8,|9_}R93aaU>-JxT{Y>@W#q{drT|XjPHVCZ_Hu*j,T`I2}odWq[g@~Q1tt');
define('LOGGED_IN_SALT',   'XVZ,jv.5RKYp*s,SO-1[Ae.Ku.2k4Men*kjH*v2n.%:T1ggd*5I$e6Capn|{<9:r');
define('NONCE_SALT',       'nqAUEy9^ZHVWO56G|Y_%%[o,+%D+dDAo!+u(M`x>L<9]-c$o,VOD~OvSUTy}xsvg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jack_';

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
