<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ladies_learning_code');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '78k|WO>cAM[9IYnSJgu`uArj-]ri|pb/b+phIndVt*-@}z2z*i5=7_kT6;n-c`W&');
define('SECURE_AUTH_KEY',  'R8+sr#Vs{naMtRHQ--zAl$uq<C6iL3^Ydp}-(v ta=:QQ57A[]LC.Xrl]}brv6#_');
define('LOGGED_IN_KEY',    ',UBsTKlQ#Px^g9h0@9-M|eayhc6M66CK?ddzY/Jn3w`qkHcH,?Q Nd@+^a:zdw<S');
define('NONCE_KEY',        'zE.r.HgB.|?eQFLj!0.=WP;O/2X<ORLQ<vA%^6bpxk{~gNIE4N;/Bh6Ag[@_+-*j');
define('AUTH_SALT',        '6fHv!zg6J9VF6 MSD}[_{~P(<-,3mC~s914|+o|f.6SO,a+aiR_A3.1Hb#;UTY5-');
define('SECURE_AUTH_SALT', '+QE9-)J,_DWS)09v~Td%`%xO;,wn|:KQ0T t0o7R;ZPR?RZd_]Tb3Ti+RCrsI|sP');
define('LOGGED_IN_SALT',   'K{h-&VP:(fafODqpA[5|qN5K-qHba.@%cQ*HIZfAR0m|3s7*kX+%hbbUVI/%M &n');
define('NONCE_SALT',       '>]fz3nLX?zRt_b:0p7z1<Eh/fxB<]_ |dS~s;F6&=|n5PMcz1 eG&b<8IF4QWjYL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
