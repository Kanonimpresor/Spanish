# e107 Paquete de Idioma Español v2.3.5# e107 Paquete de Idioma Español v2.4.0



## Archivos de Lenguaje ESPAÑOL (España)## Archivos de Lenguaje ESPAÑOL (España)



- **Revisión**: 2.1- **Revisión**: 2.0

- **Fecha de lanzamiento**: 2026-05-19- **Fecha de lanzamiento**: 2026-04-25

- **Autor**: KANONimpresor &lt;kanonimpresor@gmail.com&gt;- **Autor**: Kanonimpresor - <kanonimpresor@gmail.com>

- **Sitio**: <https://marketingdeperformance.online/>

---

---

## DESCRIPCIÓN

## DESCRIPCIÓN

Este paquete de archivos contiene los archivos (codificación utf-8) en Español de España para la versión v2.4.0 del sistema de gestión de contenido e107. La traducción se ha realizado a partir de los archivos originales en inglés de la misma versión, y contiene las siguientes carpetas y archivos:

Este paquete contiene los archivos de idioma (codificación **UTF-8**) en Español de España para la versión **v2.3.5** del sistema de gestión de contenido [e107](https://e107.org). La traducción está alineada línea a línea con el inglés de la misma versión y se ha sometido a una auditoría completa contra el código fuente oficial.

> 🆕 **Novedad v2.4.0** — Los archivos de ayuda de `e107_docs/help/Spanish/` se han reescrito para aprovechar el nuevo renderizador enriquecido del panel de administración (PR upstream [#5596](https://github.com/e107inc/e107/pull/5596)). Ahora soportan marcadores tipo `H1>`, `P>`, `NOTE>`, `TIP>`, `WARN>`, `SHOT>` (capturas de pantalla), `STEP>` (pasos numerados), `IMG>` y `CODE>`, además de seguir siendo compatibles con el formato legacy `Q>/A>`.

> 🆕 **Novedades v2.3.5**

> - Todos los archivos `.php` migrados al nuevo formato `return [ ... ];` (compatible con la rama v2.4 sin perder retrocompatibilidad).---

> - Cabeceras unificadas en los 108 archivos del paquete.

> - 46 claves nuevas añadidas y traducidas.## ESTRUCTURA DEL DIRECTORIO

> - 14 archivos de plugin que faltaban (`alt_auth`, `chatbox_menu`, `forum`, `gallery`, `gsitemap`, `import`, `linkwords`, `list_new`, `login_menu`, `newforumposts_main`, `online`, `pm`, `poll`, `social`).```

> - Codificación normalizada a UTF-8 sin BOM (LF).├── e107_docs/

> - Etiquetas `Q>` / `A>` corregidas en los 21 archivos de `e107_docs/help/Spanish/`.|   └── help

> - 0 claves obsoletas, 0 desfases de escape, 0 cadenas sin traducir según el auditor incluido.├── e107_languages/

│   └── Spanish/

---│       |  ├── Spanish.xml

|       |  └── ()

## ESTRUCTURA DEL DIRECTORIO│       └── admin/

|            | └── ()

```│            └── help/

├── e107_docs/├── e107_plugins

│   └── help/Spanish/        (21 archivos de ayuda)├── e107_themes

├── e107_languages/└── e107_web

│   └── Spanish/             (idioma del sitio)  ()

│       ├── Spanish.php```

│       ├── Spanish.xml

│       ├── lan_*.php---

│       └── admin/           (idioma del panel)

│           ├── lan_*.php## INSTRUCCIONES

│           └── help/        (ayuda contextual del admin)

└── e107_plugins/<plug>/languages/Spanish/  (traducciones de plugins)Para poder usar esta traducción, debes realizar la [descarga](https://github.com/Kanonimpresor/Spanish) de todas las carpetas y archivos desde el botón verde [<> Code] --> Descargar ZIP.

```

Una vez descargado y descomprimido en tu ordenador, asegúrate de mantener intacta toda la estructura de directorios de e107 para que puedas cargar la carpeta de e107 en tu servidor mediante FTP o Cpanel.

---

---

## INSTRUCCIONES

## CONDICIONES DE USO

1. Descarga el ZIP desde el botón verde **`<> Code` → `Download ZIP`** o clona el repositorio:

   ```shEstos archivos se proporcionan tal como se encontraron en el archivo original de distribución. Puedes actualizarlos y modificarlos como desees en tu instalación personal de e107.

   git clone https://github.com/e107-Kanonimpresor/e107-Spanish.git

   ```El autor no se hace responsable de ningún error en la base de datos o archivos de tu instalación de e107 que puedan resultar de una instalación incorrecta o el uso inapropiado de estos archivos.

2. Mantén intacta la estructura de directorios.

3. Sube los archivos por **FTP** o **cPanel** a tu instalación de e107, respetando las rutas (`e107_languages/Spanish/...`, `e107_plugins/<plug>/languages/Spanish/...`, etc.).---

4. En el panel: `Admin Area → Preferences → Site language` → selecciona **Spanish**.

## SUGERENCIAS

> ℹ️ Si tu instalación es **v2.3.x**, el paquete funciona directamente. En **v2.4.x** también, gracias al formato `return []`.

Aunque todos los archivos han sido probados exhaustivamente en una instalación de e107, es posible que no se hayan detectado algunos errores, como letras incorrectas o faltas de traducción en alguna línea/expresión…

---

Si detectas algún error y deseas notificar al autor para su corrección, puedes enviar un correo a <kanonimpresor@gmail.com> con la siguiente información:

## CONDICIONES DE USO- Página donde encontraste el error;

- Expresión o palabra incorrecta;

Estos archivos se proporcionan tal cual, en los mismos términos que la distribución original de e107. Puedes actualizarlos y modificarlos como desees en tu instalación personal.

---

El autor no se hace responsable de ningún error en la base de datos o archivos de tu instalación de e107 que pueda resultar de una instalación incorrecta o el uso inapropiado de estos archivos.

## HISTORIAL

---

v2.0 [2026-04-25] => Reescritura de los 21 archivos de `e107_docs/help/Spanish/` con los nuevos marcadores enriquecidos (`H1>`, `P>`, `NOTE>`, `TIP>`, `WARN>`, `SHOT>`, `STEP>`, `IMG>`, `CODE>`) introducidos por el PR upstream [#5596](https://github.com/e107inc/e107/pull/5596). Compatible con e107 v2.4.0 y retrocompatible con instalaciones v2.3.x (fallback a párrafos planos + BBCode si el renderizador antiguo no entiende los marcadores).

## SUGERENCIAS Y REPORTES

v1.0 [2025-05-04] => Primer lanzamiento oficial de la traducción ES-ES .utf-8 (v2.3.3).

Aunque todos los archivos se han probado en una instalación real de e107, es posible que algún error pase desapercibido (letras incorrectas, falta de traducción, contexto poco natural…).

---

Si detectas algún error, abre una **[Issue](https://github.com/e107-Kanonimpresor/e107-Spanish/issues)** o envía un correo a <kanonimpresor@gmail.com> indicando:

## LICENCIA

- Página donde encontraste el error.

- Expresión o palabra incorrecta.e107 Paquete de Idioma Español v2.4.0, lanzado bajo los términos y condiciones de la [Licencia Pública General GNU](http://www.gnu.org/licenses/gpl.txt)

- Sugerencia de corrección (opcional).

---

---

**[EOF]**

## HISTORIAL


- **v2.1 [2026-05-19]** — Sincronización completa con e107 **v2.3.5**: migración a `return []`, 46 claves nuevas, 14 archivos de plugin, corrección de codificación, escapes `\n`, etiquetas `Q>/A>` en help, cabeceras unificadas, auditoría 0 errores.
- **v2.0 [2026-04-25]** — Refactor previo del help.
- **v1.0 [2025-05-04]** — Primer lanzamiento oficial de la traducción ES-ES UTF-8 (v2.3.3).

---

## LICENCIA

e107 Paquete de Idioma Español v2.3.5 — lanzado bajo los términos y condiciones de la [GNU General Public License](http://www.gnu.org/licenses/gpl.txt).

**[EOF]**
