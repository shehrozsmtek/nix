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
define( 'DB_NAME', 'wordpress21' );

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
define( 'AUTH_KEY',         '?H`SK9kgCH1L-?0CF8zjhKlz`rH2aZ4^-MC8i18)&Jeg/Q2%NcRX=G7DQ+vG/7bu' );
define( 'SECURE_AUTH_KEY',  'nNK87n_4TL!t??V0uRs[v=S?@_~M?g1 30;O+~43X <<J7! wywe/!~5G&Ms?k.1' );
define( 'LOGGED_IN_KEY',    'Q3wybtD_<t*fK.:JjB#WPS<-:Qn!_|qD3w7IQ8f1j[HJuB6e$%Z!?V&7qyz`=P{Q' );
define( 'NONCE_KEY',        'Df)o^8zPJ|m,h!8C_Vg_|+5Yd*8Rd}BK`8m^$I )HEuHd.3<0Qdmz W[@D 5bSJy' );
define( 'AUTH_SALT',        'ga40sz^7lR,P^K5fj{jxv}!|{qruiV!j[(.e6W_tJdSZA+QgXFEFqwFkLwQvw=@O' );
define( 'SECURE_AUTH_SALT', 'LD*W(4VW?:a}:XI{b<I72}>bo}cEYV+j]YEhk?(7)#3E9fO~hB#+ OM{x`#&=B{]' );
define( 'LOGGED_IN_SALT',   '^CJ4Rdo>rRijzj|6k=1C5M!vQFMSN/p-`(HgGz]+4+DXv<kyD%BDV U|N(H6ya_(' );
define( 'NONCE_SALT',       ',n+a2qjg1Oe<Ro%[Qi%`lMpB<kH|`S?JkWn?|F/8Z{[y/-tf|izAD qc]07,n Vj' );

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
