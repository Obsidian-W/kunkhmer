<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */


define('WP_HOME', 'http://localhost/kunkhmer');
define('WP_SITEURL', 'http://localhost/kunkhmer');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kunkhmer' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
if ( file_exists( __DIR__ . '/wp-config-local.php' ) ) {
    include __DIR__ . '/wp-config-local.php';
}

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WCG?X9)]~1atTt@NhI&+E7{f%P+q}~Rtp2j7e#:5t>S.q!;<7sU;rdPT+@N@qP5~');
define('SECURE_AUTH_KEY',  'yjGg$1VO`%F0lRG5LY3m[{gX.fBitJR!o[oETc w`&d>]o ,glCqVj`.{th&Os<Q');
define('LOGGED_IN_KEY',    '-ovXNt>bnch^Rf]~?+{ODc|StS!P`{_.ga<2/1LV9*4+t+NF@$t+{~O(j[}L+%Y4');
define('NONCE_KEY',        '|<bUL3;{ c;R`{iJ,jqU0y))^q)KwwNx9C$!@M_[G:,h@;xo_GlW9z.,qYT?:h:p');
define('AUTH_SALT',        '|gI:1|`ExVLbW`gC6QDU4r18TkioaI(@e{Pc~5;$.zE/=z`IWZJAPA)|kmjLpJC}');
define('SECURE_AUTH_SALT', 'y|ce;xH-Ml?-]Zz>eAw~+:OL|qi[|JOs}RWN0ujjXH&vjI+&EeNf3n<|z`apK_h4');
define('LOGGED_IN_SALT',   'F<}I6-MP}7@m -z_GEwTe| ^nw28s@V}IQu!0=ph2,/O|ff9E?wxauKQzWsox]TM');
define('NONCE_SALT',       '+a o!#1](*,Kje^FcH1tCf[P&6q9`$H*9g$M3;>=1mjg3XK:D@qLpV@ciN58yQVF');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
