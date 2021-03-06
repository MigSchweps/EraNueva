<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eranueva_basetest');

/** MySQL database username */
define('DB_USER', 'eranueva_user1');

/** MySQL database password */
define('DB_PASSWORD', 'Radio3');

/** MySQL hostname */
define('DB_HOST', 'mysql1.alwaysdata.com');

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
define('AUTH_KEY',         'vC-lw+|2ivp;;LM=jX,qIgbu1u*/d-pu(A]_oy({gaN,$;Z$F? ?_85!#tAah!6?');
define('SECURE_AUTH_KEY',  '{^tES[hCKk<?>B5#Qv-xnQpCQT<dZjSE$z;)F[gh~q+d:BuMK)0G/L=@T&+}1Kf ');
define('LOGGED_IN_KEY',    'UY-{EuM-}^wwR4SE&-W#+uQK(tjt.6Ga/,d9`mgi<kGF~Q#{y-i=Qb*;|}qPW_y9');
define('NONCE_KEY',        'NM$dkWv9ZaWsSb3af$B9{.%ak?>Z!giNW.Rd~Q=@yE&(Vz|3[gwaD.q6=.^a]-DS');
define('AUTH_SALT',        'Gvrtw~f:dAR7pY=vkQ#T-O9489Q%Kx>wWXL<AU[vz_qNGdC?d3mo&&~9VIJMov<u');
define('SECURE_AUTH_SALT', '_$sHeN*XYe,vSE|xE.?Z/p#.<<ueZaEV$bJ@MEpVJ>+sO!W[*@@Cd^D@|~R)0(>(');
define('LOGGED_IN_SALT',   '<_Ean4#q |c_or6cK][Mb{:P^*P9:Mz8GU6n0|B9uz=t>;%5~B`v))7=0@<N`L.f');
define('NONCE_SALT',       's=yQ27)S;B1)p&Df}dV3rg@`1;5vcsFf*<?[A33?E//UPJ%kLCT0^OopN$8D{=Tv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
