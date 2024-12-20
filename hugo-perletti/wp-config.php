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
define( 'DB_NAME', 'hugo-perletti' );

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
define( 'AUTH_KEY',         'y=l1oX$3Ubp:AFhz8tW74tF$;zMz9r50L.X)090IbBJd^klDJvgHN4^u5tss-gmv' );
define( 'SECURE_AUTH_KEY',  'Lr3Uf56MFPbv{WdNz3gl*s69Lr1jHcevm#@9xG0_,wxaGb0#W!}:=$/U7Xc8Lp#s' );
define( 'LOGGED_IN_KEY',    'C>sJbC$.VB8vX; ah6~M#BacfPHgtR+s4d*_P-uJuh2UT`r*=pVn=8!+sR4h;d)2' );
define( 'NONCE_KEY',        '<m6/=1|cY!ltVR6BkVsSYzmQ4e/qYhON+as;MuN.5KqW.|%Y2+iG^?x >J+@67]k' );
define( 'AUTH_SALT',        'kINj.7(M;er$Dp:zn>N]s3!??e_ztK=;8oLZv HMJjH$7`%91pEjr4moMHr|O7hT' );
define( 'SECURE_AUTH_SALT', '1KJOY0[F,=6Z9`zD2TUGO(8f,bW6w^8XG,R$VUb;<><w|Z }RZ]0k34V_hit*2`X' );
define( 'LOGGED_IN_SALT',   '1vD9r&ddA?wl*2-;^7x`Z 4Y;}Lh<KdWQl}?!{o$p33c]dDVq9<c5NT~_kVzKFq}' );
define( 'NONCE_SALT',       'gV=QYnW%WMZ+*y-t@mka>9*j~t?1u&Z%VO1>#UKA5lacuZ9yb0ciA?4j#,R`7z]I' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
