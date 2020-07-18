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
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'lokesh' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         's53nEmK]LU^[;-IujfA:cL/jX&GL(_P>J.`Y%+jz?oV1GPxpbM,3Cd2VYJ#FF$})' );
define( 'SECURE_AUTH_KEY',  'Yj;vhQ=`n@4yF^C]/hZe.rD!.DlNIHCA2%Y H,Q+0<J+.L(aRWZXt+VSNba{fsJR' );
define( 'LOGGED_IN_KEY',    'g])#]/zc9Q ^8&ho*hJL3z@ILk3o([mQ8*4di|9~/sYaGgYB4pvr|+.K$?n:%>Lp' );
define( 'NONCE_KEY',        'HNEDmudKT$,he(eX_:Zftke@Tt:|((d71],YxaK)2!O3V]rKAe]NZq3;vjo$!]kB' );
define( 'AUTH_SALT',        'LU{%*87::|jNF9TEV5$}(YMy-[-MX$U?]ES?}9rM=;F!&A./TG#ZY{2zY9^c?EoC' );
define( 'SECURE_AUTH_SALT', 's4k>shT{)dZSkh?CYa]0O+SkJn@W(RM>nzv4@/Ckjd{zMD$A=PwIN`^ao+I3r96I' );
define( 'LOGGED_IN_SALT',   'e4D(qK,:O~JLz !An?9v-|V.*e&K6=bN>0:M^l4$>+pUC=h-=4b*SO6wpYD5NbX=' );
define( 'NONCE_SALT',       'Zt=fx%lM3i[tq*oBCQ_>wfm2FP.n,mbi*0.Ubw3l2`(i7[)5}B}RK3Niy@E_vyU;' );

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
