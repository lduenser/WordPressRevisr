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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1N%j<AM[R?CIL`]Ti2;5%5rQ5k#$R8?*9pYhlyJ_%>>E}#F1|1|f^[wD/Gi<Exd3');
define('SECURE_AUTH_KEY',  '$k?|d4b9-sd{C7&kE%9%#:KGWKesGmZrf+jN[|h8]%gG1Lkff<3FmUo9=|RDm}gv');
define('LOGGED_IN_KEY',    'r-ExxM0d1 |aS+&K}Ig37OMonC|8$-lb6D-.6d~NJcO=F?NuLVzrbI<}}1}(+t[9');
define('NONCE_KEY',        'x|[[bQy/e3Tq`8FI<5g1Si{eg({WFGIG=o?1jkpb3TP8mBOCM`~QR ZGT-g||w`W');
define('AUTH_SALT',        'Nq.^8ZE.USw|JkI[[g3IiXvqVb}lB`[l9aW&%9,u/IR^rqUT}X,}9&69MZg DNxW');
define('SECURE_AUTH_SALT', 'qiZ99:zd!H?Rep0@_N6V)f4]^OEDy,J)guSv2~)(RO*9(+^CJqn(q$N&;^]+{*`-');
define('LOGGED_IN_SALT',   '@n]:-N|D%_~,eYw$=I!s{g;Rp |Y>0mc]AH`{YrK[@$%7j8u$r-{1MZwQ8@qg^sW');
define('NONCE_SALT',       'g_rv{w]m4qj,o dx|p_8^JC]HN=X+af5x>8c%R_kUKrzG|bhCz6w|g]4#Kd-=O~]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_revisr_db_';

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
