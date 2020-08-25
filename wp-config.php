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
define( 'DB_NAME', 'gatewayconsult' );

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
define( 'AUTH_KEY',         'kpPXr0sxa68 Mb=u]7mW$6OQdi%,{oKE<o#YA2A0|qX)VWVDwYwG7tfJ5WKX[>e ' );
define( 'SECURE_AUTH_KEY',  'rs7co<X))MU`|4I7Y{j*uhfT_I$+s{[tgbDn0FnW+>+5a/)$cSoGVj3^%.D|T*[a' );
define( 'LOGGED_IN_KEY',    'SoS<@)#fEbdUOJ+iuz7^/(aWcI$U0*gb_FC=D8R96WXu}yZv^2c6$UnWF-uuX6*V' );
define( 'NONCE_KEY',        'MD6ss@eAo*}T8fO}kmz1dG/)7J.Z~F$xh5|h#K8MSbW[pz~n)m-)a 7{8R-fC0Qp' );
define( 'AUTH_SALT',        '[u`v} P+L:oyOQ1&v3>#*o$8T6AO,ByW7$^VYKeceTnCaWo.Jo1YLnw^(>9ym[P<' );
define( 'SECURE_AUTH_SALT', 'J!e#ydSct8A#$!MdA5vq1o*_o}*80Gvp:N7_(lZl8-K|kmQBqp;u_/UI|PTJ95^~' );
define( 'LOGGED_IN_SALT',   '19[M6+C1d1_Ih:h.pZ)M#gVF@bY<ANHO6%*m3$U8;z;cU^hC?F.J0X[dW>SO@5nF' );
define( 'NONCE_SALT',       'zG~Q-iU}-x#(%eHU$zBE43~m?GMXZ?5Ozrp$@Rl-P{bX^L+kj<?1A=2%X9/IV/We' );

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
