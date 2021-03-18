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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.^VMuEa(Y?W2f[(R*9MPJpr<EE:y)@)8+*_v=D#<D0;CE>D_.M(io!LC1diW.Y;<' );
define( 'SECURE_AUTH_KEY',  'Cf[svM&Li|$:fN<&jBiFtr}}x40b(bXY3jN@-fni*;BD>%l#{pbdj5cSz=Ng%he=' );
define( 'LOGGED_IN_KEY',    'Dk,m_`1G9T41:^^Ejy0yl,sZE5*r~)bOB gs Ej@h2+SB#ql,{$wmW7jeT+?Ubs>' );
define( 'NONCE_KEY',        '71}&0?9|8im(yJia8<hu)FS}1|Jwlyek}gFo3W$U9 )D@bn>~mI{}d}58:ji9267' );
define( 'AUTH_SALT',        'U$mSjaLf87[?W9,e..=dQmm`q38!sej3-Fv%tCK*[H ,>HPhZt^Zx+Rz0m8L.U@Z' );
define( 'SECURE_AUTH_SALT', 'Ae<8fs88iNiZ0XcK^./,x0{fp3~EY#kzt?HiHd81pnv%s3YpPY*` `<;{xG#Mw!*' );
define( 'LOGGED_IN_SALT',   ']Mdn._T OiDtGrfT~fbv+Cjo=TXO,O;lutWD;[y<RA2FW$|.#Tt`lMC@.]O3<hvH' );
define( 'NONCE_SALT',       'd{%(l*9Sy2|BR/+M)717(&rrsCgBKUxEW)q]G4t$6tN!#/M*1XWyv!HYyiC}zWm@' );

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
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
