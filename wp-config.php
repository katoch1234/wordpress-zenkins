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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'HappyDay$2024' );

/** Database hostname */
define( 'DB_HOST', '35.193.105.139' );

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
define( 'AUTH_KEY',         '<is4[ql;Qg|u{D7zej!mF@UpNRPrFhF=J?GYU2{}z<qJ.Y|p,G/PiA)w;%8Ndj0>' );
define( 'SECURE_AUTH_KEY',  '$3s{eZ5Zcda!:S4G*4m/?_?1lu6gnwhsnC^FK[x)R/~Zo4FLSpkYC*0;nL3{.2 ;' );
define( 'LOGGED_IN_KEY',    '[bJ{v/f(Dnl~&UsAqwiqX3d[5mnksI/E`O6P`LI&!1D[GQ=#<oe]UYVNDybAK1s)' );
define( 'NONCE_KEY',        '9,O[Bw|65/2Qd8x 1O,4$!{[O6t5>ryabwHd(y5?0yW8QBNO8hZY<R*jN-juB8wX' );
define( 'AUTH_SALT',        '$/DB1/:[>n(a=}#<o w``QwkK&+N9rp6p2w>w7t#my!ld2;PiK6&nH0<ez_b(0c|' );
define( 'SECURE_AUTH_SALT', 'EH6tb336T><)Myp0Rmo[>+1TkGSvzs40Z]4vcofRPEMoc*,r[5b1:p!Z{XZP81gG' );
define( 'LOGGED_IN_SALT',   '<&(2Y0Cz.^l/@-(l&X_sz?~*K]h5~N}/|lhRasS/RJv4.R{@yF{7!}oo1OlT1c,4' );
define( 'NONCE_SALT',       'QXn-<8@5,p*Ae]eqYDPApxUT{;R$c<ZX{8sq(uHa7DXcZgLa36>z?gWgQHfJ$dNC' );

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
