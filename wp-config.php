<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_36496835_wp140' );

/** Database username */
define( 'DB_USER', '36496835_1' );

/** Database password */
define( 'DB_PASSWORD', '4OS-W9)p4C' );

/** Database hostname */
define( 'DB_HOST', 'sql311.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'qcvmljn0ilmzcwyrzhqjeesrpezgicawcajmwpmrpjngrbc1mwrgqwb63fgfpkyv' );
define( 'SECURE_AUTH_KEY',  'kkkwb2zbfw692gutkgdjoxnni6pyzigimx5y4595yreh2rqthqxka16cohtqiecr' );
define( 'LOGGED_IN_KEY',    'nwvvdqan0t0jhjpzdoc4h84co6nqki2tssabdp6vb55datzjwjlmeznobwjegzzc' );
define( 'NONCE_KEY',        'rm2hq8cqu4q0mrsscwzczhvww0oejkp9y6qkaabiy52fw0qqh0vvovwv5dkcy4xv' );
define( 'AUTH_SALT',        '6h7vrgthe155iwbulzd4zpejbzldrniwcxf5jc6gddiwb4hlsmxbpln8ssxv9bzm' );
define( 'SECURE_AUTH_SALT', 'bh0zrrnxrofbbxbm5uy3o4jwoki9b0azjqhqztd1blgdmx8pt9iieahql0dkbgxg' );
define( 'LOGGED_IN_SALT',   'v93nyox6yci1srz1kfvl5dbitmswzlp5gm0qdn1zjycuvey2jqbjtlz4nnodpyco' );
define( 'NONCE_SALT',       'tkra16qrkgnyztakilzsu7hvkmki34gqvnqzh81bytbrfnch8s7uykcxkc0xwogo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpes_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
