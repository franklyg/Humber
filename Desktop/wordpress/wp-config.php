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
define('DB_NAME', 'gsnf0005');

/** MySQL database username */
define('DB_USER', 'gsnf0005');

/** MySQL database password */
define('DB_PASSWORD', 'Loop4worm');

/** MySQL hostname */
define('DB_HOST', 'mysql.parafx.com');

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
define('AUTH_KEY',         '1|k>(Cm{-tSH6>4F6dMMm+Nk}cPXABo+;m@ Kou1ZJ];H#e2}&CI]$w(ZV(nLo.*');
define('SECURE_AUTH_KEY',  'c}RY{:,-LY[#|a[vKL1f1V9]]f S<^$44n!5D~smR|%nfNL<|GKAzE*a=}f5AROd');
define('LOGGED_IN_KEY',    'Ib]xToyR@z8+7I7&11jc.ib;u!T8cT1j$`(=`^6y22LT0w@puh88AFN:k7V95;yh');
define('NONCE_KEY',        'GqFyT7 ,:J uHNKU 7Ne3,|ULD2-qC:wdnar8BD`d{fcZ,63v@&%jmx-{Vg6Ozbe');
define('AUTH_SALT',        'l{aAuG|?hG;4Hvn>I8K>(I|u&wnQ|KZ]0pR=a]=SAfT/-uf3]q=zNtaR>HQ0*Q7~');
define('SECURE_AUTH_SALT', 'B-RDbW&yUl-yEz63:5]3CqNB4Lk(sse<R#PSKYiIW7jSP4+P7.B?uEl%1PrNQ~=}');
define('LOGGED_IN_SALT',   'HE)|KyC4Y>eN9~5Ew)Zd9fS]-Bi=32u97{((+:pqOR=&k#t1;sG1 VNmkQ6-W&@J');
define('NONCE_SALT',       '(Apvxs,<gP-UQ^]|N,1?[ylC&}i,smjRLU4-+#|e|0/-6/O01;h^y~vymVSvI4;t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_user';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
