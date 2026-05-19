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
    'LAN_ALT_1' => "Tipo de autenticación principal",
    'LAN_ALT_2' => "Actualizar ajustes",
    'LAN_ALT_3' => "Elige el tipo de autenticación alternativa",
    'LAN_ALT_4' => "Configura los parámetros para",
    'LAN_ALT_5' => "Configurar parámetros de autenticación",
    'LAN_ALT_6' => "Acción ante fallo de conexión",
    'LAN_ALT_7' => "Si falla la conexión al tipo de autenticación principal (y no es la BD local de e107), ¿cómo se debe gestionar?",
    'LAN_ALT_8' => "Tipo de autenticación secundaria",
    'LAN_ALT_9' => "Se usa cuando el método principal no encuentra al usuario",
    'LAN_ALT_10' => "Campo de nombre de usuario",
    'LAN_ALT_11' => "Campo de contraseña",
    'LAN_ALT_12' => "Campo de correo electrónico",
    'LAN_ALT_13' => "Campo ¿ocultar correo?",
    'LAN_ALT_14' => "Campo de nombre a mostrar",
    'LAN_ALT_15' => "Campo de nombre real",
    'LAN_ALT_16' => "Campo de título personalizado",
    'LAN_ALT_17' => "Campo de firma",
    'LAN_ALT_18' => "Campo de avatar",
    'LAN_ALT_19' => "Campo de foto",
    'LAN_ALT_20' => "Campo de fecha de alta",
    'LAN_ALT_21' => "Campo de estado de bloqueo",
    'LAN_ALT_22' => "Campo de pertenencia a clase",
    'LAN_ALT_24' => "Campo de salt de contraseña",
    'LAN_ALT_25' => "(a veces combinado con la contraseña para mayor seguridad)",
    'LAN_ALT_26' => "Tipo de base de datos:",
    'LAN_ALT_27' => "Para transferir el valor de un campo a la base de datos local, especifica el nombre del campo en la casilla correspondiente. (El usuario y la contraseña siempre se transfieren)
<br />Deja el campo en blanco si no quieres transferirlo.",
    'LAN_ALT_29' => "Métodos de autenticación",
    'LAN_ALT_30' => "Configurar",
    'LAN_ALT_31' => "Configuración principal",
    'LAN_ALT_32' => "Servidor:",
    'LAN_ALT_33' => "Usuario:",
    'LAN_ALT_34' => "Contraseña:",
    'LAN_ALT_35' => "Base de datos:",
    'LAN_ALT_36' => "Tabla:",
    'LAN_ALT_37' => "Campo de usuario:",
    'LAN_ALT_38' => "Campo de contraseña:",
    'LAN_ALT_39' => "Prefijo de tabla:",
    'LAN_ALT_40' => "Probar acceso a la base de datos",
    'LAN_ALT_41' => "(usando las credenciales anteriores)",
    'LAN_ALT_42' => "Si se introducen un usuario y contraseña, también se validará ese usuario",
    'LAN_ALT_43' => "Conexión a la base de datos correcta",
    'LAN_ALT_44' => "Fallo de conexión a la base de datos",
    'LAN_ALT_45' => "Búsqueda de usuario correcta",
    'LAN_ALT_46' => "Búsqueda de usuario fallida",
    'LAN_ALT_47' => "Probar",
    'LAN_ALT_48' => "Validación anterior",
    'LAN_ALT_49' => "Usuario",
    'LAN_ALT_50' => "Contraseña",
    'LAN_ALT_51' => "(en blanco)",
    'LAN_ALT_52' => "Autenticación fallida -",
    'LAN_ALT_53' => "causa desconocida",
    'LAN_ALT_54' => "no se pudo conectar con la BD / proveedor del servicio",
    'LAN_ALT_55' => "usuario no válido",
    'LAN_ALT_56' => "contraseña incorrecta",
    'LAN_ALT_57' => "método no disponible",
    'LAN_ALT_58' => "Autenticación correcta",
    'LAN_ALT_59' => "Parámetros recuperados:",
    'LAN_ALT_60' => "Campos de usuario extendidos",
    'LAN_ALT_61' => "Permitir",
    'LAN_ALT_62' => "Nombre del campo",
    'LAN_ALT_63' => "Descripción",
    'LAN_ALT_64' => "Tipo",
    'LAN_ALT_65' => "Autenticación alternativa",
    'LAN_ALT_66' => "Este plugin permite usar métodos de autenticación alternativos.",
    'LAN_ALT_67' => "Configurar Alt auth",
    'LAN_ALT_68' => "El servicio Alt auth está instalado. Ahora debes configurar el método que prefieras.",
    'LAN_ALT_69' => "",
    'LAN_ALT_70' => "Ninguno",
    'LAN_ALT_71' => "TRUE/FALSE",
    'LAN_ALT_72' => "Mayúsculas",
    'LAN_ALT_73' => "Minúsculas",
    'LAN_ALT_74' => "Primera en mayúscula",
    'LAN_ALT_75' => "Cada palabra en mayúscula",
    'LAN_ALT_76' => "Restricción por clase de usuario (valor numérico - cero o vacío para todos)",
    'LAN_ALT_77' => "Solo los usuarios de esta clase (en la base de datos anterior) tienen acceso permitido",
    'LAN_ALT_78' => "Acción ante contraseña fallida",
    'LAN_ALT_79' => "Si el usuario existe en la BD principal pero introduce una contraseña incorrecta, ¿cómo se debe gestionar?",
    'LAN_ALT_80' => "Puerto:",
    'IMPORTDB_LAN_2' => "Texto plano",
    'IMPORTDB_LAN_3' => "Joomla con salt",
    'IMPORTDB_LAN_4' => "Mambo con salt",
    'IMPORTDB_LAN_5' => "SMF (SHA1)",
    'IMPORTDB_LAN_6' => "SHA1 genérico",
    'IMPORTDB_LAN_7' => "MD5 (e107 original)",
    'IMPORTDB_LAN_8' => "e107 con salt (opción 2.0 en adelante)",
    'IMPORTDB_LAN_12' => "PHPBB2/PHPBB3 con salt",
    'IMPORTDB_LAN_13' => "WordPress con salt",
    'IMPORTDB_LAN_14' => "Magento con salt",
    'LAN_ALT_FALLBACK' => "Usar autenticación secundaria",
    'LAN_ALT_FAIL' => "Inicio de sesión fallido",
    'LAN_ALT_UPDATESET' => "Actualizar ajustes",
    'LAN_ALT_UPDATED' => "Ajustes actualizados",
    'LAN_ALT_AUTH_HELP' => "Estos son los ajustes comunes a todos los métodos de autenticación y determinan las acciones a realizar.<br /><br />
	La selección de campos de usuario extendidos determina cuáles <i>pueden</i> añadirse/actualizarse cuando un usuario inicia sesión. Se requiere configuración adicional

para el método de autenticación concreto.",
    'LAN_ALT_VALIDATE_HELP' => "Puedes comprobar los ajustes con la sección 'Probar acceso a la base de datos' para intentar validar un usuario. Usa exactamente
	el mismo proceso que cuando un usuario inicia sesión y confirma si tus ajustes son correctos.<br />

	Si has configurado algunos parámetros para copiarlos a la tabla de usuarios al iniciar sesión correctamente, también se listan aquí.",
    'LAN_ALT_COPY_HELP' => "Puedes seleccionar los campos que se copiarán de la base de datos remota a la de usuarios introduciendo los nombres correspondientes.<br /><br />",
    'LAN_ALT_CONVERSION_HELP' => "Para algunos campos, el desplegable a la derecha de la casilla del campo permite aplicar una conversión al valor
	leído de la base de datos remota; si se selecciona 'ninguna', el valor se copia tal cual se recibe. Las conversiones son:<br />

	<b>TRUE/FALSE</b> - las palabras 'TRUE' y 'FALSE' (y sus equivalentes en minúsculas/mixto) se convierten a los booleanos 1 y cero.<br />

	<b>Mayúsculas</b> - Todas las letras se convierten a mayúsculas<br />

	<b>Minúsculas</b> - Todas las letras se convierten a minúsculas<br />

	<b>Primera en mayúscula</b> - el primer carácter se convierte a mayúscula<br />

	<b>Cada palabra en mayúscula</b> - la primera letra de cada palabra se convierte a mayúscula<br />

	<br />

<br />",
];
