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
			# Gestión de Usuarios";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Esta página te permite crear un usuario, que será automáticamente un miembro normal del sitio, con las clases de usuario que le asignes.<br /><br />
	Si marcas la casilla 'Enviar correo de confirmación con la contraseña al nuevo usuario', el nombre de usuario y la contraseña se enviarán <b>en texto plano</b>,
	por lo que el usuario debe cambiar su contraseña al recibir el correo.";
    break;

  case 'prune' :
	$text = "Elimina en masa usuarios no deseados de la base de datos. Pueden ser aquellos que no completaron el proceso de registro, o
	aquellos cuyos correos electrónicos fueron devueltos. Cualquier mensaje en foros, comentarios, etc., se mantiene y se marca como publicado por un 'Usuario Eliminado'.";
	break;

  case 'unverified' :
	$text = "Muestra los miembros que no completaron su registro. Las opciones son, en general, las mismas que en la lista completa de miembros.";
    break;

  case 'options' :
	$text = "Establece varias opciones que afectan a todos los usuarios.<br /><br />
	<b>Permitir subida de avatar</b><br />
	Si está activado, los usuarios podrán subir un avatar propio, que se almacenará en tu servidor. Esto puede tener implicaciones de seguridad.<br /><br />
	<b>Permitir subida de foto</b><br />
	Si está activado, los usuarios podrán subir una foto propia, que se almacenará en tu servidor. Esto también puede tener implicaciones de seguridad.<br /><br />
	<b>Seguimiento de usuarios en línea</b><br />
	Debe estar activado para hacer seguimiento de la mayoría de la actividad de los usuarios, incluyendo el recuento de miembros en línea. Aumenta considerablemente la actividad en la base de datos.<br /><br />
	<b>Información de los miembros</b><br />
	Determina qué clase de usuarios puede ver la lista de miembros.";
    break;

  default :
	$text = "Esta página muestra una lista de los miembros registrados en tu sitio. Puedes actualizar su configuración, darles permisos de administrador y asignarles clases de usuario,
	entre otras cosas.<br /><br />

	El orden de clasificación se puede cambiar haciendo clic en el encabezado de cada columna.<br /><br />

	<b>Clases de usuario</b><br />
	Las clases de usuario se pueden asignar de dos maneras: directamente haciendo clic en la columna 'clase de usuario', o seleccionando uno o varios usuarios y usando las opciones en lote
	al final de la tabla.<br /><br />

	<b>Editar</b><br />
	Ver y editar toda la configuración de este usuario.<br /><br />

	<b>Bloquear/Desbloquear</b><br />
	Determina si el usuario puede acceder al sitio.<br /><br />

	<b>Activar</b><br />
	Activa a un usuario que normalmente habría respondido al correo de activación.<br /><br />

	<b>Reenviar correo</b><br />
	Reenvía el correo de activación al usuario.<br /><br />

	<b>Probar correo</b><br />
	Comprueba la validez de la dirección de correo del usuario (no envía ningún mensaje).<br /><br />

	<b>Eliminar</b><br />
	Elimina completamente al usuario del sitio (cualquier mensaje en foros, comentarios, etc., se mantiene y se marca como de un 'Usuario Eliminado')";
}

$ns -> tablerender($caption, $text);
unset($text);
