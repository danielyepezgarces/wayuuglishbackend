# Wayuuglish - Coming Soon

**Wayuuglish** es una plataforma interactiva de enseñanza de inglés diseñada para personas y comunidades indígenas (iniciando con el pueblo Wayuu en La Guajira).

Conecta el **Wayuunaiki**, el **español** y el **inglés** a través de una experiencia lúdica, accesible y gamificada con soporte 100% offline.

---

## 🎨 Sistema de Diseño

- **Color Primario:** `#009DF8` *(Azul medio celestito)*.
- **Profundidad Táctil 3D:** Botones píldora (`border-radius: 9999px`) con relieve `0 4px 0 #006CB3`.
- **Canvas & Superficies:** Fondo Blanco (`#FFFFFF`) y secciones intercaladas en Nieve (`#F7F7F7`).
- **Tipografía:** Nunito (700 y 800 para display/títulos, 400 y 600 para texto regular).
- **Mascota Identitaria:** Flamenco Rosado de La Guajira (*Phoenicopterus ruber*) con sombrero tradicional tejido Wayuu (*Katsu*).
- **Soporte Multilingüe:** Inglés por defecto (`EN`), Español (`ES`) y Wayuunaiki (`WAY - Próximamente`).
- **App Móvil:** Integración y sección de descarga de Google Play Store (*Próximamente*).

---

## 📁 Estructura del Proyecto

```text
wayuuglishbackend/
├── index.php                 # Página de aterrizaje Coming Soon
├── includes/
│   ├── header.php            # Navbar y metadatos HTML
│   ├── footer.php            # Footer multi-columna
│   ├── lang.php              # Gestor de traducciones (EN, ES, WAY)
│   └── preview-widget.php    # Micro-lección interactiva (Anaayawatchi)
├── assets/
│   ├── css/
│   │   └── style.css         # Sistema de diseño, tokens y estilos responsivos
│   ├── js/
│   │   └── main.js           # Lógica interactiva (TTS Audio, Mini Quiz, FAQ)
│   └── images/
│       ├── logo.svg          # Logo vectorial de la mascota Flamenco Guajiro
│       └── mascot.svg        # Ilustración vectorial de la mascota
├── DESIGN.md                 # Especificación de tokens y diseño visual
├── AGENTS.md                 # Guía para agentes de IA y desarrolladores
├── SKILLS.md                 # Habilidades y capacidades del proyecto
├── LICENSE                   # Licencia GNU GPLv3 + CC BY-SA 4.0
└── README.md                 # Documentación
```

---

## 🚀 Cómo Ejecutar el Proyecto

1. Clona el repositorio o abre la carpeta:
   ```bash
   cd wayuuglishbackend
   ```

2. Inicia el servidor embebido de PHP:
   ```bash
   php -S localhost:8000
   ```

3. Abre en tu navegador:
   [http://localhost:8000](http://localhost:8000)

---

## 📄 Licencia y Derechos de Autor

- **Código Fuente (PHP, JS, CSS):** Licenciado bajo la **[GNU General Public License v3.0 (GPLv3)](LICENSE)**.
- **Recursos Artísticos y Contenido Educativo (SVG, Textos, Mascota):** Licenciados bajo **[Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)](https://creativecommons.org/licenses/by-sa/4.0/)**.

Copyright (C) 2026 **Daniel Yepez Garces**. Todos los derechos reservados.
