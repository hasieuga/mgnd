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
define('DB_NAME', 'mgndwp');

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
define('AUTH_KEY',         'pt[uvM,ygq{iNa7%g>cb1.!8/6*ck&lszBGQG,k_WDuTv6:3*4G4&&+0NKl+Y^gT');
define('SECURE_AUTH_KEY',  'v$2vY%oAx6^1CiE<6wh-k-%2B2MgbBWFM?Vnl#NMxAA&E%+6wV%wr!P5|4.mY7;!');
define('LOGGED_IN_KEY',    'xG-(<v8<q*[Cz&{j(;NI5`c2zP#nONb$yOVIxk&pxSKoF/j A[jztA__`XD9.>0#');
define('NONCE_KEY',        'Zn0e%F!gNZR3GPs%4Bd!~@5/:MG}R^/$N;J1!3qL#;eTjhs^rP!]s$vabwrR~+V3');
define('AUTH_SALT',        'Vo&cUgi5Gu<arB|[rN|;^Lr{K+Y]X>-JD::>X[N&C3/g0&o8/sy*]d5TDpIM+p0o');
define('SECURE_AUTH_SALT', 'FgF.6.Gr|W%_H~ ijE*58C3WmJI^2.}.h<PL#mD<x$kuaMiz#)|jq)hc(t=+2m!(');
define('LOGGED_IN_SALT',   'J2P)_5kZ,Zhy]qN,;swxYHgwJV&<XeoU<VdViJgWtm-)U:bifUDNssW%CA.rdid>');
define('NONCE_SALT',       '#M=O;onvZ%%*{* ~eY+i }^g6yYPrMOq3Phew]>,=}dNd@`mySB]Q?_LF`km}HDL');

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
