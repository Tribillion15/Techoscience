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
define( 'DB_NAME', 'Techoscience' );

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
define( 'AUTH_KEY',         'juq.#NC6Hth0J-iE)zd*3P>,Tv-K4:Le5ktRi_3ya=!gY[WDkt{C| u<-ack3_*n' );
define( 'SECURE_AUTH_KEY',  '&{eTF -MbzglW-nqB_qsME5`A@>SYsT[knIC9)3WL![YMqqOr$~7EN| `+sn1NUu' );
define( 'LOGGED_IN_KEY',    '{k[Rrd d!<5pRqFm?%I+5=c_;,h|/ 7:;`f1fvisx:<,N2|Rn~VK>`-Ys9hB0:B<' );
define( 'NONCE_KEY',        '2J Kn IF]?g*JuZ8DC4Su80q&!7LbsVQ07^`#lNCsWe/hA!m_qFP.S-% -za(2I>' );
define( 'AUTH_SALT',        '(nI8 hz7.}<1;OHU#Gh>/`qX[.N{Q7+AB*~dp<Tq(oK:u~w7pRbRMeuLoRRf#srh' );
define( 'SECURE_AUTH_SALT', 'eDYG;L,+hgk+1FC2;CK63-f.Fb9R4 #Nbu*_K?,L&0hQd(~(*Q|YlmCQ./%5?E-8' );
define( 'LOGGED_IN_SALT',   'E4b4WB5v<9TbuT1)H1m`a^_yx=D2_!mP_!Hnm;kMQ)H[*S}/0SB3bRq!_Xe%yw 0' );
define( 'NONCE_SALT',       '&HzaTs56{;fMg_>fi1Zs,(0|><|=H1N9QoS8jLFd!gv+z:-~xpRpfV^4ZTg[aX27' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
