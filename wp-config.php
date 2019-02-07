<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'tadiran_db');

/** MySQL database username */
define('DB_USER', 'tadiran@tadiranmysql');

/** MySQL database password */
define('DB_PASSWORD', 'TaTe%542');

/** MySQL hostname */
define('DB_HOST', 'tadiranmysql.mysql.database.azure.com');

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
define('AUTH_KEY',         'uI){^K{91~(;z+N{,`wZVE_g9JInZ3#.>_}3,,}QHyhC<9.~RuN^Fxo &S@-USzk');
define('SECURE_AUTH_KEY',  'OfcJcX+N{Q._ArhxH&CId WG0%iVnmkYo]inxWFy($nyARe!wRXqeZtum7V/TlH2');
define('LOGGED_IN_KEY',    '@ Xz}iOiJPH&|^h!(l0wIX:#{S[Pbsz%U*Dr}&3MK3V:PR E3=QP@8_P_ItOkRIX');
define('NONCE_KEY',        'jK[k|*%R,chom/D%G[1ty#~CsT!Ki/>vA/2v?LN8H/xL|YMq`nR>,tUr&)WsZ)H%');
define('AUTH_SALT',        'VVMhRFl/wiV(g}h^Y+IV M4].{.1R$L!k;Z&&i}=0|]+qX xs,.d(+4e3MSn7MAi');
define('SECURE_AUTH_SALT', 'SiUcCme9<Gd?uWA]RGH[4 yM#L<hxRyJG-znpy_&In2ksZSJPF7}ZV>q.C|{L:NI');
define('LOGGED_IN_SALT',   '$?U9O:y]dseV^{EpTt6%Ma,}7No@1d)G[cFShcor7xG21OFSYBp9|ycG@0DOm+9v');
define('NONCE_SALT',       'ZgoZe{9hdL?_~^DOpq~n+liMlIHn`}H&N`5VLjm6a)#s1MJ-X$_eS[(/v{@;XCIj');

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
define( 'WP_POST_REVISIONS', 3 );

/*CF7 remove p*/
define( 'WPCF7_AUTOP', false );
define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
