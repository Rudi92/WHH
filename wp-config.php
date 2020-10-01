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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'F`eImj?;6-`Mp8j:C(v-NbmJN.-Mx0[:h)J&EtNb1N*d#XL32!3@1|ZNRB*.bC][' );
define( 'SECURE_AUTH_KEY',  'vS{2Y1|1iaEx+E/56vh~I?cwYyzI[n8qy7&GE{ONnDu,l6Uf#e<;D{rgCPeW}n<=' );
define( 'LOGGED_IN_KEY',    'j8mDC><1NWNj{e?atVJQ0X@ $&f&6[5>[C3YTi-|Jq^0|-J{]9+:}2$H!g bU4nm' );
define( 'NONCE_KEY',        '?!M_k|A2h3`kM*=rL63!?;.(E .T^#3|up1$Ubu!vj28KgRwfX#ruo-?(_+:KJwI' );
define( 'AUTH_SALT',        'E>.tEf-|l|#6z+K{W|3$)P!WAPAr%DbHESZo7{B!o9YaZw%k E9%djvjG1<2$+oi' );
define( 'SECURE_AUTH_SALT', 'Dzh=LEVml%pn]}}qUB~]F0x;~`C|fiD%Z7ig:}h@DU,V$Sx{bKHlanj4GJN X@7$' );
define( 'LOGGED_IN_SALT',   'pl!/ gmvJH4@wEQ3?pO!e>bZeM+*VDYYB0H3O<%X/(m{-nWkD53y`/%JU~Rw_uyp' );
define( 'NONCE_SALT',       '?o=,:49HMZw><{@lc,f8/[t4IQUH][HIVj4trv-RY>2F2zzsJfk^M62#3>G&cyjC' );

/**#@-*/
//
@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '128M' );
//

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
