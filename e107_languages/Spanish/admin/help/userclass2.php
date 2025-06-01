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
			# Clases de Usuarios";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Establece las clases a las que se asignará inicialmente un nuevo miembro del sitio.
	Si tienes activada la verificación, esta asignación puede hacerse cuando el usuario se registra o cuando se verifica su cuenta.<br /><br />
	  Recuerda que si estás usando clases de usuario jerárquicas, un usuario será automáticamente miembro de todas las clases 'superiores' a cada clase seleccionada en el árbol.";
	break;
  case 'options' :
	$text = "Las opciones de configuración te permiten crear y eliminar la jerarquía de clases por defecto. Puedes ver el efecto mirando el árbol de usuarios.<br />
	Esto no eliminará la información de tus otras clases, y podrás modificar o quitar la jerarquía más adelante.<br /><br />
	Solo deberías reconstruir la jerarquía de clases si se produce una corrupción en la base de datos.";
	break;
  case 'membs' :
    $text = "Ahora está en la página de administración de usuarios.";
	break;
  case 'debug' :
	$text = "Solo para usuarios avanzados: muestra la jerarquía de clases, las clases asignadas y las clases a las que tienen acceso los primeros 20 miembros del sitio.<br />
	El número que aparece delante del nombre de la clase es su ID único (número de referencia). La clase 'Todos' tiene un ID de 0 (cero). e107 utiliza estos IDs para referirse a las clases internamente.<br />
	Después del nombre de la clase se muestra la visibilidad y posibilidad de edición de la clase – por ejemplo: [vis:253, edit:27]. Esto significa que la clase solo será visible en la mayoría de los selectores si el usuario actual es miembro de la clase 253, y solo podrá editar su pertenencia a esa clase si pertenece a la clase 27.<br />
	Finalmente, tras el '=', aparece una lista de todas las clases que están por encima o por debajo en el árbol, además del ID de esa clase. Así, un usuario que pertenece a una clase concreta también será miembro de todas las clases que aparecen en esa lista.<br /><br />
	Para ayudarte a entenderlo, se muestra la pertenencia a clases de los primeros 20 miembros. La primera entrada en cada línea indica las clases de las que el usuario es miembro. La segunda entrada muestra todas las clases de las que es miembro tras aplicar la herencia. La tercera indica qué membresías puede editar.";
	break;
  case 'test' :
  case 'special' :
    $text = "¡¡¡No uses esto!!! ¡¡¡Solo para desarrolladores!!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Puedes crear clases o editar las ya existentes desde esta página.<br />
         Esto es útil para restringir el acceso de los usuarios a ciertas partes de tu sitio. Por ejemplo, puedes crear una clase llamada TEST,
		 y luego crear un foro al que solo puedan acceder los usuarios de la clase TEST.<br /><br />
		 El nombre de la clase se muestra en listas desplegables y similares; en algunos lugares también se muestra la descripción detallada.<br /><br />
		 El icono de la clase puede mostrarse en varias partes del sitio, si está configurado.<br /><br />
		 Para permitir que los usuarios decidan si pueden pertenecer a una clase, permíteles gestionarla. Si seleccionas 'nadie', solo los administradores
		 podrán gestionar la pertenencia a la clase.<br /><br />
		 El campo de 'visibilidad' te permite ocultar la clase para la mayoría de usuarios – se aplica en algunas listas desplegables y casillas de verificación.<br /><br />
		 El 'padre de clase' te permite establecer una jerarquía de clases. Si la parte superior de la jerarquía es la clase 'Todos/Público' o 'Miembro',
		 las clases inferiores también tendrán los derechos de su clase padre, y los de sus padres sucesivos. Si el nivel superior es la clase
		 'Nadie', entonces los derechos se acumulan en dirección opuesta – una clase acumula todos los derechos de las clases que están <b>debajo</b> de ella en el árbol.
		 El árbol resultante se muestra en la parte inferior de la página; puedes expandir o contraer ramas haciendo clic en los botones '+' y '-'.";
	break;
  case 'display' :
  default :
	$text = "Desde esta página puedes seleccionar clases para editarlas o eliminar clases existentes.";
}
e107::getRender() -> tablerender($caption, $text);
