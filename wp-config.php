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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "zopnow_db_v2");
/** MySQL database username */
define('DB_USER', "root");
/** MySQL database password */
define('DB_PASSWORD', "");
/** MySQL hostname */
define('DB_HOST', "localhost");
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

define('FORCE_SSL_ADMIN', true);

define('AUTH_KEY',         'i#0g@T(cCo,-2lIw6~o#sKFt(5M`J.ADS*O6)U/JK2[WZ?SIr5A2D`^0g<EBbz>p');
define('SECURE_AUTH_KEY',  'TN&v9TFK} jW3#Pi0HUQc0]Vee0rLu~5F[|&f{11fCoM }hQL3`azM1g.O{=6ZcL');
define('LOGGED_IN_KEY',    '?w7+R{ZgELLLEaONU!` 6Fn$ZJ5T$T0B]wXJs$$wGx-8Z9K>U}2?&51>gGkg:7[&');
define('NONCE_KEY',        '`JNLbt`UIqBM?L[Vp}.QoZYHB,SF*vbW8_]jG*w3 BEMeuzygS><A0=v)`FHD/<4');
define('AUTH_SALT',        '@F}I~w1fv{e0|y#Sk?H#:N}sNPHn,w/BYP]wp*UQtEsj[mg/&zNcE(:xeJjb+A<R');
define('SECURE_AUTH_SALT', '6y&![Mv6M#ndy_zo:6YwPwb;7IL/yE_fB4F.dbU?Q]o8=%_nsg8&rX^BvRdwsvC4');
define('LOGGED_IN_SALT',   'bL-c$Mn`s_7$vJu~1Ho.}zu6Q^cz:OeM}zMaNdUZZ3~V4&2**M4/{{Plu0AuFq@A');
define('NONCE_SALT',       'k*|gHfL~80}FU^bH{itAdes825_$`s{]wMKD!F|&$k_v0Q]IZj,pPw6)pY3D6.>t');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
   define('ABSPATH', __DIR__ . '/');
}

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
   $_SERVER['HTTPS'] = 'on';
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
