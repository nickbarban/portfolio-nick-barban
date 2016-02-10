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
define('DB_NAME', 'u720370877_ezuvy');

/** MySQL database username */
define('DB_USER', 'u720370877_udewy');

/** MySQL database password */
define('DB_PASSWORD', 'uqebuDeNeP');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'cA1lybYAvOp3QQZmoxI9AVFvJqUn1Lm1n3PDnT1uFoUrudWzedLsik9RAqrRE2FH');
define('SECURE_AUTH_KEY',  'zGhBWIFxU9zVyQgMx8bDVQHHQJu4X0stQaPqIDi70mjqYfUCx5s7IqkO6NJhfb8n');
define('LOGGED_IN_KEY',    'xfuMHJiaDsk23u9jYpKqKwUM2AMe8BhEtEUtlp6Vi5oJvlB4qJIA7CwHKggfx49k');
define('NONCE_KEY',        'EsgWI2Cg4BjcHSuDBPyyTOYhKhujIAyoWCUvuKJ0JwHFTdO0wRja4LRrR7344btR');
define('AUTH_SALT',        '2XAq2KGNfjlSdoe9oixQC3mZzlz01EMwRH36Wi8Oo8xPG606KWMA0haZ2vZoxG9a');
define('SECURE_AUTH_SALT', 'llNveG62OEczkcTLuHlW30V0Aqq7k1z1wEM1ecQ8THfodm3KV7VNinPj1YreKVRn');
define('LOGGED_IN_SALT',   '2sbapRroQeHMkg3OJ1in6cY96eCedepcGIlYSEbXNpFyU6rxFRqKRZC58sVfcEs9');
define('NONCE_SALT',       'SMTOFphfD0nx0ep8vF2JaNR4BmQBUpnAUKBWkHMvSdNB62iXj8tXcgBUIN8CDRTT');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jxjp_';

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
