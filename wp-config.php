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
define( 'DB_NAME', 'turlock_wp_tksht' );

/** MySQL database username */
define( 'DB_USER', 'turlock_wp_6t1co' );

/** MySQL database password */
define( 'DB_PASSWORD', '3!FcWN3hwq$iSrm7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'e;0Tl(zIN(GI78!+9~D_&kLSDBfIQ|8fXn)Y738;+[ROD6pDgrwceI@5t1u~(]#%');
define('SECURE_AUTH_KEY', 'd6Hz7z|0jr9EZ0vi+C0(a1FnlWlwO9Uny0557_&8f@&wD!4S5&w7bi51WO*9P681');
define('LOGGED_IN_KEY', 'RT0+CHC8/9Ss!]%7H5Ph1t~5OFB]gpZj7v35PJ5S!#%S%:YEX47r!N4JVy&c8j]0');
define('NONCE_KEY', 'z8~L07A+qpht|:Wqq;jp%/MT;o_Hq@]7dXD#-4NcEuM434u7UB1E~RpzL;*EZ5!)');
define('AUTH_SALT', 'Y(5R~N@0!@d46Pvh701-5t7ol*l5t8jGGq8m0PyQ5oX67__U6x5Oc[(8;TdGZ8XS');
define('SECURE_AUTH_SALT', 'FM2KIANlO@-E#;D(1SqE(L0p-wpd0UYaxlQe6!b7f))H9(gv22%;kX]kE[rNG5X:');
define('LOGGED_IN_SALT', 'um5AAK@uS#729q#aGtwfK3et~807:WX3/:6xm+4#5nl4s552*eJ)Qf4%e1d6)NQY');
define('NONCE_SALT', '_+Cj9wE:9+t[F1B99#9n|3)u)!3qG6E844IKMLT!ls19T5@59+G6S9Y73OfE6#g#');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1aaecs_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
