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
define("LANINS_001", "Instalación de e107");

define("LANINS_002", "Paso ");
define("LANINS_003", "1");
define("LANINS_004", "Selección de idioma");
define("LANINS_005", "Por favor, elige el idioma que se usará durante la instalación");
// define("LANINS_006", "Establecer idioma");
define("LANINS_007", "4");
define("LANINS_008", "Comprobación de versiones de PHP y MySQL / Comprobación de permisos de archivos");
define("LANINS_009", "Volver a comprobar permisos de archivos");
define("LANINS_010", "Archivo no escribible: ");
define("LANINS_010a", "Carpeta no escribible: ");
// define("LANINS_011", "Error"); nuevo > LAN_ERROR
define("LANINS_012", "Parece que no existen las funciones de MySQL. Esto probablemente significa que la extensión de PHP para MySQL no está instalada o que tu instalación de PHP no fue compilada con soporte para MySQL."); // ayuda para 012
define("LANINS_013", "No se pudo determinar tu versión de MySQL. Esto no es un error fatal, así que puedes continuar la instalación, pero ten en cuenta que e107 requiere MySQL >= 3.23 para funcionar correctamente.");
define("LANINS_014", "Permisos de archivos");
define("LANINS_015", "Versión de PHP");
// define("LANINS_016", "MySQL");
define("LANINS_017", "CORRECTO");
define("LANINS_018", "Asegúrate de que todos los archivos listados existan y sean escribibles por el servidor. Normalmente implica aplicar CHMOD 777, pero los entornos pueden variar; contacta con tu proveedor si tienes problemas.");
define("LANINS_019", "La versión de PHP instalada en tu servidor no es capaz de ejecutar e107. e107 requiere PHP versión ".MIN_PHP_VERSION." o superior para funcionar correctamente. Actualiza tu versión de PHP o contacta con tu proveedor de alojamiento para actualizarla.");
// define("LANINS_020", "Continuar instalación"); // LAN_CONTINUE
define("LANINS_021", "2");
define("LANINS_022", "Detalles del servidor MySQL");
define("LANINS_023", "Introduce aquí tus configuraciones de MySQL.

Si tienes permisos de root, puedes crear una nueva base de datos marcando la casilla; si no, debes crear una base de datos o usar una existente.

Si solo tienes una base de datos, utiliza un prefijo para que otros scripts puedan compartir la misma base de datos.
Si no conoces tus datos de MySQL, contacta con tu proveedor de alojamiento.");
define("LANINS_024", "Servidor MySQL:");
define("LANINS_025", "Usuario MySQL:");
define("LANINS_026", "Contraseña MySQL:");
define("LANINS_027", "Base de datos MySQL:");
define("LANINS_028", "¿Crear base de datos?");
define("LANINS_029", "Prefijo de tablas:");
define("LANINS_030", "El servidor MySQL que deseas que e107 use. También puede incluir un número de puerto, ej.: 'servidor:puerto' o una ruta de socket local, ej.: \":/ruta/al/socket\" para localhost.");
define("LANINS_031", "El nombre de usuario que deseas que e107 use para conectar al servidor MySQL");
define("LANINS_032", "La contraseña del usuario que acabas de introducir. No debe contener comillas simples ni dobles.");
define("LANINS_033", "La base de datos MySQL donde deseas que se instale e107, a veces llamada esquema. Debe comenzar con una letra. Si el usuario tiene permisos para crear bases de datos, puedes optar por crearla automáticamente si no existe.");
define("LANINS_034", "El prefijo que deseas que e107 use al crear las tablas. Útil para múltiples instalaciones de e107 en el mismo esquema de base de datos.");
// define("LANINS_035", "Continuar"); // LAN_CONTINUE
define("LANINS_036", "3");
define("LANINS_037", "Verificación de conexión MySQL");
define("LANINS_038", " y creación de base de datos");
define("LANINS_039", "Por favor, asegúrate de completar todos los campos, especialmente Servidor MySQL, Usuario MySQL y Base de datos MySQL (siempre requeridos por el servidor MySQL)");
define("LANINS_040", "Errores");
define("LANINS_041", "e107 no pudo establecer conexión con el servidor MySQL usando la información que proporcionaste. Vuelve a la página anterior y verifica los datos.");
define("LANINS_042", "Conexión al servidor MySQL establecida y verificada.");
define("LANINS_043", "No se pudo crear la base de datos, asegúrate de tener los permisos necesarios para crear bases de datos en tu servidor.");
define("LANINS_044", "Base de datos creada con éxito.");
define("LANINS_045", "Haz clic en el botón para proceder al siguiente paso.");
define("LANINS_046", "5");
define("LANINS_047", "Detalles del administrador");
define("LANINS_048", "Extensión EXIF");
define("LANINS_049", "Las dos contraseñas que introdujiste no coinciden. Vuelve atrás e inténtalo de nuevo.");
define("LANINS_050", "Extensión XML");
define("LANINS_051", "Instalada");
define("LANINS_052", "No instalada");
// define("LANINS_053", "e107 v2.x requiere la extensión PHP XML. Contacta con tu proveedor o consulta [x] antes de continuar.");
// define("LANINS_054", "e107 v2.x requiere la extensión PHP EXIF. Contacta con tu proveedor o consulta [x] antes de continuar.");
define("LANINS_055", "Confirmación de instalación");
define("LANINS_056", "6");
define("LANINS_057", "e107 ya tiene toda la información necesaria para completar la instalación.

Haz clic en el botón para crear las tablas de la base de datos y guardar todos tus ajustes.

");
define("LANINS_058", "7");
define("LANINS_060", "No se pudo leer el archivo de datos SQL

Asegúrate de que el archivo [b]core_sql.php[/b] exista en el directorio [b]/e107_core/sql[/b].");
define("LANINS_061", "e107 no pudo crear todas las tablas necesarias en la base de datos.
Limpia la base de datos y corrige cualquier problema antes de intentarlo de nuevo.");

define("LANINS_069", "¡e107 se ha instalado correctamente!

Por razones de seguridad, deberías ahora cambiar los permisos del archivo [b]e107_config.php[/b] de nuevo a 644.

También debes eliminar el archivo install.php de tu servidor después de hacer clic en el botón de abajo.");
define("LANINS_070", "e107 no pudo guardar el archivo principal de configuración en tu servidor.

Asegúrate de que el archivo [b]e107_config.php[/b] tenga los permisos correctos.");
define("LANINS_071", "Instalación completa");

define("LANINS_072", "Nombre de usuario del administrador");
define("LANINS_073", "Este es el nombre que usarás para iniciar sesión en el sitio. Si quieres usarlo también como tu nombre público, déjalo igual.");
define("LANINS_074", "Nombre público del administrador");
// define("LANINS_075", "Este es el nombre que deseas que vean tus usuarios en tu perfil, foros y otras áreas. Si quieres usar el mismo que tu nombre de usuario, deja este campo vacío.");
define("LANINS_076", "Contraseña del administrador");
define("LANINS_077", "Introduce aquí la contraseña que deseas usar para el administrador");
define("LANINS_078", "Confirmación de contraseña del administrador");
define("LANINS_079", "Introduce de nuevo la contraseña para confirmarla");
define("LANINS_080", "Correo electrónico del administrador");
define("LANINS_081", "Introduce tu dirección de correo electrónico");

define("LANINS_083", "Error reportado por MySQL:");
define("LANINS_084", "El instalador no pudo establecer una conexión con la base de datos");
define("LANINS_085", "El instalador no pudo seleccionar la base de datos:");

define("LANINS_086", "Nombre de usuario, contraseña y correo electrónico del administrador son campos obligatorios. Vuelve a la página anterior y asegúrate de completar correctamente la información.");

define("LANINS_105", "No se acepta un nombre o prefijo de base de datos que comience con dígitos seguidos de 'e' o 'E'");
define("LANINS_106", "ADVERTENCIA - e107 no puede escribir en los directorios y/o archivos listados. Aunque esto no impedirá la instalación, ciertas funciones no estarán disponibles.
				Tendrás que cambiar los permisos de los archivos para usar estas funciones.");
				
define("LANINS_107", "Nombre del sitio web");
define("LANINS_108", "Mi sitio web");
define("LANINS_109", "Tema del sitio web");
// define("LANINS_110", "");
define("LANINS_111", "Incluir contenido/configuración");
define("LANINS_112", "Reproduce rápidamente la apariencia de la vista previa del tema o demo. (Si está disponible)");
define("LANINS_113", "Por favor, introduce un nombre para el sitio web");
define("LANINS_114", "Por favor, selecciona un tema");
define("LANINS_115", "Nombre del tema");
define("LANINS_116", "Tipo de tema");
define("LANINS_117", "Preferencias del sitio web");
define("LANINS_118", "Instalar plugins");
define("LANINS_119", "Instalar todos los plugins que el tema pueda requerir.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php no es un archivo vacío");
define("LANINS_122", "Podrías tener una instalación existente");
define("LANINS_123", "Opcional: Tu nombre público o alias. Déjalo en blanco para usar el nombre de usuario");
define("LANINS_124", "Elige una contraseña de al menos 8 caracteres");
define("LANINS_125", "¡e107 se ha instalado correctamente!");
define("LANINS_126", "Por razones de seguridad, debes ahora establecer los permisos del archivo e107_config.php a 644.");
define("LANINS_127", "La base de datos [x] ya existe. ¿Sobrescribirla? (se perderán todos los datos existentes)"); 
define("LANINS_128", "Sobrescribir");
define("LANINS_129", "Base de datos no encontrada.");

define("LANINS_134", "Instalación");
define("LANINS_135", "de");   // uso único en el instalador como en 1 de 8, no reemplazar por LAN_SEARCH_12
define("LANINS_136", "Base de datos existente eliminada");
define("LANINS_137", "Base de datos existente encontrada");

define("LANINS_141", "Completa el siguiente formulario con los datos de MySQL. Si no conoces esta información, contacta con tu proveedor de alojamiento. Puedes pasar el ratón sobre cada campo para obtener información adicional.");
define("LANINS_142", "IMPORTANTE: Renombra e107.htaccess a .htaccess");
define("LANINS_144", "IMPORTANTE: Copia y pega el contenido de [b]e107.htaccess[/b] en tu archivo [b].htaccess[/b]. Asegúrate de NO sobrescribir datos existentes.");
define("LANINS_145", "e107 v2.x requiere que la extensión PHP [x] esté instalada. Contacta con tu proveedor o consulta [y] antes de continuar.");

define("LANINS_146", "Apariencia del área de administración");
define("LANINS_147", "Administración");

