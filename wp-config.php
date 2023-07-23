<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "alia3751_smk" );


/** MySQL database username */

define( 'DB_USER', "alia3751_smk" );


/** MySQL database password */

define( 'DB_PASSWORD', "M0uFyP?&\$b-y" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'L,UeI.D3j0lMTSb%;JJl;5HWNr*vSX2S}!)*O[w}-ssr#(%hZ8[:.$QG|65?CuUr' );

define( 'SECURE_AUTH_KEY',  'o&tP  8b>Jv~ycfMkzY@>9Lua@1X@BJ LFb1R!I.A;^ +fa$bpFlWbx^Og~=+>;_' );

define( 'LOGGED_IN_KEY',    'eDhUJr]1r{/bJt^` 0NyHgSBYk[hI/*QH!V8PLLlY]vBPO)uR7*%@@Ole}B;v`j=' );

define( 'NONCE_KEY',        'fRSBl9oQF,jXfg!gm&B$IG+YHlOlLt2a{{.VO6:FIT!}>[^ZWgxCbCT~Y)7:&FH%' );

define( 'AUTH_SALT',        '*y<Ze.&|`^oZhp#cZ,tXkA8Pt*;~d*%B.Df&[HPP*Q(`4]<bHJf4(o<j&DR3M2(*' );

define( 'SECURE_AUTH_SALT', 'mn} Oz YjlCJyIbcm{7(lu?g{<YHj04)6V*#sqED!AC4L&[(f6@R[Gr_FN7Y}RUT' );

define( 'LOGGED_IN_SALT',   '-@ r}~%}/[>dCd38;M{%f>+^[/U}[^*SX:V=c4%GDlq+&s@|y<2$}s  S{_(9Hf3' );

define( 'NONCE_SALT',       '+PTcvF&/G-:7l0bS-/iwlw].!jHlV%5#39DI5@S~PQIo{UvVq746HtGPqX)4Ad9M' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

