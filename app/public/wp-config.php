<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '!*X.1e9`N$sbQoXW`r;*?^{D>hD:{PTSO;CzP2>iI&Ci|df=ty!o`/R_r[Lx8gs`' );
define( 'SECURE_AUTH_KEY',   '`V{9=NjW8{VVucbB[femFn]4qYz97L(%S-UXIuxYpo@{>U-?mZq$<I5#xZf Ue~H' );
define( 'LOGGED_IN_KEY',     '),rYFrHFDb<?qx&Fx{jo=F%Va}D:h[|RwM>AFk[IGt-fV@%Qd~Z^5N>PE)!9ubPq' );
define( 'NONCE_KEY',         'kC PYrXl c,BC4:KN7%.an0UhpXSL N{UUO$N.&ms^el)|FP$R7RBHx/F?5_CP?,' );
define( 'AUTH_SALT',         'PxX(G3#5ald^|F)IcJ^Ih#f.nnQ,m9VpUHp8o`{6}P)1rv.-GZ&Bw&peI?tT(^S|' );
define( 'SECURE_AUTH_SALT',  'JRp9.=bn15Ogv~/~#3%AaV).zXLM4 D^tz51-M^iPHYK.mI(]fgSh/Ns;oo;Oc!<' );
define( 'LOGGED_IN_SALT',    'p2xc-TrMqazcT]fDbW+4*{KbvxA=blyPT7?K*|tm$@W[CGV^1!l+#~<YE[3L,H%a' );
define( 'NONCE_SALT',        '#UHL%>S x}_7@y.;ct;vCr,n6G/dk#KlE*,RhEBj`]A80`WB`@Nh^tQ5C{9ryGP%' );
define( 'WP_CACHE_KEY_SALT', '&*<c^T_R<iZU&qYnU(z9Ezc.Pc0|EX1KG[hlC2m4KzU#<~X4L/CE^DfL3#Se?tK`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
