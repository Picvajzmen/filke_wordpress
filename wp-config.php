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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7jzp5s!o+b/Pe1Jx)Dq5[]^xLd?Y&ukh54/)r#xDE[xG$yuZM+P>DT@ 7xuc]~1`' );
define( 'SECURE_AUTH_KEY',  '%)Q`LV/d/6c>34l!CIeBw{YMkS(Tb{OWhXdq-*RgT.!?+fF.WIprU+)#M S3f6R|' );
define( 'LOGGED_IN_KEY',    't&iiZXR2&XK2YU.9`MTiCi3m?J5!n9 Q@m!mjAlQkr*[pu&#h%7! nvV;;JCNQM[' );
define( 'NONCE_KEY',        'sf@2q=^O-O>{Y=>*W_hqZ]2rfReL~v*uiBol(6$]leJ8#;=rxVbcCmat|6Z6#R[E' );
define( 'AUTH_SALT',        'HW1v-$0EKo9W~inKtO <M3yYwD5=>_Q6m>ncypx>5*$%nr,#/V,Q:38UK}!hCYkx' );
define( 'SECURE_AUTH_SALT', '*w!hdJS e=NXYKsZ_JT0%0/U|E/QBQV4D%+Ur&2^@[yuPNfnsRzV0JIO|f_QF8p=' );
define( 'LOGGED_IN_SALT',   'X G F3k8WRneR GvUs`O?]A*i1GwV(qdhF$wCnZ/Q#@6(/ y:Pa<]5!*Fl.Fe3W!' );
define( 'NONCE_SALT',       '-=7#xa^D,>sNktlN<UV:V$4wqVdGRns/juA~e,!>z*}owom*5uH5,lRaEwq5s@?l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
