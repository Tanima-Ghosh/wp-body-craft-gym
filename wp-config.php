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
define( 'DB_NAME', 'practiceElementor' );

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
define( 'AUTH_KEY',         'wQyFD5Fx3Cc)l^B`)xyM9mYsJG{KvF<2KAgT<:0YQ][ wI9#hko42T,mje._nIk5' );
define( 'SECURE_AUTH_KEY',  ':QYf2DX177}]MbMks*Zqc>o?0tD`53pI4sU9%-RM62VIPRQ#q{U,%=u;TA4 6<t#' );
define( 'LOGGED_IN_KEY',    '`MzM*^_*Aq)HS-dSPv:L:wLu8W^|.<*I^#772PBSOJ/eqt^{sp^k<s.)@NAUisMo' );
define( 'NONCE_KEY',        '0/)aO/i{o8K~HsB{!?MbIiM1DrQ<:z{:m~sL)Q])~xY00&aQTd}Lz{DA;_UOKICh' );
define( 'AUTH_SALT',        'ghLW^zVk*;OS4S<bT,!qP{T/bK#2!yK86A@r0W UtD.$*J35:Zz?6vh//^F,V73C' );
define( 'SECURE_AUTH_SALT', 'T7T(F,y6RWM8yKVC((Ngq-Z8c9e_z`k4$+nIV4{b!.J*xkgi3(jls`nz%.Hm}evA' );
define( 'LOGGED_IN_SALT',   'LGoh+VK(W~IQ&]s_Ypjg.pm-/=,K)P=/);*cKA&-#43@ge**Ml.2V2{8#h!?;P(9' );
define( 'NONCE_SALT',       '/[$]%+G5w)2LhW]iu!a;f_D0<luwgn4.6w:q-01. B9z&LxHb}Xn`!Mwfo0X5mXY' );

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
