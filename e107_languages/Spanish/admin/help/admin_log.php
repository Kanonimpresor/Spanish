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
			# Registros del Sistema";
			if (e_QUERY) list($action,$junk) = explode('.', e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Filtros de datos</b><br />
  Puedes especificar varios filtros que limiten la cantidad de datos a visualizar. Estos se guardan en una cookie hasta que cierres sesión.<br />
  Los filtros de fecha/hora de inicio y fin deben activarse mediante sus respectivas casillas de verificación.<br />
  Otros filtros se activan cuando hay un valor en el cuadro.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Esta página muestra la actividad de los usuarios que has elegido registrar.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Esta página configura varias opciones para los registros del sistema.<br /><br />
  <b>Configuración General</b><br />
  Establece el número de líneas en la visualización de registros.<br /><br />
  <b>Registro de Administración</b><br />
  Este registro conserva eventos hasta que se borren específicamente; usa esta opción para eliminar eventos antiguos.<br /><br />
  <b>Registro de Auditoría de Usuarios</b><br />
  Este registro rastrea la actividad de los usuarios. Para usuarios registrados, solo se rastrean aquellos en la clase especificada - puedes establecer esto como 'Miembros' para rastrear 
  a todos, o crear una clase de usuario específica para el registro. Luego determinas los tipos de actividad que deseas registrar.<br />
  Los eventos de registro pueden rastrearse por separado.<br /><br />
  <b>Registro Rotativo</b><br />
  Este registro se usa para rastrear eventos anormales, ayudar en la depuración, etc. Puede desactivarse. Los eventos se eliminan automáticamente después del número establecido de días.
  ";
  break;
case 'rolllog' :
  $text = "El registro rotativo muestra varios eventos anormales que no están registrados en otros lugares. También puede usarse para depuración de código y monitoreo.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Esta página muestra las descargas de los usuarios.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Esta página muestra comentarios de usuarios, con opciones para seleccionar por ID de usuario, tipo y fecha. Los comentarios no deseados se pueden eliminar.";
  break;
case 'detailed' :
  $text = "Los registros principales del sistema registran el tiempo con alto grado de precisión (si el servidor subyacente lo permite), y esta página te permite inspeccionar entradas
	que ocurren dentro de una ventana de tiempo relativamente pequeña. Las entradas del registro de administración, registro de auditoría y registro rotativo se combinan, para que puedas ver las relaciones 
	precisas entre eventos.";
  break;
case 'adminlog' :
default :
  $text = "Esta página muestra la actividad de los administradores.<br /><br />
  (Actualmente, el registro todavía se está implementando en el código, por lo que la lista no está completa.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
