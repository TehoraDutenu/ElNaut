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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'base' );

/** Database username */
define( 'DB_USER', 'zak' );

/** Database password */
define( 'DB_PASSWORD', 'z@kou' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>Z+7E)Y[/=IrA}>[&H#,Jv}qlIB!%u  *Qz-o8mCKJ|n-$PV6DEoZJ|6P[o#dJ.]' );
define( 'SECURE_AUTH_KEY',   'k,9~qgk>WLQ#Ve>iDf~AIsh7=`]rh)HY!:RH<ML=Ze.sM-t56:V.3(D=yaER(tT0' );
define( 'LOGGED_IN_KEY',     '0%z88d&NKqJ]8J%`$ j/4f4Ffr[YAx;*Oo.WAVE<pB$RDKO.`yQLK!6;d8Op?$/?' );
define( 'NONCE_KEY',         'WP_fs5yD<ih^,fK1?Ub^_?3 ^;uLN)o8h)DoCObSZNAi2Xz3yW$u5}0|/K1_m4Mj' );
define( 'AUTH_SALT',         '{~BZ)Go KGS2sLOv9vt45uYn$f&]//UUe-s97wQ}{&[Gf4#8iV!w>wb3CNr<u81:' );
define( 'SECURE_AUTH_SALT',  ';T_rC0.@KLgT/Y]A3}2s/5S%4mb!~*e`$eSKsnk;+}BlP,;x8S )1o0aP?HMX^Hf' );
define( 'LOGGED_IN_SALT',    'l5LRFtuC`R<3^g0[gNQIAi=.B]2&!p7I$FM&!wlUE;gIJQ^j_%[EEmH+A:L)f]RW' );
define( 'NONCE_SALT',        'n1.0e%REy7r[:Czc|vnjrPxC((mJoF 7PK5NhG@$R.^8i7,l?rg+C9CT3z#7nv@|' );
define( 'WP_CACHE_KEY_SALT', 'wdJ_0[b(?o(!l1H=VJq;a%%-pRq/|_s3:+^r=@8r.K/Y[~Z<IB)-9bRs[f-Hj`.L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
