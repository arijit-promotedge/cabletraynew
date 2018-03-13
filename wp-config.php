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
define('DB_NAME', 'cabletray');

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
define('AUTH_KEY',         'LzpfOB1<P&*i!T<4V|`f+&Uc5jG.yyakPKdt/!~]8S)%WXxxg(3sIK827[k)@>/_');
define('SECURE_AUTH_KEY',  '%{4iKXv1Tfo^K*~Z-mMd?mLo:?Ec(nhw?XZnS|y,,!}81ds,:05nP{w7A2dhj5~}');
define('LOGGED_IN_KEY',    'i[O}}{e<j#eA2S8W3.$I-o|oKbgvbs(vp~9jn#xA`K4!|`8)WQFQYK$r`n5J>yWG');
define('NONCE_KEY',        ']YY,qaSs=x^USODnCf`RVGL|u5T^GVW%J RXNe6mm# LvAgh&u#b#T/[NZZ:|`]`');
define('AUTH_SALT',        't0Mj,&McIOW|6jZtHSS {B$3>;%Tij~z#y#j=9:]NzBYC~,} $oSA[TjIlzg91LO');
define('SECURE_AUTH_SALT', 'uY;nVLxdAdRAd*3M~K4nh8cmu2f~~M2zt-]/b=btQwKv1_#Hya@Wi#xw.yXT-,qj');
define('LOGGED_IN_SALT',   'u[tOVJx8xLM(1rY,A?=(ButyjmOn+#7Lpqs[=8b#,V<L7.m2/o;-Zqhko]LPOPi}');
define('NONCE_SALT',       'f4RU1+w@r#n^WUuEu^!HFUXX4L_{hZmc`$U]s:va!!Scow)G!]WBe:3RIU9D4=Y6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ct_';

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
