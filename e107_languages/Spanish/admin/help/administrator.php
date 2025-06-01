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
			# Administración del Sitio";
$text = "Utilice esta página para editar o eliminar las preferencias de administradores del sitio web.
		Los administradores solo tendrán acceso a las características marcadas<br /><br />
		Para crear un nuevo administrador, vaya a la configuración de usuarios y cambie el estado a admin en el usuario seleccionado.";
$ns -> tablerender($caption, $text);
