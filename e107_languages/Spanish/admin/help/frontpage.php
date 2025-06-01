<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       Spanish language file)
|
|       Traducción Spanish(ES) -> KANONimpresor
|       (http://www.kanonimpresor.com), 2025
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Ayuda:<br />
			# Página Principal";
/* FIXME - Hablantes nativos de inglés: ¿qué debería mantenerse y qué debería eliminarse?
	<p>
		La lista de reglas se escanea en orden, hasta que coincida con la clase del usuario actual.
		Esto determina entonces la página principal (de inicio) del usuario, así como la página que ve inmediatamente después de iniciar sesión.
	</p>
 */
$text = "
<p>
	Desde esta pantalla puedes elegir qué mostrar como página principal de tu sitio; la opción predeterminada es noticias. También puedes decidir si los usuarios deben ser redirigidos a una página específica tras iniciar sesión.
</p>
<p>
	Las reglas se revisan en orden, buscando la primera en la que el usuario actual pertenezca a la clase especificada en la regla.
	Esa regla determina la página principal (de inicio) y cualquier página específica posterior al inicio de sesión. Si ninguna regla coincide, se establece news.php como la página de inicio.
</p>
<p>
	El usuario es redirigido a la &quot;Página posterior al inicio de sesión&quot; especificada (si se ha definido) inmediatamente después de iniciar sesión.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');
