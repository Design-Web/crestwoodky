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
define('DB_NAME', 'C316849_mrtrans');

/** MySQL database username */
define('DB_USER', 'C316849_open');

/** MySQL database password */
define('DB_PASSWORD', 'Open12');

/** MySQL hostname */
define('DB_HOST', 'mysql909.ixwebhosting.com');

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
define('AUTH_KEY',         '`<.)7R`&!_-9 !4C<8[WqooJl/v.s2$-bEtfyjl`4qU%h@C5gC}-!Mmz77tEd*ag');
define('SECURE_AUTH_KEY',  ',q(rvkdq</~ij9L70e&+qgu2NO|U^1V}tSXh!gW>&{>J4+>c8^[z2aOCi4y1lJNN');
define('LOGGED_IN_KEY',    '2WxU$Y7lf>kZ8tZ)l TF|Lv7*,Zx..J4WWqfj.*cr;`KU2hS ug5rj|zba)&Kw!Z');
define('NONCE_KEY',        'AL?kH]{?XJoD^mA]X1H|X?`[Z V)Z^sF,XvY&<X!-{e.sQ8Zh<P!YLVcD;:o8m5v');
define('AUTH_SALT',        '|^l[BOgjJYs1GnW6.&V8-5+skFgL17eMY`Al-t>eQ|uoX|-mV1#-@] (=,!Tk*W5');
define('SECURE_AUTH_SALT', 'x/,@YxQ<712dy0URcUN!!`0g/P.Ws2u}i:0(Vn-a6*:]bdo2*_*Mn;>3 ^ijkP84');
define('LOGGED_IN_SALT',   ')}VS~}&iJ=3-t/Ln ~=^P=rPfX`A()`Kl+&Rwf.)]qw F@v|y`o|*e-Q5$d`k;hU');
define('NONCE_SALT',       'r^^}<W|YD|IA-n!6*|q+}JZ$(WdR{P3m2P7`Xm>R-PjM,3eqt3F*m:uvuyp_ta-D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mrt';

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
