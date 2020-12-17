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
define( 'DB_NAME', 'exam' );

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
define( 'AUTH_KEY',         '+Lr3Wn:R29>h^DIySx?}%Y`v8~T_7X~ R|v=niE;Y6$=#h@h(K_W:N0mSi?g/Tfh' );
define( 'SECURE_AUTH_KEY',  'IAap9I-mWt4`?85hH8WlRN0TAPuzLiWV)JR0,q|p7dlzw5)a^:nw #%7Rx$j|!FX' );
define( 'LOGGED_IN_KEY',    ']CvAL>-YBYQ`Q@:8cAS_,{x;McGFdK[~LHiZBmzb9EqlD>xQVD&1FGSsa=HlZ.r4' );
define( 'NONCE_KEY',        'O0*^}$qa%Y;L]& >Ld/G4s8]]+erlzM:$T9T8g(R]gToL1@[qVP91=dur_2e1m)q' );
define( 'AUTH_SALT',        'KCcgcsj?ihXE K&2=CXW?+4u)1A5A6PpK=]iWtd1{1NzZABI T#XwZx1E|Oa)JwI' );
define( 'SECURE_AUTH_SALT', 'CL!(pwSt?1@qRWawWK|3 nUi>4<iPcJ^TsBAn@HGn7imEpR:QpstPb&@7-wkuR|h' );
define( 'LOGGED_IN_SALT',   'UWI/V-xf(o&BsN<^zj(}{3;=bTU0I~Ly;!XtPu}j{R0O8/i>_1de|K9uIz4=$jb:' );
define( 'NONCE_SALT',       'S-amgh=d,,I<NcYAc*Qt *Q~54m[}J0/jNn1mmdwoggHQ%1CuvL6QQ$!>{]MZd8n' );

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
