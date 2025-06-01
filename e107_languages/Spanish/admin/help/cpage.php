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
			# Páginas y Menús Personalizados";
$text = "Desde esta página puede crear menús o páginas personalizada con su propio contenido dentro.<br />Los menús y las páginas están vinculados para tener un menú de navegacióbn a las página que desea. ";
//$text="Mire en <a href='http://e107.org/e107_plugins/docs/doc.php'>http://e107.org/e107_plugins/docs/doc.php/Using107--->Content--->Using Custom Pages and Custom Menus</a> para una explicación de sus características.";

$ns -> tablerender ($caption, $text);
