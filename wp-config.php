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
define('DB_NAME', 'isc_project');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'vKveEAnyHJbGGHE8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
//define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~.E(;-$F5-~xgr{!t@0mub>j8oU*vz.}4q-VfSfmU-F|pqlS5kF5Rs=0Se*;s0-U');
define('SECURE_AUTH_KEY',  'P/;4Z~qu%gowi-+9@n0KogH2iGOh^T[H_kDMqyb`Zm37H|{oQ3|$35o9M$OL7Kxm');
define('LOGGED_IN_KEY',    '!.R-zw|O=u7XM=Dd2}ztZDE6.yS+1iC-5SEi$4#:;_ws+yUmEN.mQ*Q+mk73,U~=');
define('NONCE_KEY',        '3 f&Z;$TjTdK]~+]!=61Myl6g~8~0)bC=pDK<f[)/uC}(|+{-R0GiwYNMp$7(}z|');
define('AUTH_SALT',        'QwvKKf!cA-h,N$dK$x@Rs2-#^o+W?h3fN>W2gNsGPU!wHzqTvRO/tC+L|NDrI{V4');
define('SECURE_AUTH_SALT', ',C}73ez/+L[ u.k2UlQ,D(OK6,Bx`P#l+Ht4A I0?yc m`[#-^joB.3FpP~gDqA!');
define('LOGGED_IN_SALT',   'oTZ2TFGrAcgPuZ#A3525GqC2-e51XZM4+7.#oJfl|8kjvvc (:ZMAl],p&M]2L`[');
define('NONCE_SALT',       '^>lyly!u4ac(ud#A7=&b4?/&nK0s+]>^+S.JBVP.Vf+[nd8Q9nb(ltcO$_t=TrPG');

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
