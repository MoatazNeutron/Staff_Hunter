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
define( 'DB_NAME', 'gina' );

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
define( 'AUTH_KEY',         '34e/m?1S$Rc63vx.$qju2P&u8}wGm<|h8rY=z]7Ux`+8DOC=t_#/HykfzUC+2vvb' );
define( 'SECURE_AUTH_KEY',  'g$Su6fZIsvnTKBrN!LV>Vk8q))6]=O,cS<#o=-{!;jnp]Q,WGMfbd F,[)h4 h^8' );
define( 'LOGGED_IN_KEY',    '3d.`Bm$f`UkXt|{%A#L9d]Qwvj!qQk=pLa*J@4v9[8QRiq!k{dNt .R]Gt)a liD' );
define( 'NONCE_KEY',        'nuwFH^c?V&6a^[-%b1%Y4rqMT@YJ>M+xfb71oB$wEY${*;dR|/7bGeS9xJ$Q?xm.' );
define( 'AUTH_SALT',        '>YI-AaUN_}QJu}a^G>3`)jk#1/M7GC15m]}E6fAZm|<0qVzMZsErdw~9?-L@Qy)@' );
define( 'SECURE_AUTH_SALT', '@7}$Rrw3lS|VytCE:0M1%.~k1:uTQR&K>]Rd4~g,HA/L;Rk@NN=%7_0c+1<rJ?wZ' );
define( 'LOGGED_IN_SALT',   ']k7I6YwyHBBMP}D2eiD]X3(R]Af0cfTB^E`r!2Z%7$3k-RH.lw2d|f_O:N>I%nU~' );
define( 'NONCE_SALT',       '9{Bc2lvsQ<:=2t.F_jen{h!zvs5(QJ~`8CFabiIo)Zh#tC8rwpfjJwQ#{%S%b/Rs' );

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
