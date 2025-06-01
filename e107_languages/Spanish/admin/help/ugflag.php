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
			# Mantenimiento del Sitio";
$text = "Si está actualizando e107 o necesita que su sitio esté fuera de línea por algun momento, solo marque la casilla de mantenimiento.<br /><br />
Sus visitantes serán redirigidos a una página explicandoles que el sitio está en reparación o mantenimiento. Cuando haya finalizado desmarque la casilla para retornar el sitio al estado normal.";

$ns -> tablerender($caption, $text);
