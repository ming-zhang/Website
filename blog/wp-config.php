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
define('DB_NAME', 'm2370658_wpdb');

/** MySQL database username */
define('DB_USER', 'm2370658admin');

/** MySQL database password */
define('DB_PASSWORD', 'cooladmin');

/** MySQL hostname */
define('DB_HOST', 'mysql-m');

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
define('AUTH_KEY',         'T9wOx`Q/?D1h$Derc,~RomZRf|HoDC0y_=E9jo9@i=NRxyE=zu$66Ov&F?XQ|z,7');
define('SECURE_AUTH_KEY',  'kJ74HDLRUq6x`3$KRrNW+ORSrXz!<IxAL^Np7noPIn,oYygw{BmGOW8/@ff!Y3SG');
define('LOGGED_IN_KEY',    'x==8#9ZB~Fu}Uf&vs*.qrLs2i@olqC+hGZ0T+ p5XvgkT6z;a,M;tg4`h)0a{~>3');
define('NONCE_KEY',        'R[Y*][:I-(vR7I>c-08IkcakjFL`AM-?Sp]q37?->!DQ54de4RiOR*O#V[`@6>H?');
define('AUTH_SALT',        '8k7[:>}Rir wz9<IeS_Xr&:BL!p4ityGN%w.[8oGbdA,2jM6Mh>q]Rd:u^<C8TC:');
define('SECURE_AUTH_SALT', '#I:q+OIMa*9.h/57AjjTq-Iws[lSVotR5>EF/|AS[FVl;XL3?5.49-2y{O_+myHC');
define('LOGGED_IN_SALT',   '8)t^;1u6EH1y>YZNXJ:urc&8FKGBj~_D{[3* vK9K#=}=Q_4g4N<y6k_/R1a7tO~');
define('NONCE_SALT',       'lHN*ZjgQI^ogO-G:t(-:yxM70Y|uIpZ5X($yPDWGwRWxeCcL?v(l_gxNC: J`)n3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
