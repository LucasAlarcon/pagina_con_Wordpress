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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'curso_php_wordpress_instalacion' );

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
define( 'AUTH_KEY',         'T}/%PR*bo$JCk2d17T*9*Uy@(8 0)Fh)Me^T#d (l,Q-/Mxk<-To?5Xt4_rAw#uq' );
define( 'SECURE_AUTH_KEY',  'qovq!_s>(dk4`LJ?_0]g%5<]DCP?g6}RDLf_d&adpagzQv;lZMBWr0_?rFf#x5c4' );
define( 'LOGGED_IN_KEY',    '7bkov<OU)s`%hzrHR 73$j%2R??~4r?@!;5f3?!Wm~;;;C+.4RI,x x9fw<ksF~8' );
define( 'NONCE_KEY',        'uE482wJeuF?K6To^c]L%{%:^d43zQ[!n$1srl5&Zuy4i{>,@@P{pe=kxpRFAIM`A' );
define( 'AUTH_SALT',        'WGEO(!7-<cB@8#zIbh,S^{^6OM,mc(xty3=UsvzF{dy8:Hu5odZ(T=S9Ru$tU|_]' );
define( 'SECURE_AUTH_SALT', '-l4,Fo<@Vb[leduDNmeHH~j_/Fpo8~>%yl@8pR8(sklpX<~Qvh)QZ%p[p:*(IpML' );
define( 'LOGGED_IN_SALT',   '[}DGa?|w!#:.r%&,ufuUL2)bb33]|FB9+NY#NZ?Qf/;lU3+_uZqAbowXO]NRm?~O' );
define( 'NONCE_SALT',       'mWxED8A|$HB:.LSq]f.)t33>vNtsVOJTnSfv$$M$f%w6V##<`IQa|M:bITNRBMOR' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
