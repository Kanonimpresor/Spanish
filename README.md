# e107 Paquete de Idioma Español v2.3.5

## Archivos de Lenguaje ESPAÑOL (España)

- **Revisión**: 2.1
- **Fecha de lanzamiento**: 2026-05-19
- **Autor**: KANONimpresor &lt;kanonimpresor@gmail.com&gt;
- **Sitio**: <https://marketingdeperformance.online/>

---

## DESCRIPCIÓN

Este paquete contiene los archivos de idioma (codificación **UTF-8**) en Español de España para la versión **v2.3.5** del sistema de gestión de contenido [e107](https://e107.org). La traducción está alineada línea a línea con el inglés de la misma versión y se ha sometido a una auditoría completa contra el código fuente oficial.

### 🆕 Novedades v2.3.5

- Todos los archivos `.php` migrados al nuevo formato `return [ ... ];` (compatible con la rama v2.4 sin perder retrocompatibilidad).
- Cabeceras unificadas en los 108 archivos del paquete.
- 46 claves nuevas añadidas y traducidas.
- 14 archivos de plugin que faltaban: `alt_auth`, `chatbox_menu`, `forum`, `gallery`, `gsitemap`, `import`, `linkwords`, `list_new`, `login_menu`, `newforumposts_main`, `online`, `pm`, `poll`, `social`.
- Codificación normalizada a UTF-8 sin BOM (LF).
- Etiquetas `Q>` / `A>` corregidas en los 21 archivos de `e107_docs/help/Spanish/`.
- 0 claves obsoletas, 0 desfases de escape, 0 cadenas sin traducir según el auditor incluido.

---

## ESTRUCTURA DEL DIRECTORIO

```
├── e107_docs/
│   └── help/Spanish/        (21 archivos de ayuda)
├── e107_languages/
│   └── Spanish/             (idioma del sitio)
│       ├── Spanish.php
│       ├── Spanish.xml
│       ├── lan_*.php
│       └── admin/           (idioma del panel)
│           ├── lan_*.php
│           └── help/        (ayuda contextual del admin)
└── e107_plugins/<plug>/languages/Spanish/  (traducciones de plugins)
```

---

## INSTRUCCIONES

1. Descarga el ZIP desde el botón verde **`<> Code` → `Download ZIP`** o clona el repositorio:
   ```sh
   git clone https://github.com/e107-Kanonimpresor/e107-Spanish.git
   ```
2. Mantén intacta la estructura de directorios.
3. Sube los archivos por **FTP** o **cPanel** a tu instalación de e107, respetando las rutas (`e107_languages/Spanish/...`, `e107_plugins/<plug>/languages/Spanish/...`, etc.).
4. En el panel: `Admin Area → Preferences → Site language` → selecciona **Spanish**.

> ℹ️ Si tu instalación es **v2.3.x**, el paquete funciona directamente. En **v2.4.x** también, gracias al formato `return []`.

---

## CONDICIONES DE USO

Estos archivos se proporcionan tal cual, en los mismos términos que la distribución original de e107. Puedes actualizarlos y modificarlos como desees en tu instalación personal.

El autor no se hace responsable de ningún error en la base de datos o archivos de tu instalación de e107 que pueda resultar de una instalación incorrecta o el uso inapropiado de estos archivos.

---

## SUGERENCIAS Y REPORTES

Aunque todos los archivos se han probado en una instalación real de e107, es posible que algún error pase desapercibido (letras incorrectas, falta de traducción, contexto poco natural…).

Si detectas algún error, abre una **[Issue](https://github.com/e107-Kanonimpresor/e107-Spanish/issues)** o envía un correo a <kanonimpresor@gmail.com> indicando:

- Página donde encontraste el error.
- Expresión o palabra incorrecta.
- Sugerencia de corrección (opcional).

---

## HISTORIAL

- **v2.1 [2026-05-19]** — Sincronización completa con e107 **v2.3.5**: migración a `return []`, 46 claves nuevas, 14 archivos de plugin, corrección de codificación, escapes `\n`, etiquetas `Q>/A>` en help, cabeceras unificadas, auditoría 0 errores.
- **v2.0 [2026-04-25]** — Refactor previo del help.
- **v1.0 [2025-05-04]** — Primer lanzamiento oficial de la traducción ES-ES UTF-8 (v2.3.3).

---

## LICENCIA

e107 Paquete de Idioma Español v2.3.5 — lanzado bajo los términos y condiciones de la [GNU General Public License](http://www.gnu.org/licenses/gpl.txt).

**[EOF]**
