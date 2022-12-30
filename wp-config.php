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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'U@xc|Q#[W*6._bzcJ@e;QkiyeH|`tSul@qIl~hZlZ{(Z]7LOj]S(^%Np:Cd(hv$D' );
define( 'SECURE_AUTH_KEY',  'jzRL=_?+P5}YtEZ+s{L~Yz{8{|X JyQz;hhr$V*XABeU(xfp8rkTH x1AFDgs_1{' );
define( 'LOGGED_IN_KEY',    'OL;rqn-i06c8xvgY0C]Fh?o9zmS~V2s8Ym[IDCa).s9U2}fX1aSa%GbX>!`0 >qB' );
define( 'NONCE_KEY',        '^#EiDo{xd-X=V@9wi2/]~Jtny}]gy2wyU2KGwzM=`|B%YB<mR)a0J5Wm;I37:bjS' );
define( 'AUTH_SALT',        'nI3kviI/{tq3@Q?it(?7|:Ou,DAIicD%_LgWI!g|qgoQnUsY3r`;k*w9i8aAP2q|' );
define( 'SECURE_AUTH_SALT', '[g=-(YktoY8LU7!~P<XK2kXc2w6i)f.OA>FX6E5tZ4oD}1pqQA~[OjvRJf}|}XO{' );
define( 'LOGGED_IN_SALT',   'l<BlRTh*m<@=i =n?oBs[E3Wm9pySS/ *^l:^U;N,x)>aW.=+2IU$q|{^?fv@Nn=' );
define( 'NONCE_SALT',       '}|f/n7$[v}l!6z10|haPpd@fxzh@*Q_k4aC(DxWz;e~}y:g|8#,U~_,;sn*P_BIw' );

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
