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
define('DB_NAME', 'janik');

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
define('AUTH_KEY',         'CKqER`X<HfL65DV93m>,:I;7KF4&CJ?uvlgal03.S]Ld1=<ah|8Cj+A{Q[6qgWVD');
define('SECURE_AUTH_KEY',  '4@Dr:^M}f;X`,BEO,H_4rBoYNQ jj7 H>m^|v/: i8Q)pu0qyS e=}~9huY=@La3');
define('LOGGED_IN_KEY',    '0D.[o| sDA4E;Nz,&C$^D :AO]3/h[z+l#ycdRQ1=x5%nPVs*$xKkb)_PY4i8/48');
define('NONCE_KEY',        '{4V(?-1_A$6C4;Mp+` v>>mwPgbFvjV=uU!Pjz>1<AB=[Q(A]3:@1[tOLriNlMsb');
define('AUTH_SALT',        '>aM#PJI~JuaEgG6V/Eq%C@`,io5QR~sM6Viss[NyO`8FxGE2pC$pTPxat)uo@fFl');
define('SECURE_AUTH_SALT', '4!_I@=~!0]X;E5=dCDK5fA7`5<Kh`,tnJW~<4/T>tkOk_bBexPSN mOhDr6oa ?Z');
define('LOGGED_IN_SALT',   'd2=5Nt/{pb-QGZv{eu2xdSW(u6&9Cy<(9^~N~D:dd5K%^Af/u5d-`Oqae)&gjT*[');
define('NONCE_SALT',       'zNXtXt{-rb!4bN`!EY}/sL 6R awtY8,SSw3}$eW/1RaXk8{,mcv3r`DIJYGa!T^');

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
