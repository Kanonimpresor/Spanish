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

// ¡REESCRITURA IMPORTANTE EN PROCESO POR MOC, ¡NO EDITES ESTE ARCHIVO HASTA QUE ESTE MENSAJE SEA ELIMINADO!

/* 
Aunque todos los LAN del foro se comparten en todo el plugin, aquí hay una guía general:
- 0xxx => forum.php
- 1xxx => forum_viewforum.php
- 2xxx => forum_viewtopic.php
- 3xxx => forum_post.php

Esto permite flexibilidad al cambiar o añadir nuevos defines LAN.

vf, vt, etc. en los comentarios se refieren a los LAN definidos en los archivos de idioma previamente separados:
vf = viewforum, vt = viewtopic, p = post, etc.
*/

// define("e_PAGETITLE", "Foro");

// forum.php (forum_template)
// define("LAN_FORUM_0001", "Foro"); // LAN_46  
define("LAN_FORUM_0002", "Temas"); // LAN_47 / FORLAN_21
define("LAN_FORUM_0003", "Respuestas"); // LAN_48 / LAN_55
define("LAN_FORUM_0004", "Último mensaje"); // LAN_49 / FORLAN_22 / LAN_57
define("LAN_FORUM_0005", "Este foro está restringido solo a administradores"); // LAN_406
define("LAN_FORUM_0006", "Este foro es solo para miembros registrados"); // LAN_407
define("LAN_FORUM_0007", "Este es un foro de solo lectura"); // LAN_408
define("LAN_FORUM_0008", "Este foro está restringido por clase de usuario"); // LAN_409
define("LAN_FORUM_0009", "Información"); // LAN_191 
define("LAN_FORUM_0010", "Top de publicadores"); // LAN_429
define("LAN_FORUM_0011", "Temas más activos"); // LAN_430
define("LAN_FORUM_0012", "Mis publicaciones"); // LAN_431
define("LAN_FORUM_0013", "Mis ajustes"); // LAN_432
define("LAN_FORUM_0014", "Mi perfil"); // LAN_435
define("LAN_FORUM_0015", "Mis subidas"); // FORLAN_442
define("LAN_FORUM_0016", "Normas del foro"); // LAN_433
define("LAN_FORUM_0017", "Ver estadísticas del foro"); // LAN_441
define("LAN_FORUM_0018", "Bienvenido/a"); // LAN_30
define("LAN_FORUM_0019", "No hay mensajes nuevos"); // LAN_31
define("LAN_FORUM_0020", "Hay 1 mensaje nuevo "); // LAN_32
define("LAN_FORUM_0021", "Hay"); // LAN_33
define("LAN_FORUM_0022", "mensajes nuevos"); // LAN_34
define("LAN_FORUM_0023", "desde tu última visita.");  // LAN_35
define("LAN_FORUM_0024", "Tu última visita fue el ");  // LAN_36
define("LAN_FORUM_0025", "Ahora es");  // LAN_37
//define("LAN_FORUM_0026", ", todas las horas son ");  // LAN_38 
define("LAN_FORUM_0027", "Has leído"); // LAN_196
define("LAN_FORUM_0028", "de estos mensajes."); // LAN_197
define("LAN_FORUM_0029", "Todos los mensajes nuevos han sido leídos."); // LAN_198
define("LAN_FORUM_0030", "Temas seguidos"); // LAN_393
define("LAN_FORUM_0031", "Los usuarios de este foro han hecho un total de [x] publicaciones."); // LAN_192 y LAN_404
define("LAN_FORUM_0032", "tema"); // LAN_411
define("LAN_FORUM_0033", "temas"); // LAN_413
define("LAN_FORUM_0034", "respuesta"); // LAN_412
define("LAN_FORUM_0035", "respuestas"); // LAN_414
define("LAN_FORUM_0036", "Quién está en línea"); // LAN_426
define("LAN_FORUM_0037", "Ver lista detallada"); // LAN_427
define("LAN_FORUM_0038", "(Se abrirá en una nueva ventana)"); // LAN_436
define("LAN_FORUM_0039", "Mensajes nuevos"); // LAN_79 // LAN_79 (vf)
define("LAN_FORUM_0040", "Sin mensajes nuevos"); // LAN_80 / LAN_80 (vf)
define("LAN_FORUM_0041", "Foro cerrado"); // LAN_394
//define("LAN_FORUM_0042", "Buscar"); /// LAN_180 => Término genérico, movido a e107_languages/English.php LAN_SEARCH
define("LAN_FORUM_0043", "Puedes crear nuevos temas"); // LAN_204 
define("LAN_FORUM_0044", "No puedes crear nuevos temas"); // LAN_205
define("LAN_FORUM_0045", "Puedes responder"); // LAN_206
define("LAN_FORUM_0046", "No puedes responder"); // LAN_207
define("LAN_FORUM_0047", "Puedes editar tus mensajes"); // LAN_208
define("LAN_FORUM_0048", "No puedes editar tus mensajes"); // LAN_209

define("LAN_FORUM_0049", "Bienvenido/a invitado/a"); // LAN_410
define("LAN_FORUM_0050", "Estos foros pueden ser usados por usuarios no registrados, pero ten en cuenta que tu IP será registrada si publicas.<br />Para acceder a todas las funciones necesitas"); // LAN_44
define("LAN_FORUM_0051", "registrarte"); // LAN_437
define("LAN_FORUM_0052", "e iniciar sesión."); // LAN_438
define("LAN_FORUM_0053", "Estos foros solo permiten publicar a miembros registrados, haz clic"); // LAN_45
define("LAN_FORUM_0054", "aquí"); // LAN_438
define("LAN_FORUM_0055", "para ir a la página de registro."); // LAN_440
define("LAN_FORUM_0056", "Acceso restringido"); // LAN_405
define("LAN_FORUM_0057", "Marcar todos como leídos"); // LAN_199 
define("LAN_FORUM_0058", "Mostrar mensajes nuevos"); // LAN_421

define("LAN_FORUM_0059", "usuario está navegando el foro ahora mismo"); // LAN_415 / LAN_405 (vf)
define("LAN_FORUM_0060", "usuarios están navegando el foro ahora mismo"); //LAN_416 / LAN_406 (vf)
define("LAN_FORUM_0061", "miembro"); // LAN_417 / LAN_407 (vf)
define("LAN_FORUM_0062", "miembros"); // LAN_419 / LAN_409 (vf)
define("LAN_FORUM_0063", "invitado"); // LAN_418 / LAN_408 (vf)
define("LAN_FORUM_0064", "invitados"); // LAN_420 / LAN_410 (vf)

define("LAN_FORUM_0065", "Último miembro:"); // LAN_41
define("LAN_FORUM_0066", "Miembros registrados:"); // LAN_42

define("LAN_FORUM_0067", "Aún no hay foros, vuelve pronto."); // LAN_51
define("LAN_FORUM_0068", "Aún no hay foros en esta sección, vuelve pronto."); // LAN_52
define("LAN_FORUM_0069", "Subforos"); // FORLAN_444 

define("LAN_FORUM_0070", "Dejar de seguir tema"); // LAN_392 
define("LAN_FORUM_0072", "No hay normas definidas."); // FORLAN_441
define("LAN_FORUM_0073", "Temas seguidos"); // LAN_397
define("LAN_FORUM_0074", "Publicado por");  // LAN_423
define("LAN_FORUM_0075", "Nuevos temas"); // LAN_424

// forum_viewforum.php
define("LAN_FORUM_1001", "Foros"); // LAN_01
define("LAN_FORUM_1002", "Subforo"); // FORLAN_20
define("LAN_FORUM_1003", "Tema"); // LAN_55
define("LAN_FORUM_1004", "Creador"); // LAN_54
define("LAN_FORUM_1005", "Visitas"); // LAN_56

define("LAN_FORUM_1006", "Temas importantes"); // LAN_411 (vf)
define("LAN_FORUM_1007", "Temas"); // LAN_412 (vf)
define("LAN_FORUM_1008", "Aún no hay temas en este foro."); // LAN_58
define("LAN_FORUM_1009", "Este foro está moderado por"); // LAN_404
define("LAN_FORUM_1010", "[popular]"); // LAN_395 (vf)
define("LAN_FORUM_1011", "Fijado"); // LAN_202
define("LAN_FORUM_1012", "Fijado/Cerrado"); // LAN_203
define("LAN_FORUM_1013", "Anuncio"); // LAN_396
define("LAN_FORUM_1014", "Tema cerrado"); // LAN_81 / FORLAN_18
define("LAN_FORUM_1015", "[usuario eliminado]"); // FORLAN_19 (vf)
define("LAN_FORUM_1016", "Encuesta"); // FORLAN_23

define("LAN_FORUM_1017", "Ir a"); // LAN_401 (p?)
define("LAN_FORUM_1018", "Nuevo tema");
define("LAN_FORUM_1020", "Modificar");
define("LAN_FORUM_1021", "Sin respuestas");

// forum_viewtopic.php
define("LAN_FORUM_2001", "Tema anterior"); // LAN_389 
define("LAN_FORUM_2002", "Tema siguiente"); // LAN_390
define("LAN_FORUM_2003", "Moderador(es)"); // LAN_321
define("LAN_FORUM_2004", "Este tema está cerrado"); // LAN_66
define("LAN_FORUM_2005", "Crear nuevo tema"); 
define("LAN_FORUM_2006", "Responder"); 
define("LAN_FORUM_2007", "Respuesta rápida"); 
define("LAN_FORUM_2008", "OCULTO - INICIA SESIÓN Y RESPONDE PARA VER"); 
define("LAN_FORUM_2009", "¿Seguro que quieres borrar este tema y sus respuestas?"); 
define("LAN_FORUM_2010", "¿Seguro que quieres borrar esta respuesta?"); 
define("LAN_FORUM_2012", "No hay tema anterior"); 
define("LAN_FORUM_2013", "No hay tema siguiente"); 

define("LAN_FORUM_2015", "Publicación"); 
define("LAN_FORUM_2016", "Editado"); 
define("LAN_FORUM_2017", "por"); 
define("LAN_FORUM_2018", "Esta publicación ha sido reportada desde el sitio"); 
define("LAN_FORUM_2019", "Mensaje de"); 
define("LAN_FORUM_2020", "Reporte de tema desde"); 
define("LAN_FORUM_2021", "Publicación reportada"); 
define("LAN_FORUM_2022", "Haz clic aquí para volver al foro"); 
define("LAN_FORUM_2023", "Reportar tema a un moderador"); 
define("LAN_FORUM_2024", "Reportando publicación en tema"); 
define("LAN_FORUM_2025", "Título del tema"); 
define("LAN_FORUM_2026", "Ver publicación"); 
define("LAN_FORUM_2027", "Los moderadores serán notificados. Explica qué consideras inapropiado."); 
define("LAN_FORUM_2028", "[No] uses este formulario para contactar al admin por otros motivos."); 
define("LAN_FORUM_2029", "Enviar reporte"); 
define("LAN_FORUM_2030", "Volver arriba"); 
define("LAN_FORUM_2031", "Registrado"); 
define("LAN_FORUM_2032", "Publicaciones"); 
define("LAN_FORUM_2033", "Visitas al sitio desde registro"); 
define("LAN_FORUM_2034", "Sitio web"); 
define("LAN_FORUM_2035", "Miembro registrado"); 
define("LAN_FORUM_2036", "Enviar mensaje privado"); 
define("LAN_FORUM_2037", "Publicación borrada el"); 
define("LAN_FORUM_2038", "Motivo"); 
define("LAN_FORUM_2041", "Citar"); 
define("LAN_FORUM_2042", "Mover"); 
define("LAN_FORUM_2043", "Dividir"); 
define("LAN_FORUM_2044", "Correo"); 
define("LAN_FORUM_2045", "Imprimir"); 
define("LAN_FORUM_2046", "Reportar"); 

// forum_post.php 
define("LAN_FORUM_3001", "No tienes permiso para publicar aquí."); 
define("LAN_FORUM_3002", "Este tema está bloqueado."); 
define("LAN_FORUM_3003", "Respondiendo a"); 
define("LAN_FORUM_3005", "Vista previa"); 
define("LAN_FORUM_3006", "Publicación duplicada"); 
define("LAN_FORUM_3007", "Campos obligatorios vacíos"); 
define("LAN_FORUM_3008", "No autorizado"); 
define("LAN_FORUM_3009", "No puedes editar esta publicación."); 
define("LAN_FORUM_3010", "Tu nombre"); 
define("LAN_FORUM_3011", "Asunto"); 
define("LAN_FORUM_3012", "Adjuntar archivo(s)/imagen(es)"); 
define("LAN_FORUM_3013", "Adjuntar archivo"); 
define("LAN_FORUM_3014", "Archivo a adjuntar"); 
define("LAN_FORUM_3015", "[Nota]"); 
define("LAN_FORUM_3016", "Tipos de archivo permitidos"); 
define("LAN_FORUM_3017", "Otros archivos serán eliminados."); 
define("LAN_FORUM_3018", "Tamaño máximo"); 
define("LAN_FORUM_3019", "bytes"); 
define("LAN_FORUM_3020", "Añadir otro adjunto"); 
define("LAN_FORUM_3021", "Subidas desactivadas: el directorio [x] no tiene permisos"); 
define("LAN_FORUM_3022", "Últimas [y] respuestas"); 
define("LAN_FORUM_3023", "Actualizar tema"); 
define("LAN_FORUM_3024", "Actualizar respuesta"); 
define("LAN_FORUM_3025", "Tipo"); 
define("LAN_FORUM_3026", "Publicar tema como"); 
define("LAN_FORUM_3028", "Añadir encuesta"); 
define("LAN_FORUM_3038", "Normal"); 
define("LAN_FORUM_3039", "Desactivar emoticonos en esta publicación"); 
define("LAN_FORUM_3040", "Activar/desactivar notificaciones por correo"); 
define("LAN_FORUM_3041", "Activar/desactivar seguimiento de tema");
define("LAN_FORUM_3042", "Nuevo tema/asunto");

define("LAN_FORUM_3043", "Gracias"); 
define("LAN_FORUM_3045", "Tu encuesta se ha publicado."); 
define("LAN_FORUM_3046", "Ver encuesta"); 
define("LAN_FORUM_3047", "Mensaje publicado correctamente."); 
define("LAN_FORUM_3048", "Ver mensaje"); 
define("LAN_FORUM_3049", "Respuesta publicada correctamente."); 
define("LAN_FORUM_3050", "Punto de división");
define("LAN_FORUM_3051", "Nueva ubicación");
define("LAN_FORUM_3052", "Dividir hilo");


// forum_icons_template
define("LAN_FORUM_4001", "Existen publicaciones sin leer"); // LAN_199 (vf)
define("LAN_FORUM_4002", "No hay publicaciones nuevas"); // new
define("LAN_FORUM_4003", "Nuevas publicaciones en tema popular"); // FORLAN_13
define("LAN_FORUM_4004", "Sin nuevas publicaciones en tema popular"); // FORLAN_14
// define("LAN_FORUM_4005", "Sitio web"); // LAN_396
// define("LAN_FORUM_4006", "Correo electrónico"); // LAN_397
define("LAN_FORUM_4007", "Perfil"); // LAN_398
define("LAN_FORUM_4008", "Mensaje privado"); // LAN_399
define("LAN_FORUM_4009", "Seguir tema"); // LAN_391 (vt)
define("LAN_FORUM_4010", "Dejar de seguir tema"); // LAN_392 (vt) / new
define("LAN_FORUM_4011", "Fijar hilo"); // LAN_401
define("LAN_FORUM_4012", "Desfijar hilo"); // LAN_398
define("LAN_FORUM_4013", "Bloquear hilo"); // LAN_399
define("LAN_FORUM_4014", "Desbloquear hilo"); // LAN_400


// Ajax and actions 
define("LAN_FORUM_CLOSE", "Hilo cerrado.");
define("LAN_FORUM_OPEN", "Hilo reabierto.");
define("LAN_FORUM_STICK", "Hilo fijado.");
define("LAN_FORUM_UNSTICK", "Hilo desfijado.");




// Config 
define("LAN_FORUM_5001", "Encuesta eliminada."); // LAN_FORUM_5001
define("LAN_FORUM_5005", "Hilo movido."); // LAN_FORUM_5005
define("LAN_FORUM_5006", "Movimiento cancelado."); // LAN_FORUM_5006
define("LAN_FORUM_5007", "Volver a los foros"); // LAN_FORUM_5007
define("LAN_FORUM_5008", "Configuración del foro"); // LAN_FORUM_5008
define("LAN_FORUM_5009", "¿Estás absolutamente seguro de querer eliminar esta encuesta?<br />Una vez eliminada <b><u>no podrá</u></b> recuperarse.");
define("LAN_FORUM_5010", "Confirmar eliminación de publicación"); // LAN_FORUM_5010
define("LAN_FORUM_5019", "Mover hilo"); // LAN_FORUM_5019
define("LAN_FORUM_5021", "movido"); // LAN_FORUM_5021
define("LAN_FORUM_5022", "No renombrar título del hilo"); // LAN_FORUM_5022
define("LAN_FORUM_5024", "Añadir prefijo [x] al asunto/título"); // LAN_FORUM_5024
define("LAN_FORUM_5025", "Renombrar a:"); // LAN_FORUM_5025
define("LAN_FORUM_5026", "Opciones de renombrado:"); // LAN_FORUM_5026


// Statistics (lan_forum_stats.php ) ----------------
define("LAN_FORUM_6000", "General"); // FSLAN_1
define("LAN_FORUM_6001", "Foro abierto"); // LAN_FORUM_6001
define("LAN_FORUM_6002", "Abierto desde"); // FSLAN_3
define("LAN_FORUM_6003", "Publicaciones totales"); // FSLAN_4
define("LAN_FORUM_6004", "Respuestas en foro"); // FSLAN_6
define("LAN_FORUM_6005", "Visitas a hilos"); // FSLAN_7
define("LAN_FORUM_6006", "Tamaño de la base de datos (solo tablas del foro)"); // FSLAN_8
define("LAN_FORUM_6007", "Longitud media de fila en tabla del foro"); // FSLAN_9
define("LAN_FORUM_6008", "Posición"); // FSLAN_11
define("LAN_FORUM_6009", "Iniciado por"); // FSLAN_14
define("LAN_FORUM_6010", "Temas más vistos"); // FSLAN_16
define("LAN_FORUM_6011", "Principales creadores de temas"); // FSLAN_21
define("LAN_FORUM_6012", "Principales participantes"); // FSLAN_22
define("LAN_FORUM_6013", "Estadísticas del foro"); // FSLAN_23
define("LAN_FORUM_6014", "Promedio diario de publicaciones"); // FSLAN_24


// ---- Uploads ----------

define("LAN_FORUM_7001","Archivos subidos en el foro");
define("LAN_FORUM_7002","Archivo eliminado"); // LAN_FORUM_7002
define("LAN_FORUM_7003","Error: No se pudo eliminar el archivo"); // LAN_FORUM_7003
define("LAN_FORUM_7004","Eliminación de archivo"); // LAN_FORUM_7004
define("LAN_FORUM_7006","Resultado"); // LAN_FORUM_7006
define("LAN_FORUM_7007","Encontrado en el hilo"); // LAN_FORUM_7007
define("LAN_FORUM_7008","NO ENCONTRADO"); // LAN_FORUM_7008
define("LAN_FORUM_7009","No se encontraron archivos subidos"); // LAN_FORUM_7009
define("LAN_FORUM_7010", "Nombre del archivo");


// -------- Tracking Email ------------

define("LAN_FORUM_8001", "[x] ha publicado una nueva respuesta en el tema [y] a las [z].");
define("LAN_FORUM_8002", "Haz clic en el siguiente enlace para ver la publicación completa...");
define("LAN_FORUM_8003", "Las notificaciones por email para este tema están ahora activadas.");
define("LAN_FORUM_8004", "Las notificaciones por email para este tema están ahora desactivadas.");
define("LAN_FORUM_8005", "Ahora estás siguiendo este tema.");
define("LAN_FORUM_8006", "Has dejado de seguir este tema.");

// -------- View Forum ------------
define("LAN_FORUM_8007", "Fijar");
define("LAN_FORUM_8008", "Desfijar");
define("LAN_FORUM_8009", "Bloquear");
define("LAN_FORUM_8010", "Desbloquear");
define("LAN_FORUM_8011", "Claves de estado");
define("LAN_FORUM_8012", "Visible para");
define("LAN_FORUM_8013", "Opciones");

// -------- Forum Post------------
define("LAN_FORUM_8014", "Esta publicación y todas las siguientes serán movidas a un nuevo hilo/tema.");
define("LAN_FORUM_8015", "¡Advertencia!");
define("LAN_FORUM_8016", "(Actual)");

// -------- Forum Class------------
define("LAN_FORUM_8017", "Hubo un problema al desactivar el seguimiento.");
define("LAN_FORUM_8018", "Hubo un problema.");
define("LAN_FORUM_8019", "¡No se pudo eliminar el tema!");
define("LAN_FORUM_8020", "Tema eliminado");
define("LAN_FORUM_8021", "Publicación eliminada");
define("LAN_FORUM_8022", "No se pudo eliminar la publicación");
define("LAN_FORUM_8023", "Error al cerrar el hilo");
define("LAN_FORUM_8024", "Error al abrir el hilo");
define("LAN_FORUM_8025", "Error al fijar el hilo");
define("LAN_FORUM_8026", "Error al desfijar el hilo");
define("LAN_FORUM_8027", "No se seleccionó ninguna acción");
define("LAN_FORUM_8028", "Volver"); 
define("LAN_FORUM_8029", "¡Nuevo tema creado!");
define("LAN_FORUM_8030", "No se pudo eliminar la publicación (se requiere permiso de moderador)");

/*  ESTO SERÁ ELIMINADO UNA VEZ FINALIZADA LA REESCRITURA
==================================================
 * 
 * 
 * 
define("LAN_FORUM_5020", "Respuesta eliminada"); // LAN_FORUM_5020
define("LAN_FORUM_5011", "publicado por"); // LAN_FORUM_5011
define("LAN_FORUM_5012", "¿Estás completamente seguro de que quieres eliminar este foro");
define("LAN_FORUM_5013", "¿hilo y sus publicaciones relacionadas?");
define("LAN_FORUM_5014", "la encuesta también será eliminada");
define("LAN_FORUM_5015", "Una vez eliminados");
define("LAN_FORUM_5016", "¿publicación?<br />Una vez eliminada"); // LAN_FORUM_5016
define("LAN_FORUM_5017", "no</u></b> podrá recuperarse"); // LAN_FORUM_5017 // 
define("LAN_FORUM_5018", "Mover hilo al foro"); // LAN_FORUM_5018
define("LAN_FORUM_5023", "Añadir"); // LAN_FORUM_5023

define("LAN_01", "Foros");
define("LAN_02", "Ir a página");
define("LAN_03", "Ir");
define("LAN_04", "Anterior");
define("LAN_05", "Siguiente");
define("LAN_06", "Registrado");
define("LAN_07", "Ubicación");
define("LAN_08", "Sitio web");
define("LAN_09", "Visitas al sitio desde el registro");
define("LAN_10", "Volver arriba");
define("LAN_65", "Saltar");

define("LAN_53", "Hilo");
define("LAN_54", "Creador");
define("LAN_55", "Respuestas");
define("LAN_56", "Vistas");
define("LAN_57", "Última publicación");
define("LAN_58", "Aún no hay temas en este foro.");
define("LAN_59", "Debes estar registrado e identificado para publicar en este foro. Haz clic en registrarte o iniciar sesión en el menú de acceso.");
define("LAN_202", "Fijo");
define("LAN_203", "Fijo/Cerrado");

define("LAN_66", "Este hilo está ahora cerrado");
define("LAN_67", "Publicaciones");
define("LAN_194", "Invitado");
define("LAN_195", "Miembro registrado");
define("LAN_321", "Moderadores: ");
define("LAN_389", "Hilo anterior");
define("LAN_390", "Hilo siguiente");
define("LAN_391", "Seguir hilo");
define("LAN_392", "Dejar de seguir hilo");
define("LAN_393", "Respuesta rápida");
define("LAN_394", "Vista previa");
define("LAN_395", "Responder al hilo");
define("LAN_396", "Sitio web");
define("LAN_397", "Correo electrónico");
define("LAN_398", "Perfil");
define("LAN_399", "Mensaje privado");
define("LAN_400", "Editar");
define("LAN_401", "Citar");

define("LAN_402", "Autor");
define("LAN_403", "Publicación");
define("LAN_404", "No hay hilo anterior");
define("LAN_405", "No hay hilo siguiente");

define("LAN_406", "Moderador: Editar");
define("LAN_435", "Moderador: Eliminar");
define("LAN_408", "Moderador: Mover");
define("LAN_409", "¿Estás seguro de querer eliminar este hilo y sus respuestas?");
define("LAN_410", "¿Estás seguro de querer eliminar esta respuesta?");
define("LAN_411", "publicado por ");

//v.616
//define("LAN_412", "Título");//LAN_TITLE
define("LAN_413", "Reportar");
define("LAN_414", "Reportar este hilo a un moderador");
define("LAN_415", "Título del hilo");
define("LAN_416", "Escribe tu reporte");
define("LAN_417", "El administrador será notificado. Puedes incluir un mensaje explicando lo que consideras objetable.");
define("LAN_418", "<b>No uses</b> este formulario para contactar al admin por otros motivos.");
define("LAN_419", "Enviar reporte");
define("LAN_420", "Haz clic para ver la publicación");
define("LAN_421", "Reporte de hilo del foro desde");
define("LAN_422", "Esta publicación ha sido reportada desde el sitio ");
define("LAN_423", "No se pudo enviar el mensaje. ");
define("LAN_424", "El post ha sido reportado al moderador.<br />Gracias.");
define("LAN_425", "Mensaje de: ");
define("LAN_426", "Reportando publicación en tema: ");
define("LAN_427", "Error al enviar correo");
define("LAN_428", "La publicación ha sido reportada");
define("LAN_429", "Haz clic para volver al foro");
define("LAN_430", "encuesta");
define("FORLAN_26", "Respuesta eliminada");
define("FORLAN_10", "Crear nuevo hilo");
define("LAN_29", "Editado");

define("LAN_431", "Sindicar este hilo: rss 0.92");
define("LAN_432", "Sindicar este hilo: rss 2.0");
define("LAN_433", "Sindicar este hilo: RDF");

define("FORLAN_101", "Enviar hilo por email");
define("FORLAN_102", "Vista de impresión");
define("FORLAN_103", "[usuario eliminado]");
define("FORLAN_104", "Hilo no encontrado");
define("FORLAN_105", "Moderador: Dividir");
define("FORLAN_BY", "por");
define("FORLAN_HIDDEN", "OCULTO - INICIA SESIÓN Y RESPONDE PARA VER");    
    
define("LAN_06", "Registrado");    
    
define("LAN_30", "Bienvenido");
define("LAN_31", "No hay publicaciones nuevas ");
define("LAN_32", "Hay 1 publicación nueva ");
define("LAN_33", "Hay");
define("LAN_34", "publicaciones nuevas");
define("LAN_35", "desde tu última visita.");
define("LAN_36", "Tu última visita fue ");
define("LAN_37", "Ahora es ");
define("LAN_38", ", todas las horas son ");
define("LAN_41", "Último miembro: ");
define("LAN_42", "Miembros registrados: ");
define("LAN_44", "Los invitados pueden usar estos foros, pero ten en cuenta que se registrará tu dirección IP si publicas.<br />Para acceder a todas las funciones necesitas");
define("LAN_45", "Solo miembros registrados pueden publicar aquí, haz clic");
define("LAN_46", "Foro");
define("LAN_47", "Hilos");
define("LAN_48", "Respuestas");
define("LAN_49", "Última publicación");
define("LAN_51", "Aún no hay foros, vuelve pronto.");
define("LAN_52", "No hay foros en esta sección todavía.");
define("LAN_79", "Nuevas publicaciones");
define("LAN_80", " Sin publicaciones nuevas");
define("LAN_81", "Hilo cerrado");
define("LAN_100", "artículos");
define("LAN_180", "Buscar");
define("LAN_191", "Información");
define("LAN_192", "Los usuarios de este foro han hecho un total de ");
define("LAN_196", "Has leído ");
define("LAN_197", " de estas publicaciones.");
define("LAN_198", " Todas las publicaciones nuevas han sido leídas.");
define("LAN_199", "Marcar todas como leídas");
define("LAN_204", "Puedes <b>crear</b> nuevos hilos");
define("LAN_205", "No puedes <b>crear</b> nuevos hilos");
define("LAN_206", "Puedes <b>responder</b>");
define("LAN_207", "No puedes <b>responder</b>");
define("LAN_208", "Puedes <b>editar</b> tus publicaciones");
define("LAN_209", "No puedes <b>editar</b> tus publicaciones");
define("LAN_392", "dejar de seguir este hilo");
define("LAN_393", "Lista de hilos seguidos");
define("LAN_394", "Foro cerrado");
define("LAN_397", "Hilos seguidos");
define("LAN_398", "Cerrado");
define("LAN_399", "Restringido");
define("LAN_400", "Este foro solo es visible para miembros registrados");
define("LAN_401", "Solo miembros");
    
define("LAN_402", "Este foro es de solo lectura");
    
define("LAN_403", "Aún no hay publicaciones");
define("LAN_404", "publicaciones");

    
define("LAN_406", "Este foro está restringido a administradores");
define("LAN_407", "Este foro está restringido a miembros");
define("LAN_408", "Este es un foro de solo lectura");
define("LAN_409", "Foro restringido por clases");
define("LAN_410", "Bienvenido invitado");
    
define("LAN_411", "hilo");
define("LAN_412", "respuesta");
define("LAN_413", "hilos");
define("LAN_414", "respuestas");
define("LAN_415", "usuario navegando actualmente");
define("LAN_416", "usuarios navegando actualmente");
    
define("LAN_417", "miembro");
define("LAN_418", "invitado");
define("LAN_419", "miembros");
define("LAN_420", "invitados");
    
define("LAN_421", "Mostrar publicaciones nuevas");
define("LAN_422", "Nuevas publicaciones desde tu última visita");
define("LAN_423", "Publicado por");
define("LAN_424", "Hilos nuevos");
define("LAN_425", "Re:");
    
//v.616
define("LAN_426", "¿Quién está conectado?: ");
define("LAN_427", "Ver lista detallada.");
define("LAN_428", "Re:");
define("LAN_429", "Top de publicadores");
define("LAN_430", "Hilos más activos");
define("LAN_431", "Mis publicaciones");
define("LAN_432", "Mis ajustes");
define("LAN_433", "Reglas del foro");
define("LAN_434", "Volver a los foros");
define("LAN_435", "Mi perfil");
define("LAN_436", " (Se abrirá nueva ventana)");
    
define("LAN_437", "registrarse");
define("LAN_438", "e iniciar sesión.");
define("LAN_439", "aquí");
define("LAN_440", "para ir a la página de registro.");

define("LAN_441", "Ver estadísticas del foro");

define("FORLAN_21", "Hilos");
define("FORLAN_22", "Última publicación");
define("FORLAN_23", "Encuesta");
    
define("FORLAN_441", "No hay reglas definidas.");
define("FORLAN_442", "Mis subidas");
define("FORLAN_443", "[usuario eliminado]");
define("FORLAN_444", "subforos");

define("PAGE_NAME", "Foro");

define("LAN_01", "Foros");
define("LAN_02", "Respondiendo a: ");
define("LAN_03", "Nuevo hilo");
define("LAN_1", "Normal");
define("LAN_2", "Fijo");
define("LAN_3", "Anuncio");
define("LAN_4", "Publicar encuesta");
define("LAN_5", "Pregunta de la encuesta:");
define("LAN_6", "Añadir otra opción");
define("LAN_7", "Opción de voto:");
define("LAN_8", "Permitir votos de todos");
define("LAN_9", "Solo miembros pueden votar");
define("LAN_10", "Iniciar sesión");
define("LAN_11", "Recordarme");
define("LAN_16", "Usuario: ");
define("LAN_17", "Contraseña: ");
define("LAN_20", "Error");//nuevo > LAN_ERROR
define("LAN_27", "Dejaste campos obligatorios en blanco");
define("LAN_28", "No publicaste nada...");
define("LAN_29", "Editado");
define("LAN_45", "Solo miembros registrados pueden publicar aquí, haz clic");
define("LAN_60", "Crear nuevo hilo");
define("LAN_61", "Tu nombre: ");
define("LAN_62", "Asunto: ");
define("LAN_63", "Publicación: ");
define("LAN_64", "Enviar nuevo hilo");
define("LAN_73", "Responder: ");
define("LAN_74", "Responder al hilo");
define("LAN_77", "Actualizar hilo");
define("LAN_78", "Actualizar respuesta");
define("LAN_94", "Publicado por");
define("LAN_95", "No autorizado");
define("LAN_96", "No tienes permiso para editar esta publicación.");
define("LAN_100", "Tema del hilo");
define("LAN_101", "Últimas ");
define("LAN_102", " respuestas");
define("LAN_103", "Revisar hilo completo. (Abre nueva ventana)");
define("LAN_133", "Gracias");
define("LAN_174", "Registrarse");
define("LAN_175", "Iniciar sesión");
define("LAN_212", "¿Olvidaste tu contraseña?");
define("LAN_310", "No se acepta la publicación: ese usuario está registrado - si es tu usuario, inicia sesión.");
define("LAN_311", "Anónimo");
define("LAN_322", "Publicado: ");
define("LAN_323", "Vista previa");
define("LAN_324", "Tu mensaje se publicó correctamente.");
define("LAN_325", "Haz clic aquí para ver tu mensaje");
define("LAN_326", "Haz clic para volver al foro");
define("LAN_327", "Revisar");
define("LAN_380", "Activar seguimiento por email (recibirás notificaciones)");
define("LAN_381", "Respuesta en el foro de ");
define("LAN_382", "Publicación realizada: ");
define("LAN_383", "Haz clic en este enlace para ver el hilo completo...");
define("LAN_384", "Respuesta en el foro en ");
define("LAN_385", "Publicación: ");
define("LAN_386", "Si no quieres añadir una encuesta, deja los campos en blanco ");
define("LAN_387", "Ir");
define("LAN_388", "Volver arriba");
define("LAN_389", "Publicación duplicada, redirigiendo...");
define("LAN_390", "Adjuntar archivo/imagen");
define("LAN_391", "Opciones");
define("LAN_392", "Archivo a adjuntar");
define("LAN_393", "<b>Nota:</b><br />Tipos de archivo permitidos:");
define("LAN_394", "Cualquier otro tipo de archivo será eliminado automáticamente.");
define("LAN_395", "Tamaño máximo");
define("LAN_396", " bytes");
define("LAN_397", "Este hilo está bloqueado.");
define("LAN_398", "Este foro es de solo lectura");
define("LAN_399", "No tienes permiso para publicar aquí.");
define("LAN_400", "publicar hilo como");
define("LAN_401", "Saltar");

define("LAN_402", "encuesta");
define("LAN_403", "anuncio");
define("LAN_404", "fijo");
define("LAN_405", "Foros");
define("LAN_406", "Re:");

//v.616
define("LAN_407", "Redirección");
define("LAN_408", "Si tu navegador no soporta redirección meta, haz clic");
define("LAN_409", "AQUÍ");
define("LAN_410", "para ser redirigido");
define("LAN_411", "aquí");
define("LAN_412", "para ir a la página de registro.");

define("LAN_413", "Tu encuesta se publicó correctamente.");
define("LAN_414", "Haz clic aquí para ver tu encuesta");
define("LAN_415", "Tu respuesta se publicó correctamente.");

define("LAN_416", "Adjuntar archivo");
define("LAN_417", "Añadir otro adjunto");

define("POLL_506", "¿Permitir múltiples selecciones?");
define("POLL_507", "sí");
define("POLL_508", "no");

define("LAN_FORUM_1", "Subidas desactivadas: el directorio ".e_FILE."public no tiene permisos de escritura");
define("LAN_FORUM_2", "Publicación duplicada");

define("LAN_FORUMPOST_EMOTES", "Desactivar emoticonos en esta publicación");
