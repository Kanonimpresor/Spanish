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
			# Descargas de Archivos";
$text = "# Por favor, copie sus archivos en la carpeta ".e_FILE."downloads.<br /><br /># Sus imágenes en la carpeta ".e_FILE."downloadimages.<br /><br /># Sus imágenes (Vista Previa) en la carpeta ".e_FILE."downloadthumbs.
<br /><br />
Enviar un archivo a la zona de descarga:<br /><br />1)Crear una categoría principal,<br /><br />2)Crear las subcategorías dentro de la categoria principal correspondiente.<br /><br />3)Activar las descargas dentro de cada categoría.";
$ns -> tablerender($caption, $text);
