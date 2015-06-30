<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_chepang');

/** MySQL database username */
define('DB_USER', 'mi_developers');

/** MySQL database password */
define('DB_PASSWORD', 'mi_developers');

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
define('AUTH_KEY',         '24@g_Nx;{N9JL?`:%qfU?+#iCb1FyHo=)+@q+93)<#:%&_ER~m8_c!/VyNQTS&D/');
define('SECURE_AUTH_KEY',  'y}Xzcj*y-?-eU&+uIC*NWHgcu_] nn=7#|vJQ<z1ZQd+le]dF0*x!=J|_8|sa|dJ');
define('LOGGED_IN_KEY',    't*/9=%I`)ot{vo}J2&x@5seSh_9X::f,C;-!-nH@UWN=T[TuJ6)+lJ)0L;yy9jv2');
define('NONCE_KEY',        '1WN&,qcyA~8kfIUD[5eXbwl4dLEX;>Q%gi9Q#%)816sdNJ1;WGF(;_E5Q7ka<BR7');
define('AUTH_SALT',        'c8yF&q&x/N3wKJNvKI`&0`+ u4yEq&[f~9Mg_y7}ihw:s)-+-uhZPC5W.Cg3UN:U');
define('SECURE_AUTH_SALT', 'B1b%Y:6H%a^E=6h^oD^6Q!*k>Zcjx/&MUR9c2@8W@f;Z8[]~HTl6kl}int}e$B{9');
define('LOGGED_IN_SALT',   '!t++=!1UV1H?Wd?S*nsEgk+ ca/U]|b(^|#3^J$J@yTP$^vV+dGAM$ni-kQeD{mO');
define('NONCE_SALT',       'Ks@:$B),]~G^w`ak+F+jP)6Rl+[UMXr@&k41g+gFiJv_5zn|*&)*h3RA?KWY%)Z8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_chepang_';

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
