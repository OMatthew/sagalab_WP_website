<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'utw10229_wordpress');

/** MySQL database username */
define('DB_USER', 'utw10229');

/** MySQL database password */
define('DB_PASSWORD', 'SAGALabForever!');

/** MySQL hostname */
define('DB_HOST', 'mysql.utweb.utexas.edu');

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
define('AUTH_KEY', '2hmN7m2ZfrmMMhdOM5vd5hX953GeSoMvX2jAdIwVJ0w5Wj76d92yX8yyR1nXAE2C');
define('SECURE_AUTH_KEY', 'VGijHfYFVZPwJBmdYaVRyEYPTN270YFG7XVNDr9j8ODZjKnfabKOVX1BEkRSP17t');
define('LOGGED_IN_KEY', 'a4qTO0lF4GZBMlAb1aMJk320Y6pG4J53BPqCwGwfApP59TBW401fk4ckY1sV6k4c');
define('NONCE_KEY', 'Z8HPbXV661pkwscPsUZB12Rymfd2S4YzmYFLldbREzyuqmI0yP35Pgkt4MBdHCmT');
define('AUTH_SALT', 'kJ17k0VszVb7jufcL9rmlSxUkSaDqXJWy546pDKlLCw1oNcpGp1NNjoh9cTp8YsB');
define('SECURE_AUTH_SALT', 'Q4cREYRhGKN1qlEWpuzGrPQl1RFY7FPvDXWT7vTsR1vrXubnbAQuIREoddGbxQAV');
define('LOGGED_IN_SALT', '96lYWvBq8EaAwBsXeHeZhGWogrrRfHIgNBPXyHyepuFTe45NT58uLBnRZWO3kDKE');
define('NONCE_SALT', 'p9n4YSKm963YnKywZ4ULsBeuKAuLN46gBtedc1lZt0ZzmBfRsKxfGEVvcEGm2w7J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
