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
define( 'DB_NAME', 'wordpressproject' );

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
define( 'AUTH_KEY',         '`s*CGrgu8=(v}iN;!N]Z!]5;CuNcm9z^a^rmf?lc5H $K}UDjhK;tnyIM|JL}_Q@' );
define( 'SECURE_AUTH_KEY',  '>i/[[@6THz5WSE44$NmZcjT:T7kXHi0boBR)Rbvnwh!>xMf#+|~IUDEJki(7|s~o' );
define( 'LOGGED_IN_KEY',    '&!ZIX=4,  68SM@X;]0.9~{<LU*s]ykE18Jx{p;mk$}p2O[}oWr[v<Jvd9DQkVWc' );
define( 'NONCE_KEY',        'Ol>ve7*QlB-MCh5/2^O@|5}#O@[um@yNS&/HH#j)O+Nm:TNSrLHY`4x8r} cK*yw' );
define( 'AUTH_SALT',        'xp4Th7z:1o*D)eYEF;e946?KY7=^oy?8qJOc jKQWVRIE9bc*$%8O^MIt@VE=5&P' );
define( 'SECURE_AUTH_SALT', 'Aha&:^bR9I_D1sX``+:N=blYUn}Ktq^=  N%}r:O D!jc*/jAb]jT10eqrv@vFKp' );
define( 'LOGGED_IN_SALT',   '1%vIcIt}~3t&Npr 6&&k{Io{QrUO9k8dI+|I#B]{3LOXZZZr8lUP&7fucBg3ot+F' );
define( 'NONCE_SALT',       'XL@0={smC. g_)1TG3,T[!L;$4)8H~6CHM$6S+C6FKB`bsiQ95u3 (xmPEaR%,7/' );

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
