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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YKu0_n3UvO:&OxD-15wOd}rBXw4WS+*4=#hKEIe/&++ 4lGZpAs0}1&30Q!utI=@' );
define( 'SECURE_AUTH_KEY',  '@yz%%1O<P4vXw^%(zu[}xg86&3R,}L//[Po6 afGTz#qHvb5QD.c8kKgc6kKi|.(' );
define( 'LOGGED_IN_KEY',    '!$0iR^[Bcdf?qVdOFLE**2sb#cH:4)USI#}ODOuW1!G0S^)mkpuO.CQ668UNt<Qy' );
define( 'NONCE_KEY',        'c 3NbG&+dn3#b2GVH`4?0(k+@J[dD>keN9,kOrkQ$8V4KF0MzbOKu(C-xE0+Mm/r' );
define( 'AUTH_SALT',        '%E0GZozE/;*p!%_znx_66}mUs@fu`hnXOs-`n__{V4-,#|5Bi06X(yXhVP0kHJ1&' );
define( 'SECURE_AUTH_SALT', 'fzCqVMG7S0F?AYG4F;<;qi:o,?]W:myR&1[BA&NJ2zL<LYp)9,7<#gp4aKKTBa$_' );
define( 'LOGGED_IN_SALT',   'X^*y@/2h^(rQBO~#I~s*{tfpGVQr)nj#TV5,{B<$bM$42Qgq?EASS~IYuK.L+3g~' );
define( 'NONCE_SALT',       'CtgZqG!D$5:f~a1`dp~-_/YZ:@[jz,Nvw5Y@~a[M]s&RdmG(OCreb$:u|3km9j+t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
