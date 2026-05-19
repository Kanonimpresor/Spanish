<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2012 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Language file
 *
 * $URL$
 * $Id$
 * 
 */
 
 /**
 *	e107 Alternate authorisation plugin
 *
 *	@package	e107_plugins
 *	@subpackage	alt_auth
 *	@version 	$Id$;
 */

// Algunas cadenas relacionadas con la contraseña se han movido a admin_alt_auth.php para uso genérico
//define('IMPORTDB_LAN_1', 'Tipo de base de datos');
//define('IMPORTDB_LAN_2', 'Texto plano');
//define('IMPORTDB_LAN_3', 'Joomla con salt');
//define('IMPORTDB_LAN_4', 'Mambo con salt');
//define('IMPORTDB_LAN_5', 'SMF (SHA1)');
//define('IMPORTDB_LAN_6', 'SHA1 genérico');
//define('IMPORTDB_LAN_7', 'MD5 (e107 original)');
//define('IMPORTDB_LAN_8', 'e107 con salt (opción 2.0 en adelante)');

return [
    'IMPORTDB_LAN_9' => "Método de contraseña:",
    'IMPORTDB_LAN_10' => "Configurar tipo de contraseña de base de datos importada",
    'IMPORTDB_LAN_11' => "Esta opción se usa cuando has importado otro sistema de usuarios a e107.
							Permite aceptar contraseñas codificadas en el formato no estándar seleccionado. 

La contraseña de cada usuario se convierte al formato de e107 cuando inicia sesión.",
    'LAN_AUTHENTICATE_HELP' => "Este método de autenticación se usa <i>solo</i> cuando has importado una base de datos de usuarios a e107 y la contraseña está en un formato incompatible. La
  contraseña original se lee de la base de datos local y se valida contra el formato de almacenamiento del sistema original. Si se valida, se convierte al formato compatible con e107 actual y se

guarda en la base de datos. Pasado un tiempo, normalmente puedes deshabilitar el plugin alt_auth, ya que los usuarios activos tendrán su contraseña en formato compatible.",
];
