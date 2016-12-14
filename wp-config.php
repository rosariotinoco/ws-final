<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_final');

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

define('AUTH_KEY',         'x?f4P`wk[$3ORR7Hh2HE2G-E4,/ 7t2x^(0F,Z&Yjzrvy2f4Q;zB]wWF_#}s{]Zl');
define('SECURE_AUTH_KEY',  'qI6Np,Y>F1`VaJ873}Gl+3RMXj#j  S?SCce+::8 x{B,f</U+.(cOGg(<Dt/. _');
define('LOGGED_IN_KEY',    'T2ej*nM|G ]EB-%N|S2Uxl9]:+*Ek[HLpfI#wlQl|fe^Uz,%}yF|Q6YQh|#KdgAV');
define('NONCE_KEY',        'z<NoR)E6Vk9UR<E+J$g Ldio~<j%&@>+cZi4^|8EfL 9,=X }oZ(lu?%xB;%?u/S');
define('AUTH_SALT',        'tAPFg0qWY<,fQdH!|@n/?gLE|fWpY+3fhKS[+@dg?IF6%T7u[{vNn<cT10;n=n-`');
define('SECURE_AUTH_SALT', 'rg0Pi> t1kO(z:/=49+X-nP=z(|W(SoU=h^m1/S-x|}8>e|T:++g]`!$7oZG,Sr.');
define('LOGGED_IN_SALT',   '+T=>HR|EI3uMAxSh6eh#,.ysboQ6+^6@T-ACB1r6WLpI^a&K|&(s>(/=<$`-~`M_');
define('NONCE_SALT',       '-j#i-Ki=Eq$L9,&ea0nTNN0cZOEDgw*4-iB<gOg>*8]UAT{mgRlVp<4ff}@$*#UL');


$table_prefix = 'wp_';

// turn debuggin on
define('WP_DEBUG', true);




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
