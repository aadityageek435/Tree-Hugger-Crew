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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tree-hugger-crew' );

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
define( 'AUTH_KEY',         'F)jcFD-N>CfrJMM F!AO{5wjGCuO_g#%-<)[mo+Z*8COwN3vbxuV%kxk6;Kef!Fw' );
define( 'SECURE_AUTH_KEY',  'L.xe.h_<kA>)[$^e1]xmHfJOvKa6f5lM~f=P,LZM/nyfBfaZ6<RU)^s?D*kB[RGn' );
define( 'LOGGED_IN_KEY',    '%,CVKQinSkJ>_^ >J~:2(~D:+m8]9+2atFvWchCi/$d!{U/iEX@*sk-n`l9*YN5F' );
define( 'NONCE_KEY',        '0L$A!Zjp)+,BLW[eCc3]KI2)}xADl^&{UV;hiC?fNo!bx;EF<jk~(Z%gu[7|{NiY' );
define( 'AUTH_SALT',        'zni$MsCnyg]47u)^{|C3Cp*mgaCH5u9{3_2_a AiZW%*q^R^7[^^^9r1*8B5>m:J' );
define( 'SECURE_AUTH_SALT', 'O<oKfI&O+vX9>QF.u(*k-~KD6Y:gbKY;cxBA]qLLK8QtxQu/|gOuZ;A/}ZRPBd@#' );
define( 'LOGGED_IN_SALT',   'yheJdR3zN98pTYg/(]MWd;xk!U57uVbkQptenu4})b2={W0AjTwnWd-4Z=E%$T f' );
define( 'NONCE_SALT',       'TT*1s/R E` y}P/C7QvH|Z#w1L]B)oT9Ti)hzY*zRjD9XlO7K.E0H&3!CiCp_XG&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
