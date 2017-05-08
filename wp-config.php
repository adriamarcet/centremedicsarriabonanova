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
define('DB_NAME', 'centremedicsarriabonanova');

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
define('AUTH_KEY',         'y |Qt_K?4hX)h(GzG!)g`J+N5_8,0}_q69~{gEX0$mj=Za1o6R!tTD:(R_&0>r}9');
define('SECURE_AUTH_KEY',  'naS2CQ9{sgq0u6#4%[w*8+FzdW7r`]&}aoyI{U=Jl^*CdV`9@[FVqnpj#cy+`qo,');
define('LOGGED_IN_KEY',    'r* xE-&;Wr:xRc(l33*Gz`OQ3: 2`x{w8FX&n/99?{_>x>,N_z(_=$D!Pn|wkZG9');
define('NONCE_KEY',        '[/25!mrU+x:NR&b<L h+N}it@lvOd:,|Y]-K_jtq!_m=-6-?4&{t9.RAzr1x|w%G');
define('AUTH_SALT',        '5)+ln55I[TN:R}ZEzO}qw_wRm5RZ_0Ws0n.@3L[_%DVA][PcNANddQ[y@FmD@Y,A');
define('SECURE_AUTH_SALT', '19V+Hwo.]s-y1k$*f1(4v<$FLN:Y=%gm_pqm7S~;(Bg/,jj!s_[Ag[Z&x$4o??_H');
define('LOGGED_IN_SALT',   'S5A$qHgcgE}91BF@}T^$E7L*z|rKq`F:/VZBu)|IMQ%6c$M1T9=MetVft6${aqo^');
define('NONCE_SALT',       '{wZk{-m[I6)>*TZ./MX;=oL=c_[1<9%,Ro,Cqc@.jv6(hx(/BKo6d+4eILU_hp,0');

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
