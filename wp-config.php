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
define( 'DB_NAME', 'blogs' );

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
define( 'AUTH_KEY',         'gp<m4FSEQ24]ncr9THN{6!.hEa{VwQ-M u:&zUT9<n2Ca<krMUqe.lEH|:<;PnOS' );
define( 'SECURE_AUTH_KEY',  '?(407]Fh[M?0v,;8GQn8NjOtpiF|.m *AmtPR(CqkDl2QoXb-Ehn$8cbd f(.E9k' );
define( 'LOGGED_IN_KEY',    'DnM@w|i574IZz!HOx:r`Kzb;N9i46A[MpkI!yu8Xd.U9_}a&wnh|rSjJtn5E{IDZ' );
define( 'NONCE_KEY',        'a9Zo/Qi~Jmk~k6Xg{ob:1N3aTSe_Es68W0>1nEFHI3ngthN3Ip4j[eUTec sY>{A' );
define( 'AUTH_SALT',        '+.Q`Cnr# |.LO{%fS}+:R+~S:<F)UDz3F7)KxB)+Pjm%TVb1bKD.VXku;Rjb$J9|' );
define( 'SECURE_AUTH_SALT', 'D9<htJ$S#3A&OsHHsKlgNb}MhRu<`-Na_&tuNp&#uD+i3X|PUl{/)3*B!C7mt@XE' );
define( 'LOGGED_IN_SALT',   'nE:UzunP32X0thUIQ.Sefd!BO$apneX8?bmO*b>^D2n>zWuV088g>r]!t RFu+Hd' );
define( 'NONCE_SALT',       '<%mI;kD1TRhWipG@dYdRK7w$5z,Zn W6T@SC{R}|/%jbff5omA+4;q-@lCNOog_ ' );

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
