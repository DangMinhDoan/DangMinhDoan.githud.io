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
define( 'DB_NAME', 'minhdoan' );

/** Database username */
define( 'DB_USER', 'minhdoan' );

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
define( 'AUTH_KEY',         'pjAi=jd3t5Uiq0!mZih_X(_sBu~@H<Nq%&#RN>|[Q>D$`Ds=Ij?cTrv:V1-9]LH*' );
define( 'SECURE_AUTH_KEY',  'g&zW?u LCz(~E5Z52N<V={xpCaOn;M_5j*_if~H~gy}(Y,Bq}*LzSBB{;CSu-D+w' );
define( 'LOGGED_IN_KEY',    'cly<u!6eS!>]!Oc[Vmuf}Ih@ ioGOk(%3X~+`{7DTJzF#tnS^PV:!*OtS3)by!,8' );
define( 'NONCE_KEY',        ' #of,n3DMb#qgAw6L#p2${DsxGt#3=cM`Z%v{Ix9x^a(oCq1(Xt>IVYvGye8GTpj' );
define( 'AUTH_SALT',        '$.6sDB9a_q(y*ueS>`P|+V?6B<#E})q5zb#GKkBY@)g.3N;Q.>UArI f{wA#Jp;g' );
define( 'SECURE_AUTH_SALT', 'j=h2Bi`qy*?rAipmsV~`RZnEtJ0XB)pF(66G^oFr9Muw0#iZ>^Ff=0XW4{KuaM*&' );
define( 'LOGGED_IN_SALT',   'C>6bYV9+0ps-*(T>o2[$]G@xS_oB&@$%OxcN`+h]uHt5Q32~d>-w93hp`:#qVo~9' );
define( 'NONCE_SALT',       '4N3XF,]USUHE{XJV!v@<,/J>F.YPT WJHe}@a<UJ|NiVM:~t2 Ul6ngu+q<D,(zh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
