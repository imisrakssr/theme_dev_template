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
define( 'DB_NAME', 'themedev' );

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
define( 'AUTH_KEY',         '$&j|LuWjW6SW`/^<XMs$hTGV{`h,RD4^_92za9ViOnA=_tgVt< jy0de8/S3U(eK' );
define( 'SECURE_AUTH_KEY',  'IenhN:{-dJuyn/+H77l3>hhfB^H^xvJR<L2C,_/4fRjxO&w1eV,XW@V@]4{k+iDQ' );
define( 'LOGGED_IN_KEY',    '7ur^T&X6MBE>w#LE[rC?Eo]FMRqoFwNNHV6FT2LXTY!6<P^X-;Km_v 4&!)xW5 C' );
define( 'NONCE_KEY',        '[y5tmSj&ZF}KF[I#JnyQY[l{Yx+DC.V|92:#7~0M%VyA5?;Yj@<B`@2rnd*(`LG2' );
define( 'AUTH_SALT',        '<@|XMr.KX8-@H9lUfc0`8i/dSqK>SFQ3Mbp4a,1bOI^v89K$$W%VS(v_]L<{W,pH' );
define( 'SECURE_AUTH_SALT', 'Qh)`^y$gD_XM+1jTf0i~^V+{,tMR`Q7~2mRB$1|K&;AQ@jMz^QwC @8#z~:09W*~' );
define( 'LOGGED_IN_SALT',   'F%YK-7o*T(7vd0]J1>bs@l 5MUpfQ-.5kLvSe{Pdk(P7KONx!(C[6l<<*9fW,,)Y' );
define( 'NONCE_SALT',       '7]e-8UZLhDD`.tudBRNP[v=!&v9QB9Ega}{CO,`@Fyz2&`J(fr/7xsP IyO+h1C]' );

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
