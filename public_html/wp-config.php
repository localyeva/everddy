<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'everddy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'f$& Hyz=N9Hb x[!u-7|1lRVqE<f4(T$d{vA]bi?`3F $RwO=Qcb,sZ|N(Y3L@mz');
define('SECURE_AUTH_KEY',  'f 5.YK+qmv;ki6-A3IU*f]p~O@U-wBSp=J`TKeO RG*vG25JH-dy8LqW5R&$[@|S');
define('LOGGED_IN_KEY',    'r^W8LD2bX&=q_Jze:NWxG/%8(Wf1Tk81Zn2ay/T--MLlq,-`+7mV5VC:=MtN}A&N');
define('NONCE_KEY',        'gl H-K,`;-+zB6fALbkn0]B{_j&CGwZQmAR:@Pfzih5}K,{U#DeUoV/7`m1Y#V?t');
define('AUTH_SALT',        '$-74~L>pUJvKdk46:^(V4,8-E9p@o4.o2a>:u|SMy+B}*q-;7L8;dD5iE2MDEHWV');
define('SECURE_AUTH_SALT', '7V&LJ|3i[H|Y=^FOV,Q+~f$.#kwW?qIT1#(Nz0I6M0`oaz}B3+*s#>ez/,>xMcv/');
define('LOGGED_IN_SALT',   'SmoS6D7%[EI6K%uqc|;4VXqIe2{+??p*c,=t6(0sDz`ncVtg(n@|]kY ;F(f%e $');
define('NONCE_SALT',       '0b#C<#oSr|U8hga }UH|+FR759_qr?d 5Yv-&o_Z=rKjq:3UVh-_Ff9|!b<JL|AC');

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

define('FS_METHOD', 'direct');

// Disable Plugin and Theme Update and Installation
//define( 'DISALLOW_FILE_MODS', true );

// Disable all automatic updates:
// define( 'AUTOMATIC_UPDATER_DISABLED', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
