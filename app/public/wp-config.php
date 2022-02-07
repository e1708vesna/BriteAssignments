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
define('AUTH_KEY',         'QH4bsE3lbLwKJ3WLfiFzWUdW5+09WQwWUhuU5DSSjEtfTT7KL91EDDo8uTGyBvBl/LbziWXxSSviwSmqtxJFNw==');
define('SECURE_AUTH_KEY',  'Bh3Y+vpMmFYty9G/ihoqxk7L5N6w1+JISms53UUG7e4Bj1KApAGB9C+iZqCgBrnh5ypO6ZGZ8yGzKeELX4JzpA==');
define('LOGGED_IN_KEY',    '20k9yfKKpiLzzLZ9knNqiRJLeHM30wD4hHduA/zI9K0nio/z0aknhkx9PjaNnP6wMhIET1+lS3IE5uoG5BSurA==');
define('NONCE_KEY',        'dCDJmMdxf/b64hL1OtA0JhLw7q794THCGm36ZQYuh1kWqprbF8vfXYCvyhvS0/mLbH906gK6zdQEDLmCne4EVQ==');
define('AUTH_SALT',        'KISRjY/uYl/iOb9QXH5vUWLAJlDKG7eupHNJ7txBqlieYiq2mEbT/ribnIVS+NVoyGEl1H+DdP7ZEUtX0PMdXw==');
define('SECURE_AUTH_SALT', '9JVMstXQDTXk3WLPZuRcpxGwkn7rs7mx2SNxYA5JY1N+tRljP/z7W3wcPBBSM5duRNxgD740p9mJbS6rehRieg==');
define('LOGGED_IN_SALT',   'NpOGpGxwrNldunu6Pmu2JlvOMbH6ZJJDw3ukONKcbKuv/XFRnhao3oyVXDtVl386ZEb7KkwodUOtnk5dcynrlQ==');
define('NONCE_SALT',       'Vpqqbwp/eDWAHcaRblVhxC5EwbMoVNqQQyetp0d12rhDAI/llUBEGBolf7LClDSXcH8srVcckG1gObpeonqZnQ==');

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
