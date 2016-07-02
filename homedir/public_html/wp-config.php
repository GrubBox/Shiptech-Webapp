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
define('DB_NAME', 'shiptx1f_wp462');

/** MySQL database username */
define('DB_USER', 'shiptx1f_wp462');

/** MySQL database password */
define('DB_PASSWORD', '1HxgS!69.P');

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
define('AUTH_KEY',         '2hvgtzwoh03sq7i2maagfoevqbjv51qjbuld3i96gvk8ioikydyrxe3hxiipwlqx');
define('SECURE_AUTH_KEY',  'yq7optwx3szi6dabu93ssjat5l4xwmdmmr4odygxkjvjp3j35iilogwbmadq0pub');
define('LOGGED_IN_KEY',    'tqxv8xi3b7evnvrekqssqe9bwqeozyakclx3f6jjljwvrmwbubvpmrmqpequekkc');
define('NONCE_KEY',        'h4nzec5hraafjljwfauoszqiymifxmpszimsy0xpqqwxbnhtycojnxeallhaivlr');
define('AUTH_SALT',        'cu4vrffngr7yjqexssmm57mxmzyrl5ar8ilggfdpd6hw3hlkaqxgd6vcqubv53jg');
define('SECURE_AUTH_SALT', '9obfsyv94dwx7feavy3soze4lagvkhjdhrsrlo07pvwfue06w1qmp7rttodis5wb');
define('LOGGED_IN_SALT',   'ftd4dlpmeencergzc9l5chosif9ox83esxbhcflsohyogoh2u65fsexhno8mf6ej');
define('NONCE_SALT',       'b2ulqu5dspod2w8cmli6katf7ylfvqexckjtvjqztwfbr8de4qcu1q1swhwuk301');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpid_';

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
