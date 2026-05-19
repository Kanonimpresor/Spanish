<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       Spanish language file)
|
|       Traducción Spanish(es-ES) -> KANONimpresor
|       (https://marketingdeperformance.online/), 2026
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

return [
	'LANINS_001' => "Instalación de e107",
	'LANINS_002' => "Paso ",
	'LANINS_003' => "1",
	'LANINS_004' => "Selección de idioma",
	'LANINS_005' => "Por favor, elige el idioma que se usará durante la instalación",
	'LANINS_007' => "4",
	'LANINS_008' => "Comprobación de versiones de PHP y MySQL / Comprobación de permisos de archivos",
	'LANINS_009' => "Volver a comprobar permisos de archivos",
	'LANINS_010' => "Archivo no escribible: ",
	'LANINS_010a' => "Carpeta no escribible: ",
	'LANINS_012' => "Parece que no existen las funciones de MySQL. Esto probablemente significa que la extensión de PHP para MySQL no está instalada o que tu instalación de PHP no fue compilada con soporte para MySQL.", // ayuda para 012
	'LANINS_013' => "No se pudo determinar tu versión de MySQL. Esto no es un error fatal, así que puedes continuar la instalación, pero ten en cuenta que e107 requiere MySQL >= 3.23 para funcionar correctamente.",
	'LANINS_014' => "Permisos de archivos",
	'LANINS_015' => "Versión de PHP",
	'LANINS_017' => "CORRECTO",
	'LANINS_018' => "Asegúrate de que todos los archivos listados existan y sean escribibles por el servidor. Normalmente implica aplicar CHMOD 777, pero los entornos pueden variar; contacta con tu proveedor si tienes problemas.",
	'LANINS_019' => "La versión de PHP instalada en tu servidor no es capaz de ejecutar e107. e107 requiere PHP versión \".MIN_PHP_VERSION.\" o superior para funcionar correctamente. Actualiza tu versión de PHP o contacta con tu proveedor de alojamiento para actualizarla.",
	'LANINS_021' => "2",
	'LANINS_022' => "Detalles del servidor MySQL",
	'LANINS_023' => "Introduce aquí tus configuraciones de MySQL.
Si tienes permisos de root, puedes crear una nueva base de datos marcando la casilla; si no, debes crear una base de datos o usar una existente.

Si solo tienes una base de datos, utiliza un prefijo para que otros scripts puedan compartir la misma base de datos.

Si no conoces tus datos de MySQL, contacta con tu proveedor de alojamiento.",
	'LANINS_024' => "Servidor MySQL:",
	'LANINS_025' => "Usuario MySQL:",
	'LANINS_026' => "Contraseña MySQL:",
	'LANINS_027' => "Base de datos MySQL:",
	'LANINS_028' => "¿Crear base de datos?",
	'LANINS_029' => "Prefijo de tablas:",
	'LANINS_030' => "El servidor MySQL que deseas que e107 use. También puede incluir un número de puerto, ej.: 'servidor:puerto' o una ruta de socket local, ej.: \\\":/path/to/socket\\\" para localhost.",
	'LANINS_031' => "El nombre de usuario que deseas que e107 use para conectar al servidor MySQL",
	'LANINS_032' => "La contraseña del usuario que acabas de introducir. No debe contener comillas simples ni dobles.",
	'LANINS_033' => "La base de datos MySQL donde deseas que se instale e107, a veces llamada esquema. Debe comenzar con una letra. Si el usuario tiene permisos para crear bases de datos, puedes optar por crearla automáticamente si no existe.",
	'LANINS_034' => "El prefijo que deseas que e107 use al crear las tablas. Útil para múltiples instalaciones de e107 en el mismo esquema de base de datos.",
	'LANINS_036' => "3",
	'LANINS_037' => "Verificación de conexión MySQL",
	'LANINS_038' => " y creación de base de datos",
	'LANINS_039' => "Por favor, asegúrate de completar todos los campos, especialmente Servidor MySQL, Usuario MySQL y Base de datos MySQL (siempre requeridos por el servidor MySQL)",
	'LANINS_040' => "Errores",
	'LANINS_041' => "e107 no pudo establecer conexión con el servidor MySQL usando la información que proporcionaste. Vuelve a la página anterior y verifica los datos.",
	'LANINS_042' => "Conexión al servidor MySQL establecida y verificada.",
	'LANINS_043' => "No se pudo crear la base de datos, asegúrate de tener los permisos necesarios para crear bases de datos en tu servidor.",
	'LANINS_044' => "Base de datos creada con éxito.",
	'LANINS_045' => "Haz clic en el botón para proceder al siguiente paso.",
	'LANINS_046' => "5",
	'LANINS_047' => "Detalles del administrador",
	'LANINS_048' => "Extensión EXIF",
	'LANINS_049' => "Las dos contraseñas que introdujiste no coinciden. Vuelve atrás e inténtalo de nuevo.",
	'LANINS_050' => "Extensión XML",
	'LANINS_051' => "Instalada",
	'LANINS_052' => "No instalada",
	'LANINS_055' => "Confirmación de instalación",
	'LANINS_056' => "6",
	'LANINS_057' => "e107 ya tiene toda la información necesaria para completar la instalación.
Haz clic en el botón para crear las tablas de la base de datos y guardar todos tus ajustes.",
	'LANINS_058' => "7",
	'LANINS_060' => "No se pudo leer el archivo de datos SQL
Asegúrate de que el archivo [b]core_sql.php[/b] exista en el directorio [b]/e107_core/sql[/b].",
	'LANINS_061' => "e107 no pudo crear todas las tablas necesarias en la base de datos.
Limpia la base de datos y corrige cualquier problema antes de intentarlo de nuevo.",
	'LANINS_069' => "¡e107 se ha instalado correctamente!
Por razones de seguridad, deberías ahora cambiar los permisos del archivo [b]e107_config.php[/b] de nuevo a 644.

También debes eliminar el archivo install.php de tu servidor después de hacer clic en el botón de abajo.",
	'LANINS_070' => "e107 no pudo guardar el archivo principal de configuración en tu servidor.
Asegúrate de que el archivo [b]e107_config.php[/b] tenga los permisos correctos.",
	'LANINS_071' => "Instalación completa",
	'LANINS_072' => "Nombre de usuario del administrador",
	'LANINS_073' => "Este es el nombre que usarás para iniciar sesión en el sitio. Si quieres usarlo también como tu nombre público, déjalo igual.",
	'LANINS_074' => "Nombre público del administrador",
	'LANINS_076' => "Contraseña del administrador",
	'LANINS_077' => "Introduce aquí la contraseña que deseas usar para el administrador",
	'LANINS_078' => "Confirmación de contraseña del administrador",
	'LANINS_079' => "Introduce de nuevo la contraseña para confirmarla",
	'LANINS_080' => "Correo electrónico del administrador",
	'LANINS_081' => "Introduce tu dirección de correo electrónico",
	'LANINS_083' => "Error reportado por MySQL:",
	'LANINS_084' => "El instalador no pudo establecer una conexión con la base de datos",
	'LANINS_085' => "El instalador no pudo seleccionar la base de datos:",
	'LANINS_086' => "Nombre de usuario, contraseña y correo electrónico del administrador son campos obligatorios. Vuelve a la página anterior y asegúrate de completar correctamente la información.",
	'LANINS_105' => "No se acepta un nombre o prefijo de base de datos que comience con dígitos seguidos de 'e' o 'E'",
	'LANINS_106' => "ADVERTENCIA - e107 no puede escribir en los directorios y/o archivos listados. Aunque esto no impedirá la instalación, ciertas funciones no estarán disponibles.
Tendrás que cambiar los permisos de los archivos para usar estas funciones.",
	'LANINS_107' => "Nombre del sitio web",
	'LANINS_108' => "Mi sitio web",
	'LANINS_109' => "Tema del sitio web",
	'LANINS_111' => "Incluir contenido/configuración",
	'LANINS_112' => "Reproduce rápidamente la apariencia de la vista previa del tema o demo. (Si está disponible)",
	'LANINS_113' => "Por favor, introduce un nombre para el sitio web",
	'LANINS_114' => "Por favor, selecciona un tema",
	'LANINS_115' => "Nombre del tema",
	'LANINS_116' => "Tipo de tema",
	'LANINS_117' => "Preferencias del sitio web",
	'LANINS_118' => "Instalar plugins",
	'LANINS_119' => "Instalar todos los plugins que el tema pueda requerir.",
	'LANINS_120' => "8",
	'LANINS_121' => "e107_config.php no es un archivo vacío",
	'LANINS_122' => "Podrías tener una instalación existente",
	'LANINS_123' => "Opcional: Tu nombre público o alias. Déjalo en blanco para usar el nombre de usuario",
	'LANINS_124' => "Elige una contraseña de al menos 8 caracteres",
	'LANINS_125' => "¡e107 se ha instalado correctamente!",
	'LANINS_126' => "Por razones de seguridad, debes ahora establecer los permisos del archivo e107_config.php a 644.",
	'LANINS_127' => "La base de datos [x] ya existe. ¿Sobrescribirla? (se perderán todos los datos existentes)", 
	'LANINS_128' => "Sobrescribir",
	'LANINS_129' => "Base de datos no encontrada.",
	'LANINS_134' => "Instalación",
	'LANINS_135' => "de",
	'LANINS_136' => "Base de datos existente eliminada",
	'LANINS_137' => "Base de datos existente encontrada",
	'LANINS_141' => "Completa el siguiente formulario con los datos de MySQL. Si no conoces esta información, contacta con tu proveedor de alojamiento. Puedes pasar el ratón sobre cada campo para obtener información adicional.",
	'LANINS_142' => "IMPORTANTE: Renombra e107.htaccess a .htaccess",
	'LANINS_144' => "IMPORTANTE: Copia y pega el contenido de [b]e107.htaccess[/b] en tu archivo [b].htaccess[/b]. Asegúrate de NO sobrescribir datos existentes.",
	'LANINS_145' => "e107 v2.x requiere que la extensión PHP [x] esté instalada. Contacta con tu proveedor o consulta [y] antes de continuar.",
	'LANINS_146' => "Apariencia del área de administración",
	'LANINS_147' => "Administración",
];