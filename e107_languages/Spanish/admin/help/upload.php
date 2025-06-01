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
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
	$caption = "Ayuda:<br />
			# Transferencias Públicas";
    $text = "Los tipos de archivo y el tamaño máximo que se puede subir están definidos por clase de usuario. Esta opción genera un archivo llamado ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
		que debe ser copiado o movido al directorio ".e_ADMIN_ABS." y renombrado como ".e_READ_FILETYPES." antes de que surta efecto.<br />
		Solo se permite una definición por clase.<br />
		Ten en cuenta que estas definiciones se aplican a todo el sitio, incluso si la función de subidas públicas está desactivada.";
    break;
  case 'options' :
	$caption = "Ayuda:<br />
			# Transferencias Públicas";
    $text = "Aquí puedes desactivar completamente el sistema de subidas públicas.<br />
			El almacenamiento en archivos planos suele ser apropiado (de lo contrario, el tamaño máximo de archivo queda limitado a 500 KB).<br />
			El tamaño máximo de archivo definido aquí sobrescribe cualquier configuración establecida en filetypes.xml.<br />
			Las subidas públicas pueden limitarse a una clase de usuario concreta, pero estas opciones también se aplican a otras partes del sitio donde se permitan subidas, como noticias o formularios.";
	break;
  case 'view' :
  default :
	$caption = "Ayuda:<br />
			# Transferencias Públicas";
	$text = "Esta página muestra cualquier archivo enviado. Puedes elegir eliminarlo, moverlo a descargas o publicarlo en las noticias.";
}
$ns -> tablerender($caption, $text);
