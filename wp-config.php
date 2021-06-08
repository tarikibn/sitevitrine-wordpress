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
define( 'DB_NAME', 'mydb' );

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
define( 'AUTH_KEY',         'y8o9s])2V4.h|Da*MWCtI/O,<K+]wxC%r]8@t`e47$flr}PYdGlw?W=HW1v(uTiQ' );
define( 'SECURE_AUTH_KEY',  'SBR9$IK_ixh;|ug0W)~;:Ihekg2>0ZvT6EO?:cW`j::i<tSV<5=FB4N0A<A?43S@' );
define( 'LOGGED_IN_KEY',    'U_-639{]{ZZw3Fm9_T?Rm*-]u*Li;/?K`gddxt71[T4pf/ur&HiP~=5n;V4v%PBV' );
define( 'NONCE_KEY',        'N<;m6^+9s)11.]9NA,EBXGO.7wx%*A)ZJHvZO73Y]?2R;}f`3zt$XcJ}Tsm3#jOR' );
define( 'AUTH_SALT',        '[c6m)i,d<T36i`,sk^Z19_FeO4liYI}/2_^x@ GfcF&[5! [ax|uJL:HL(]NMZ)l' );
define( 'SECURE_AUTH_SALT', 'Y^D2D=VL)ESI,gNDzLSE9~1ND!!.8g;qgdNO*,?In$5{*+Uk.6?pMj19dgWB(yt1' );
define( 'LOGGED_IN_SALT',   '0vHbVWe-9^CX3x+eO/%vz4Dp6IwYjHOW6,$Pq;LE[!FO_rhf%VCDKs+:r}j}BtSH' );
define( 'NONCE_SALT',       '|UL@bN2=v_*h6e#sgg.q-$>J/`D9;t}(J.lQWF1sQi7c|?NAy!;.nq<?=Z96!,KP' );

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
