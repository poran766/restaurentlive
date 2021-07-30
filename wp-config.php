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
define( 'DB_NAME', 'restaurent_live' );

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
define( 'AUTH_KEY',         'T)h5fC<l7${FFOi#x>c$!>noGM!h9gydCC^*q5vB+5;tZnpo2|nPI*Xf`@yB{_9t' );
define( 'SECURE_AUTH_KEY',  'F)NfeI5MbPQSJLn8p[CVflIVpFdlnjG(epIO@[wm8VgjsxEIV];yK#atbzE^F?s3' );
define( 'LOGGED_IN_KEY',    'bQ2a>19n2E)TH `^v>S=lnb -=ug^CD3fm8CY)%v]qx2](mT.di_IScU/e$S:!h=' );
define( 'NONCE_KEY',        'TZ=f?Sk9s)C2Y|{uE7_vpBg%L^4V(]N1Ji~/jb+%:<WWc{Pw$/edkvoFn:[lJTub' );
define( 'AUTH_SALT',        '.]EZ]A;K=m&0B:ZWVQ-NOeE1#oW+Oyb#rWWMexpa`$TUc^+CWT`]a[E$VcV7t! V' );
define( 'SECURE_AUTH_SALT', 'hwSG<EUUalx~-GMluXFq}$mhtBk`|cnH{p{|D`:Tc*IO3e{f*]Sj)2<0${&,km]$' );
define( 'LOGGED_IN_SALT',   '-.mt3vC*{!r@5>=#ip43/:_O4--$i3&]o+/slG+N1xW;vK(K%NeG}3m:m9d8;_GL' );
define( 'NONCE_SALT',       'sBt,H0ICsoBi)qJ(vcNU7Hs8DX*im:3zyJjUp{QDx0R[G;omZ!I#iJQ^7A]H9d6b' );

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
