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
define('REVISR_GIT_PATH', 'michaelresser/cedarcrestpoint'); // Added by Revisr
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
define('AUTH_KEY',         '2ONCZCTnn+CrINI6jOy7jnn6NrN9qGvWkj9Iye0JibQtTFTWUJxnDVi/7uKC20JTr0N7O3mJ00He9sqFdMuIdg==');
define('SECURE_AUTH_KEY',  '6++2RMcmijqSrRMywhXtHgistEuG5q+GqZmxfwEc8SKYPxL908BXomYDiwCwVF/wVmwWoVPegR0Fv6eQE9ov1w==');
define('LOGGED_IN_KEY',    'KUYfs0jqnlw46mT5G6xa0x9Xuc6u+kz4J3P9yPzPizjSNNx9Wty6q3IBokM/8OravT/C1UhmagjqKzC+jinaAw==');
define('NONCE_KEY',        '9Rrtk/pT1MCg2KhTVt6WlyoI+qMTadWPFKZAWeF0T8VZVARvwX5m8v8ildLiIPvVUU7YmakxPZHK4YvyoLJULA==');
define('AUTH_SALT',        '8mbWMqQYtrpNABp6iFroGHanCHo6TqO7O363UUihf5BbCooVsGPrmD1zwp0NNpPjbfsEtkgZ55p1adzt2l6TXQ==');
define('SECURE_AUTH_SALT', '8i5aGXbOLfBrGr03B+xf6mgA+5N7ew2MyF99GKcSJW2QgdcE8xgqh6UUAaDfnXVICFLVldML2mwvqHXf8J7e3Q==');
define('LOGGED_IN_SALT',   'jP39MRTD4Mfsz+0A0Ub7Kh/XKYE5sx0yxkJty743hdL1uGsJKtzkr3/6g5VNCv7yXV1txlOMu9OPnn3a/xCatg==');
define('NONCE_SALT',       'cZ+EvzKMbHukSMFBOb++gdn7ubzX42DC68SG1Jl3jWBC6xXGR+7ZKMa9gpjYQ4UoqRi0ib1vgP6Pd4bQlm+rpA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
