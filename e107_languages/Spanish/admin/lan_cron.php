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

if (!defined("PAGE_NAME")) { define("PAGE_NAME", "Tareas Programadas"); }

// Menú
define("LAN_CRON_M_02", "Actualizar");

// Encabezados de tabla
define("LAN_CRON_2", "Función");
define("LAN_CRON_3", "Pestaña");
define("LAN_CRON_4", "Última ejecución");

// Tareas predefinidas
define("LAN_CRON_01_1", "Correo de prueba");
define("LAN_CRON_01_2", "Enviar correo de prueba a [eml].");
define("LAN_CRON_01_3", "Recomendado para probar el sistema de programación.");

define("LAN_CRON_02_1", "Cola de correo");
define("LAN_CRON_02_2", "Procesar cola de correo.");

define("LAN_CRON_03_1", "Verificación de rebotes");
define("LAN_CRON_03_2", "Verificar correos rebotados.");

define("LAN_CRON_04_1", "Verificación de reactivación de bloqueos");
define("LAN_CRON_04_2", "Procesar reactivaciones de bloqueos.");
define("LAN_CRON_04_3", "Solo necesario si está activada la reactivación de bloqueos.");

define("LAN_CRON_05_1", "Copia de seguridad de BD");
define("LAN_CRON_05_2", "Respaldar base de datos en");

define('LAN_CRON_06_1', "Procesar activación de bloqueos");

// Mensajes de error e información
define("LAN_CRON_6", "No se pudieron importar preferencias");
define("LAN_CRON_7", "No se pudieron importar ajustes de tiempo");
define("LAN_CRON_8", "Ajustes de tiempo importados para");

define("LAN_CRON_9", "Hace [x] minutos y [y] segundos.");
define("LAN_CRON_10", "Hace [y] segundos.");

define("LAN_CRON_11", "Tareas activas");
define("LAN_CRON_12", "Última actualización de tareas");
define("LAN_CRON_13", "Asegúrate de que cron.php sea ejecutable.");
define("LAN_CRON_14", "Configura CHMOD 755 en /cron.php.");

define("LAN_CRON_15", "Usa este comando Cron");
define("LAN_CRON_16", "Usa tu panel de control (ej. cPanel, DirectAdmin, Plesk) para crear un crontab que ejecute este comando cada minuto.");

define("LAN_CRON_20_1", "Buscar actualizaciones de e107");
define("LAN_CRON_20_2", "Verificar actualizaciones en e107.org");
define("LAN_CRON_20_3", "Recomendado para mantener el sistema actualizado.");
define("LAN_CRON_20_4", "Actualizar repositorio Git");
define("LAN_CRON_20_5", "Actualizar instalación con últimos archivos de github.");
define("LAN_CRON_20_6", "Recomendado solo para desarrolladores.");
define("LAN_CRON_20_8", "¡Puede causar inestabilidad en el sitio!");

define("LAN_CRON_30", "Cada minuto");
define("LAN_CRON_31", "Cada 2 minutos");
define("LAN_CRON_32", "Cada 5 minutos");
define("LAN_CRON_33", "Cada 10 minutos");
define("LAN_CRON_34", "Cada 15 minutos");
define("LAN_CRON_35", "Cada 30 minutos");

define("LAN_CRON_36", "Cada hora");
define("LAN_CRON_37", "Cada 2 horas");
define("LAN_CRON_38", "Cada 3 horas");
define("LAN_CRON_39", "Cada 6 horas");

define("LAN_CRON_40", "Diariamente");
define("LAN_CRON_41", "Mensualmente");
define("LAN_CRON_42", "Cada día de semana");

define("LAN_CRON_50", "Minuto(s):");
define("LAN_CRON_51", "Hora(s):");
define("LAN_CRON_52", "Día(s):");
define("LAN_CRON_53", "Mes(es):");   
define("LAN_CRON_54", "Día semana:");
define("LAN_CRON_55", "Copia de seguridad fallida");
define("LAN_CRON_56", "Copia de seguridad completada");

define("LAN_CRON_60", "Ir a cPanel");
define("LAN_CRON_61", "Generar nuevo token cron");
define("LAN_CRON_62", "Ejecutando función [b][x][/b]");
define("LAN_CRON_63", "Función [b][x][/b] no encontrada.");
define("LAN_CRON_64", "Los administradores pueden automatizar tareas usando el programador de e107. [br]
En la pestaña Gestionar puedes editar, eliminar y ejecutar tareas. [br]
Al editar una tarea, configura los minutos, horas, días, meses o días de la semana para su ejecución. Usa * para cada periodo. Activa la tarea con la propiedad Activo. [br]
Nota: No se recomienda eliminar tareas estándar. [br]
");

define("LAN_CRON_BACKUP", "Copia de seguridad");
define("LAN_CRON_LOGGING", "Registro");
define("LAN_CRON_RUNNING", "En ejecución");

define("LAN_CRON_65", "Actualizar tema desde Git");
define("LAN_CRON_66", "No se encontró repositorio Git");
define("LAN_CRON_67", "No hay repositorio Git en la carpeta del tema");
