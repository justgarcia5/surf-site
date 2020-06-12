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
define( 'DB_NAME', 'surf_shop' );

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
define( 'AUTH_KEY',         '=$QivX5~gBUr5|`{l$?=HGCP-K?#awm8_;93BUuHa`Vg!/f[q%)UU#IC7tvK~z&:' );
define( 'SECURE_AUTH_KEY',  'H#hN5P&CWR[Y?DzxZ,<5A+]6e!_NHeXG#Eycj3Hcb%)7B&[^Dc0 M+x(/dmLgw<1' );
define( 'LOGGED_IN_KEY',    'Q_NwK>z4ntf?~fB*vF6 6h[:qx6jCEr$]/F@OLu5[qv+i*q_Yt3>~;;6qi>Z-A82' );
define( 'NONCE_KEY',        'p,ttn7K3=,!RxH+zl~GA:XDJLoUApA9|PhjT^1x)_J GwI+XbtO2ux2Fk-K b^0`' );
define( 'AUTH_SALT',        't+G4I.u#f$0Y/[/:0]^E PC@|Ng0.@jiuM#/_UIHdyODh{:J}{N l|FDl6*puwDt' );
define( 'SECURE_AUTH_SALT', '@9BO D@n|}ZILo4JDs9}@{lj4sW]?<==S:[CxYxyi)Eq)!SYK-vD3N$-VdZPEW,k' );
define( 'LOGGED_IN_SALT',   'um?Cxe`+sa/hz1NiF}@^SNYub64-K;K(KV|*9>-[8-Y;fKm&Rqi20mvU4@pAXz6U' );
define( 'NONCE_SALT',       '*>1>.6i(9sT3R}3%L+{TOkp6*{Uw~>C0*$aMfqy_XuB>Fk[0#_t@L*4f;J>XOR=+' );

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
