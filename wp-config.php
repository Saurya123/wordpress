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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%Y/!/3sD<)9sc4e%<;^U@7^g!:#{lsdW*(V6,5`G5OT;T?Xd@SvRXl^[TbAa %8x' );
define( 'SECURE_AUTH_KEY',  'b[8O)9:-UUgq:TD}xY1t.BM-CHsn4jsHZw8&y%pO.h0_5zy|%Y*>WA%4!&7Jcg24' );
define( 'LOGGED_IN_KEY',    '$A8:zg-fc1|c1.rsby;86{i~}.TCk-Y&V}O1/]AI%m*6byk8sPW6hrQ$I*Oqz5-@' );
define( 'NONCE_KEY',        'x~BHJ41fv3~{H76Qg:Kap7p,}fBIrPojvT(Ns?84untS+WG~KqgBq:/^N7xx}s)%' );
define( 'AUTH_SALT',        'cGH>oT2^{]?p0A{Gt4vhvRyX-k.F5(krm(8qag!$&.,aDHO*T67Hmwy!`zygdZ=s' );
define( 'SECURE_AUTH_SALT', '#hqu}hweBR|13U:WB#vW&{cyxkQ@lEuE%^x& 8.bYT8BDoZrM.PsnmM$iRr~u(Ry' );
define( 'LOGGED_IN_SALT',   'wiaOZwNs.;zoO<zl#dDx}WflE:DZZ>,KH]rnC0M}^ehV/`}Iav=iOfO}8youlC1|' );
define( 'NONCE_SALT',       '9$L|a-)MH:iA6#zetRy8;alEMZHy/rjS(o|aDg;iBrox,h%UvbG>wUh|M&OsPT]$' );

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
