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
define( 'DB_NAME', 'yusuf.db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U_V*f2~l8&0D>US8! +;)F97Sb)nf(2rrSLz7j7+0o`) V6.v/%7`G&DM^b<u6c8' );
define( 'SECURE_AUTH_KEY',  'BK*g^2ZX$M1z=!XCH1_Db{6?8r~O4qy``)e`=v>z%~3/vLsdo]p9omb,O|,Ee/?^' );
define( 'LOGGED_IN_KEY',    'xx1() !9]qRoUMP$~5]h+~78/t,p8CE$>c[ht%x=+m@0p`|5B-!q?WXJ^S_BL77x' );
define( 'NONCE_KEY',        '95qp2^JOo0]Nnz}KNt{Dzc2iFGSvj>onALjnGDf1iLN:LH.CWo-HB/LVs avUIQC' );
define( 'AUTH_SALT',        'u61C?<.OPK&S_^RLE1raYb#KgTehM#tU1ll1!UP7t:{>dc>5tRNQ?Y-i-`MR%Zf6' );
define( 'SECURE_AUTH_SALT', 'u__s)W*wbjWzL&W^dU~C{+c${d?6~w$DG=Z)G:L*DH R[l^GLSs,9L+oCL3CStM~' );
define( 'LOGGED_IN_SALT',   ']3`ut/jk#T:>f@zO4~5$k@K}UaUrwr5LIPJFhZ70i76ET}Cmgq|Q,fYPUqNnl#VG' );
define( 'NONCE_SALT',       'sp6:i`9n&fQ/Vm;=|)$b6}xr;@Uwt&5KiFd.&&KV4QdFxnG2xv5Y-LU~p#R$ dMW' );

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
