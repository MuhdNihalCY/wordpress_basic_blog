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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_basic_blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'b_*5Jkbz^Xlw:Z( &o{ud;]7xi,O }-ooOtQJ}s&=t1blvODoJ+[!:MV2V5,V`TD' );
define( 'SECURE_AUTH_KEY',  'fK(og<a:#8H6J~Le}f:Y^cP6A<LxjO<%Q=w:/O;}LgzJY:;/1YE$mr>3GxKuk,le' );
define( 'LOGGED_IN_KEY',    'O[q)%8)(~zAA)&0Rji[+ncD@h9&6zqZT^5bZ))bb_GaTZ-SBKZGLGF0R ?/fNEW!' );
define( 'NONCE_KEY',        't?#Z+:TnuHiJHv.#Kj0e$Ce7XKVeBb{=5Xm#Q<uSb|bY5Xsz_HK`FjJK%M[_atdM' );
define( 'AUTH_SALT',        'O3G;;)*;,|kVj8<Gks;?jS0O7BK?cr=Yg?BSPm=IB2X%.3bg7?M*TI%3)uK_i~rm' );
define( 'SECURE_AUTH_SALT', 'JP9{g7<xYQ9f?8=ePh?jZIsBCJ#98z.PT+BHA0(ZS()<XspZo+nm<Dkk_|$`Uvli' );
define( 'LOGGED_IN_SALT',   '>s}iQ1PHeFB_v+mA-Pv@]83Klk$B.J)<l^M+:sUop8/-@7+G5iPl|mc0!{/Mn+IB' );
define( 'NONCE_SALT',       'J!=F/32Rtj4b1A`S!j6L>8HHGeEle|xILPH_mNoLR i=pH,:l`{;FjZ:&83_^@3L' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
