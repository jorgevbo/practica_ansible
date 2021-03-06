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
define('DB_NAME', '{{database_name}}');

/** MySQL database username */
define('DB_USER', '{{database_user}}');

/** MySQL database password */
define('DB_PASSWORD', '{{database_password}}');

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
define('AUTH_KEY',         'z4/uPuUoVG{P7fWF5L8Iui`AylOZ)?l;q#hfA@}5(k/m]n,WK%`;qW:<FGZna0u?');
define('SECURE_AUTH_KEY',  'r5y$:z}OFbFlX<RYIjLmj}T[>u)@UxE:p3KzuR4}B/D),Q/UqL@~F0[* C#S0n^=');
define('LOGGED_IN_KEY',    'osIM}!{NnD{?{~C}oi{$BKrc$2vp9eL7jbq?c}hO-Zy@$fW&yXXKWlnf7o;( !WG');
define('NONCE_KEY',        'VrS@!Rg&{}G;j?x0Mr0A:WPXkkyb3Tr(Pp<Ifs?Td}c_X:pe=b`}jb5``qNY]`s6');
define('AUTH_SALT',        'p~x2w3pmj4mMPXQ.+ C:1F8c2jE1![:`wCKpIb;,1k0o:9uvb&mTZ{I|A$h@Ohue');
define('SECURE_AUTH_SALT', 'u+qLO|ZwJfr^?@s#;m[Z>K/tUf591Qz1yyr5,.7gh/=@-L0s+@ZcI@Q,WY# wM/P');
define('LOGGED_IN_SALT',   'ZHA.DaSweljY#-tZhm/6-H-@b?:~Qu+H8&?~@^~0(gzRJvm&}]hi`Zz{V}@%)Fiw');
define('NONCE_SALT',       '5DbG}/r1I3G*,@+Ixu&~xy2Drl?tSo%NW;>4Ir1mPwS[Z,O@}]t6r+3PKRAX%|}d');

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
