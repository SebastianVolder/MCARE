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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' 34O;VmOwyX0BxJ2TuM&cjF;Ai$wiB6,]51lr*?vx_2CKc]* {TUmU+YZ,I/*<ce' );
define( 'SECURE_AUTH_KEY',  ',7SSx0>ij)XE|eH(cO%P[=~oSkvD.wvP_8|dZ+cw>8IBwjZ&XWPl^3UN)ZR4S&Sy' );
define( 'LOGGED_IN_KEY',    'N0Q:D:kZo(NFTb_a|xt ^iByi$N_`+N)F3TvOnot]3ly xXMs4{9(goaP?h ]WAi' );
define( 'NONCE_KEY',        'zivwLrdW-z6~C>qR5wB$@7! +>L{JE;74oFsG}ub7M}@E=Et{R4L!4Hz WG9xmxG' );
define( 'AUTH_SALT',        '3f~$xi<a TgkVl`;!`$[L:@j:<4Rk}jSxEVJBW%HQm~>!7mqg)q]T{yk /s ,DT/' );
define( 'SECURE_AUTH_SALT', 'ut|nQ;_$u`U=teldCyLY#%BV9^y98T+P?{]NS9S@ZkFsasSrPl)L3A9AntwA1x8R' );
define( 'LOGGED_IN_SALT',   'q-PVoDyF/|^9%ST`QD+gi0^ ,Cx7.vLE~h6g{(XF`LW6a( iS|%jQp&LlGd%u>lJ' );
define( 'NONCE_SALT',       'q,A7do4c2ZEu+5.2+2UAc{]R)jgn7uN_j_#LJ@-nJk6PS|)u`toB[fcGhdW}:;e8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
