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
			# Publicación de Noticias";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
	$text = "<b>General</b><br />
El cuerpo se mostrará en la página principal; el contenido extendido será visible haciendo clic en un enlace de 'Leer más'.
<br />
<br />
<b>Mostrar solo el título</b>
<br />
Activa esto para mostrar solo el título de la noticia en la página de inicio, con un enlace clicable a la historia completa.
<br /><br />
<b>Activación</b>
<br />
Si estableces una fecha de inicio y/o fin, tu noticia solo se mostrará entre esas fechas.
";
	break;
  case 'cat' :
	$text = "Puedes separar tus noticias en distintas categorías, y permitir que los visitantes vean solo las noticias de esas categorías. <br /><br />Sube tus imágenes de iconos de noticias a ".e_THEME."-yourtheme-/images/ o a themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Configura varias opciones relacionadas con las noticias<br /><br />
	<b>Columnas de categorías de noticias</b><br />
	Requiere que el tema lo soporte para poder seleccionarlo<br /><br />
	<b>Noticias a mostrar por página</b><br />
	Para la página principal de noticias; muestra los ítems en formato no extendido.<br /><br />
	<b>Noticias a mostrar en el archivo</b><br />
	Establece el número de publicaciones de noticias que se mostrarán solo como título en cada página de noticias (incluidas en el total anterior).<br /><br />
	<b>Activar el editor WYSIWYG</b><br />
	Requiere que los usuarios que puedan enviar noticias también puedan publicar en HTML.
	';
	break;
  case 'list' :
  default :
	$text = 'Lista de todas las publicaciones de noticias. Para editar o eliminar, haz clic en uno de los iconos en la columna de \'opciones\'. Para ver la noticia, haz clic en el ID.';
}
$ns -> tablerender($caption, $text);
