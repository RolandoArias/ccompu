<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'compuferia');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '?x@cR-Ri4`M^p:M:`BTs- :_+LKXCpL`?,`oE3jc,rFkqq_usd!AKdNk!1T<= IH');
define('SECURE_AUTH_KEY', '8OwsO2TPm/(/QzT6F{11i=pkR)]=9|n7% zme1nYk.[nHtp]{( ,WfiPGsXC&w4P');
define('LOGGED_IN_KEY', 'm(-%t >ZkIG/D{[a3<Ebi1Y6o;|;UdNa+n)h=HLJF/]f%3r~tA0,Bx,`#^;Q!WnG');
define('NONCE_KEY', '[1Qj]9% )7v&y=L-U]A/5a`#moUZjb`4^F&5ZQcR3R5*(1}.5r8 |UIl/YF)`0EG');
define('AUTH_SALT', 'E6j?*~I6G?fT+wb+M,LuK<oi:=ex?kz-&0_sUj2bXXn|1TE2NR4)$~KPbt6!*@B?');
define('SECURE_AUTH_SALT', 'N UVA?xNU`C#z!luQ`Ay!G?2lIWE?A,n%F@{z@|mYx&=Kk?p[PKz`-&/Q<Wy5{<<');
define('LOGGED_IN_SALT', 'DC=>`drF4|P0s*Ih.]QK_J^x}zw{1H$LG#oWx^ SU2u?.&}.w>Qr~_Pt*d:lb37d');
define('NONCE_SALT', '98J-6|bvaeaD#sb=NwUaCv/$e[~u>c@>u|,sDG/g>SlSG[M+[TDaT_XKB0&i|yV@');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'fU9_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

