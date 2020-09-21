<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'tanishq_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W]6;=i8^}ZPopd]ej]_dpXuZXO0ExEa]EvwV%xVv.~OPmhFamxE!*);vmf%X#5/@' );
define( 'SECURE_AUTH_KEY',  '(clJ85sy3BCZR0A|@zjs>YD }S_D6Q!}UjD Y55!f[/eWS/}sH<;T)S/^ZE#ga*=' );
define( 'LOGGED_IN_KEY',    '7k/(J@RvON)ws_bRl+*SMl,IVF!XYoS}PyFF&UIJ+&f)YH9/=@A=&HaF^dh1TYQU' );
define( 'NONCE_KEY',        '0.^a~Q5A~INnxNu:^7oP~oQ4wN5j5oW9L#3*E#|p:z9h)T]`Di:<:#GsNk~j,K5t' );
define( 'AUTH_SALT',        '56{~$6TcA9%:0/%u6BL0R ?-W;@dURE3hGeG-/q;!vnyGrozcW:x+q;8+bRB$3C7' );
define( 'SECURE_AUTH_SALT', 'O}(r^2!1{}oJMTa5p@ap}:^MW;fWJ` ePZ~M!K%Y#ohc8,&`A*a&SU>%pM5~_5<;' );
define( 'LOGGED_IN_SALT',   '<+h@NDK^5_$w!v|lo9XtFLu&I>[-XE<!cV^e`FN/U8.Kkjc0]j!d(XQ9 yjG/-iq' );
define( 'NONCE_SALT',       'JWrJ?H1-f9%Ff!|?H`ch35{>K]<V|=`=8XvHms6=ftjU>T{*t.*28G4!}N-[_EDA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
