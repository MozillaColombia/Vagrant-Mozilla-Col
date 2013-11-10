<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'BwII}|6P06,!(KuEE]3}zhK$ Rw8Llh B/5#GSdxE U:m~Iz_ffE^SLTrvLXtKt4');
define('SECURE_AUTH_KEY',  '] L?Eo{jkx8&HxTftRVMbj2Bv2V-ObU b-r{b|SILJwL=JPBooU6BMNx -+K*|}n');
define('LOGGED_IN_KEY',    ' ylyIi@-=4F,S=q,zpk:8rsGAzo4CZu1Uf38)~(:uc-56P5O#i&C+:,un(zxLJU(');
define('NONCE_KEY',        'M<J0Ec:LiG~va-]N+/$^P{V: 3=g*q%Yh@2lSJZDW.e.yo*r8yoI]N$ttE1Um=ew');
define('AUTH_SALT',        'ZbRf]$6-|I~W6})Y}?HW j <W*COBI~UKA-<fQui90+d!b9>#htQ&D=u$]+95/j+');
define('SECURE_AUTH_SALT', '_yRY_>N~lWg*mt,wh@/:7-$zQ_GNgFW{o070@=x$XfX`0[1^?/M[+#h(7oR)ywA ');
define('LOGGED_IN_SALT',   '7g,luTAlO5;B rCB@`]~]+O/_u+SwS+czA0u@m#>*-@zh*`7xqPXdXn3$kv%;qG:');
define('NONCE_SALT',       ':n^?5!i:87TBZq8|o{8H%/lO$z@m+PvuEu.(QOZLh+BC4N[TtRiy)fz|$uT}+Maq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

