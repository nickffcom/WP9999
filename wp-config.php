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
define( 'DB_NAME', 'HocWP' );

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
define( 'AUTH_KEY',         'tLp!+b)<]H)!EB^Q6N.RQZ=OpyE9hN@ ?LG^$k@ld03=lj_XloJ%9Ou;^|CF4e=]' );
define( 'SECURE_AUTH_KEY',  'l{/}E@|3^C]:+}}4noBi*qpup<vF&1WwaS+~xIE>kH18qpY-eSS]w<mnbsx2l`.#' );
define( 'LOGGED_IN_KEY',    'jFG/vUT&gf8V^;x@1(BU#qV9rE<$]S!/M57] J-Yhw73007xyFam()VZ<+8}<r?n' );
define( 'NONCE_KEY',        '/*<y7is^ECy1_cjD)dXTCeicMxRMJAMXwzUTN#qtT FYTBq,=#gQq.1,Bybi:zl^' );
define( 'AUTH_SALT',        '~S=O#~lOK!jh#FSR6,8]r^^7~QPOChd.Fp4d8J!lpy,S;*MhETNPmRT0}YYqvQc~' );
define( 'SECURE_AUTH_SALT', 'MN_yUWE$?yc`@TbNmh9G75<dX_D|<YXtX?fjO=?Z`Q&1h9?X@TwB>Jc.mIdb@..Q' );
define( 'LOGGED_IN_SALT',   '?+02OZ12[ZmxDOBnHr5g@J8TjE{s(/I6expP>8q>Pn?U%Gbk6&WTeF^!`s&#_gXf' );
define( 'NONCE_SALT',       'km94#qz9zp*&ZNRx61uyQ*O7uD+F#[;Ev~Ruo}q07A2^B^ g|=ApeIuL{3=pJyG]' );

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
