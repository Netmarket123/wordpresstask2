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
define( 'DB_NAME', 'task_1' );

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
define( 'AUTH_KEY',         'Yw@M0?wd!,ob@QrF0#f2Ygs!~j/m[pD^yYhm1~]r+ay=Qm=M9GX9m;|#?CjcYkz;' );
define( 'SECURE_AUTH_KEY',  'Xu#QaCd2#@&uOxU{&Dg!w$7S#8S[,]ysc~vg1Z .jLFfpP{0/R^Pc.4k^{s(c^a5' );
define( 'LOGGED_IN_KEY',    ';42q{<Is66hGsH@5hcxj{SGN?g a6TE@#-7Fq=~+zs.8/Nh8c/e?~HD2/+V4T!`g' );
define( 'NONCE_KEY',        'neb-@*/JMNcLP=]dtfls@5alrm,y{z_`R!?g.soQ<cMNM7K0/>[+^N~.d3GVPL$1' );
define( 'AUTH_SALT',        'K3};P%(ktC#.Pm|0giROh>/C$8_G`?owUMJ5+ ~/_^+LjxDvH$9pSEPN~1Ssa^f}' );
define( 'SECURE_AUTH_SALT', '2PLWHc0n*^(yFHrvE>zh]_BX^r]s!j#!>~H~kQ8u!NYTz@]A,g-o@JRl;~VJg0lq' );
define( 'LOGGED_IN_SALT',   'B)s.wWR(`Ar8z KIK0=U9N*6 d3OTym{e!%>aB/ZK{%&L%ljmQ+`aLa-P{0BD=Z&' );
define( 'NONCE_SALT',       'hlBcFKfs>DisJ*||nV*%>|PSZ>xHm,8Jb#;AX0nYRJ}guxCZL2w|0p+>JTX|_)L@' );

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
