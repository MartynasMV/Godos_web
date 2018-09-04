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
define('DB_NAME', 'goda');

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
define('AUTH_KEY',         'A3+ BX{Hu@NP8.%M-gx`>rUlt<A4;W!p?-I|G2C3roHkZ4-.,s~ohZA[C nF47)C');
define('SECURE_AUTH_KEY',  '4c?zR%-y|B{Ytgy[!&&EwEHWe_1Mst,Q[q}a<u;{^re_0KWb]I#pO~WIFz6=([j)');
define('LOGGED_IN_KEY',    '%fF!)C1Gq_hwHLY[hq3O&nhq(:IuW9s|B<CQtVl9#}r#ku)VsN` 9jxb$X$k+XpX');
define('NONCE_KEY',        'wPaEHy5?yE-$0emQs?<VL&zK&pae~+)bQ;}RCcN{8}gxCN7^ qF%%V=_~J/DHm1m');
define('AUTH_SALT',        '[CC]_2Yh]T.4a$i9irY1gK7tO70,Lb{=Fi?D.TEe$E1~bJl+s-A2vYJ6 Jl!OtyI');
define('SECURE_AUTH_SALT', '`^`Rya#!0hI);n(x+Dcj;_*Wp2g=1RK%A|$f/VjfuFmbAD8$6UUo8 )PRKWL!1hr');
define('LOGGED_IN_SALT',   'yWo(N[HK.{fE-j8saxi/F9^!ofT~h%/uNjS`RT? },3D{73`#5pDmSP2Y0}#l F6');
define('NONCE_SALT',       'Sl>`H.Bf5iH}f/y$qx (h~pz$Q=RVGI:xCO5-,!XOq`%/B/Gm-b2^svrl/x;&YE`');

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
