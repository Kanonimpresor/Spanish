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

return [
    'LWLAN_4' => "Aún no se han definido linkwords.",
    'LWLAN_5' => "Palabras",
    'LWLAN_6' => "Enlace",
    'LWLAN_7' => "¿Activo?",
    'LWLAN_21' => "Palabra a autovincular (o lista de palabras separadas por comas)",
    'LWLAN_26' => "Áreas en las que activar los linkwords",
    'LWLAN_28' => "Páginas en las que desactivar los linkwords",
    'LWLAN_33' => "Áreas de título",
    'LWLAN_34' => "Resúmenes de elementos",
    'LWLAN_35' => "Texto del cuerpo",
    'LWLAN_36' => "Descripciones (enlaces, etc.)",
    'LWLAN_40' => "Títulos introducidos por usuarios (ej. foro)",
    'LWLAN_41' => "Texto del cuerpo introducido por usuarios (ej. foro)",
    'LWLAN_50' => "Tooltip",
    'LWLAN_52' => "Solo linkword",
    'LWLAN_53' => "Solo tooltip",
    'LWLAN_54' => "Linkword y tooltip",
    'LWLAN_55' => "Abrir enlace en una nueva ventana",
    'LWLAN_58' => "Hook de preferencias convertido al formato 0.8",
    'LWLAN_59' => "Activar la funcionalidad Ajax",
    'LWLAN_64' => "Suprimir el enlace en la página actual",
    'LWLAN_66' => "Clase CSS personalizada",
    'LWLAN_67' => "Máx. enlaces/tips",
  //  'LAN_LW_HELP_01' => "Muchas áreas de texto tienen un 'contexto' asociado, y los linkwords solo se mostrarán en áreas que coincidan con ese contexto.",
  //  'LAN_LW_HELP_02' => "Los tooltips pueden usar Ajax para obtener la información a mostrar. Normalmente esto requiere algo de código personalizado.",
    'LAN_LW_HELP_03' => "Normalmente no tiene sentido que el usuario pueda pulsar un enlace si ya está en la página a la que enlaza. Cuando esta opción está activada, los linkwords no se activan en este caso.",
    'LAN_LW_HELP_04' => "Los linkwords se pueden desactivar en páginas específicas, o en páginas que coincidan con un patrón. Introdúcelos aquí (misma sintaxis que la visibilidad de menús), un patrón por línea. Si el patrón termina en '!', corresponde a 'fin de la consulta' y normalmente es una coincidencia exacta. En caso contrario, cualquier URL que contenga la cadena indicada coincidirá.",
    'LAN_LW_HELP_05' => "Añadirá esta clase a todos los enlaces generados.",
    'LAN_LW_HELP_10' => "Aquí puedes definir las palabras que se convertirán en enlaces clicables, o que mostrarán texto al pasar el ratón por encima.",
    'LAN_LW_HELP_11' => "No distingue mayúsculas/minúsculas. Para varias palabras que apunten al mismo enlace y tooltip, sepáralas con comas (sin espacios).",
    'LAN_LW_HELP_12' => "Define aquí un enlace clicable. Si es un enlace externo, DEBE comenzar por 'http(s)://'. Si es un enlace dentro de este sitio, se pueden usar las constantes habituales {e_XXX}.",
    'LAN_LW_HELP_13' => "Define qué opciones están activas.",
    'LAN_LW_HELP_14' => "Define el texto a mostrar cuando el ratón del usuario pase por encima de la palabra.",
    'LAN_LW_HELP_15' => "Cantidad máxima del mismo linkword. Debe ser un número positivo. Se usa cuando la misma palabra aparece varias veces en un fragmento de texto.",
    'LAN_LW_HELP_16' => "Define un ID numérico opcional a usar con el procesamiento Ajax. Debe ser un número positivo. Si se deja en blanco, se usará el número de registro de la base de datos.",
    'LAN_LW_HELP_17' => "Cuando está activado, el enlace se abre en una nueva pestaña/ventana del navegador.",
    'LAN_LW_HELP_01' => "<b>Áreas a activar</b><br />

  Muchas áreas de texto tienen un \"contexto\" asociado, y los linkwords solo se mostrarán en áreas que coincidan con ese contexto.<br /><br />

  <b>Desactivar Linkwords</b><br />

  Los linkwords se pueden desactivar en páginas específicas, o en páginas que coincidan con un patrón. Introdúcelos aquí (misma sintaxis que para los menús), un patrón por línea.

  Si el patrón termina en \"!\", corresponde a \"fin de la consulta\" y normalmente es una coincidencia exacta. En caso contrario, cualquier URL que contenga la cadena indicada coincidirá.<br />

  Ten en cuenta que los linkwords <i>nunca</i> se muestran en las páginas de administración.<br /><br />

  <b>Activar la funcionalidad Ajax</b><br />

  Los tooltips pueden usar Ajax para obtener la información a mostrar. Normalmente esto requiere algo de código personalizado.<br /><br />

  <b>Suprimir el enlace en la página actual</b><br />

  Normalmente no tiene sentido que el usuario pueda pulsar un enlace si ya está en la página. Marca esta casilla para eliminar la opción.<br />",
    'LAN_LW_HELP_02' => "Define aquí las palabras que se convertirán en enlaces clicables, o que mostrarán texto al pasar el ratón por encima.<br /><br />
  <b><u>Palabra a vincular</u></b><br />

  No distingue mayúsculas/minúsculas. Para varias palabras que apunten al mismo enlace y tooltip, sepáralas con comas (sin espacios).<br /><br />

  <b><u>Enlace</u></b><br />

  Define aquí un enlace clicable. Si es un enlace externo, [i]debe[/i] comenzar por \"http://\". Si es un enlace dentro de este sitio, se pueden usar las constantes habituales {e_XXX}.<br /><br />

  <b><u>Tooltip</u></b><br />

  Define el texto a mostrar cuando el ratón del usuario pase por encima de la palabra.<br /><br />

  <b><u>ID LW (ID del Tooltip)</u></b><br /><br />

  Define un ID numérico opcional a usar con el procesamiento Ajax. Si se deja en blanco, se usará el número de registro de la base de datos.<br /><br />

  <b><u>¿Activar?</u></b><br />

  Define qué opciones están activas.",
];
