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
define( 'DB_NAME', 'welovewebtest86' );

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
define( 'AUTH_KEY',         'ql^x%Fx%Q4/Cz;xOCKT@;TLXg5M@^Eok[r}:SV@t14zhGb0ii!LICvFdG;RbN<3G' );
define( 'SECURE_AUTH_KEY',  'h]4;dRb-UA5snWETf*w$.~E.eXUI`<:+Ofo0@X*VK8YYvU6S6A;|;c_Inx]P`G>$' );
define( 'LOGGED_IN_KEY',    'q)@mdg)eV/3VmKj=-?o`vp6h!`!j_c/-[ Q}bGH5a8@!s6+usKd=u/}fBhu|&b<N' );
define( 'NONCE_KEY',        '~4JK<_<Y| ]r!F460@`8K}2RG|^kf7bdG0HPs!|bN3k:3h#j*1h8Ub7>Zjb99$|7' );
define( 'AUTH_SALT',        '/t:n&[&*_{#zS H>`[IY;h><goAf[3V*Zw~3G@KG.iF~2m9]c``wMm<`3yrw&yyn' );
define( 'SECURE_AUTH_SALT', '/v2xVE3 7)rL_(F}H]Y&ow/!:9#R77y0E?=^&08eru|w,T WRvT^x+8RQ/s)1~Th' );
define( 'LOGGED_IN_SALT',   'Y6,$(B:]zI(&6?.LnS=BwX>v^AtwW|VV }g7@)Zf@jy:;<#Kl@C!)<+-.__N%h=)' );
define( 'NONCE_SALT',       'bCZkQGwxP>*N)v]eg{{>{#w>G@egs>n=<*xfawS)=Z)}JG)ax4q:|c/&)$fGSQ+9' );

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
define( 'WP_DEBUG', true );
define( 'CODE_SNIPPETS_SAFE_MODE', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
