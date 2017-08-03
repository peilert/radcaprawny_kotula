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
define('DB_NAME', 'radcaprawny_kotula');

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
define('AUTH_KEY',         '41(/CL}Vuys>`j5@]CXr;g:ZUAei>nH&l ar+E@ZDFF{fKjX|=_uZ>`Jhr@[$2SA');
define('SECURE_AUTH_KEY',  '8#v)cHI|m>IseGE+IE!j~u(XCinwm3n?N!Q&:Ur2pji=F?,|H}iJz^p{J%O5XP,o');
define('LOGGED_IN_KEY',    'K*l=Ig[@K/8C/Z PS(r{Yf>+@/55/;9_Eov&n~bKR+L&Pv%TjLL}&XGZSi]{oITr');
define('NONCE_KEY',        'qT@0.n*g+U({zXlH1W;-`pcERz4`F{%q}:?}m:Q6RL->fM:}rp([fcXH.lqx}Z6>');
define('AUTH_SALT',        'v_8W`O-%Y{&<cfv),|usu4/&6eK6hO!grCSsSx6,g2[t}J@Vm8[_ia{r_C4/@!3K');
define('SECURE_AUTH_SALT', '@}KOp>[Q1H{OD4qw=/&:3vO=%}]nGc9wa50S-L@{r4nOnZ)yq#9ri!sDq~KgfD_N');
define('LOGGED_IN_SALT',   'TbI1N]xqPQ5113ZXVTA8,z%K  ;Fk<PeK>Q/n;=JE]e3T7HmF9!<?vhqE~-J33Io');
define('NONCE_SALT',       '_u9`.nQdZ,Zz^ac`|a)A6$2CPesRG{-t]UUKNON&GV9*2il$}?xpxwF,eOoh2C5X');

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

