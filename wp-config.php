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
define( 'DB_NAME', 'testnew' );

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
define( 'AUTH_KEY',         'cTOhkrdj{jp0/)F^8{pISA{K:({{))L^4@0>~0ah1[*3:#_IH<%N$8Y;FDGxFO#V' );
define( 'SECURE_AUTH_KEY',  'l)I^bCc0+PXD,^HYvE>6,k&Nu=mIG`KwW}Lnk4bV]W|5)]5#>h?[e!O!`p#!!EP4' );
define( 'LOGGED_IN_KEY',    'R_hd?EL.|QZ!_#+5z)4*~oT*>.NKNBdES!l{<oG}!nOzTvo}U_uVniS $4z60Q4b' );
define( 'NONCE_KEY',        'WumFZ3c]7/G ZyxR3lQFA~/%RGB:8n>:PZ`Ayb_E#(Q(]H)!|4mn:QpBEa2*RJLH' );
define( 'AUTH_SALT',        'i%v0JZ>_0=C>/;C%`!$K$_Jy/rR}V8Ou=!_Lu[00]y9Nx;X Sk(80czvA2VwP-r*' );
define( 'SECURE_AUTH_SALT', 'Uo2>l=B}SW_HQ|$HQyG}.Bc@( ,@vE`q=rrN4X]J+}]jz@*t~JYrvM8k8jk)29Zp' );
define( 'LOGGED_IN_SALT',   '&OHjEkrl3aE=e&DFI@UjUN.hyPp*DuIEQz1B0h )Ak<JF},:Cnf)falDGHItA0<I' );
define( 'NONCE_SALT',       '}X~w%K2|g@AOF-(n0D3OtiZPTg83EM.?Dm!$|{]%~1TAOTZ9kCu{9?r[6SJBk/WF' );

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
