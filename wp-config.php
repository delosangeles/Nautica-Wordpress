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
define('DB_NAME', 'nautica');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/*Remove br and p contact Form*/
define ( 'WPCF7_AUTOP', false );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mj<$w.T72-dz13jqA ((s/QOqQJ~NZZ?bl2-}J|4!b^jO4?s5}t(9^dqCyoF(tTW');
define('SECURE_AUTH_KEY',  'w1mT2gyp4z~gK1O5Iisn;7V%TB^_@)i<ah|>|dDa<QZ_r3.9~uZ<2!`(>45F965/');
define('LOGGED_IN_KEY',    '(`_z:|[nD.6O6[C~t:BDsv(u}dp)j4u]^OT^}lNy#,|uT% QU3-Bt%~8pdd2X^{*');
define('NONCE_KEY',        'j!jo}}&Lx=>,n */|D)9nXIskS3;Pb{D/#x!{G$6/PC}StE;O/qi.&c9)dfl<?U.');
define('AUTH_SALT',        'YM !M8Ne$m0xthFbXehHud9O/8(^idp<QI}nt;nfJKPYpE!q.[({KwU=)Q*fVuWy');
define('SECURE_AUTH_SALT', 'gga1rL}66Vs:MDXFRD&.wg|vRBWx[~AYLn00`tdrn%8cEl5FwKAOoc-8so1A3])]');
define('LOGGED_IN_SALT',   'v? ^R,)%k(YRdazQH;k+4DK6RwGVEkG[!.ld3*^!P4OcsSXeK]W|J|wwz<pv}K|B');
define('NONCE_SALT',       '4E,)eds:9n.+y+w2qK2|894}K?|Wj/?n/J@(3Sv^$z>&FeTu=^ui..(:=z>,7C>[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
