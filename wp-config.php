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
define( 'DB_NAME', 'mobile-show-room' );

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
define( 'AUTH_KEY',         'hj5s)Jm%@$8W(5AlZT`9%wwCg+`}CH_4+UXt2bei& vJ e4^Dfk?ZU^kbVTANqe,' );
define( 'SECURE_AUTH_KEY',  'O$NSZ,JfYDdd, %Py>7Q/(A}3S2G]-4NS^z)9q~5)pX_qPcSQv~7G CE|bb/qX:*' );
define( 'LOGGED_IN_KEY',    'hY}%:::|:;g:!ES=>{oabc;5]A?<!EOHbQ:Nzt {z@*&.CkNJEB>aNDqB8M9g>5E' );
define( 'NONCE_KEY',        'T NXZ$yyj:L.iC)@:tvdM#5m qqZx)vnq0[Tv0_VY0:CIkU[ ]rzwC[M~F/0v8:e' );
define( 'AUTH_SALT',        '.RWGO%^2>Mf3b>AEM/9<&Zv4m`vC@KDch.udN|2~;6Av{ps>fe~_-%yy&#l*;)bZ' );
define( 'SECURE_AUTH_SALT', 'a>(YW^;%{67,E`BwA:UzJ#=DjT#D`91{gq!fWrQUN%SJoF]WbFprQ~eJ7L`N_Npm' );
define( 'LOGGED_IN_SALT',   '[^}g+9Gw3wosKJ[MyEBC`tbLf&YjUPJ^`5%{k$[7!{qOVrD6T-Deoqt1LO%vu~>1' );
define( 'NONCE_SALT',       'UHy~*hl_q_&ae_#?ltII w}1VZON/6l^FrD+nLVt4/$ mZ2erpiqa.Fi0$Gtz&%7' );

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
