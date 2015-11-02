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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'aaf65451bbb7');

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
define('AUTH_KEY',         'Ohy1I|+?yd@l72}HMq;%f7b{$2R3?|VByNlFs%`h@V+>UviAGSeGv[%:xtyj.c#L');
define('SECURE_AUTH_KEY',  '+w:$@_3qY$qJ~*J bPb+`|P/TLxd:?vEqqOf:gn`#2qg%;n6!}IE;(w+yNkt j,+');
define('LOGGED_IN_KEY',    '$R)}u@-|Y>|{*8@m1TYT])e|?&:.Xwv|9r%=eA%LE-!.1sAYa3oJC69W+a}n5YpW');
define('NONCE_KEY',        '@|u#o@03g*t22BU4+&u}+Y :>e=McMh(<NAlW/?NMI++K=y:HcvObtq]-mih<]kV');
define('AUTH_SALT',        'mz%7G/kt0J6aVt[0u&f7f n$dzScA`hyv/-@CffvzP6j_ulX2{l^Il;d-(*Wbg8T');
define('SECURE_AUTH_SALT', 'js*=k_ExicRsapZ4-9S#$[GX~]+oFHit1.E?aDizD3o q,J~F0t{X=KxclBK-iG2');
define('LOGGED_IN_SALT',   '`2VyahBA+<C^7{u) eM(9ltt-x`|^#SLN}eG6wTBdOuIl+!r+(C[b,G7:UWK8{tm');
define('NONCE_SALT',       'mP# +L@>SQ9]X)q{lhpHW8q)hL)(g!O|K#JWyl+b9qLi^%|HU|SZO|%o9ISYR@xH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'afs_';

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
