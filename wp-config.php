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
define( 'DB_NAME', 'cnb_recipes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'raYE7lB1UMc9JC9m' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          'JS]G2lF%Rx0m=%0:5W)+Gs2%=@;3J2P(S>-yb(N)m9JI;oB.|9vW0WdcIxe?Hb-R' );
define( 'SECURE_AUTH_KEY',   '`ZymP&c*)m if0*t@1bn%|JAv<&hw6;A/-c:Bf>`faRhg6m& RG;*6_h9>;p!?G#' );
define( 'LOGGED_IN_KEY',     'eav%!x;l2W,c@Z`v+uhX@6ch|1uG)c8>EZguOk7Q:3%tMCc+Kwg<R0a~F@Vlw;gQ' );
define( 'NONCE_KEY',         'T=AB5{=!F;!c;Fj_t8cPBb+2 mune(o?W`%*%J/$>hpQ*BxjQ5H%qaTJ0yDE,GZP' );
define( 'AUTH_SALT',         '+9G>eoi;}!)Vo*seDF`[wFUrT}<X@zR7;Y{HtV Fzzy}Ejl9cla,5/*?E mATI(G' );
define( 'SECURE_AUTH_SALT',  '/P/[T?~Eq#$mhX/}~hk|YmFJO/SfOm*s#+n#Q0M]*(RmAL^^&QZbUI`04HT5&ZEQ' );
define( 'LOGGED_IN_SALT',    '*M[L>AA=W@`m+anZniB46Ohs3Ka`Y@NKn5BsD5kW}R|SodEY2v?w1[r;ao,,zYV0' );
define( 'NONCE_SALT',        '4%c!QdQZW[/7;V]]`/ Ns&)^[OB9AjlkxsSz?#`>J.V$jJ:Wx@Uz,N+l/LFWPW`W' );
define( 'WP_CACHE_KEY_SALT', 'RJ6mG!uW8I?3!:,t}&Xu~6|Q*g$SXp%8xa4M,wn}cc[S|Pbtxc0,.Zqg]9)V*m;>' );


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
