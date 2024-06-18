<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'cnpm' );

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
define( 'AUTH_KEY',         '2/W)Q(>p/g]q5z1I`~8/7`:]N1VcDb`t,iluBQ{H/4tuPEJ@6+5CTh!$&1Ou-Nn ' );
define( 'SECURE_AUTH_KEY',  'j]O|X=;|%6-AFu+BM#gGp;SasL3E*%W2BD[qW8j_TB+VO9QK hoFoZEIHI-/y0;m' );
define( 'LOGGED_IN_KEY',    'Tw>Q6,cKYTNh%i?lnSNo$}Ns34~mwIo{xjh yQQo>![JyD;c31V3obceh<-v%PYs' );
define( 'NONCE_KEY',        ' Dv?2!B~rz2o.3e9_L#Ec+HpcV7CO_!ca-]AvNe}sf,?zjr.t`:im% 87#c@6x_n' );
define( 'AUTH_SALT',        'JK-i{#kqq7!|< V?~@*j#E>/T#ZhtVL9]huvSdZ**t&G_9K#wpUqcr~&^ND`3]KL' );
define( 'SECURE_AUTH_SALT', '~>Xe?g:+Gf;9vX)l1Jex)~4okYoCj;ELj8:(eG{Yr:|pNx<V5`~R3IE5hS5Lf3j,' );
define( 'LOGGED_IN_SALT',   '@YM@R>Haq3+Q*!I!1t&tt(G(o(#: 6|bk;pid|CA&%V{%rEp.%20EzdXW^P} tkT' );
define( 'NONCE_SALT',       '$hfYsu>*lJJP,l*V+6mgf+Q!SvX|-w)pJk4&{6_EejxZp`{m`2XwtquKRl|>%qS`' );

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
