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
define('DB_NAME', 'krishnac_db');

/** MySQL database username */
define('DB_USER', 'krishnac_user');

/** MySQL database password */
define('DB_PASSWORD', 'M*n]Bx)hreRS');

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
define('AUTH_KEY',         'r(O:m<4B}9AjT4EL:UL!pdzXgd!b/SSWPnd2VQWBMHn@Ig6SDoA-2o:r)h|886mW');
define('SECURE_AUTH_KEY',  'Rc!DHKfs<djf;Hg.3MjT!x!+PD! IEm#@l+e9/P_Ip{3OY7:{7@0w, [Nr?[CIKB');
define('LOGGED_IN_KEY',    's]t):_k=q)0`]`[zI7eFo3~}5TrKaPuw.)wG32-i-ZnI~1(7J9lSK3e? H6!(]E;');
define('NONCE_KEY',        'JLAIcV90F#7<5]:X,mI$/^$C+21,2d7?r+u0YC?&N}17wIav!YM+5y4b$h]lj`;0');
define('AUTH_SALT',        'ssKeZOhVDnG<9!}Opp}2i@k94 KB!n>4x<an1seerPn}$DHw.3HHbQIPnL~t8yId');
define('SECURE_AUTH_SALT', 'TH0w<]k?RvoEQQJRM!wh**H7uc lP6OYEWT>E]^rDh4#l1NFccbv8d??H Ahc.dR');
define('LOGGED_IN_SALT',   'ywuGjD74XUE3R2O+/CuIvo,xvZN,nJ<})rZk3*6aUtDfK2ewBmQQT`{&pGfayti3');
define('NONCE_SALT',       '[V6!uzZE%h|akvDF*1NcLpc97`07p)WBjpK3g1B)RCT+4vduoApiI|Pl:z1J]b!7');

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
