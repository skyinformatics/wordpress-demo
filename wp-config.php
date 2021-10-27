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
define( 'DB_NAME', 'publicia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!1:)8yv0WvUu+^s0Nve=$>zO=j2?xt~4Buh{OuEU0 z9]&%.nI,m6Kvvb%4hgv>{' );
define( 'SECURE_AUTH_KEY',  'R)=A1!tDI2<_iNl?y:15_C,:BQr%qz]a5,wUJQ0W%2$MX),zFX,52zuDEdP5ym1-' );
define( 'LOGGED_IN_KEY',    '5{x}^5G!c!0~TSMe=~B%bCW<|q{?.5hFqMO{/(q/|YtAKpv]2*ElX<Fhh0(0uejZ' );
define( 'NONCE_KEY',        'M!9zOXolw^$$7GZtN#dra)<YHOFnL.mT;i-<M E;n@kJ#o#::bvXqu(*doX!Th8G' );
define( 'AUTH_SALT',        'izzpdd<[R%+b01C^:p]>H*tue;=$957Rk4a<fN^OP{}[`ibSw<*Ef#nuY{1k9K1i' );
define( 'SECURE_AUTH_SALT', '-gk&o2mtq[Oc@10P $/9zS7$XQld(oDIqg kH:4nUaWnc<gnXtm#VH@;W(8?);Bd' );
define( 'LOGGED_IN_SALT',   ')W_La9oEOU)p|E)A`wyrH]g4}guc7I%oOE.FF], y@)gxt*@%],qA]S?EBT>kD82' );
define( 'NONCE_SALT',       '58_v!z5C/ND0d<31_^Jq&7=kNYZ{LliEzMjbR[~!sx+|]2!w X,+p<9^v1Ma5N0M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ps_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
