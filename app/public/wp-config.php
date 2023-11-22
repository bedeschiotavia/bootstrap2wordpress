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
define('AUTH_KEY',         '/oBkA3g6MtKzV4TbaU5vYsByRfjhGwYqS6AD1cWUg9jGm1otlsPqkGBxAq1GQWG3/eR11FmQoFawdfgY68XkHg==');
define('SECURE_AUTH_KEY',  '7u/y2OaxgnXq4C2dWrpjy1Hu6tHyiReoemeXJYlDiy4tAIWMnTcV4INizLCFV6fkkwCnmAUwfYgete9cKWmBXA==');
define('LOGGED_IN_KEY',    'ZkQV/baXTcS8tBUdyxk9VOdJflUagFwYA062/GicCoeRhdbKypxxgk/ZmiYoG236TBNRO8p4xnVQq7L5zDfCrA==');
define('NONCE_KEY',        'aOh0JSJM7Fg4YpPQ79YveLoPTwIPOBZSQm2L3+gjnVuYl2Z3RXjZlFCd54NbU1tp3slI5gxyA+TKRmYIG+sOcA==');
define('AUTH_SALT',        'dcwEFaxnBUdfrPNWfhg958QpEwDp8L9p8m68fzFg8VFiZgv3iGYA+BYP/ElknDHF+MT+yaH/QfxUPI98vv9OKA==');
define('SECURE_AUTH_SALT', 'Jgl+lWuusNPVeY2TV7XAwUzaegDb1Npzjn19Ryp0ghiH4qW9PUSLT5W2yL6Pe0kKkXpMB4NvWn8bppH6iEaEzw==');
define('LOGGED_IN_SALT',   '7S6cFrbaiC8IfgL5XlM3wEo1KiNGlSuJ73/D+JLhvYxF2Lz/ytXY8+GRh4z4BMPyPAn/9tqoQCVXYStwZ1jvsg==');
define('NONCE_SALT',       'dC9cFEL0YEkBAX9nlLzlhidlVHdHIo8aij40+98CffLw8DP01s9AmWCNM1sytRuVBQvniwpKh+V3Y2f4sZIlNg==');

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
