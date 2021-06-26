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
define( 'DB_NAME', 'Ant' );

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
define( 'AUTH_KEY',         't@mf=*9~7V$lYKYbj0O^8T?0*d[.;J`kJo{SvK5=v;,5M5Rc_D>YW>q3Q&Ja.FfJ' );
define( 'SECURE_AUTH_KEY',  '71di^H21@UKm=ZVU%Ds>?;A25{AXR+nfKhK1X-albi I[)+]5r|(RfG7[O{}$B{u' );
define( 'LOGGED_IN_KEY',    '3[VO-g;[^8qa.$UJv+2Qevgt(mMV#>($WXk4WNGChelika~?{`[OL{pf*6g%Vk30' );
define( 'NONCE_KEY',        '+s_V(~h%``} Uv6/iouaGA=HH]j~$ `[N0.P.+6HBq{SgZTV|r.cS6Pxzm0mdFo-' );
define( 'AUTH_SALT',        '#Rg0K5t}XEwSX<+Uma@VAr]<GxS~t3grz{<_.RyC=fNmUu5htVC6f=I*HH}PKb05' );
define( 'SECURE_AUTH_SALT', 'oZE;ZW{ JZz!xO,Y.p0)Y>xz4YmQYm?]@Di4Usq>aG6-gtgL)n/S8Kp { $~.S(;' );
define( 'LOGGED_IN_SALT',   '+(;[IPrbIO]QjRT)[F/=g/&1RU$lWivxd-$*WSsT6hb|8t)_ylXDd<`0Yvv@pG`J' );
define( 'NONCE_SALT',       '<c5dp`-=;hF|<]Jx56fzJ9H(TAh=cD:ub.iMu1l21=H6$F6$~Vt=hm+s,H,4:x,_' );

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
