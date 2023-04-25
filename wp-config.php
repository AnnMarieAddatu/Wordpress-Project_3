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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'NHaT7YmD?fLH-=yk6;JI.IpurTv[MQ`KmPS;{#c4[zrQ=ymivkq@t5BZACd[`TN#' );
define( 'SECURE_AUTH_KEY',  'Isac:7v/Bb||ksq|a{?O`q` 8.BT,`QH}Y/lHn#!+zd!/kh g6<Ip UV;(_WWZvm' );
define( 'LOGGED_IN_KEY',    'V9,,OF<YL5p&I1BS!L/DJ8A0h49`J=Y%+3HG@Nh=5~|<4LsbQhrZcLbNPtqYw6>?' );
define( 'NONCE_KEY',        '+T80pf-na{j6<A~WftE(2w{E2qsX)!JhQQ>(b= lh5PF(ms6YMs[qht1JG);FB(b' );
define( 'AUTH_SALT',        'T7FY3V#isBL9#_x)Dgj!5_A0,`<$pH!NA-FraQE6$)91s3h(GXEc+Afl%[f}+9Fk' );
define( 'SECURE_AUTH_SALT', 'T[m}/=Mcb$Pb9O.w<ZrD)%tz,BngZX[B6uK4):8^tCLi>nK5Bu*xjbCy#]j{mG0H' );
define( 'LOGGED_IN_SALT',   ':&qYT<P)D?xKnHiw^}Hl+;q)cA}%Yyc&4RWMNG|)GE}|,8]ykviQ5H;x#&<7ePI[' );
define( 'NONCE_SALT',       'l,&[lXWb11/~.As=?7%xpC(xu0Ym*C(Tc#op#<n$t<5g^5o#Xxj?$T5/ufqmK(:?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
