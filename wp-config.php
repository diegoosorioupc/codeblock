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
define( 'DB_NAME', 'karcherb_wp450' );

/** Database username */
define( 'DB_USER', 'karcherb_wp450' );

/** Database password */
define( 'DB_PASSWORD', 'y(pS@8Ci25' );

/** Database hostname */
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
define( 'AUTH_KEY',         'vxu3chcrngplcttrnszw23rktu1pztbwp5ries8jrc3bprlcksi8jnubstgmvraj' );
define( 'SECURE_AUTH_KEY',  'yrunndwqdpuns8zlgry4mg64fqquchcfs6f7pcghpjya4usqcn4zpgdmbbexvqur' );
define( 'LOGGED_IN_KEY',    'rqgh4l4fnvwwkpuxaclexewv4n41nbkdl2o5dk4vqfs5vkzuq1wkzpkdmtelnus8' );
define( 'NONCE_KEY',        '52r8ebqxkkovnkp5klekmxgubgmnel4q35satyev8cwluy2do82foyymo4dw9taj' );
define( 'AUTH_SALT',        'rhaelzakw5km1k9uokaq6qrjxliunpqhrhrydkx8b8ouqm8hv2ozhmd79ytgqhpb' );
define( 'SECURE_AUTH_SALT', 'aylve2dq6khkblqtwkkiyoxvovpkohvbl8fzniqwzviae7n8gdd5x58czg7zxvxf' );
define( 'LOGGED_IN_SALT',   '5gqoleqttdsysf4aaalujwenmua1qdmt0ok5mri3kbjztcawwfp9f3keydggyylp' );
define( 'NONCE_SALT',       'yohs5vjypu8cqi3h5nnhjoekyeksuhim3a2cxdi5tqj3tpuzv6szfa5xebrrgp0t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpft_';

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
