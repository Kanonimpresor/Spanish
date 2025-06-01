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
			# Bloquear Usuarios";
			
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Separador no estándar en la consulta

switch ($action)
{
case 'transfer' :
  $text = 'Esta página te permite transferir datos de la lista de bloqueos desde/hacia este sitio usando archivos CSV (valores separados por comas).<br /><br />';
  $text .= "<b>Exportación de datos</b><br />
  Selecciona los tipos de bloqueo a exportar. Los campos estarán delimitados por el separador elegido y opcionalmente entrecomillados.<br /><br />";
  $text .= "<b>Importación de datos</b><br />
  Puedes elegir si los bloqueos importados reemplazan los existentes o se añaden a la lista. Si los datos incluyen fecha/hora de expiración, 
  puedes seleccionar si se usa este valor o el definido en el sitio.<br /><br />";
  $text .= "<b>Formato CSV</b><br />
  El formato de cada línea del archivo es: IP/correo, fecha, expiración, tipo, motivo, notas.<br />
  Fecha y expiración usan el formato AAAAMMDD_HHMMSS, excepto que un valor cero indica 'desconocido' o 'indefinido'.<br />
  Solo la IP o correo son obligatorios; otros campos se importan si están presentes.<br /><br />
  <b>Nota:</b> Deberás modificar filetypes.xml para permitir subir archivos 'CSV' a los administradores.";
  break;
case 'times' :
  $text = 'Esta página define el comportamiento predeterminado para varios tipos de bloqueos.<br />
  Si se especifica un mensaje, se mostrará al usuario (cuando corresponda). Si el mensaje empieza con \'http://\' o \'https://\', 
  se redirigirá a la URL especificada. De lo contrario, el usuario probablemente verá una pantalla en blanco.<br />
  El bloqueo estará activo durante el tiempo especificado; después se eliminará en su próximo acceso al sitio.';
  break;
case 'options' :
  $text = '<b>DNS inverso</b><br />
    Si está activado, se busca el nombre de dominio asociado a la IP del usuario. Esto accede a un servidor externo, pudiendo haber
	retrasos si el servidor está saturado o fuera de línea.<br /><br />
	Puedes elegir buscar nombres de dominio en todos los accesos o solo al añadir nuevos bloqueos.<br /><br />
	<b>Tasa máxima de acceso</b><br />
	Establece el número máximo de accesos permitidos desde una misma IP/usuario en 5 minutos, para detectar ataques de denegación de servicio.
	Al alcanzar el 90% del límite, el usuario recibe una advertencia; al superarlo, se bloquea. Umbrales diferentes para invitados y usuarios registrados.<br /><br />
	<b>Período de reactivación de bloqueos</b><br />
	Esta opción solo aplica si usas bloqueos temporales (no indefinidos). Si está activa y el usuario intenta acceder, 
	el período de bloqueo se extiende (como si empezara en ese momento).';
  break;
case 'edit' :
case 'add' :
$text = "Desde esta pantalla puedes bloquear usuarios de tu sitio.<br />
Introduce una IP completa o usa comodines para rangos de IPs. También puedes bloquear correos electrónicos para impedir registros.<br /><br />
<b>Bloqueo por IP:</b><br />
Usar 123.123.123.123 bloquea ese usuario específico.<br />
Usar comodines como 123.123.123.* o 214.098.*.* bloquea rangos completos. (Debe haber exactamente 4 grupos de dígitos/asteriscos)<br /><br />
Se soportan direcciones IPv6, incluyendo '::' para bloques de ceros. Cada par de dígitos final puede ser un comodín.<br /><br />
<b>Bloqueo por correo</b><br />
Usar foo@bar.com bloquea ese correo para registros.<br />
Usar *@bar.com bloquea todo el dominio.<br /><br />
<b>Bloqueo por nombre de usuario</b><br />
Se realiza desde la página de administración de usuarios.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "Aquí puedes especificar IPs 'amigas' (generalmente de administradores) para garantizar su acceso permanente.<br />
  Se recomienda mantener esta lista mínima por seguridad y rendimiento.";
  break;
case 'banlog' :
  $text = 'Muestra todos los accesos desde direcciones en listas de bloqueo/blanca. La columna "razón" muestra el resultado.';
  break;
case 'white' :
  $text = "Esta página muestra todas las IPs y correos permitidos explícitamente.<br />
    Esta lista prioriza sobre la de bloqueos. Todas las entradas deben añadirse manualmente.";
  break;
case 'list' :
default :
$text = 'Esta página muestra todas las IPs, nombres de host y correos bloqueados. 
(Los usuarios bloqueados se muestran en la página de administración de usuarios)<br /><br />
<b>Bloqueos automáticos</b><br />
e107 bloquea automáticamente IPs por intentos de inundación o logins fallidos.<br />
Estos bloqueos aparecen aquí. Puedes configurar acciones para cada tipo en la página de opciones.<br /><br />
<b>Eliminar bloqueos</b><br />
Si estableces fecha de expiración, el bloqueo se elimina automáticamente. De lo contrario, permanece hasta eliminarlo manualmente.<br />
Puedes modificar el período de bloqueo aquí (los tiempos se calculan desde ahora).';
}
$ns -> tablerender($caption, $text);