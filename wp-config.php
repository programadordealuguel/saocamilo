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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saocamilo' );

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
define( 'AUTH_KEY',         'Vs?*+*KSV-siFr3?o|gYnf6R.pa5PH<^<fGGiPfT6a$hX[xSy(QbN!C46yQW9ba?' );
define( 'SECURE_AUTH_KEY',  'v}@)*L{1Q%a>T*_vp-eU>2Z nzHL|T4tp)j[i|jKqNjzQ%E*kQo^$B)zcpplj5fB' );
define( 'LOGGED_IN_KEY',    '5B)nOy}3g:6uJh10!YB5`TVbh)!9[c{mVEJ&R<E~c^z0=(FvIH],p4k3Oq1/nc3O' );
define( 'NONCE_KEY',        '!1slbMkD,ja E#Jz<3m{-8,xYRCIzpvE61,%+*W/jK0>-9E=>wlUS!)- g :lT(-' );
define( 'AUTH_SALT',        'Kk81Ckmj]$ 5V[<;WcK>8t@8_u F%<wx[sS6{:e.W*i!IR^Y89xE?kEb8(BZcYHR' );
define( 'SECURE_AUTH_SALT', 'Cgyia~JLt(>uF:9E CtaA{o92Yu4ZpCebfC@ezg}Gd~eAyk&LgT9H.5Tfp7FOk5;' );
define( 'LOGGED_IN_SALT',   'H Je>^ ^fna&&n3g+6 A0U*iIETIR`@ 6uQ7w8]KW)]J*Mj_ *X!y_<^]cIlWyDx' );
define( 'NONCE_SALT',       '/8a+m_Z%uF3o3C~FJ+lI[YZTHu(z2!1zmWs|80jM+)>Sjf6mn.VX%ESF K[oya.Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'pdawp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
