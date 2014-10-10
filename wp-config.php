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
define('DB_NAME', 'sukeratto');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '6cTw}T6@|H_CDu9-JT*Luvn:CL|X{Gd*YAsIq.Boq-5+~2:>W.Ef%o.~@}kiY1S='); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'EjZa^l5 0|kqy=Z+j+???.q=|JbYaFx4_m%^0=lRW2wC&`siH7_6d1.&rE,^9QW?'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '.A(_Gp4N>nQ:_i19xmXSp;tC/-%O2(w$tu 5 !c57QJSHC0er|4B}/2g5^C(R]Pw'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'e+[}*3/.vC|ZS=tCY-rC/t24,]zC>eU<FiokqL9KeSQKn}K7*r^Ft-1:wL:QrzuQ'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'n{2Y=-0(Xr)UX5Z#zl85Q)xOUe~-P.e/)*xra!~vsq~5?(!6It[jAV/FPA`vSRd:'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '%a6deo5>vC6LIcg]bt3c<-#?F[g-&^NlVJ8zz$Z@+1{Z:HD{-t cB&U+%R`FlW i'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'thw|Z4]kk?riA3(YTEjZnCvUNQgQGODoN*/i|;Lj$_W!r{QoN(eEX<FWtP5b7S 9'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '5pvB({&)-7ccFk(WX.,-jj8Y3faV!46sH0@lDyALgUt#IEZ?DTMj9av[Q0%y_L6b'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
error_reporting(E_ALL); ini_set('display_errors', 1);

define( 'WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WPLANG', 'es_ES');




