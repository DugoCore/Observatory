# Login Page Design - Observatorio

## Descripción

Se ha diseñado una nueva página de login moderna y responsive para el Observatorio, utilizando el sistema de diseño existente y los componentes disponibles.

## Características del Diseño

### 🎨 Diseño Moderno
- **Gradiente de fondo**: Fondo con gradiente suave de grises
- **Tarjeta de formulario**: Contenedor con bordes redondeados y sombra
- **Tipografía**: Uso de la fuente secundaria del tema (Cabin)
- **Colores**: Paleta de azules del Observatorio (#1e3a8a, #3b82f6)

### 📱 Responsive Design
- **Desktop**: Layout de dos columnas (formulario + imagen)
- **Tablet**: Layout adaptado con espaciado optimizado
- **Mobile**: Formulario centrado, imagen debajo

### 🔧 Componentes Utilizados
- **Header Component**: Incluye el header existente del Observatorio
- **Form Styles**: Utiliza las clases de formulario existentes
- **Button Styles**: Botón con gradiente y efectos hover

## Estructura del Template

### Archivos Principales
- `templates/user-login-form.html.twig` - Template principal
- `css/login-page.css` - Estilos dedicados
- `corporate_plus.theme` - Variables y preprocess

### Variables Disponibles
```php
$variables['login_title'] - Título del formulario
$variables['login_description'] - Descripción
$variables['login_name_text'] - Texto de ayuda para usuario
$variables['login_pass_text'] - Texto de ayuda para contraseña
$variables['login_content'] - Contenido adicional
$variables['login_content_1'] - Contenido adicional 2
$variables['login_image_url'] - URL de imagen lateral
```

## Configuración del Tema

### Acceso a Configuración
1. Ir a **Administración > Apariencia > Configuración del tema**
2. Seleccionar **Corporate Plus**
3. Sección **Login Page Settings**

### Opciones Configurables
- **Banner Title**: Título del banner (opcional)
- **Banner Image**: Imagen de fondo del banner
- **Title**: Título del formulario
- **Description**: Descripción del formulario
- **Image**: Imagen lateral derecha
- **Name input help text**: Texto de ayuda para campo usuario
- **Password input help text**: Texto de ayuda para campo contraseña
- **Additional Content**: Contenido adicional HTML
- **Additional Content 2**: Contenido adicional HTML 2

## Características Técnicas

### CSS Classes Principales
```css
.login-page - Contenedor principal
.login-form-container - Tarjeta del formulario
.login-title - Título principal
.login-subtitle - Subtítulo
.login-form-wrapper - Contenedor del formulario
.login-image-container - Contenedor de imagen
.login-placeholder - Placeholder cuando no hay imagen
```

### Efectos y Animaciones
- **Hover en botón**: Transformación y sombra
- **Focus en inputs**: Borde azul y sombra
- **Transiciones**: Suaves en todos los elementos interactivos

### Responsive Breakpoints
- **Desktop**: > 991px
- **Tablet**: 768px - 991px
- **Mobile**: < 768px

## Personalización

### Cambiar Colores
Editar en `css/login-page.css`:
```css
.login-title {
  color: #1e3a8a; /* Color principal */
}

.login-form .btn-style-2 {
  background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
}
```

### Cambiar Imagen por Defecto
El placeholder se muestra cuando no hay imagen configurada. Para cambiar:
1. Subir imagen en configuración del tema
2. O modificar el SVG en el template

### Agregar Campos Adicionales
1. Modificar `hook_form_alter()` en `corporate_plus.theme`
2. Agregar campos al template
3. Estilizar en CSS

## Mantenimiento

### Limpiar Cache
```bash
vendor/bin/drush cr
```

### Verificar Funcionamiento
1. Visitar `/user/login`
2. Verificar responsive en diferentes dispositivos
3. Probar formulario con credenciales válidas

## Compatibilidad

- ✅ Drupal 10
- ✅ Bootstrap 5
- ✅ Navegadores modernos
- ✅ Dispositivos móviles
- ✅ Accesibilidad básica

## Próximas Mejoras

- [ ] Agregar validación visual en tiempo real
- [ ] Implementar modo oscuro
- [ ] Agregar animaciones de carga
- [ ] Mejorar accesibilidad (ARIA labels)
- [ ] Agregar opción de "Recordar sesión"
