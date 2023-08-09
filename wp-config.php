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
define( 'DB_NAME', 'dbp_db' );

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
define( 'AUTH_KEY',         'Zvlig}#4d7Er*I~{t#YzCs>z,wZWSbiLPJ5MY2AdgwyJQ:}arN;@l)B#+fc2}2>i' );
define( 'SECURE_AUTH_KEY',  '6>MP93P/IeS/-v)._.=/%TmYlz^a;{<IGR&ix9Zed@%OE.k][KcJ%A9a?@QfcEyk' );
define( 'LOGGED_IN_KEY',    '!gNgjP6RzBn/[bY+,gx[E] yk16Vilr:IlEupV3D;^hrg_f.uaT|#AmSVrHO>On>' );
define( 'NONCE_KEY',        '5MBf=Y|Y.l^Q}(-HbKZ!~[$Q&JTshmIXe}~DD#wp=Zr=g<Z{6%cqW|,R[:Plu#Wp' );
define( 'AUTH_SALT',        'kIavd5z3j&4F{4E1rxaL4eil&WJ;i|CGfrfH 3/2$(2CHMtj{|o$+z/-I@dhr3+K' );
define( 'SECURE_AUTH_SALT', '#bFNRR#48z_msF+X?[UAv]6:+uK|NM~erA@% $#t5o=`A`*D->HeZ5(NQyBm5%+]' );
define( 'LOGGED_IN_SALT',   '7*:AmI<]-GfIwr5<M #%Vrn0fXp,U/>#Tk#x4xvM[{ MywB[d~Fqu(_Q>.41{U4c' );
define( 'NONCE_SALT',       'O1+fS-/qI$.([+ ZWigy`5WmJTO|PN^L_M5d`fq&XRG5`(j;;C)!i1ZyDQUx8qW^' );

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
