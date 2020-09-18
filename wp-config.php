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
define( 'DB_NAME', 'wordpress-tim' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         '<mJdKkkJJvp<nS`!T0&Qs^D{L-y`jrxRSHiQ-A8[jCi_(C^CWQ]7/AYSL$A$8@u%' );
define( 'SECURE_AUTH_KEY',  'Uufy1_#@kYcWHl~BkUtyr-x&v]Dp}XU?AK]!:;q(tAkc&Q!pu!^0Ujeuf3JL8Kf;' );
define( 'LOGGED_IN_KEY',    '/$4iN!@T[|E_mGEVP3$(~h<cb-e)IZq$f_Nt  ?rc9 f@F>}(+`oDzP-w9X2>+SP' );
define( 'NONCE_KEY',        '*~!TA^idRShV/LQRL.dl,coFQL&t7r;b-{7YcZ%Dv#*/q_u/9yDsN1|j>i;jwQbf' );
define( 'AUTH_SALT',        'PQ8bKeJ7H6Yz]$S{q_W,/7}PjWn_eIgvXNo-0?*%=t<0EP2CBbBQPJSe4<:TD-A|' );
define( 'SECURE_AUTH_SALT', 'CQ}.n:u@3M?i}34,-vhfzRZ4F.d!|sw[u1,}j:yfUpy}fEa.H;6VF%SWyie]c|[(' );
define( 'LOGGED_IN_SALT',   'nzOcu?w@nO>$wjSlH{ZkUdvHSC)|3<Pm9QwU3J=W8OU-IhRSW#mn4|[!.W)eRH?q' );
define( 'NONCE_SALT',       '}?k7~3_xG0%w5Xau v-7Mvr$/l.K-!.3t>1fuyz)#mUz(L<@VHc9 3>h)@<.l`Vx' );

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
