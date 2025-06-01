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

/*
Las definiciones en este archivo corresponden a mensajes explicativos estándar que pueden registrarse
en cualquiera de los registros del sistema. Se organizan en tres grupos con diferentes prefijos:
    LAN_ADMIN_LOG_nnn - registro de administración (registra acciones intencionales de administradores)
    LAN_AUDIT_LOG_nnn - registro de auditoría (registra acciones generalmente intencionales de usuarios)
    LAN_ROLL_LOG_nnn - registro dinámico (registra eventos secundarios, depuración, etc.)
*/

// User audit trail events
define("LAN_AUDIT_LOG_001", "Acceso de usuario baneado");
define("LAN_AUDIT_LOG_002", "Protección anti-flood activada");
define("LAN_AUDIT_LOG_003", "Acceso desde IP baneada");
define("LAN_AUDIT_LOG_006", "Usuario cambió contraseña");
define("LAN_AUDIT_LOG_007", "Usuario cambió email");
define("LAN_AUDIT_LOG_010", "Datos de usuario modificados por admin");
define("LAN_AUDIT_LOG_011", "Usuario registrado");
define("LAN_AUDIT_LOG_012", "Usuario confirmó registro");
define("LAN_AUDIT_LOG_013", "Inicio de sesión de usuario");
define("LAN_AUDIT_LOG_014", "Cierre de sesión de usuario");
define("LAN_AUDIT_LOG_015", "Usuario cambió nombre mostrado");
define("LAN_AUDIT_LOG_016", "Usuario cambió contraseña");
define("LAN_AUDIT_LOG_017", "Usuario cambió email");
define("LAN_AUDIT_LOG_018", "Restablecimiento de contraseña");
define("LAN_AUDIT_LOG_019", "Usuario cambió configuraciones");
define("LAN_AUDIT_LOG_020", "Usuario añadido por admin");
define("LAN_AUDIT_LOG_021", "Email rebotado de usuario");
define("LAN_AUDIT_LOG_022", "Usuario baneado");
define("LAN_AUDIT_LOG_023", "Restablecimiento de rebote");
define("LAN_AUDIT_LOG_024", "Estado temporal de usuario");

// Admin log events
define("LAN_AL_ADLOG_01", "Log de admin - preferencias actualizadas");
define("LAN_AL_ADLOG_02", "Log de admin - datos antiguos eliminados");
define("LAN_AL_ADLOG_03", "Log de auditoría - datos antiguos eliminados");
define("LAN_AL_ADLOG_04", "Opciones de auditoría actualizadas");

// User edits
define("LAN_AL_USET_01", "Admin editó datos de usuario");
define("LAN_AL_USET_02", "Usuario añadido por Admin");
define("LAN_AL_USET_03", "Opciones de usuario actualizadas");
define("LAN_AL_USET_04", "Usuarios purgados");
define("LAN_AL_USET_05", "Usuario baneado");
define("LAN_AL_USET_06", "Usuario desbaneado");
define("LAN_AL_USET_07", "Usuario eliminado");
define("LAN_AL_USET_08", "Usuario convertido en admin");
define("LAN_AL_USET_09", "Usuario dejó de ser admin");
define("LAN_AL_USET_10", "Usuario aprobado");
define("LAN_AL_USET_11", "Reenviar email de validación");
define("LAN_AL_USET_12", "Reenviar todos los emails de validación");
define("LAN_AL_USET_13", "Emails rebotados eliminados");
define("LAN_AL_USET_14", "Membresía de clase actualizada");
define("LAN_AL_USET_15", "Registro rechazado");

// Userclass events
define("LAN_AL_UCLASS_00", "Evento desconocido relacionado con clases");
define("LAN_AL_UCLASS_01", "Clase de usuario creada");
define("LAN_AL_UCLASS_02", "Clase de usuario eliminada");
define("LAN_AL_UCLASS_03", "Clase de usuario editada");
define("LAN_AL_UCLASS_04", "Membresía de clase actualizada");
define("LAN_AL_UCLASS_05", "Configuración inicial de clases editada");
define("LAN_AL_UCLASS_06", "Clase de usuario vaciada");

// Banlist events
define("LAN_AL_BANLIST_00", "Evento de ban desconocido");
define("LAN_AL_BANLIST_01", "Ban manual añadido");
define("LAN_AL_BANLIST_02", "Ban eliminado");
define("LAN_AL_BANLIST_03", "Tiempo de ban modificado");
define("LAN_AL_BANLIST_04", "Entrada en lista blanca añadida");
define("LAN_AL_BANLIST_05", "Entrada en lista blanca eliminada");
define("LAN_AL_BANLIST_06", "Lista de bans exportada");
define("LAN_AL_BANLIST_07", "Lista de bans importada");
define("LAN_AL_BANLIST_08", "Opciones de banlist actualizadas");
define("LAN_AL_BANLIST_09", "Entrada de ban editada");
define("LAN_AL_BANLIST_10", "Entrada en lista blanca editada");
define("LAN_AL_BANLIST_11", "Coincidencia en lista blanca");
define("LAN_AL_BANLIST_12", "Bans expirados limpiados");

// Comment-related events
define("LAN_AL_COMMENT_01", "Comentario(s) eliminado(s)");

// Rolling log events
define("LAN_ROLL_LOG_01", "Usuario/contraseña vacíos");
define("LAN_ROLL_LOG_02", "Código de imagen incorrecto");
define("LAN_ROLL_LOG_03", "Combinación usuario/contraseña inválida");
define("LAN_ROLL_LOG_04", "Usuario inválido");
define("LAN_ROLL_LOG_05", "Intento de login sin registro completo");
define("LAN_ROLL_LOG_06", "Login bloqueado por evento");
define("LAN_ROLL_LOG_07", "Múltiples logins desde misma IP");
define("LAN_ROLL_LOG_08", "Nombre de usuario demasiado largo");
define("LAN_ROLL_LOG_09", "Usuario baneado intentó login");
define("LAN_ROLL_LOG_10", "Error de login - razón desconocida");
define("LAN_ROLL_LOG_11", "Error de login de admin");

// Prefs events
define("LAN_AL_PREFS_01", "Preferencias cambiadas");
define("LAN_AL_PREFS_02", "Nuevas preferencias creadas");
define("LAN_AL_PREFS_03", "Error guardando preferencias");

// Front Page events
define("LAN_AL_FRONTPG_00", "Evento desconocido en portada");
define("LAN_AL_FRONTPG_01", "Orden de reglas cambiado");
define("LAN_AL_FRONTPG_02", "Regla añadida");
define("LAN_AL_FRONTPG_03", "Regla editada");
define("LAN_AL_FRONTPG_04", "Regla eliminada");

// User theme admin
define("LAN_AL_UTHEME_00", "Evento de tema desconocido");
define("LAN_AL_UTHEME_01", "Configuración de temas actualizada");

// Update routines
define("LAN_AL_UPDATE_00", "Evento de actualización desconocido");
define("LAN_AL_UPDATE_01", "Actualización 1.0 a 2.0 ejecutada");
define("LAN_AL_UPDATE_02", "Actualización 0.7.x a 0.7.6 ejecutada");
define("LAN_AL_UPDATE_03", "Preferencias faltantes añadidas");

// Administrator routines
define("LAN_AL_ADMIN_00", "Evento de admin desconocido");
define("LAN_AL_ADMIN_01", "Permisos de admin actualizados");
define("LAN_AL_ADMIN_02", "Privilegios de admin revocados");

// Maintenance mode
define("LAN_AL_MAINT_00", "Mensaje de mantenimiento desconocido");
define("LAN_AL_MAINT_01", "Modo mantenimiento activado");
define("LAN_AL_MAINT_02", "Modo mantenimiento desactivado");

// Sitelinks routines
define("LAN_AL_SLINKS_00", "Evento de enlaces desconocido");
define("LAN_AL_SLINKS_01", "Subenlaces generados");
define("LAN_AL_SLINKS_02", "Enlace movido arriba");
define("LAN_AL_SLINKS_03", "Enlace movido abajo");
define("LAN_AL_SLINKS_04", "Orden de enlaces actualizado");
define("LAN_AL_SLINKS_05", "Opciones de enlaces actualizadas");
define("LAN_AL_SLINKS_06", "Enlace eliminado");
define("LAN_AL_SLINKS_07", "Enlace enviado");
define("LAN_AL_SLINKS_08", "Enlace actualizado");

// Theme manager routines
define("LAN_AL_THEME_00", "Evento de tema desconocido");
define("LAN_AL_THEME_01", "Tema del sitio actualizado");
define("LAN_AL_THEME_02", "Tema de admin actualizado");
define("LAN_AL_THEME_03", "Precarga de imágenes/CSS actualizado");
define("LAN_AL_THEME_04", "Estilo admin/CSS actualizado");

// Cache control routines
define("LAN_AL_CACHE_00", "Evento de caché desconocido");
define("LAN_AL_CACHE_01", "Configuración de caché actualizada");
define("LAN_AL_CACHE_02", "Caché del sistema vaciada");
define("LAN_AL_CACHE_03", "Caché de contenido vaciada");

// Emote admin
define("LAN_AL_EMOTE_00", "Evento de emotes desconocido");
define("LAN_AL_EMOTE_01", "Paquete de emotes activo cambiado");
define("LAN_AL_EMOTE_02", "Emotes activados");
define("LAN_AL_EMOTE_03", "Emotes desactivados");

// Welcome message
define("LAN_AL_WELCOME_00", "Evento de bienvenida desconocido");
define("LAN_AL_WELCOME_01", "Mensaje de bienvenida creado");
define("LAN_AL_WELCOME_02", "Mensaje de bienvenida actualizado");
define("LAN_AL_WELCOME_03", "Mensaje de bienvenida eliminado");
define("LAN_AL_WELCOME_04", "Opciones de bienvenida cambiadas");

// Admin Password
define("LAN_AL_ADMINPW_01", "Contraseña de admin cambiada");
define("LAN_AL_ADMINPW_02", "Contraseña de admin rehasheada");

// Banners Admin
define("LAN_AL_BANNER_00", "Evento de banner desconocido");
define("LAN_AL_BANNER_01", "Menú de banners actualizado");
define("LAN_AL_BANNER_02", "Banner creado");
define("LAN_AL_BANNER_03", "Banner actualizado");
define("LAN_AL_BANNER_04", "Banner eliminado");
define("LAN_AL_BANNER_05", "Configuración de banners actualizada");

// Image management
define("LAN_AL_IMALAN_00", "Evento de imagen desconocido");
define("LAN_AL_IMALAN_01", "Avatar eliminado");
define("LAN_AL_IMALAN_02", "Todos los avatars/fotos eliminados");
define("LAN_AL_IMALAN_03", "Avatar eliminado");
define("LAN_AL_IMALAN_04", "Configuración actualizada");

// Language management
define("LAN_AL_LANG_00", "Evento de idioma desconocido");
define("LAN_AL_LANG_01", "Preferencias de idioma cambiadas");
define("LAN_AL_LANG_02", "Tablas de idioma eliminadas");
define("LAN_AL_LANG_03", "Tablas de idioma creadas");
define("LAN_AL_LANG_04", "Paquete de idioma zip creado");

// Meta Tags
define("LAN_AL_META_01", "Meta tags actualizadas");

// Custom Pages/Menus
define("LAN_AL_CPAGE_01", "Página/menú personalizado añadido");
define("LAN_AL_CPAGE_02", "Página/menú personalizado actualizado");
define("LAN_AL_CPAGE_03", "Página/menú personalizado eliminado");
define("LAN_AL_CPAGE_04", "Configuración de páginas/menús actualizada");

// Extended User Fields
define("LAN_AL_EUF_01", "Campo extendido movido arriba");
define("LAN_AL_EUF_02", "Campo extendido movido abajo");
define("LAN_AL_EUF_03", "Categoría EUF movida arriba");
define("LAN_AL_EUF_04", "Categoría EUF movida abajo");
define("LAN_AL_EUF_05", "Campo extendido añadido");
define("LAN_AL_EUF_06", "Campo extendido actualizado");
define("LAN_AL_EUF_07", "Campo extendido eliminado");
define("LAN_AL_EUF_08", "Categoría EUF añadida");
define("LAN_AL_EUF_09", "Categoría EUF actualizada");
define("LAN_AL_EUF_10", "Categoría EUF eliminada");
define("LAN_AL_EUF_11", "Campos extendidos activados");
define("LAN_AL_EUF_12", "Campos extendidos desactivados");

// Menus
define("LAN_AL_MENU_01", "Menú activado");
define("LAN_AL_MENU_02", "Visibilidad de menú establecida");
define("LAN_AL_MENU_03", "Área de menú cambiada");
define("LAN_AL_MENU_04", "Menú desactivado");
define("LAN_AL_MENU_05", "Menú movido al inicio");
define("LAN_AL_MENU_06", "Menú movido al final");
define("LAN_AL_MENU_07", "Menú movido arriba");
define("LAN_AL_MENU_08", "Menú movido abajo");

// Public Uploads
define("LAN_AL_UPLOAD_01", "Archivo subido eliminado");
define("LAN_AL_UPLOAD_02", "Preferencias de subida cambiadas");

// Search
define("LAN_AL_SEARCH_01", "Configuración de búsqueda actualizada");
define("LAN_AL_SEARCH_02", "Preferencias de búsqueda actualizadas");
define("LAN_AL_SEARCH_03", "Parámetros de búsqueda auto-actualizados");
define("LAN_AL_SEARCH_04", "Áreas buscables actualizadas");
define("LAN_AL_SEARCH_05", "Configuración de buscador actualizada");

// Notify
define("LAN_AL_NOTIFY_01", "Configuración de notificaciones actualizada");

// News
define("LAN_AL_NEWS_01", "Noticia eliminada");
define("LAN_AL_NEWS_02", "Categoría de noticias eliminada");
define("LAN_AL_NEWS_03", "Noticia enviada eliminada");
define("LAN_AL_NEWS_04", "Categoría de noticias creada");
define("LAN_AL_NEWS_05", "Categoría de noticias actualizada");
define("LAN_AL_NEWS_06", "Preferencias de noticias actualizadas");
define("LAN_AL_NEWS_07", "Noticia enviada autorizada");
define("LAN_AL_NEWS_08", "Noticia añadida");
define("LAN_AL_NEWS_09", "Noticia actualizada");
define("LAN_AL_NEWS_10", "Reescritura de categoría cambiada");
define("LAN_AL_NEWS_11", "Reescritura de categoría eliminada");
define("LAN_AL_NEWS_12", "Reescritura de noticia cambiada");
define("LAN_AL_NEWS_13", "Reescritura de noticia eliminada");

// File Manager
define("LAN_AL_FILEMAN_01", "Archivo(s) eliminado(s)");
define("LAN_AL_FILEMAN_02", "Archivo(s) movido(s)");
define("LAN_AL_FILEMAN_03", "Archivo(s) subido(s)");

// Mail
define("LAN_AL_MAIL_01", "Email de prueba enviado");
define("LAN_AL_MAIL_02", "Mailshot creado");
define("LAN_AL_MAIL_03", "Configuración de email actualizada");
define("LAN_AL_MAIL_04", "Detalles de mailshot eliminados");
define("LAN_AL_MAIL_05", "Base de datos de email limpiada");
define("LAN_AL_MAIL_06", "Mailshot activado");

// Plugin Manager
define("LAN_AL_PLUGMAN_01", "Plugin instalado");
define("LAN_AL_PLUGMAN_02", "Plugin actualizado");
define("LAN_AL_PLUGMAN_03", "Plugin desinstalado");
define("LAN_AL_PLUGMAN_04", "Plugin actualizado");

// URL Manager
define("LAN_AL_EURL_01", "Configuración de URL del sitio cambiada");

// Sundry Pseudo-plugins
define("LAN_AL_MISC_01", "Configuración de menú árbol actualizada");
define("LAN_AL_MISC_02", "Configuración de menú online actualizada");
define("LAN_AL_MISC_03", "Configuración de menú login actualizada");
define("LAN_AL_MISC_04", "Configuración de menú comentarios actualizada");
define("LAN_AL_MISC_05", "Configuración de reloj actualizada");
define("LAN_AL_MISC_06", "Configuración de calendario actualizada");

define("LAN_AL_PING_01", "Ping enviado al servicio");

define("LAN_AL_ADMINUI_01", "Admin-UI: Inserción en tabla [x]");
define("LAN_AL_ADMINUI_02", "Admin-UI: Actualización en tabla [x]");
define("LAN_AL_ADMINUI_03", "Admin-UI: Eliminación en tabla [x]");
define("LAN_AL_ADMINUI_04", "Admin-UI: Error en DB [x]");

define("LAN_AL_BACKUP", "Copia de seguridad de la base de datos");
define("LAN_AL_MEDIA_01", "Subida de medios");
define("LAN_AL_USET_100", "Admin inició sesión como otro usuario");
define("LAN_AL_USET_101", "Admin cerró sesión como otro usuario");
