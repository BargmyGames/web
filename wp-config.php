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
define( 'DB_NAME', 'minecraft' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'C8~+&Hc3V0*M6s wL2+Ma[.7fnPzxF<?Q6kg`]FkRkoh,yB[T0GUtJ_e>IW58i)(' );
define( 'SECURE_AUTH_KEY',  '!TZgp[XG++=f5^ar`>CZX+7[i7y#M}YoJ)7E.}3R5F7;.8E:Dp;Gm`_4S(sje}u`' );
define( 'LOGGED_IN_KEY',    ']2}LYfzyFL1$~P{!6X7hlqzA=;L:2&^O_PIm?^O7Y,M:}U8XU{H]D>1tUBx[iZ[q' );
define( 'NONCE_KEY',        'J]qFmU/UB/x !K@v~0O-UB/md%5~)quEUL-]+x3uw3 0{!z_w3{<H` ok2IssKgU' );
define( 'AUTH_SALT',        'm&772K0.28ih,JcDO.sY>|F|VPtC? qnmNWo9^v4N/y%pR;Oy^2bn31^+iq}Ov6u' );
define( 'SECURE_AUTH_SALT', 'W;h#-kq<|!2tWBDtxo9vYGD.dS+>)b+ePSoe@E;Y?6g6?;0.jGu w5}%(>(V!sAL' );
define( 'LOGGED_IN_SALT',   'MeA8Yb0m+ns#<o?m!<g8tWpj<p &mp5yD_u++BAd)mx~FJOTUtm)*<@.X0R$yYhd' );
define( 'NONCE_SALT',       'T%x7!6:G/9Oe7m-ns-q;Dr8nv`HgB80QRO1mGgB+AFKu?&.dW#=oYni4)nMCD,/>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'byir_';

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
