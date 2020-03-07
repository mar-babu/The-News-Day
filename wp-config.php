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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         'K<[g+VQAyCQy$XH{z4_8k7]S[daCz=$j$r*;CyKc`(3N2:,@$qJF0wjV&[]WQ7y;' );
define( 'SECURE_AUTH_KEY',  '6N[fF{uHkBs6ihk$+KMbv+LD17G:i2Xs*R6yzHJqwbEZ*2G-0$l/Op9Fg$J V@sX' );
define( 'LOGGED_IN_KEY',    'K|MPxT%5!+d+b|TFXZo_1>E92gO:D =Uk:67w4u0cSD022P[,uKwRj0Kh1+%F~?x' );
define( 'NONCE_KEY',        '}7INaV_(7xRbuek1OQ{K/=`jXOq/5aT2=WS}M/zc[X*;1~^!g4/Iuy6#wt TbIi<' );
define( 'AUTH_SALT',        'Plhe*~bA*L.CV|yc^g^6s`A_rcwdqqyXIeh2/i:Gz]*P*6bs56*J3:3$.gT`Y2mG' );
define( 'SECURE_AUTH_SALT', '5Sn_SrMTo<a%>dpc&U/!$=*0}+h|7>H?f5seszq8u}&:Qsbs] VsAUK7M?E*iJ}n' );
define( 'LOGGED_IN_SALT',   'X5W d*X;/Y&O{De:Re9Jwj&fbY.[>1z/G]]GZ>0ZbtfZ<.iAnSQJxWYXdM2lxz L' );
define( 'NONCE_SALT',       'hB00ic7/JMR*Rq.]/R,hGD}(Mk?;mk+_?%3UuPXhs}?~*BLq V{|2NnKt~j6[h@*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
