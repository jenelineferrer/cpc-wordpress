<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'contents' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
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
define('AUTH_KEY',         '*;tr@3{#=TK82I0|UN!z,#vU,.pbtEgA%3`._A|)xs605I,N|OlN2;CicNJH[%oz');
define('SECURE_AUTH_KEY',  'G|]K@,M@w{r{g;zhUvdhRkEBM8I+3M/N&hM;2KY+SK?Kp$2c@&!o`{Q bCo?a+,f');
define('LOGGED_IN_KEY',    '$CTJL+HgDvmF[=cB|w n<=0P3X$OA{[+Ru-pS<$IzS+|}9U,}pg0UjW~A_::|b^s');
define('NONCE_KEY',        '3Cz~_>6pN!-GjA~CR`bqFSeIh+g 3pg]]bOm@&PE,A.>_v.P;O>_4&0]bW$p4,~@');
define('AUTH_SALT',        '^FC_>j%J^NJlP3[Zcz@;6OTeS_81!j+hmPMlu~ykg{=vPqP/QB:Yo7)?KoWke+C@');
define('SECURE_AUTH_SALT', 'f!1g dQzVOI7=i-6}7C3A+]:aoZ#O`JLpGXAq6p! s:ASc6Q[,Vtx()4;DGMk3]&');
define('LOGGED_IN_SALT',   'ua.5WBjX 0EZ)KK%ir5WTu-BX#~Inl>3|rE;X3%5jE8czW2VjhRU&{;N0{K8a*S:');
define('NONCE_SALT',       'x_n/2~Qi5 fCuB}Et3,k}4r))dz[!Ao*5Bz }kGpT=|_!6m~;utwM#e0Jvk:xk60');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
