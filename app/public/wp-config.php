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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bVEUd576AKiwzwVNV4HW/cPHPjK5/JdyfR94pE7y0+dvECo+f8NNOQEXHTT82qUFVGwW9QAMFE1TBTutKLcOxA==');
define('SECURE_AUTH_KEY',  'ZXoW/kdks5xYAbfGufWWO9fA6o9IKbei81rtUFyMnVCpUb9MHOFI1wPmYp205vA8lnJzp1Pc4gNc8yM74nTP2Q==');
define('LOGGED_IN_KEY',    'WOvD8QeSDYt3Oy09F1MmGuYPHsPEsCIsuzyL7gQhIfHZnrdA05pY2IfRzcwmtZ6QH8iFbGoo3HKugpigdGsDkQ==');
define('NONCE_KEY',        'T5cQIkK3zToOjxE9Wnb25QQF2mwpE64fgDKzUUr0U6f2nvzLxFyaa16H9WH/gEuZU0Raj/OShm8qgj5pN/T2jQ==');
define('AUTH_SALT',        'm4H1LRCWI8fjIbqUqL/FrPc2njNOhZ3Y5B838dAiMdHMURZADYxg7/IL5bM4tYYfWT6S7aOXY/xABReWCt6hNw==');
define('SECURE_AUTH_SALT', 'Q7w15Hxz3dYpkh2fWpKLuTvlZyluMjk7ueNvI1B2Bn5SwN7sgJfwCOUrALkwVVeKRBwSPoXDb7rkfydOK2akBA==');
define('LOGGED_IN_SALT',   'la9xMMEqeeIQQFyVFMIMkZOsGWpwsgNPZDe769uPLdeJiix6FPe1BDBXQ+EXo7F8U4SbWUKhmCUQbI5DdD3CBw==');
define('NONCE_SALT',       '5LJnLcxvitnFcydOjHAvKIKrC9bjPlxPj6Hm/AVvPZq6jZ/+kQYl4XZ0Se2n69ROlECkIGe7CCoFylK0xGn18g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
