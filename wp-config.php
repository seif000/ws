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
define( 'DB_NAME', 'ws' );

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
define( 'AUTH_KEY',         'ilj3nABml>qv?`_Zhd8!N$RmM!y!YF&JWw#=UGN8iRsL11!Qh+>bs!4;Ji!cr=;U' );
define( 'SECURE_AUTH_KEY',  '|Sqob,[+*4?YPVzU,[RE*o8HN!a2|CQjXYwiic~_ Q/XviIOq+d@s1/ZD`hpfe- ' );
define( 'LOGGED_IN_KEY',    'V2YIzx!kjt~/D9)^Zs mkc]|OON]cF,|vrNm)r~/s/I98mh@M/q]mJJ!0FrF Nj1' );
define( 'NONCE_KEY',        '5(PR6<N#ye2ocs@SnCm#X?.hPqZdZ%;}w6/M9M9Un2AqRbIF#&[lJ:_@}WnTF#aG' );
define( 'AUTH_SALT',        'u7cD^030KWR!{<-^t|64[~w[8w?C$bIP}rQLb`!cr;P%h_^BNQn0n61a2N;v~L3O' );
define( 'SECURE_AUTH_SALT', '$$Ktg1EEo-NFg><-evCWVC4<QaV`@OSOUqS;z.^w9I6c@A#=g2G}L9mzc0:bWp::' );
define( 'LOGGED_IN_SALT',   '04.dqe0,zt_TzPwfv(IYGej{Kx&>SYUn!ko ca#5EZQQYV}xb<0M72I3 @=|&Cdh' );
define( 'NONCE_SALT',       'm?3<?-a#QJc /:J(q|[oZF?BD/vhpM^oB%}m:C+REu-Ug4xCnjRtONP:>Fd$7vPA' );

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
