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

# Enable to download themes and plugins on MAC
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'learncustomtheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
/** If you are using MAMP - then you should change the pwd to root */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',8sH7|H)8[)x>o/xCAZA).;R_hNCXb[rY5&E9X0] qa`6dws6BQuN;]4eq+Sf--K');
define('SECURE_AUTH_KEY',  '?7^!`YCnFY2dD}Z4U~j tvI%Xb-9z]K@q%6L/JDwC#-o]N[>j(Fn+bN+N&W^lejN');
define('LOGGED_IN_KEY',    'Y+vwPRJE}qRBp[SWS)`6E4k -e xmg^{`G0=ursBJ455tq#7bU|U.(Qc-htNy91Z');
define('NONCE_KEY',        'Yr|i2FW@W,I36l-Q9/jG:miEl:=9jY*kvZO `I{l}(8~?TAo{RWwc>&qX0F1Oo*{');
define('AUTH_SALT',        '#FKyflKavI@+KK[_*yJv?(g^Ud>@>f.[Ac+]$rG+dY8F@ArDkc0~pwJ#k|m0n&J4');
define('SECURE_AUTH_SALT', 'b-d:Kfm]z-|%oq@.tK`dC+oH(8q,wy%3b/^lA17GBE8nhqr.QGBK),M(+xD>cj|O');
define('LOGGED_IN_SALT',   '4i=OWl#:GkG}N@@t5@Iq||3N>#u=zn}q?Od6Lh7$^w4t1[+ 3%KSLN-NsO;4i20D');
define('NONCE_SALT',       'gxF&R|Q7SV*``&6c@8u5+WO)6#&Ty-P?sc5z$&q-vc~|_^H^>IJ:~(]5udTZ3::#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'learncustomthemewp_';

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
