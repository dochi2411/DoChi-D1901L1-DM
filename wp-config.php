<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'dochi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'T/<!S#D184!N38umO_}a[K/.bSd@uvf_BJN}vwyeQ?c^+Q10}7DD/jt:Y5yi5oPU');
define('SECURE_AUTH_KEY',  '=E_ 8~fmfGDFmLHaF+OablxZ;$0Y3*d]pGV.%Jm?T3+FY?` +&/F/BPNtX^*F<u#');
define('LOGGED_IN_KEY',    'kLkR;!e2Eq0jR|ik&o]L8jaItkSL||W/RN^l6-S>h%/qe=CC^^zo?lSb+e!*6SH2');
define('NONCE_KEY',        '@t+ldzCDZfQ<p@,.xW`3lmxK*n)Pn=,cx$DWNMt`{ld3@gMs#0g!K|7Q.IGn7kDD');
define('AUTH_SALT',        ';E7f[F+TH40bU:g{40<:;im%U31Jck,_:*!3B3$Fr>%tLGsqwkB<Z!w?G 1)3)U~');
define('SECURE_AUTH_SALT', 'Pq57-f=|zdL]-U6<RXp?[mUHJE;`y^9vPrjx[Rx9!a1h4^y+ojMKW:}pu.V/`Fkd');
define('LOGGED_IN_SALT',   ')UJ[mrl]B) s1RP*Io(=6&eL&/9t].uGyL:K8y;%r3%F9xm!I!Bp}.]of+Ch}{5j');
define('NONCE_SALT',       '!>uS}+&07X*rWJx#Mqr|r]RrDVw#XvH43-jcNQcIwNqQ*V1*OZpk)Yna.U85d=gg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
