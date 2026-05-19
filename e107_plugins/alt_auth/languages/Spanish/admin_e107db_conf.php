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


return [
    'E107DB_LAN_1' => "Base de datos en formato e107",
    'E107DB_LAN_9' => "Método de contraseña:",
    'E107DB_LAN_10' => "Configurar autenticación BD e107",
    'E107DB_LAN_11' => "Marca la casilla de cada campo que quieras transferir a la base de datos local:",
    'IMPORTDB_LAN_7' => "MD5 (e107 original)",
    'IMPORTDB_LAN_8' => "e107 con salt (opción 2.0 en adelante)",
    'LAN_AUTHENTICATE_HELP' => "Este método de autenticación se usa con una segunda base de datos e107 que puede tener un formato de contraseña distinto al de este sistema. La
  contraseña original se lee de la base de datos local y se valida contra el formato de almacenamiento del sistema original. Si se valida, se convierte al formato compatible con e107 actual y se

guarda en la base de datos.",
];
