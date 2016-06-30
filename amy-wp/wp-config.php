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
define('DB_NAME', 'amy_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' Pw`<]IL1.t-)?s;?Uj}y{b$az}cwg!^.1|QEcP(0Pz17>EP-::4]8|*ALRc>Pk+');
define('SECURE_AUTH_KEY',  '?+PORU7pQo:^.j7?{0/?-}kPe[+%8hdt5O6p!>@E&iA}MzA4|-(&mS+,zG>c-bk`');
define('LOGGED_IN_KEY',    '|03SjP{:*_~B+mB/QGDQ{lwQ-X#udsXdjK_[k(b%H3i8rnhRb.^_$]4xqiG|P5_B');
define('NONCE_KEY',        'sW%i&+|KlFLB1n4L?+MWKTj `+b<<n8}lDE9!S2AnnZoeLaZM,xf8Dv#l4K!G&;*');
define('AUTH_SALT',        '(sCr U:Iu|.8o{lxZt!rGKP4Ujs](RDyv} 1[7Dp-n@&{eLo|f)BqCnBdlur_gAu');
define('SECURE_AUTH_SALT', '{C[Woj0`,<1LHQvlfs1b3Tx? %?E+Me^&^F*+&;+ 4-]=XU(PxA-L#B&(im?x<I8');
define('LOGGED_IN_SALT',   '4WIUdPg5(<dE1q|UY`Z.u4/w^GXYDXlT^<ge3k[X/<Dj~!-AF=ij_B!*ku+(FCtf');
define('NONCE_SALT',       'WuIv%L;[C.v=(?RKr=/&G91]|c.R#,?*34fL3-A:J^jAG|v$y Lnb&iI=0yj;)vt');

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
