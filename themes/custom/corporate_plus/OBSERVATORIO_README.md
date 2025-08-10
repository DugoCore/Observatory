# Observatorio de Cambio Climático - Drupal Theme

Este tema personalizado para Drupal está diseñado específicamente para el Observatorio de Cambio Climático del Ministerio de Medio Ambiente y Recursos Naturales (MARN) de El Salvador.

## Características

- **Diseño Responsivo**: Adaptado para dispositivos móviles, tablets y desktop
- **Tipografía Cabin**: Fuente sans-serif moderna y legible
- **Paleta de Colores**: Azul corporativo (#1e3a8a) con acentos en azul claro (#87CEEB)
- **Efectos Visuales**: Gradientes, sombras, animaciones suaves y efectos hover
- **Logo Circular**: Diseño moderno con logo circular del MARN
- **Secciones Principales**:
  - Hero section con imagen de fondo y overlay mejorado
  - Tarjetas de características con efectos glassmorphism
  - Información destacada con tarjetas interactivas
  - Objetivos del observatorio con animaciones
  - Estadísticas con gráficos mejorados
  - Newsletter con gradiente y textura
  - Footer corporativo con efectos visuales

## Instalación y Configuración

### 1. Activar el Tema

1. Ve a **Administración > Apariencia** en Drupal
2. Busca "Corporate Plus" en la lista de temas
3. Haz clic en "Instalar y establecer como predeterminado"

### 2. Configurar la Página Principal

1. Ve a **Administración > Configuración > Información del sitio**
2. En "Página de inicio", selecciona "Una página específica"
3. Crea una nueva página básica con la ruta `/node/1`
4. Establece esta página como tu página principal

### 3. Configurar el Menú Principal

1. Ve a **Administración > Estructura > Menús**
2. Edita el "Menú principal"
3. Agrega los siguientes enlaces:
   - Inicio: `/`
   - Oportunidades: `/oportunidades`
   - Acceso a datos: `/datos`
   - Temáticas: `/tematicas`
   - Acerca de: `/acerca-de`

### 4. Configurar el Logo

1. Ve a **Administración > Apariencia > Configuración**
2. En la sección "Logo", sube el logo del MARN
3. Ajusta el tamaño según sea necesario

### 5. Configurar el Footer

1. Ve a **Administración > Estructura > Bloques**
2. Crea bloques personalizados para:
   - **Footer First**: Información de contacto
   - **Footer Second**: Enlaces de navegación
   - **Footer Third**: Enlaces de secciones

### 6. Agregar Imágenes

Coloca las siguientes imágenes en `/themes/custom/corporate_plus/css/images/`:

- `hero-bg.jpg` - Imagen de fondo del hero (recomendado: 1920x1080px)
- `news-1.jpg` - Imagen para noticia 1
- `news-2.jpg` - Imagen para noticia 2
- `news-3.jpg` - Imagen para noticia 3
- `news-4.jpg` - Imagen para noticia 4

## Personalización

### Colores

Los colores principales están definidos en CSS:

- **Azul Principal**: `#1e3a8a`
- **Azul Claro**: `#87CEEB`
- **Azul Hover**: `#3b82f6`
- **Gris Claro**: `#f8f9fa`
- **Gris Medio**: `#e5e7eb`

### Tipografía

El tema usa la fuente Cabin de Google Fonts, que ya está incluida en el CSS.

### Responsive Design

El tema incluye breakpoints para:
- **Desktop**: > 1200px
- **Tablet**: 768px - 1199px
- **Mobile**: < 768px

## Estructura de Archivos

```
themes/custom/corporate_plus/
├── templates/
│   ├── page/
│   │   └── page--front.html.twig    # Plantilla de página principal
│   ├── header/
│   │   └── header-2.html.twig       # Plantilla de header
│   └── footer/
│       └── footer.html.twig         # Plantilla de footer
├── css/
│   ├── style.css                    # Estilos principales
│   └── images/                      # Imágenes del tema
├── config/
│   └── observatory-settings.yml     # Configuración del tema
└── corporate_plus.info.yml          # Información del tema
```

## Contenido Recomendado

### Hero Section
- Título: "Observatorio de Cambio Climático"
- Descripción: Texto sobre la iniciativa del MARN
- Imagen de fondo: Paisaje de El Salvador con elementos naturales

### Tarjetas de Características
1. Inventario de Emisiones
2. Casos de Estudio
3. Registro Nacional de Acciones
4. Monitoreo y Evaluación
5. Seguimiento NDC
6. Hub de Conocimiento

### Información Destacada
- 4 noticias o artículos relevantes
- Cada una con imagen, título y descripción
- Una destacada con botón "MÁS DETALLES"

### Objetivos del Observatorio
- 5 objetivos principales
- Formato de tarjetas con borde azul

### Estadísticas
- Gráficos de barras y líneas
- Datos relevantes sobre cambio climático
- Opciones Chart/Table

### Newsletter
- Formulario de suscripción
- Fondo azul corporativo

## Soporte

Para soporte técnico o personalizaciones adicionales, contacta al equipo de desarrollo.

## Créditos

Desarrollado para el Ministerio de Medio Ambiente y Recursos Naturales (MARN) de El Salvador. 