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
			# Mensaje de bienvenida";
$text = "Esta página le permite configurar un mensaje que aparecerá al principio de su página inicial todo el tiempo que esté activada.<br />
Puede configurar un mensaje diferente para invitados, miembros registrados/con sesión iniciada o administradores.";
$ns -> tablerender($caption, $text);
