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
// En Azure se leen de las variables de entorno (App Settings); en XAMPP se usan los valores por defecto.
/** The name of the database for WordPress */
define( 'DB_NAME', getenv( 'DB_NAME' ) ?: 'wordpress-new' );

/** Database username */
define( 'DB_USER', getenv( 'DB_USER' ) ?: 'root' );

/** Database password */
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD' ) ?: '' );

/** Database hostname (puede incluir puerto: host:puerto) */
define( 'DB_HOST', getenv( 'DB_HOST' ) ?: 'localhost' );

/** Conexión SSL obligatoria (Aiven). Activar con DB_SSL=true */
if ( getenv( 'DB_SSL' ) === 'true' ) {
	define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );
}

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
define( 'AUTH_KEY',         'MA0G%<=rog@ol/-W/M[JQaA1Rcyz>v!J-U3gn$r7~KY.#2udu]>uu:u5::hrJl!?' );
define( 'SECURE_AUTH_KEY',  'zFbnNq*:? K![CsYHFgf;lS}RBe.7#4Ol8g^ZX0Lp*MKL6)vA=)>!2}Vd,`zn&Qy' );
define( 'LOGGED_IN_KEY',    '~n@*qvp{Xr;rZ6)JDR.V<P3@4cl#E0m7e?ju@ +cu;HUL!g$O/syk#EY^LL,t&IV' );
define( 'NONCE_KEY',        '2ZXOR~<fGRQG+.sU9^tc$M#q2+d!*RVsC;-7b$PNBp?hl0qcy?! sR5Dy+_QAQ(6' );
define( 'AUTH_SALT',        '_R%c`;lce2RhM;r{b!(D[s!1EOZv80inQ<bUeZ|ytp)QL!ukG6lA<1eq/j!QFNap' );
define( 'SECURE_AUTH_SALT', '|dl@?3vH,>w;N~fezh$L?I*I)(.dgs{T$|N1-{Q.o2rRRj8h-6rW+2N6UONnh^+t' );
define( 'LOGGED_IN_SALT',   'qbtE-/Dy5w?vGdflW]mimqjbrrC[meA$P,a7sADx|t-<6V{jvWiiez_kL:04i6;U' );
define( 'NONCE_SALT',       'EER1q]NNj5!Lj5RSOF;F%SSwCxclwf:..xzLawvBH!SxxbKvlr!w]aV`m8xBC]3]' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

// URLs del sitio. Si están definidas, tienen prioridad sobre siteurl/home guardados en la BD
// (esos valores vienen de XAMPP y hacen que wp-admin redirija a localhost en Azure).
// En Azure se definen en las App Settings: WP_HOME y WP_SITEURL.
if ( getenv( 'WP_HOME' ) ) {
	define( 'WP_HOME', getenv( 'WP_HOME' ) );
}
if ( getenv( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', getenv( 'WP_SITEURL' ) );
}



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
