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
define('DB_NAME', 'demo');

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
define('AUTH_KEY',         ',M6OirU_3Umk9BK.)]zu#(Bi;sLTOy4<Pap`Cv`0gA;[QoIio0#_Ioktn/UMY3r%');
define('SECURE_AUTH_KEY',  '74E,)sC#U{tr[c*&am,[,N]stQdKa}v?n?;MCC08`SegbAWLsg]#f9CIAysWWnH4');
define('LOGGED_IN_KEY',    '~*o>)(}N*bD-s?V,H8gmB==Rs zV!*<mpYAeT]EgHT]Qi2roQjK0FAyz28-y_#_i');
define('NONCE_KEY',        '4g-1h9yKc{TIulk1IGr(*Kz-pX4qgE*[_T>2;HupzH(on7?M/`n]-3SI2r!B+bi[');
define('AUTH_SALT',        'cIi|>i5#t_<6.D35YayZrHoFE5LQ+>yqPZcThMeW6EZ[=i[P1qB$yK!,,$p1)tFn');
define('SECURE_AUTH_SALT', 'sBoHS68;8[Kv[%w.UH<x7b5&4wS=(6na-;W7a9]z+6qq:S#_R9+{Br7c^=Q4JRdg');
define('LOGGED_IN_SALT',   'K[>RHP>Zvpj vv:}e{.7#,_T6C;l/h*u[YQm`;a;O6oc+I+>79>$jv03o+hbg-xV');
define('NONCE_SALT',       '6y:zci26{HKsa<7h%JU;zh5j::reaLTn/Dd><<|~Y,rFk( ?SD.u$JY,Gr{n)!jc');

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
