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
define( 'DB_NAME', 'gtowshop' );

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
define( 'AUTH_KEY',         '/2/GR4,#@zbwD9rL#2Hk6w*^F/Dx|#A3G:n}jW?R|`KQsfqVT8 emJI%-%hI(p{_' );
define( 'SECURE_AUTH_KEY',  'igq#tU#e}e7}jm0:ik,8dE~VuT!T}duyPN+X[l8J9gAHM =(oa[;hY@o/1D&55$M' );
define( 'LOGGED_IN_KEY',    '_N,LVVd3yq+F -b&d`D(a>$Kf_VcW(dg?BBKn[Y?E0]&Noq=][*I1:9lJukoAoxm' );
define( 'NONCE_KEY',        'ZV}(Bbn^@q~LiE^@$95%)Z/fqz6bB>$M*wt]J[;f|eE<cW-C(jUKt{xk[N{61BUl' );
define( 'AUTH_SALT',        ' gZ1+pE#,23%wjLbyJMi6U]&rq|s<LmFnj~s`#j{60/C^DO!J q<]9Lqq-KDMO/d' );
define( 'SECURE_AUTH_SALT', 'Iw@,~/I9RHO9_:{?i/XO4QjT)O]>~^9|<1y5;|{o0  ,-i*>Hsa!jOh|=$K4 Rwx' );
define( 'LOGGED_IN_SALT',   'gL#A5&Vp*<6)ybFk6*(|~ph`,aL1#Sf@ov`{?/Vgn/L]U+-qEZTEa!*c->3f0s8Z' );
define( 'NONCE_SALT',       'GlqG,H$<f;PtJ8G|[CA(?byk^Go<_-UkbT0J5GUQ`Dy#2Y8Pz4uv8Y=PSfMrNt!L' );

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
