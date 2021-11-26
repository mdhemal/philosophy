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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'philosophy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^mng`wl0VDs^0c{(6})O$0!SEXhed!gG?OqCMk|R;0:SHxsQ4*>F})DB;D4Iie^)' );
define( 'SECURE_AUTH_KEY',  'pAZr7}3|/AENe/XV{Uls+Hjb#]:JYCqx},_4|GI}Wby<akXcs`Jbc&)YHz467fjy' );
define( 'LOGGED_IN_KEY',    'lyIbrvVCmH&nDX:pV_7j^U +h@b6SbEM?Y/>-;R.VJGmOrfz=U18xXvipiO?%I2&' );
define( 'NONCE_KEY',        '`HANEuxk@PQ;8%I dhu`okZ8R1.o,iY GopmML@A=/L]qGL<:[[DNe?FLi-RZozE' );
define( 'AUTH_SALT',        ':)8kIJoVlJB$@[oY27,=dd3/v%gMZvtbrOPMVV9smax#RV:ZDmbbxIA9)ZN,6jo]' );
define( 'SECURE_AUTH_SALT', '^0o5`Z!6Q)qC8|8WVbWn(H|OZK|hvVFynoy`AY+j93MnP;$Te{G(s;SuS|vu`X!0' );
define( 'LOGGED_IN_SALT',   '/dV^*tp*f]b 9tcZ#sSwn,8sKgFb2X~o1SKKB^k$Qsd rH^y wYAuO5;aCRz_/uj' );
define( 'NONCE_SALT',       'eMuIL $]/eN(:B1?HL{h(}c(K_{!b@Sgw;UH*c_a]IOW2^F/Fjf0UoHa]!@$nd+W' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
