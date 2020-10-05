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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myproject' );

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
define( 'AUTH_KEY',         '|X#J0}^`zBC*}Z8`g@]_aS}oKqYd7+rse73JZzR[.VQA{tvTZ9tc]qX%qc1Ugi;P' );
define( 'SECURE_AUTH_KEY',  'Un QorvkJ$nr`uW)JyR]UF&3je{(udCfR*Xc4q/d:q@EuN,1mLP,}(`SXs}A2z{ ' );
define( 'LOGGED_IN_KEY',    '_q(#1;Y*da0Gs<<oYXm0r7Zi)oQ1&(g2}KV|TyOIiD8r8xQi-t?p+8x}<x sn]b{' );
define( 'NONCE_KEY',        'J+A~c;H46-3bY.%)BD;O(@F3!yQYiY}k)?e]?b:gmr-c[.3B}$=sZ+,?/%AffBH<' );
define( 'AUTH_SALT',        'oQA%6Ryu}C29}pv9=*<~?Po1)v-}Ge8e8tlBhSWBE.+@sv2WX25LteSJgCw&6V:q' );
define( 'SECURE_AUTH_SALT', 'G$O^({xC/w1dKo1ECS^vj~A1I:<VHn_3@ kY]y| l(oUmlHjc oCM7d^~&f}H.G?' );
define( 'LOGGED_IN_SALT',   'f:e#3)OCyQ9d/AJ5HlQ@xEb<VV9aEa[^1ueG*]-K;TfKwUx)mc/%P=08T4^n/_nl' );
define( 'NONCE_SALT',       'r`#V3SG!P,!{9X8t}&rC?LQRY y,Ia?rD0u^YT7CW,e:<T|G!<<uX,FOTsg7Uo-s' );
define( 'JETPACK_DEV_DEBUG', true );
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
