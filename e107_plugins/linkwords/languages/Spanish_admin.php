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

//define("LWLAN_1", "Campos vacíos.");
//define("LWLAN_2", "Linkword guardado.");
//define("LWLAN_3", "Linkword actualizado.");
define("LWLAN_4", "Aún no se han definido linkwords.");
define("LWLAN_5", "Palabras");
define("LWLAN_6", "Enlace");
define("LWLAN_7", "¿Activo?");
//define("LWLAN_8", "Opciones");
//define("LWLAN_9", "sí");
//define("LWLAN_10", "no");
//define("LWLAN_11", "Linkwords existentes");
//define("LWLAN_12", "Sí");
//define("LWLAN_13", "No");
//define("LWLAN_14", "Enviar LinkWord");
//define("LWLAN_15", "Actualizar LinkWord");
//define("LWLAN_16", "Editar");
//define("LWLAN_17", "Eliminar");
//define("LWLAN_18", "¿Seguro que quieres eliminar este linkword?");
//define("LWLAN_19", "Linkword eliminado.");
//define("LWLAN_20", "No se encontró el linkword especificado.");
define("LWLAN_21", "Palabra(s) para autovincular (lista separada por comas)");
//define("LWLAN_22", "¿Activar?");
//define("LWLAN_23", "Administración de Linkwords");
//define("LWLAN_24", "Gestionar palabras");
//define("LWLAN_25", "Opciones");
define("LWLAN_26", "Áreas donde activar linkwords");
//define("LWLAN_27", "Este es el 'contexto' del texto mostrado");
define("LWLAN_28", "Páginas donde desactivar linkwords");
//define("LWLAN_29", "Mismo formato que control de visibilidad de menús. Una coincidencia por línea. Especificar URL parcial/completa. ¡Terminar con '!' para coincidencia exacta al final del enlace");
//define("LWLAN_30", "Guardar opciones");
//define("LWLAN_31", "Añadir/editar linkword");
//define("LWLAN_32", "Opciones de Linkword");
define("LWLAN_33", "Áreas de títulos");
define("LWLAN_34", "Resúmenes de elementos");
define("LWLAN_35", "Texto principal");
define("LWLAN_36", "Descripciones (enlaces, etc.)");
//define("LWLAN_37", "Áreas heredadas");
//define("LWLAN_38", "Enlaces clickables");
//define("LWLAN_39", "Texto sin procesar");
define("LWLAN_40", "Títulos ingresados por usuarios (ej. foro)");
define("LWLAN_41", "Texto ingresado por usuarios (ej. foro)");

define("LWLAN_50", "Tooltip");
//define("LWLAN_51", "Inactivo"); // LAN_INACTIVE
define("LWLAN_52", "Solo linkword");
define("LWLAN_53", "Solo tooltip");
define("LWLAN_54", "Linkword y tooltip");
define("LWLAN_55", "Abrir enlace en nueva ventana");
//define("LWLAN_56", "Abrir en nueva página");
//define("LWLAN_57", "Error al escribir nuevos valores");
define("LWLAN_58", "Pref hook convertido a formato 0.8"); // Usado solo en stub compatible con 0.7
define("LWLAN_59", "Activar funcionalidad Ajax");
//define("LWLAN_60", "ID LW");
//define("LWLAN_61", "ID");
//define("LWLAN_62", "ID de tooltip (ID LW)");
//define("LWLAN_63", "Solo números positivos");
define("LWLAN_64", "Suprimir enlace en la página actual");
//define("LWLAN_65", "Si está marcado, suprime el enlace clickable si apunta a la página actual");
define("LWLAN_66", "Clase CSS personalizada");
define("LWLAN_67", "Máx. enlaces/tips");

// Textos de ayuda
//define("LAN_LW_HELP_00","Ayuda de Linkwords");

// Preferencias
define("LAN_LW_HELP_01", "Muchas áreas de texto tienen un 'contexto' asociado, y los linkwords solo se mostrarán en áreas que coincidan con ese contexto.");
define("LAN_LW_HELP_02", "Los tooltips pueden usar Ajax para obtener información. Esto normalmente requiere codificación personalizada.");
define("LAN_LW_HELP_03", "Normalmente no tiene sentido que el usuario pueda hacer clic en un enlace si ya está en esa página. Al activar esta opción, se suprimirán los linkwords en ese caso.");
define("LAN_LW_HELP_04", "Los linkwords pueden desactivarse en páginas específicas. Introduce patrones aquí (misma sintaxis que visibilidad de menús), uno por línea. Si termina en '!', será coincidencia exacta al final del enlace.");
define("LAN_LW_HELP_05", "Añade esta clase CSS a todos los enlaces generados.");

// Crear linkwords
define("LAN_LW_HELP_10", "Aquí defines las palabras que se convertirán en enlaces o mostrarán tooltips.");
define("LAN_LW_HELP_11", "No distingue mayúsculas. Para múltiples palabras con mismo destino, sepáralas con comas (sin espacios)."); 
define("LAN_LW_HELP_12", "Define el enlace. Para enlaces externos debe comenzar con 'http(s)://'. Enlaces internos pueden usar constantes {e_XXX}."); 
define("LAN_LW_HELP_13", "Define qué opciones están activas."); 
define("LAN_LW_HELP_14", "Texto que se muestra al pasar el mouse sobre la palabra.");
define("LAN_LW_HELP_15", "Número máximo de repeticiones del mismo linkword en un texto. Debe ser positivo."); 
define("LAN_LW_HELP_16", "ID numérico opcional para procesamiento Ajax. Si está vacío, se usa el ID de registro de la base de datos."); 
define("LAN_LW_HELP_17", "Al activar, el enlace se abre en nueva pestaña/ventana."); 
