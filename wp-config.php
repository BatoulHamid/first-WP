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
define( 'DB_NAME', 'testwordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@Bmw9Kjsb2D9f_lK' );

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
define( 'AUTH_KEY',         '%$VD9ld._O$~;.o/!RoU2grGfpf214vIFfexn-.iXovY=+GrKj1I3Dbl^SCyE7RX' );
define( 'SECURE_AUTH_KEY',  'kS|{1H8T/J]u&`7V1$B?]s0vOfG[{j6LWHL0AK$@}47+?teTC&=b-}xx=rK,SP{G' );
define( 'LOGGED_IN_KEY',    'y- FSD[1,!ImRb|izy^=;Kj25L?0241K?vkW*uM7|MAU&L:$Gx+-YclIWfl]9vd*' );
define( 'NONCE_KEY',        '&vo3+%gm1;8N%1igOOi_%><;++Jy3<oU|VDFbb68+l5A;CIk|psXZ$#2~btrQn5Y' );
define( 'AUTH_SALT',        'EL<X>AOpadC~646U)y/K.*j;J`I[7=g.;TQ7Y}Y|_@<Cx0M:lu1NV2F/9>w$_#z]' );
define( 'SECURE_AUTH_SALT', 'ct_+3L 3bp#6Fd~F_<{vYW>kH}f!+ffH1z4 TZ.N+LIw?a{f6ZfzBTwlvdcggD(^' );
define( 'LOGGED_IN_SALT',   'Aa;Vx}`a5H]*9a5#*qo24wyEO*erTY:Rq[`%nKVWlfww[zsoe$<G{ti*8t`|b(lT' );
define( 'NONCE_SALT',       'r Cj|6Ga~(~F6V?ET@D<=Upa%8>=_6JB2$cP60;h#cu*]L!KYAh6nu(xtOjKZ}Ml' );

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
