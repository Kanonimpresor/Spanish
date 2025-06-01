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

// TODO - LANS - MAJOR LAN REWRITE NEEDED 

define("CORE_DATE_ORDER", "dmy");            // Temporal hasta que encontremos un lugar mejor para colocarlo.
                                            // Define el orden de entrada/visualización en campos de fecha
                                            // Valores aceptables: dmy, mdy, ymd
define("LAN_MAILOUT_01", "Nombre del remitente");
define("LAN_MAILOUT_02", "Correo del remitente");
define("LAN_MAILOUT_03", "Para");
define("LAN_MAILOUT_04", "Cc");
define("LAN_MAILOUT_05", "Bcc");
define("LAN_MAILOUT_06", "Asunto");
define("LAN_MAILOUT_07", "Adjunto");
define("LAN_MAILOUT_08", "Enviar correo");
define("LAN_MAILOUT_09", "Formato de envío");
define("LAN_MAILOUT_10", "Usuario suscrito");
define("LAN_MAILOUT_11", "Insertar variables");
define("LAN_MAILOUT_12", "Todos los usuarios");
define("LAN_MAILOUT_13", "Todos los usuarios no verificados");
define("LAN_MAILOUT_14", "Nombre mostrado");
define("LAN_MAILOUT_15", "Envío masivo");
define("LAN_MAILOUT_16", "Nombre de usuario");
define("LAN_MAILOUT_17", "Enlace de registro");
define("LAN_MAILOUT_18", "ID de usuario");
define("LAN_MAILOUT_19", "No se especificó dirección de correo destino");
define("LAN_MAILOUT_20", "Ruta de Sendmail");
define("LAN_MAILOUT_21", "Entradas de envío masivo");
define("LAN_MAILOUT_22", "Actualmente no hay entradas guardadas");
define("LAN_MAILOUT_23", "clase de usuario: ");
define("LAN_MAILOUT_24", "correo(s) listo(s) para enviar");
define("LAN_MAILOUT_25", "Controles de envío masivo");
define("LAN_MAILOUT_26", "Pausar el envío masivo cada");
define("LAN_MAILOUT_27", "correos durante ");
define("LAN_MAILOUT_28", "Guardar cambios");
define("LAN_MAILOUT_29", "segundos");
define("LAN_MAILOUT_30", "Usado principalmente con SMTP keepalive. Una pausa mayor a 30 segundos puede hacer que el navegador expire.");
define("LAN_MAILOUT_31", "Procesamiento de correos rebotados");
// define("LAN_MAILOUT_32", "Dirección de correo");
define("LAN_MAILOUT_33", "Servidor de correo entrante");
define("LAN_MAILOUT_34", "Nombre de cuenta (usuario)");
// define("LAN_MAILOUT_35", "Contraseña");
define("LAN_MAILOUT_36", "Eliminar correos rebotados tras comprobar");
define("LAN_MAILOUT_37", "Continuar");
define("LAN_MAILOUT_38", "Cancelar");
define("LAN_MAILOUT_39", "Enviando correos");
// define("LAN_MAILOUT_40", "Necesitas renombrar <b>e107.htaccess</b> a <b>.htaccess</b> en");
define("LAN_MAILOUT_41", "antes de enviar correos desde esta página.");
//define("LAN_MAILOUT_42", "Advertencia");//NO_USADO
define("LAN_MAILOUT_43", "Nombre de usuario");
define("LAN_MAILOUT_44", "Inicio de sesión del usuario");
define("LAN_MAILOUT_45", "Correo del usuario");
define("LAN_MAILOUT_46", "Coincidencia de usuario");
define("LAN_MAILOUT_47", "contiene");
define("LAN_MAILOUT_48", "igual a");
//define("LAN_MAILOUT_49", "ID");//LAN_ID
//define("LAN_MAILOUT_50", "Autor");//LAN_AUTHOR
define("LAN_MAILOUT_51", "Asunto");
define("LAN_MAILOUT_52", "Última modificación");
define("LAN_MAILOUT_53", "Administradores");
define("LAN_MAILOUT_54", "Propio");
define("LAN_MAILOUT_55", "Clase de usuario");
define("LAN_MAILOUT_56", "Última visita");
define("LAN_MAILOUT_57", "Enviar correos SMTP masivos en bloques");            // Opción SMTP KeepAlive
//define("LAN_MAILOUT_58", "Hay un problema con el adjunto:");
//define("LAN_MAILOUT_59", "Progreso del envío");
//define("LAN_MAILOUT_60", "Enviando...");
//define("LAN_MAILOUT_61", "No quedan correos por enviar.");
//define("LAN_MAILOUT_62", "Correos enviados:");
//define("LAN_MAILOUT_63", "Correos fallidos:");
//define("LAN_MAILOUT_64", "Tiempo total transcurrido:");
//define("LAN_MAILOUT_65", "segundos");
//define("LAN_MAILOUT_66", "Cancelado exitosamente");
define("LAN_MAILOUT_67", "No se pudo enviar el correo. Revisa tu configuración SMTP o selecciona otro método de envío e inténtalo de nuevo.");
define("LAN_MAILOUT_68", "Usuarios registrados");
define("LAN_MAILOUT_69", "coincidencias, tras ");
define("LAN_MAILOUT_70", " duplicados eliminados.");
define("LAN_MAILOUT_71", "Total de correos a enviar");
define("LAN_MAILOUT_72", "Registro de envíos");
define("LAN_MAILOUT_73", "Sin registro");
define("LAN_MAILOUT_74", "Solo registro (sin enviar)");
define("LAN_MAILOUT_75", "Registrar y enviar");
define("LAN_MAILOUT_76", "Incluir info de correo en registro");
define("LAN_MAILOUT_77", "Fuentes de direcciones de correo");
define("LAN_MAILOUT_78", "Estado del envío");
define("LAN_MAILOUT_79", "No hay envíos para mostrar");
//define("LAN_MAILOUT_80", "Fecha");//LAN_DATE
define("LAN_MAILOUT_81", "El correo se envió correctamente, revisa tu bandeja.");
define("LAN_MAILOUT_82", "Correos enviados");
define("LAN_MAILOUT_83", "Correos pendientes");
define("LAN_MAILOUT_84", "ID de correo");
define("LAN_MAILOUT_85", "Originador");
define("LAN_MAILOUT_86", "Reenviar");
define("LAN_MAILOUT_87", "Servidor SMTP");
define("LAN_MAILOUT_88", "Usuario SMTP");
define("LAN_MAILOUT_89", "Contraseña SMTP");
define("LAN_MAILOUT_90", "Características SMTP");
define("LAN_MAILOUT_91", "POP antes de SMTP");
define("LAN_MAILOUT_92", "SSL");
define("LAN_MAILOUT_93", "TLS");
define("LAN_MAILOUT_94", "(Usa SSL para gmail/googlemail)");
define("LAN_MAILOUT_95", "Usar VERP para envíos masivos");
//define("LAN_MAILOUT_96", "ninguno");//LAN_NONE
define("LAN_MAILOUT_97", "Resultados del envío");
define("LAN_MAILOUT_98", "Entradas huérfanas");
define("LAN_MAILOUT_99", "Confirmar reintentar envío");
define("LAN_MAILOUT_100", "Mensaje");
define("LAN_MAILOUT_101", "Detalle del correo");
define("LAN_MAILOUT_102", "Detalle del envío");
define("LAN_MAILOUT_103", "Resultados de intentos de envío");
define("LAN_MAILOUT_104", "Sin intento de envío o error guardando resultado");
define("LAN_MAILOUT_105", "Detalles de hasta 10 fallos");
define("LAN_MAILOUT_106", "No se pudo enviar el correo. Parece que tu servidor no está configurado correctamente. Intenta usar SMTP o contacta a tu proveedor.");
define("LAN_MAILOUT_107", "en");
define("LAN_MAILOUT_108", "Resultado");
define("LAN_MAILOUT_109", "Mostrar detalle");
define("LAN_MAILOUT_110", "Enviar correo de prueba");
define("LAN_MAILOUT_111", "Título del correo (no enviado)");
define("LAN_MAILOUT_112", "Enviar prueba a");
define("LAN_MAILOUT_113", "Correo de prueba desde");
define("LAN_MAILOUT_114", "¡Este es un correo de prueba, tu configuración funciona correctamente! [br][br] Saludos, [br] el sistema e107.");
define("LAN_MAILOUT_115", "Método de envío masivo");
define("LAN_MAILOUT_116", "Si no estás seguro, déjalo como php");
define("LAN_MAILOUT_117", "completado");
define("LAN_MAILOUT_118", "Haz clic en 'Continuar' para empezar. Usa 'Cancelar' para detener. Al terminar, selecciona otra página. Los correos no enviados se ven en 'Estado de envíos'.");
define("LAN_MAILOUT_119", "Solo registro con errores");
define("LAN_MAILOUT_120", "Tipo de cuenta");
define("LAN_MAILOUT_121", "POP3 estándar");
define("LAN_MAILOUT_122", "POP3, TLS desactivado");
define("LAN_MAILOUT_123", "POP3 con TLS");
define("LAN_MAILOUT_124", "IMAP");
define("LAN_MAILOUT_125", "Solo texto");
define("LAN_MAILOUT_126", "Texto y HTML");
define("LAN_MAILOUT_127", "Incluir tema");
define("LAN_MAILOUT_128", "Error de envío");
define("LAN_MAILOUT_129", "Fecha de expiración");
define("LAN_MAILOUT_130", "Fecha de creación");
define("LAN_MAILOUT_131", "Envío iniciado");
define("LAN_MAILOUT_132", "Envío completado");
//define("LAN_MAILOUT_133", "Fuente"); // Movido a lan_admin.php
define("LAN_MAILOUT_134", "Prioridad");
//define("LAN_MAILOUT_135", "Título");//LAN_TITLE
define("LAN_MAILOUT_136", "Estado del envío");
define("LAN_MAILOUT_137", "Ref. de correo");
define("LAN_MAILOUT_138", "Estado del correo");
define("LAN_MAILOUT_139", "Fecha activa");
define("LAN_MAILOUT_140", "Correo del destinatario");
define("LAN_MAILOUT_141", "Nombre del destinatario");
define("LAN_MAILOUT_142", "ID del destinatario");
define("LAN_MAILOUT_143", "Ref. del destinatario");
define("LAN_MAILOUT_144", "Rebotado");
define("LAN_MAILOUT_145", "Nuevo correo guardado");
define("LAN_MAILOUT_146", "Error guardando correo");
define("LAN_MAILOUT_147", "Correo actualizado");
define("LAN_MAILOUT_148", "Valores de usuario");
define("LAN_MAILOUT_149", "Correo del remitente");
define("LAN_MAILOUT_150", "Nombre del remitente");
define("LAN_MAILOUT_151", "Copiar a");
define("LAN_MAILOUT_152", "Copia oculta a");
define("LAN_MAILOUT_153", "Adjuntos");
define("LAN_MAILOUT_154", "Formato de envío");
define("LAN_MAILOUT_155", "Selectores");
define("LAN_MAILOUT_156", "Máximo de correos por ejecución del planificador");
define("LAN_MAILOUT_157", "Depende de factores como frecuencia del planificador y límites de tu ISP. Cero para vaciar cola cada vez");
define("LAN_MAILOUT_158", "Enviar ahora");
define("LAN_MAILOUT_159", "Pausar correo");
define("LAN_MAILOUT_160", "Cancelar envío");
define("LAN_MAILOUT_161", "¡IMPORTANTE! Este archivo parece no existir");
define("LAN_MAILOUT_162", "¡IMPORTANTE! Necesitas hacer este archivo ejecutable");
define("LAN_MAILOUT_163", "Editar/Enviar correo");
define("LAN_MAILOUT_164", "Información del correo no encontrada");
define("LAN_MAILOUT_165", "Confirmar eliminar este correo y sus registros asociados");
define("LAN_MAILOUT_166", "Error eliminando ref. de correo [x]");
define("LAN_MAILOUT_167", "Error eliminando contenido ref. [x]");
define("LAN_MAILOUT_168", "Contenido eliminado ref. [x]");
define("LAN_MAILOUT_169", "Error eliminando destinatarios ref. [x]");
define("LAN_MAILOUT_170", "Eliminados [y] destinatarios para ref. [x]");
define("LAN_MAILOUT_171", "Confirmar eliminación de correo");
define("LAN_MAILOUT_172", "Tipo/Estado de correo");
define("LAN_MAILOUT_173", "Destinatarios");
define("LAN_MAILOUT_174", "Fallo de seguridad: [x] [z]");
define("LAN_MAILOUT_175", "Antes de");
define("LAN_MAILOUT_176", "Igual a");
define("LAN_MAILOUT_177", "Después de");
define("LAN_MAILOUT_178", "Última visita al sitio");
define("LAN_MAILOUT_179", "Confirmar envío de correo");
define("LAN_MAILOUT_180", "Criterios de selección:");
define("LAN_MAILOUT_181", "Mostrar destinatarios");
define("LAN_MAILOUT_182", "Optimizar tablas");
define("LAN_MAILOUT_183", "Error optimizando BD");
define("LAN_MAILOUT_184", "BD optimizada");
define("LAN_MAILOUT_185", "Correos añadidos a la cola");
define("LAN_MAILOUT_186", "Error pausando ref. [x]");
define("LAN_MAILOUT_187", "Correo [x] pausado");
define("LAN_MAILOUT_188", "Error enviando ref. [x]");
define("LAN_MAILOUT_189", "Dirección de prueba");

// Menú de admin
define("LAN_MAILOUT_190", "Crear/Enviar correo");
define("LAN_MAILOUT_191", "Correos guardados");
define("LAN_MAILOUT_192", "Envíos completados");
define("LAN_MAILOUT_193", "Envíos pendientes");
define("LAN_MAILOUT_194", "Envíos pausados");

// Errores
define("LAN_MAILOUT_200", "No se especificó asunto");
define("LAN_MAILOUT_201", "Sin datos válidos para el correo");
define("LAN_MAILOUT_202", "Sin texto en el cuerpo");
define("LAN_MAILOUT_203", "No se especificó nombre de remitente");
define("LAN_MAILOUT_204", "No se especificó correo de remitente");
define("LAN_MAILOUT_205", "Error en formato de envío");
define("LAN_MAILOUT_206", "ID de correo inválido ([x])");
define("LAN_MAILOUT_207", "Error cargando plantilla");
define("LAN_MAILOUT_208", "Error convirtiendo plantilla");

// Estados
define("LAN_MAILOUT_211", "Enviado");
define("LAN_MAILOUT_212", "Fallido");
define("LAN_MAILOUT_213", "Rebotado");
define("LAN_MAILOUT_214", "Pendiente");
define("LAN_MAILOUT_215", "Guardado");
define("LAN_MAILOUT_216", "Error de código");
define("LAN_MAILOUT_217", "Pausado");
define("LAN_MAILOUT_218", "Cancelado");
define("LAN_MAILOUT_219", "Parcial");

// Mensajes generales
define("LAN_MAILOUT_220", "Correo ID [x] cancelado");
define("LAN_MAILOUT_221", "Error cancelando ID [x]");
define("LAN_MAILOUT_222", "Formato de correo predeterminado");
define("LAN_MAILOUT_223", "(Usado para correos del sistema)");
define("LAN_MAILOUT_224", "Inc. imágenes");
define("LAN_MAILOUT_225", "Incluir imágenes en el correo");
define("LAN_MAILOUT_226", "[x] registros huérfanos eliminados");
define("LAN_MAILOUT_227", "Eliminados [x] registros de [y]");
define("LAN_MAILOUT_228", "[x] anomalías corregidas; registros: [y]");
define("LAN_MAILOUT_229", "Correo ID [x] pausado");
define("LAN_MAILOUT_230", "Error pausando ID [x]");
define("LAN_MAILOUT_231", "Procesamiento de rebotes");
define("LAN_MAILOUT_232", "Ninguno");
define("LAN_MAILOUT_233", "Script automático");
define("LAN_MAILOUT_234", "Cuenta de correo");
define("LAN_MAILOUT_235", "(Tu servidor debe redirigir desde esta dirección al script anterior.)");
define("LAN_MAILOUT_236", "Último rebote procesado");
define("LAN_MAILOUT_237", "Contadores actualizados en [x] correos");
define("LAN_MAILOUT_238", "Hora más temprana para enviar");
define("LAN_MAILOUT_239", "Hora más tardía para enviar");
define("LAN_MAILOUT_240", "Notificarme al completar");
define("LAN_MAILOUT_241", " (Adicional a las notificaciones estándar)");
define("LAN_MAILOUT_242", "Opciones adicionales (solo al enviar)");
define("LAN_MAILOUT_243", "Notificar");
define("LAN_MAILOUT_244", "Correo enviado: ");
define("LAN_MAILOUT_245", "Comprobar rebotes automáticamente");
define("LAN_MAILOUT_246", "Activa esta tarea en el planificador");
define("LAN_MAILOUT_247", "Información del correo:");
define("LAN_MAILOUT_248", "Estado de finalización: ");
define("LAN_MAILOUT_249", "Resultados del envío:");
define("LAN_MAILOUT_250", "--- Fin de la notificación ---");
define("LAN_MAILOUT_251", "Copiar y editar");
define("LAN_MAILOUT_252", "Realiza verificaciones de datos, corrige contadores y elimina temporales");
define("LAN_MAILOUT_253", "No se encontraron destinatarios - verifica la BD");
define("LAN_MAILOUT_254", "Ver plantilla del correo");
define("LAN_MAILOUT_255", "Plantilla de correo ID: ");
define("LAN_MAILOUT_256", "Volver");
define("LAN_MAILOUT_257", "Plantilla generada");
//define("LAN_MAILOUT_258", "Plantilla: ");//LAN_TEMPLATE
define("LAN_MAILOUT_259", "No se seleccionaron fuentes en preferencias"); 

define("LAN_SEND", "Enviar");
define("LAN_HOLD", "Pausar");

define("LAN_MAILOUT_260", "Tipo de usuario");
define("LAN_MAILOUT_261", "Puerto SMTP");
define("LAN_MAILOUT_262", "Vista previa de plantilla");
define("LAN_MAILOUT_263", "Total de destinatarios");
define("LAN_MAILOUT_264", "Incrustar medios");
define("LAN_MAILOUT_265", "Pendiente");
define("LAN_MAILOUT_266", "Máx. activos");
define("LAN_MAILOUT_267", "Generar claves pública/privada");
define("LAN_MAILOUT_268", "Solo modo desarrollo");
define("LAN_MAILOUT_269", "Enviar más tarde");

define("LAN_MAILOUT_270", "Probar conexión SMTP");
define("LAN_MAILOUT_271", "Falló autenticación con usuario [x] y contraseña [y]:"); 
