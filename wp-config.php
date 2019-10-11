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
define('DB_NAME', 'bimbel');

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
define('AUTH_KEY',         'Mf<U-{f$p4+?1&jV{i24Z=@<&kw=4JdQo]mY&3V|50=N(c/Dpm(5JmR=4e`7IQIY');
define('SECURE_AUTH_KEY',  'UUtPik:k+etlX#w1 <(B{TZ+[bFKX%elr3,laC0WjYP5g^56N~nK(NJ*YI;#y@I1');
define('LOGGED_IN_KEY',    'JRg<O?9eQ({N*9nN[0LiZw4C]u-76!DuHaF>GXN56QBxg6e7 RhVrsM72Vfw{(`x');
define('NONCE_KEY',        '+<vNqAo.+j`5|XBkA=7Elqqjq<?SF$lE8h4skhUKPFtQcEV!%al*9vf+G1-!vru]');
define('AUTH_SALT',        'Nj)YJ0t:s34tU*%H#Q!}%Sgt6F/6/_R.u<(#EFYt1ey^!(RD%^??qz4qaPIO_W4H');
define('SECURE_AUTH_SALT', 'W9muqc:WJZc^zKMI NNP:zUnbbMkc_g%;=fEwh*wJu&1RJN!0VlEGH/mJ%55X^G;');
define('LOGGED_IN_SALT',   'Tw,&Q8ty%W=,9Gw~2&kN?v[,BGc}|}bN1?aP.Tz]d%<LqKcvG|ML+A[z8$k>BhVT');
define('NONCE_SALT',       'Gt]v-clmA@P_4ot/D)$5ulbYAhC7A/wH$lS3#pKAu%2:)M4Ozxd?,3X=h[+b,Ox&');

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
