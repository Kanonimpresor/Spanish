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
			# Sistema de Cache";
$text = "Si tiene el sistema de cache encendido, éste dará velocidad a su sitio y minimizará la cantidad de llamadas a la base de datos sql.<br /><br />
		<b>¡IMPORTANTE! Si está haciendo su propio tema, desactive el sistema de cache, porque cualquier cambio que realice no será reflejado.</b>";
$ns -> tablerender($caption, $text);
