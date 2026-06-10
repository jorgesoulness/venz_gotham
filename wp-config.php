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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gothamdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UqnVq5>O5=K^6-mx-qb)#eL1DM.i98SVpcrI JaI&Y6BFS4ynAqa._}jRg5J=0LL' );
define( 'SECURE_AUTH_KEY',  'v`swA.Y9!HiqeKiHNHO&{DO)$ t9(8FP-M`21]C[9T- q;[a#`M9C{>@}Z=x<W)+' );
define( 'LOGGED_IN_KEY',    'K}!A0XuZ:%v~2M*%zd!YD[)^X{,b,=Eh]ebi~05V+Q9xXU`])H+LB4Z{8]3P/tKO' );
define( 'NONCE_KEY',        '?&d.FeG*Nr5A]CjwQq,heS,l}Zhc>RW!=/Vomu=4ZWLdHKjk^Zc8?wu%;nYhZ`,e' );
define( 'AUTH_SALT',        '5ILO-o%+IvfR)*xu2zS8HvXtm:;ERn$Njz*0!9$dgqUvc*iRjbgxf8YBW2ZuQ)/.' );
define( 'SECURE_AUTH_SALT', '*GraJD5fq7 73x@gYDX YGHacV~}RlLIO($=(o1^xJyyoh/x;]a9FU((A9CJRZ6:' );
define( 'LOGGED_IN_SALT',   '>]Wj4(y$=DpcK2&Nij8X4DcWHmV1!Oj`4}Dst_Ese$$gj9sobJ44wW~ LS6JW2.!' );
define( 'NONCE_SALT',       'm!MlBV+G2/-nT (}ItkWounM>lBzxc`j$O/mWMWCJX3Bz7Qv=?]mCt#x)uJvfIoU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'gtdb_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
