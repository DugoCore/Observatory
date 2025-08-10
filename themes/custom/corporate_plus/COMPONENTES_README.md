# Componentes Reutilizables - Corporate Plus Theme

## Descripción

Este tema incluye componentes reutilizables para mantener consistencia en el diseño del observatorio del Ministerio de Medio Ambiente. Los componentes están basados en los templates originales de la página principal.

## Componentes Disponibles

### 1. Header Component
**Archivo:** `templates/components/header-component.html.twig`
**Basado en:** `templates/header/header-observatory.html.twig`

**Uso:**
```twig
{% include '@corporate_plus/components/header-component.html.twig' %}
```

**Características:**
- Header fijo con logo del Ministerio
- Navegación principal
- Botón de administrador
- Diseño responsive
- Estilos idénticos a la página principal

### 2. Newsletter Component
**Archivo:** `templates/components/newsletter-component.html.twig`
**Basado en:** Sección newsletter de `templates/page/page--front.html.twig`

**Uso:**
```twig
{% include '@corporate_plus/components/newsletter-component.html.twig' %}
```

**Características:**
- Sección de suscripción al newsletter
- Formulario con validación
- Diseño responsive
- Colores institucionales
- Layout idéntico a la página principal

### 3. Footer (Original)
**Archivo:** `templates/footer/footer-observatory.html.twig`

**Uso:**
```twig
{% include '@corporate_plus/footer/footer-observatory.html.twig' %}
```

**Características:**
- Información de contacto
- Enlaces de navegación
- Secciones del observatorio
- Botón de "volver arriba"
- **Este es el footer principal que se usa en todas las páginas**

## Páginas Específicas

### Inventario de Emisiones
**Archivo:** `templates/page/page--inventario-emisiones.html.twig`
**Ruta:** `/inventario-emisiones`

**Características:**
- Tabs de navegación
- Panel de filtros
- Tabla de datos con paginación
- Botones de descarga
- Diseño responsive
- **Usa los mismos componentes que la página principal**

## Estructura de Archivos

```
themes/custom/corporate_plus/
├── templates/
│   ├── components/
│   │   ├── header-component.html.twig
│   │   └── newsletter-component.html.twig
│   ├── header/
│   │   └── header-observatory.html.twig (original)
│   ├── footer/
│   │   └── footer-observatory.html.twig (original)
│   └── page/
│       ├── page--front.html.twig (original)
│       └── page--inventario-emisiones.html.twig
├── src/
│   └── Controller/
│       └── InventarioEmisionesController.php
├── config/
│   └── install/
│       └── system.routing.yml
├── corporate_plus.libraries.yml
├── corporate_plus.theme
├── corporate_plus.services.yml
└── corporate_plus.info.yml
```

## Instalación

1. Asegúrate de que el tema esté habilitado
2. Limpia la caché de Drupal: `drush cr`
3. Los componentes estarán disponibles automáticamente

## Personalización

### Colores
Los colores principales están definidos en CSS:
- Azul principal: `#1e3a8a`
- Azul secundario: `#3b82f6`
- Gris: `#666`
- Fondo: `#f8f9fa`

### Fuentes
- Familia principal: `'Cabin', sans-serif`

## Notas Técnicas

- Todos los componentes usan CSS con `!important` para evitar conflictos
- Los componentes son responsive por defecto
- Se incluye JavaScript básico para funcionalidad de tabs
- Los componentes están optimizados para Drupal 9/10
- **Los componentes son idénticos a los de la página principal**

## Consistencia Visual

Ahora la página `/inventario-emisiones` tiene:
- ✅ Header idéntico al de la página principal
- ✅ Newsletter idéntico al de la página principal  
- ✅ **Footer idéntico al de la página principal** (usa el mismo template)
- ✅ Misma funcionalidad y estilos

**Nota:** Todas las páginas usan el mismo footer original (`footer-observatory.html.twig`) para garantizar consistencia total.

## Próximos Pasos

1. Crear páginas para los otros apartados:
   - Casos de Estudio
   - Registro Nacional de Acciones
   - Monitoreo y Evaluación
   - Seguimiento NDC
   - Hub de Conocimiento

2. Integrar con Drupal Views para datos dinámicos
3. Agregar funcionalidad de filtros avanzados
4. Implementar sistema de descargas 