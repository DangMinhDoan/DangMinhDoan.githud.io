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
define( 'DB_NAME', 'minhdoan1' );

/** Database username */
define( 'DB_USER', 'minhdoan1' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'QU71r.b@pYG6$]/cS$ci.Y$4K^KIZ:Hb=oG6G#8B)(6RaA7#e9_ncf>xr$1yJk+}' );
define( 'SECURE_AUTH_KEY',  '@/8}Ym)I-qni7e)d:+ab1ySR7A^oXF6DX^bQY,vEL)m8%eki5<_@+_d=|zZ5?nv!' );
define( 'LOGGED_IN_KEY',    '8_5:a`v`mS )5`0eHlh8^1c[%YnFs$A[G,Nn1t[@b$y`;_5g 1?&#2`s5BnG{(G<' );
define( 'NONCE_KEY',        '}}7XhlQ|Q!Feu@mekPYrb-QfFN=-}:o.30e%CMe0e]|vxjy0Fq^{tHI<2rv#ZnN&' );
define( 'AUTH_SALT',        '[#(T]=eLey;v~)THvq>b}$&}A7q?kZ_4,F;x#DmDB4qC5&EKuhvqm@3*=L?i78@`' );
define( 'SECURE_AUTH_SALT', 'J/H_6X7*wK6dv9>t^MNHoV>3iFnBUshzIz[v*2ENMR8F}l7g{t4{0$)tbc,/[{Wl' );
define( 'LOGGED_IN_SALT',   'lg)RIfk#dHDW5@)^4W1J^k0C#^*,[%_IH,_(!Xh^bGg@39GN*#Y(D9nBykfA<[*e' );
define( 'NONCE_SALT',       '%KZ<H4Og@zDRn L)Xlba}Jp65b$^ayjRf!!^0B0aN]r{<YgG1i-(/@QT!&,}Opvo' );

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
