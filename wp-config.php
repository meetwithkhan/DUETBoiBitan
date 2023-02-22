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
define( 'DB_NAME', 'duetboibitandb' );

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
define( 'AUTH_KEY',         'F6~JpABfMk85t9u0iTNFKooH{uB`.Gug?}V(G]N{O!}8 YOO$^la2$]P0F[E$5ws' );
define( 'SECURE_AUTH_KEY',  '^Loz|.DS9rF)f`Qy&_->:)<lndpQ!Gr+MG,BMfPW-5mb[(Xww9Os, )=a+W&:-b8' );
define( 'LOGGED_IN_KEY',    'oN38_L1vRy#,vf C]krTRd-5s-)9*y[qr;jp1ez`g|x-Ym=7gX,=bBOJ<rA#v)<#' );
define( 'NONCE_KEY',        'L17VbO=|>?95C|*}m*s~+Ne4G[uR4C`#,dyFysbj(]axx9<r&JJ93!Jbx((tdGD_' );
define( 'AUTH_SALT',        'BxEuuyH uS!Pgd.YW,[)Z5PTPX2dKf-hq?$o:-6_!zGv/WnQTwsbw-!%j_86H%f*' );
define( 'SECURE_AUTH_SALT', 'ef?=-LXX jCczA{p/4bs$];O9$(*7-QLN4c8tUG&e^K!U9BJ570D65`|<P%|<xlX' );
define( 'LOGGED_IN_SALT',   '7Fv@((C~Xg_g_-Ovdame@C-w[mNT:ayo$2R~]:M15BkXB~Gk7kgqF#W+W1x(Ybv/' );
define( 'NONCE_SALT',       '>~>U+$a)!+$h^paj_%}@obJNiI}QirYrvFL5o|v/:7@}>ohUsM,K=3>/m=v~-J-(' );

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
