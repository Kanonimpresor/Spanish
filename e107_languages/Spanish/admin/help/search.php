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
			# Gestión de Búsquedas";
$text = "Si su versión de servidor MySQL lo soporta usted puede cambiar método corto de MySql que es más rápido que el método corto de PHP. Ver Preferencias.
<br /><br />
Si su sitio incluye idiomas ideográficos como el Chino o Japonés debe usar el método corto de PHP y desactivar la coincidencia total de la palabra.";
$ns -> tablerender($caption, $text);
