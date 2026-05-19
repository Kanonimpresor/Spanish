<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2012 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *	LDAP authorisation for alt_auth plugin - language file
 *
 * $URL$
 * $Id$
 */

/**
 *	e107 Alternate authorisation plugin
 *
 *	@package	e107_plugins
 *	@subpackage	alt_auth
 *	@version 	$Id$;
 */


return [
    'LDAPLAN_1' => "Dirección del servidor",
    'LDAPLAN_2' => "Base DN o Dominio<br />LDAP - Introduce el BaseDN<br />AD - introduce el FQDN, p. ej. ad.midominio.com",
    'LDAPLAN_3' => "Usuario de exploración LDAP<br />Contexto completo del usuario que puede buscar en el directorio.",
    'LDAPLAN_4' => "Contraseña del usuario de exploración LDAP<br />Contraseña del usuario de exploración LDAP.",
    'LDAPLAN_5' => "Versión LDAP",
    'LDAPLAN_6' => "Configurar autenticación LDAP",
    'LDAPLAN_7' => "Filtro de búsqueda de eDirectory:",
    'LDAPLAN_8' => "Se usa para asegurar que el usuario está en el árbol correcto, <br />p. ej. '(objectclass=inetOrgPerson)'",
    'LDAPLAN_9' => "El filtro de búsqueda actual será:",
    'LDAPLAN_10' => "Ajustes actualizados",
    'LDAPLAN_11' => "AVISO: parece que el módulo LDAP no está disponible actualmente; configurar tu método de autenticación como LDAP probablemente no funcione.",
    'LDAPLAN_12' => "Tipo de servidor",
    'LDAPLAN_13' => "Actualizar ajustes",
    'LDAPLAN_14' => "OU para AD (p. ej. ou=itdept)",
    'LAN_AUTHENTICATE_HELP' => "Este método puede usarse para autenticar contra la mayoría de servidores LDAP, incluidos eDirectory de Novell y Active Directory de Microsoft. Requiere que la extensión LDAP de PHP esté cargada. Consulta la wiki para más información.",
];
