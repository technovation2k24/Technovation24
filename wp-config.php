<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'technovation' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         '~].ka;a+(m5[$<ty`g9,70,cS,3$|Z;+8CV;L^jM`<Dr*m20:}o%DWR6Rh-W-1?c' );
define( 'SECURE_AUTH_KEY',  '{EfV}.LtS3 r(mS&#^Pb_J{<4]aEN7O{Ys*ii/1+Fs}{)a4~Q|fK;v/2cHB?zzi-' );
define( 'LOGGED_IN_KEY',    '%26qrhA2v~20zP~g-e+7_1!Z~a@P$x-ZSEi`>.c9ndQ7*[[Ghq&wb>/wcx3&.Ed_' );
define( 'NONCE_KEY',        'n `p}v3Ho+_{>c)6}ggY4[]uu`yHf?RbY:jK6%<6VI-@^4@0-O#]~Yvmpqn*@Bpy' );
define( 'AUTH_SALT',        '~a)x!hZRQJ(/9|,5.$k AmX**a|,u,-7-&+YKUSH>D9fPl,VwR2e2DJGKSuaamtF' );
define( 'SECURE_AUTH_SALT', '?^TG?Yijxf8Yx^GahyOgxX&t:Y?)/>-!*Q1WOy3iwr^n@q$s;M.nEWGZ5LW|3s@a' );
define( 'LOGGED_IN_SALT',   'fYX]Y+e;g_9>&U_vJX&ywIa?CGA#V*vu{h3Y|xQdoT#a?h~I`:j=kduu&R.CN`sA' );
define( 'NONCE_SALT',       'jHLXD=<@}^VXcdTdT{%X^qA2Uj09YD9;~m6tZx8g|=Dj)X[JI|9o;O::,fwMDw+R' );
/**#@-*/
/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';