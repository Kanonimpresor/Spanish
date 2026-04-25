# e107 Paquete de Idioma Español v2.4.0

## Archivos de Lenguaje ESPAÑOL (España)

- **Revisión**: 2.0
- **Fecha de lanzamiento**: 2026-04-25
- **Autor**: Kanonimpresor - <kanonimpresor@gmail.com>

---

## DESCRIPCIÓN

Este paquete de archivos contiene los archivos (codificación utf-8) en Español de España para la versión v2.4.0 del sistema de gestión de contenido e107. La traducción se ha realizado a partir de los archivos originales en inglés de la misma versión, y contiene las siguientes carpetas y archivos:

> 🆕 **Novedad v2.4.0** — Los archivos de ayuda de `e107_docs/help/Spanish/` se han reescrito para aprovechar el nuevo renderizador enriquecido del panel de administración (PR upstream [#5596](https://github.com/e107inc/e107/pull/5596)). Ahora soportan marcadores tipo `H1>`, `P>`, `NOTE>`, `TIP>`, `WARN>`, `SHOT>` (capturas de pantalla), `STEP>` (pasos numerados), `IMG>` y `CODE>`, además de seguir siendo compatibles con el formato legacy `Q>/A>`.

---

## ESTRUCTURA DEL DIRECTORIO
```
├── e107_docs/
|   └── help
├── e107_languages/
│   └── Spanish/
│       |  ├── Spanish.xml
|       |  └── ()
│       └── admin/
|            | └── ()
│            └── help/
├── e107_plugins
├── e107_themes
└── e107_web
  ()
```

---

## INSTRUCCIONES

Para poder usar esta traducción, debes realizar la [descarga](https://github.com/Kanonimpresor/Spanish) de todas las carpetas y archivos desde el botón verde [<> Code] --> Descargar ZIP.

Una vez descargado y descomprimido en tu ordenador, asegúrate de mantener intacta toda la estructura de directorios de e107 para que puedas cargar la carpeta de e107 en tu servidor mediante FTP o Cpanel.

---

## CONDICIONES DE USO

Estos archivos se proporcionan tal como se encontraron en el archivo original de distribución. Puedes actualizarlos y modificarlos como desees en tu instalación personal de e107.

El autor no se hace responsable de ningún error en la base de datos o archivos de tu instalación de e107 que puedan resultar de una instalación incorrecta o el uso inapropiado de estos archivos.

---

## SUGERENCIAS

Aunque todos los archivos han sido probados exhaustivamente en una instalación de e107, es posible que no se hayan detectado algunos errores, como letras incorrectas o faltas de traducción en alguna línea/expresión…

Si detectas algún error y deseas notificar al autor para su corrección, puedes enviar un correo a <kanonimpresor@gmail.com> con la siguiente información:
- Página donde encontraste el error;
- Expresión o palabra incorrecta;

---

## HISTORIAL

v2.0 [2026-04-25] => Reescritura de los 21 archivos de `e107_docs/help/Spanish/` con los nuevos marcadores enriquecidos (`H1>`, `P>`, `NOTE>`, `TIP>`, `WARN>`, `SHOT>`, `STEP>`, `IMG>`, `CODE>`) introducidos por el PR upstream [#5596](https://github.com/e107inc/e107/pull/5596). Compatible con e107 v2.4.0 y retrocompatible con instalaciones v2.3.x (fallback a párrafos planos + BBCode si el renderizador antiguo no entiende los marcadores).

v1.0 [2025-05-04] => Primer lanzamiento oficial de la traducción ES-ES .utf-8 (v2.3.3).

---

## LICENCIA

e107 Paquete de Idioma Español v2.4.0, lanzado bajo los términos y condiciones de la [Licencia Pública General GNU](http://www.gnu.org/licenses/gpl.txt)

---

**[EOF]**

