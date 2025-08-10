# Instalación Rápida - Observatorio de Cambio Climático

## Pasos para Configurar el Observatorio

### 1. Activar el Tema
```bash
# En Drupal Admin
Administración > Apariencia > Corporate Plus > Instalar y establecer como predeterminado
```

### 2. Configurar Página Principal
```bash
# Crear página básica
Administración > Contenido > Agregar contenido > Página básica
Título: "Observatorio de Cambio Climático"
Ruta: "/"
Publicar

# Configurar como página principal
Administración > Configuración > Información del sitio
Página de inicio: "Una página específica"
Ruta: "/"
```

### 3. Configurar Menú Principal
```bash
Administración > Estructura > Menús > Menú principal > Editar enlaces
Agregar enlaces:
- Inicio: /
- Oportunidades: /oportunidades
- Acceso a datos: /datos
- Temáticas: /tematicas
- Acerca de: /acerca-de
```

### 4. Configurar Logo
```bash
Administración > Apariencia > Configuración
Logo: Subir logo del MARN
```

### 5. Agregar Imágenes
Colocar en `/themes/custom/corporate_plus/css/images/`:
- hero-bg.jpg (1920x1080px)
- news-1.jpg
- news-2.jpg
- news-3.jpg
- news-4.jpg

### 6. Limpiar Caché
```bash
Administración > Configuración > Rendimiento > Limpiar caché
```

## Verificación
- Visitar la página principal
- Verificar que el header muestre "MINISTERIO DE MEDIO AMBIENTE"
- Verificar que el botón "Administrador" funcione
- Verificar que el footer tenga la información de contacto

## Personalización
- Editar contenido en la página principal
- Cambiar imágenes en `/css/images/`
- Modificar colores en `/css/style.css`
- Ajustar menús en Administración > Estructura > Menús

¡Listo! El Observatorio de Cambio Climático está configurado. 