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

if (!getperms("2") && !e107::isCli())
{
	e107::redirect();
	exit;
}


$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();

if(isset($_POST['reset']))
{
	for($mc=1;$mc<=5;$mc++)
	{
		$sql->select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
		$count = 1;
		$sql2 = e107::getDb('sql2');
		while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql->fetch())
		{
			$sql2 ->update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
			$count++;
		}
		$text = "<b>Menús reiniciados en la base de datos</b><br /><br />";
	}
}
else
{
	unset($text);
}
$caption = "Ayuda:<br />
			# Gestión de Menús";
$text = "El Gestor de Menús te permite colocar y organizar tus menús dentro de la plantilla de tu tema.

[u]Pasa el ratón[/u] sobre las subáreas para modificar los elementos de menú existentes.

Si ves que los menús no se actualizan correctamente, hacer clic en el botón de actualizar que hay abajo puede ayudarte.

[html]
<form method='post' id='menurefresh' action='".e_SELF."'>
<div>
".$frm->admin_button('reset','Refresh','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('fa-search')." indica que la visibilidad del menú ha sido modificada.
[/html]
";

$text = $tp->toHTML($text, true);
e107::getRender()->tablerender($caption, $text);
