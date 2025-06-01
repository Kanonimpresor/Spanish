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

define("LAN_EURL_NAME", "Gestionar URLs del sitio");
define("LAN_EURL_NAME_CONFIG", "Perfiles");
define("LAN_EURL_NAME_ALIASES", "Alias");
define("LAN_EURL_NAME_SETTINGS", "Configuración general");
define("LAN_EURL_NAME_HELP", "Ayuda");

define("LAN_EURL_EMPTY", "La lista está vacía");
define("LAN_EURL_LEGEND_CONFIG", "Elegir perfil de URL por área del sitio");
define("LAN_EURL_LEGEND_ALIASES", "Configurar alias de URL base por perfil de URL");

define("LAN_EURL_DEFAULT", "Predeterminado");
define("LAN_EURL_PROFILE", "Perfil");

define("LAN_EURL_INFOALT", "Información");
define("LAN_EURL_PROFILE_INFO", "Información del perfil no disponible");
define("LAN_EURL_LOCATION", "Ubicación del perfil");
define("LAN_EURL_LOCATION_NONE", "Archivo de configuración no disponible");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias en el idioma predeterminado.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Valor predeterminado es ");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias en ");
define("LAN_EURL_FORM_HELP_EXAMPLE", "URL base");

// Mensajes
define("LAN_EURL_ERR_ALIAS_MODULE", "El alias «%1\$s» no se puede guardar - ya existe un perfil de URL del sistema con el mismo nombre. Por favor, elige otro valor de alias para el perfil de URL del sistema «%2\$s»");
define("LAN_EURL_SURL_UPD",    "&nbsp; URLs SEF actualizadas.");
define("LAN_EURL_SURL_NUPD",    "&nbsp; URLs SEF NO actualizadas.");

// Configuración
define("LAN_EURL_SETTINGS_PATHINFO", "Eliminar nombre de archivo de la URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Asociar espacio de nombres raíz");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Elige qué área del sitio se vinculará con tu URL base. Ejemplo: Si Noticias es tu espacio raíz, https://tusitio.com/Titulo-Noticia se asociará con noticias (página de visualización de artículo)");
define("LAN_EURL_SETTINGS_REDIRECT", "Redirigir a página de no encontrado");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Si es falso, la página de error se mostrará directamente (sin redirección)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Tipo de creación automática de cadenas SEF");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Elige cómo se generarán las cadenas SEF automáticamente desde un Título (ej. en noticias, páginas personalizadas)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Solo asegurar");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "convertir-a-minúsculas-con-guiones");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Convertir-A-Mayúsculas-Iniciales-Con-Guiones");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Guiones-sin-cambio-de-mayúsculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "convertir_a_minúsculas_con_subrayados");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Convertir_A_Mayúsculas_Iniciales_Con_Subrayados");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Subrayados_sin_cambio_de_mayúsculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "separador+plus+en+minúsculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Separador+Plus+Con+Mayúsculas+Iniciales");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Separador+plus+sin+cambio+de+mayúsculas");

define("LAN_EURL_MODREWR_DESCR", "Elimina el nombre del script de entrada (index.php/) de tus URLs. Necesitarás mod_rewrite instalado en tu servidor Apache. Después de activar, renombra htaccess.txt a .htaccess en la raíz y modifica <em>&quot;RewriteBase&quot;</em> si es necesario.");

// Navegación
define("LAN_EURL_MENU", "URLs del sitio");
define("LAN_EURL_MENU_CONFIG", "Configuraciones");
define("LAN_EURL_MENU_ALIASES", "Alias de perfiles");
define("LAN_EURL_MENU_SETTINGS", "Ajustes");
define("LAN_EURL_MENU_HELP", "Ayuda");
define("LAN_EURL_MENU_PROFILES", "Perfiles");

define("LAN_EURL_UC", "En construcción");

define("LAN_EURL_CORE_MAIN", "Espacio de nombres raíz del sitio - alias no utilizado.");

define("LAN_EURL_FRIENDLY",   "Amigable");
define("LAN_EURL_LEGACY", "URLs directas heredadas.");
define("LAN_EURL_REWRITE_LABEL", "URLs amigables");
define("LAN_EURL_REWRITE_DESCR", "URLs optimizadas para motores de búsqueda y usuarios.");

// Noticias
define("LAN_EURL_CORE_NEWS", "Noticias");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "URLs completamente amigables (más legibles, menos rendimiento)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "URLs amigables sin ID (menos rendimiento, más legibles)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Muestra análisis manual de enlaces.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "URLs amigables con ID (mejor rendimiento)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Análisis automático basado en reglas predefinidas.");

// Usuarios
define("LAN_EURL_CORE_USER", "Usuarios");
define("LAN_EURL_USER_REWRITE_LABEL", "URLs amigables");
define("LAN_EURL_USER_REWRITE_DESCR", "URLs optimizadas para SEO y usabilidad.");

// Páginas personalizadas
define("LAN_EURL_CORE_PAGE", "Páginas personalizadas");
define("LAN_EURL_PAGE_SEF_LABEL", "URLs amigables con ID (rendimiento)");
define("LAN_EURL_PAGE_SEF_DESCR", "URLs optimizadas para motores de búsqueda.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "URLs amigables sin ID (menos rendimiento)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "URLs más legibles para usuarios.");

// Búsqueda
define("LAN_EURL_CORE_SEARCH", "Búsqueda");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "URL de búsqueda predeterminada");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "URL directa heredada.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "URL amigable");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");

// Sistema
define("LAN_EURL_CORE_SYSTEM", "Sistema");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "URLs de sistema predeterminadas");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URLs para páginas como 'No encontrado', acceso denegado, etc.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "URLs de sistema amigables");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "Versiones optimizadas de URLs del sistema.");

define("LAN_EURL_CORE_INDEX", "Página principal");
define("LAN_EURL_CORE_INDEX_INFO", "La página principal no puede tener alias.");
define("LAN_EURL_REBUILD",    "Reconstruir");
define("LAN_EURL_REGULAR_EXPRESSION", "Expresión regular");
define("LAN_EURL_KEY", "Clave");
define("LAN_EURL_TABLE", "Tabla");
