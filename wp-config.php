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
define('DB_NAME', 'lpTelematics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         ':r{nWDS|ZuX0ig)Zkr|MN~k?^aJT!M+hP r41t;m`qGUobjejJ@(V~ucptIN0j>N');
define('SECURE_AUTH_KEY',  'f5qd9K^[=cZ`=lU*VOE8w}.%2C.[-$AjxJjWF}qq+3KbmL~,,_Jn&3PnBiVf|(|T');
define('LOGGED_IN_KEY',    '5IyD7QA+wYS{?MD:ACnC.m7k)+rb/Uw&X5}rV-wZH:6$!+z74*Zu}0>..yY:zbp#');
define('NONCE_KEY',        '}aKM)8|~;yrneP$@X&W9Z`TJTdiWxAIIdL^Qnn+$TcmYLn^o+{0m>:9V9Rr%p) W');
define('AUTH_SALT',        '[pq)|1z+/dol]3+[}ukz54C3<lg;Gqn7E0G+{(E(Sb}]8SP)@9f B=$F}biR[Gl+');
define('SECURE_AUTH_SALT', '^|){7JE`BKk!_Cqr)J:?:p|/0xX}xW-g/K_x_B4*}l)ffq,6r~y>4d0?TBw}{B%8');
define('LOGGED_IN_SALT',   'y#sy/xe|r(Yt^OR-l<r(:9UG--8GA>~sof^mjN>[+|PG|I}F81pUr 3aL.aYTpp&');
define('NONCE_SALT',       'xEN 6/NV?YmPKy-rhH>a_idE94UawM[,DH~Zwg^{K7/J[;xaQSGs]:ILT[D#i8_-');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/telematics-lp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
