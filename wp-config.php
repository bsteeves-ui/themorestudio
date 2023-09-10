<?php
define( 'WP_CACHE', true );




/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'acout_wp955' );

/** MySQL database username */
define( 'DB_USER', 'acout_wp955' );

/** MySQL database password */
define( 'DB_PASSWORD', '[p)4IE@Q1]74SZ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yk13efimz77uhlffvgpwtvmp1nmq7b8muxt1byqojaybieoloce3fn1wiazzpefg' );
define( 'SECURE_AUTH_KEY',  'osnmbocxpeiphmzlxfjowfofnkvlkwlsjlxxswq0qmtb2d7uv3lpxjfbism5f1ui' );
define( 'LOGGED_IN_KEY',    'lvub3rowdwso73ha8hmekekm5qmn0jbb8l4xc6y9wrnxet8fdli1txhadveszszc' );
define( 'NONCE_KEY',        'rvfwvyqko1qb2sxxdl58a0kyu0xsr3a7y2ii5ta8dxmc0yekkypv507u9iimmiri' );
define( 'AUTH_SALT',        'vxqg9sgcpfurosly08lrcztqxob3n1rxst6k6g94nnjmgfa4xcyxcfyunkc0tvzl' );
define( 'SECURE_AUTH_SALT', 'uc7jhwcocyhrnzwhus2c2c0jt7fcvc9qgnolvnhnm9huz6jkpiv6pymb7gwghuaz' );
define( 'LOGGED_IN_SALT',   'zm3u7q7rsaisdn58r25ui1bpajb4oozucmxwjlxy9mm8x5t4efuxrhd9jjl5oh3e' );
define( 'NONCE_SALT',       'vvffysqcsdnbhnr97ho62hb8v59mepc1z2phss2avvbhxf2vuavm1g0idso1ci3q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5p_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
