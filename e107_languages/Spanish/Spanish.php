<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       Spanish language file
|
|       Traducción Spanish(ES) -> KANONimpresor
|       (https://www.kanonimpresor.com), 2025
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/
setlocale(LC_ALL, 'es_ES.UTF-8', 'es_ES.utf8', 'es_es.utf8', 'es');
define("CORE_LC", "es");
define("CORE_LC2", "es");
// define("TEXTDIRECTION","rtl");
// deprecated: all language packs must be UTF-8
//define("CHARSET", "utf-8");  // para un sitio realmente multi-idioma :)
define("CORE_LAN1", "Error: falta el tema.\\n\\nCambia los temas usados en tus preferencias (área de admin) o sube los archivos del tema actual al servidor.");
//obsolete define("CORE_LAN2'," \\1 escribió:");// "\\1" representa el nombre de usuario
//obsolete define("CORE_LAN3", "archivo adjunto deshabilitado"); // No usado en 0.8
define("CORE_LAN4", "Por favor, elimina install.php de tu servidor.");
define("CORE_LAN5", "Atención: si no lo haces, existe un riesgo potencial de seguridad para tu sitio web.");
define("CORE_LAN6", "La protección contra sobrecarga está activada. Si continúas solicitando páginas podrías ser bloqueado.");
define("CORE_LAN7", "El núcleo intenta restaurar preferencias desde copia de seguridad automática.");
define("CORE_LAN8", "Error en preferencias del núcleo");
define("CORE_LAN9", "El núcleo no pudo restaurar desde la copia automática. Ejecución detenida.");
define("CORE_LAN10", "Cookie corrupta detectada - sesión cerrada.");

// Pie de página
define("CORE_LAN11", "Tiempo de renderizado: ");
define("CORE_LAN12", " seg (");
define("CORE_LAN13", "% para consultas) ");
define("CORE_LAN14", "%2.3f seg CPU (%2.2f%% carga, %2.3f inicio). Reloj: ");
define("CORE_LAN15", "Consultas DB: ");
define("CORE_LAN16", "Memoria: ");

// img.bb
define("CORE_LAN17", "[ imagen deshabilitada ]");
define("CORE_LAN18", "Imagen: ");

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "GB");
define("CORE_LAN_TB", "TB");

define("EMESSLAN_TITLE_INFO", "Información del sistema");
define("EMESSLAN_TITLE_ERROR", "Error");
define("EMESSLAN_TITLE_SUCCESS", "¡Nueva configuración Efectuada!");
define("EMESSLAN_TITLE_WARNING", "Advertencia");
define("EMESSLAN_TITLE_DEBUG", "Depuración del sistema");

define("LAN_NO_PERMISSIONS", "No tienes permiso para ver esta página.");
define("LAN_EDIT","Editar");
define("LAN_DELETE","Eliminar");
define("LAN_DEFAULT","Predeterminado");
define("LAN_MORE", "Más..");
define("LAN_LESS", "..Menos");
define("LAN_READ_MORE", "Leer más..");
define("LAN_GOPAGE", "Ir a página");
define("LAN_GOTOPAGEX", "Ir a la página [x]");
define("LAN_GO", "Ir");
define("LAN_SUBMIT", "Enviar");
define("LAN_NONE", "Ninguno");
define("LAN_WARNING", "¡Advertencia!");
define("LAN_ERROR", "Error");
define("LAN_ANONYMOUS", "Anónimo");
define("LAN_EMAIL_SUBS", "-correo-");
define("LAN_ACTIVE","Activo");
define("LAN_YES", "Sí");
define("LAN_NO", "No");
define("LAN_OK", "OK");
define("LAN_ACTIONS", "Acciones");
define("LAN_THANK_YOU", "Gracias");
define("LAN_CONTINUE", "Continuar");
define("LAN_ENTER", "Entrar");
define("LAN_ENTER_CODE", "Introduce código");
define("LAN_INVALID_CODE", "Código incorrecto introducido.");
define("LAN_SEARCH", "Buscar");
define("LAN_VIEW", "Ver");
define("LAN_CLICK_TO_VIEW", "Haz clic para ver");
define("LAN_SORT", "Ordenar");
define("LAN_ORDER_BY", "Ordenar por");
define("LAN_ASCENDING", "Ascendente");
define("LAN_DESCENDING", "Descendente");
define("LAN_SHARE", "Compartir");
define("LAN_BACK", "Volver");
define("LAN_NAME", "Nombre");
define("LAN_DESCRIPTION", "Descripción");
define("LAN_CANCEL","Cancelar");
define("LAN_DATE","Fecha");
define("LAN_DATE_POSTED", "Fecha de publicación");
define("LAN_POSTED_BY", "Publicado por");
define("LAN_JSCONFIRM","¿Estás seguro?");
define("LAN_IP","IP");
define("LAN_IP_ADDRESS","Dirección IP");
define("LAN_AUTHOR","Autor");
define("LAN_CATEGORY", "Categoría");
define("LAN_CATEGORIES", "Categorías");
define("LAN_GUEST", "Invitado");
define("LAN_NEXT", "Siguiente");
define("LAN_PREVIOUS", "Anterior");
define("LAN_LOGIN", "Iniciar sesión");
define("LAN_LOGOUT", "Cerrar sesión");
define("LAN_VERIFY", "Verificar");
define("LAN_SETTINGS", "Configuración");
define("LAN_PASSWORD", "Contraseña");
define("LAN_INCORRECT_PASSWORD", "Contraseña incorrecta");
define("LAN_TYPE", "Tipo");
define("LAN_SCREENSHOT", "Captura de pantalla");
define("LAN_FILE", "Archivo");
define("LAN_YOUTUBE_VIDEO", "Video de YouTube");
define("LAN_YOUTUBE_PLAYLIST", "Lista de YouTube");
define("LAN_FILETYPES", "Tipos de archivo");
define("LAN_FILE_NOT_FOUND", "Archivo no encontrado");
define("LAN_FILES","Archivos"); 
define("LAN_SIZE", "Tamaño");
define("LAN_VERSION", "Versión");
define("LAN_DOWNLOAD", "Descargar");
define("LAN_DOWNLOAD_NO_PERMISSION", "¡Archivo no encontrado o no tienes permiso para descargarlo!");
define("LAN_WEBSITE", "Sitio web");
define("LAN_COMMENTS", "Comentarios");
define("LAN_LOCATION", "Ubicación");
define("LAN_NO_RECORDS_FOUND","No se encontraron registros");
define("LAN_RATING", "Valoración");
define("LAN_IMAGE","Imagen");
define("LAN_ABOUT", "Acerca de");
define("LAN_TITLE", "Título");
define("LAN_MESSAGE", "Mensaje");
define("LAN_USER", "Usuario");
define("LAN_EMAIL","Correo electrónico");
define("LAN_WROTE", "escribió"); 
define("LAN_RE_ORDER", "Reordenar");
define("LAN_RELATED", "Relacionado");
define("LAN_CLOSE", "Cerrar");
define("LAN_EXPAND", "Expandir");
define("LAN_LIST", "Lista");
define("LAN_DATESTAMP","Fecha");
define("LAN_SUBJECT","Asunto");

define("LAN_ENTER_USRNAME_EMAIL", "Introduce tu nombre de usuario o correo electrónico");
define("LAN_PWD_REQUIRED", "La contraseña es obligatoria");
define("LAN_SHOW", "Mostrar");
define("LAN_GENERATE", "Generar");
define("LAN_SUMMARY", "Resumen");
define("LAN_REQUIRED_BLANK", "Campos obligatorios sin completar.");
define("LAN_PLEASEWAIT", "Por favor espera");
define("LAN_CHOOSE_FILE", "Seleccionar archivo");

define("LAN_REQUIRED", "Obligatorio");

define("LAN_DEVELOPERMODE_CHECK", "[b]¡Modo desarrollador activado![/b] [br]Desactívalo para entornos de producción. Cuando está activo, ¡se puede exponer información sensible!");
