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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressfirsttry');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+:8DcrdM`s3,|XPtw#2Ka;Vj*-JtJ.oN#M;Ttu3P(*.H[|f@0`ZbRYhh~98ZswZ|');
define('SECURE_AUTH_KEY',  'Ac[#&r{ufta[ZDj_<LSm0iY660LMp]t_kzghR|OD/vScjqA1xr8e[JLrpYXV#_u,');
define('LOGGED_IN_KEY',    'yf4PR,k$rX[h|_*nvU8<%uD(Aby2_+jJciC>+~/:.s<1%R{iv?F9R`}=B3TZL.t%');
define('NONCE_KEY',        'pap>ibD3c@aQN_:SP1{eJbX}tE~aigkt~&UN/|uD&o8Qy%Ak5Q9nsAV5/uOSBKzO');
define('AUTH_SALT',        't%0D3a#OR^i=1FsoB}fH<.(~R>j*RtyW+]._z:$d3;A{/0ADNNcTJaqFStI~BFAF');
define('SECURE_AUTH_SALT', 'O X6w&7O8 VVDEW[,!UvzC*.wnmZ$_L>4}Y9~1Wu)ZY$U5hE[4()nx(l_ ZLh3 O');
define('LOGGED_IN_SALT',   'e[a`[O>[NlZO.ag2Pg??9$D5;FJ]0!Bnjg#gn,U@Q[.e@2x&~,T33V<`Z4fi0+28');
define('NONCE_SALT',       '[7R!V>)Ffvhpsig#z%B WB1e`TVmGNJOmaNxJ<?HEs{}8MIi iBZjZ!gTkI{G;zs');

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
