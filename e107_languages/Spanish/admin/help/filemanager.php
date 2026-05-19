<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       Spanish language file)
|
|       Traducción Spanish(es-ES) -> KANONimpresor
|       (https://marketingdeperformance.online/), 2026
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Ayuda:<br />
			# Administrador de Archivos";
$text = "Tiene la posibilidad de manejar los archivos en su directorio de archivos desde esta página. Si está teniendo mensajes de error acerca de los permisos para transferir archivos por favor cambie el CHMOD del directorio
al que quiere transferir a 777.";
$ns -> tablerender($caption, $text);
